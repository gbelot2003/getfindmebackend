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
        \Artisan::call('db:seed', ['-vvv' => true]);

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
            'role' => 'Subscriber'
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

        $response = $this->actingAs($user)->get('/users');
        $response->assertStatus(403);

        //Solo administradores pueden ver usuarios
        $user->assignRole('Administrator');

        // hacemos request a la pagina users
        $response = $this->actingAs($user)->get('/users');

        // La pagina esta en 200 y titulo es visible
        $response->assertStatus(200)->assertSeeText('Users');

        // Ingresamos a /users y el datatable muestra la informacion que buscamos
        $this->actingAs($user)
            ->getJson(route('users.index'), ['HTTP_X-Requested-With' => 'XMLHttpRequest'])
            // See the users' results as expected
            ->assertSeeText(htmlspecialchars($user->name, ENT_QUOTES))
            ->assertSeeText($user->phonefield);
    }

   /** @test */
    public function only_administrators_can_see_edit_users()
    {
        // Creamos al admin
        $user = factory(User::class)->create();

        // Creamos al usuaro a ver
        $user2see = factory(User::class)->create();

        // Tratamos de abrir sin permisos
        $response = $this->actingAs($user)
            ->get('/users/'. $user->id .'/edit')->assertStatus(403);

        // Damos permisos al usuario
        $user->assignRole('Administrator');

        // Abrimos con permisos
        $response = $this->actingAs($user)
            ->get('/users/'. $user2see->id .'/edit')
            ->assertStatus(200)
            ->assertSee($user2see->name);

    }

}




















