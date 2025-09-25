<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    public function index()
    {
         // Fetch categories from API
        $response = Http::withHeaders([
            'X-API-KEY' => '8f4d9a2b-6c1e-4b7a-9d3e-12f5a8b7c9d0'
        ])->get('https://admin.saadatyapp.com/api/categories');

        // Convert response to array
        $categories = $response->json();

        return view('frontend.index', compact('categories'));
    }

    public function SubCategories()
    {
        $response = Http::withHeaders([
            'X-API-KEY' => '8f4d9a2b-6c1e-4b7a-9d3e-12f5a8b7c9d0'
        ])->get('https://admin.saadatyapp.com/api/districts');

        // Convert response to array
        $districts = $response->json();

        return view('frontend.sub_categories', compact('districts'));
    }


}
