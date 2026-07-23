<?php

namespace App\Http\Controllers\Providers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Providers\Provider;

class GetProviders extends Controller
{
    public function getProviders(Request $request)
    {
        // Logic to retrieve providers goes here
        $providers = Provider::all();

        if ($providers->isEmpty()) {
            return response()->json(['message' => 'No providers found'], 404);
        }

        return response()->json([
            'message' => 'Providers retrieved successfully',
            'data' => $providers
        ]);
    }
}
