<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller {
    public function getProducts()
    {
        $products = DB::select("SELECT * FROM products");

        return response()->json($products);
    }
} 