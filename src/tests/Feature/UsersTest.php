<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Reseteamos base de datos
        \Artisan::call('migrate', ['-vvv' => true]);
    }


    /** @test */
    public function index_display_a_list_of_users()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/users');

        $response->assertStatus(200);
    }
}
