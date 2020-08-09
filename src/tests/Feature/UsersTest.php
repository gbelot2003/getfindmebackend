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
        $users = factory(User::class, 20)->create();
    }


    /** @test */
    public function user_index_is_ok_and_display_a_list_of_users()
    {
        // Creamos un usuario para login
        $user = factory(User::class)->create();

        // Recogemos un usario de la lista para visualizar
        $firstUser = User::find(1);

        // hacemos request a la pagina users
        $response = $this->actingAs($user)->get('/users');

        // La pagina esta en 200 y titulo es visible
        $response->assertStatus(200)->assertSeeText('Users');

        //$response->assertSee($firstUser->name);
    }
}
