<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiDataController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $response = json_decode(file_get_contents(__DIR__ . '/apiResource/data.json'));

        return response()->json($response);
    }

}