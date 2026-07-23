<?php

namespace App\Http\Controllers\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brands\Brands;

class GetBrands extends Controller
{
    public function getActiveBrands()
    {
        $brands = Brands::where('is_active', true)->get();

        return response()->json([
            'success' => true,
            'data' => $brands
        ]);
    }
}
