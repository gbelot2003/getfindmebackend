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

        $users = factory(User::class, 20)->create();
    }


    /** @test */
    public function index_display_a_list_of_users()
    {

        $user = factory(User::class)->create();

        $firstUser = User::find(1);

        $response = $this->actingAs($user)->get('/users');

        $response->assertStatus(200)
        ->assertSeeText($firstUser->name);
    }
}
