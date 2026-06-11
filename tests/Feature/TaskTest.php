<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_create_task()
    {
        $response = $this->post('/tasks', [
            'title' => 'UTS Web',
            'description' => 'Belajar Laravel',
            'due_date' => '2026-06-01'
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('tasks', [
            'title' => 'UTS Web'
        ]);
    }
}