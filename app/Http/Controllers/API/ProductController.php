<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();

        return response()->json([
            "data" => $products
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'desc' => 'required|string',
            'price' => 'required|int',
            'manufacturer' => 'required|string',
            'about' => 'required|string',
            'image_url' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "message" => $validator->errors()
            ]);
        }
        $input = $validator->validated();
        Product::create($input);

        return response()->json([
            "message" => "product created"
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                "message" => "product not found",
            ], 401);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string',
            'desc' => 'sometimes|string',
            'price' => 'sometimes|int',
            'manufacturer' => 'sometimes|string',
            'about' => 'sometimes|string',
            'image_url' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "message" => $validator->errors()
            ]);
        }
        $input = $validator->validated();

        $product->update($input);

        return response()->json([
            "message" => "product updated"
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                "message" => "product not found",
            ], 401);
        }

        return response()->json([
            "data" => $product
        ]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                "message" => "product not found",
            ], 401);
        }


        $product->delete();

        return response()->json([
            "message" => "product deleted"
        ]);
    }
}
