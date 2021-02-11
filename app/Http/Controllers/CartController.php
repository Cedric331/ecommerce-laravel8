<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

   public function index()
   {
      $products = json_encode(Auth::user()->cart);

      return view('cart.index', compact('products'));
   }

   public function store(Product $product)
   {
     $cart = new Cart;
     $cart->user_id = Auth::user()->id;
     $cart->product_id = $product->id;
     $cart->save();
     return response()->json($product, 200);
   }

}
