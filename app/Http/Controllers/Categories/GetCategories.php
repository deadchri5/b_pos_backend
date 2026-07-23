<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Categories\Categories;

class GetCategories extends Controller
{
    public function getCategories(Request $request)
    {
        $categories = Categories::get();
        if ($categories->isEmpty()) {
            return response()->json(['message' => 'No categories found'], 404);
        }
        return response()->json([
            'message' => 'Categories retrieved successfully',
            'data' => $categories
        ]);
    }
}
