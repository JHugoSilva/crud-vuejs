<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProduct() {
        $products = Product::all();
        return response()->json([
            'products' => $products
        ], 200);
    }

    public function addProduct(Request $request) {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;

        if ($request->photo != "") {

        } else {
            
        }
    }
}
