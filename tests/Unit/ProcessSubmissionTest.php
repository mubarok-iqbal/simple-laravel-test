<?php

namespace Tests\Unit\Jobs;

use App\Jobs\ProcessSubmission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProcessSubmissionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function testProcessSubmission()
    {
        // Arrange
        $data = [
            'name' => 'John Doe Baru',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.',
        ];

        // Act
        ProcessSubmission::dispatch($data);

        // Assert
        $this->assertDatabaseHas('submissions', [
            'name' => 'John Doe Baru',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.',
        ]);
    }
}
