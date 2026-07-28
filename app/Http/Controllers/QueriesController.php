<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Component\HttpFoundation\Response;

class QueriesController extends Controller
{
   public function get()
   {
      $products = Product::all();
      return response()->json($products);
   }

   public function getId($id)
   {
      $product = Product::find($id);
      if (!$product || empty($product)) {
         return response()->json(["status" => "error", "message" => "No tiene datos"], Response::HTTP_NOT_FOUND);
      } else {

         return response()->json($product);
      }
   }
}
