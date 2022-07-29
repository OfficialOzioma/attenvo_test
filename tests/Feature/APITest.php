<?php

namespace Tests\Feature;

use Tests\TestCase;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class APITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStatusCode()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('list/users/1');

        $response->assertStatus(200);
    }

    public function testStatusCode2()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('user/2');

        $response->assertStatus(200);
    }
}