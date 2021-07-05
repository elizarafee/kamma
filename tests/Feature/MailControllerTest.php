<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MailControllerTest extends TestCase
{
    /**
     * Testing list of email routes
     *
     * @return void
     */
    public function test_list_of_email_page()
    {
        $response = $this->get('/emails');

        $response->assertStatus(200);
    }

    /**
     * Testing email sending form route
     *
     * @return void
     */
    public function test_email_create_page()
    {
        $response = $this->get('/emails/create');

        $response->assertStatus(200);
    }

    /**
     * Testing storing email route
     *
     * @return void
     */
    public function test_email_store_page()
    {
        $this->withExceptionHandling();

        // store the given form data
        $response = $this->post('/emails', [
            'name' => 'Eliza',
            'friend_name' => 'Hasan',
            'friend_email' => 'hasan@email.com',
            'email_message' => 'Deal text ...'
        ]);

        $response->assertStatus(302);
    }
}
