<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardAdminTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;
     
    public function test_admin_dashboard_accessible(): void
    {

        $admin = User::factory()->create([
            'roles' => 'ADMIN',
        ]);
        
        $response = $this->actingAs($admin)->get('dashboard');

        $response->assertStatus(200);
    }
}