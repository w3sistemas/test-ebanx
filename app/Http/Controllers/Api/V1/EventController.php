<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(EventRequest $eventRequest): JsonResponse
    {
        return response()->json([
            "destination" => [
                "id" => "100",
                "balance" => 10
            ]
        ], 201);
    }
}
