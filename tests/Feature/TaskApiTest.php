<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_task()
    {
        $response = $this->postJson('/api/tasks', [
            'title' => 'Test task 22',
            'description' => 'Example',
            'status' => 'pending'
        ]);

        $response->assertStatus(201)
            ->assertJsonFragment([
                'title' => 'Test task 22'
            ]);
    }
}
