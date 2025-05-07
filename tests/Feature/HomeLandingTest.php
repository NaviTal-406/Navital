<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeLandingTest extends TestCase
{
    /** @test */
    public function it_loads_the_home_page_successfully()
    {

        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertViewIs('pages.home');

    }
}
