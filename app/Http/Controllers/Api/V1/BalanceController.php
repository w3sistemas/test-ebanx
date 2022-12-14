<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\BalanceRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index(BalanceRequest $balanceRequest): JsonResponse
    {
        return response()->json(0, 404);
    }
}
