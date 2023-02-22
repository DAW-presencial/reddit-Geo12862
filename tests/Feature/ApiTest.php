<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Tests\TestCase;
use App\Models\User;
use App\Models\Community;
use Dflydev\DotAccessData\Data;

class ApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * 
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_fech_all_communities()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        Community::factory()->count(3)->create();
        $response = $this->getJson("api/posts");

        $response->assertStatus(200);
        $response->assertJsonCount(3, 'data');
    }
}
