<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * Testing home page route
     *
     * @return void
     */

    public function test_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
