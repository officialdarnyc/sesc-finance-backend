<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IntegrationTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * Test to get all student accounts.
     *
     */
    public function testGetAllAccounts(): void
    {
        $response = $this->get('/api/accounts');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'studentId',
                'hasOutStandingbalance',
            ],
        ]);
    }
    
    
     public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
