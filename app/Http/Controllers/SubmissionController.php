<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use App\Jobs\ProcessSubmission;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SubmissionRequest;
use App\Http\Resources\SubmissionResource;

class SubmissionController extends Controller
{
    public function store(SubmissionRequest $request)
    {
        $validatedData = $request->validated();

        ProcessSubmission::dispatch($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Your submission has been queued for processing.',
        ], 202);
    }
}
