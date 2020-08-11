<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    private $users;

    protected function setUp(): void
    {
        parent::setUp();

        // Reseteamos base de datos
        \Artisan::call('migrate', ['-vvv' => true]);

        // Creamos una lista de usuarios
        $this->users = factory(User::class, 20)->create();
    }


    // Nuevo registro de usuarios con numero telefonico

    // Nuevo sistema de login con numero telefonoco

    /** @test */
    public function a_user_is_created_with_phonefield_included()
    {
        $this->withoutExceptionHandling();

        $user = [
            '_token' => csrf_token(),
            'name' => 'User Name',
            'email' => 'user@emai.com',
            'password' => 'NoTienePassword01',
            'password_confirmation' => 'NoTienePassword01',
            'phonefield' => '(504) 480-4255',
        ];

        $response = $this->post('/register', $user)
            ->assertSessionHasNoErrors();

        $this->assertDatabaseHas('users', ['email' => 'user@emai.com']);
    }

    /** @test */
    public function user_index_is_ok_and_display_a_list_of_users()
    {
        // Creamos un usuario para login
        $user = factory(User::class)->create();

        // hacemos request a la pagina users
        $response = $this->actingAs($user)->get('/users');

        // La pagina esta en 200 y titulo es visible
        $response->assertStatus(200)->assertSeeText('Users');

        $this->actingAs($user)
            ->getJson(route('users.index'), ['HTTP_X-Requested-With' => 'XMLHttpRequest'])
            // See the users' results as expected
            ->assertSeeText(htmlspecialchars($user->name, ENT_QUOTES))
            ->assertSeeText($user->phonefield);
    }
}
