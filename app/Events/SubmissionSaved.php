<?php

namespace App\Events;

use App\Models\Submission;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class SubmissionSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $submission;

    /**
     * Create a new event instance.
     *
     * @param \App\Models\Submission $submission
     * @return void
     */
    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }
}
