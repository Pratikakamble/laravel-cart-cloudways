<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;
class CartController extends Controller
{
    public function cart(){
    	return view('cart.cart');
    }

    public function addToCart($id){
    	$cartItems = Session::get('cartItems', []);
    	$product = Product::where(['id' => $id])->first();
    	if(isset($cartItems[$id])){
    		$cartItems[$id]['quantity']++; 	
    	}else{
    		$cartItems[$id] = array(
    			"image_path" => $product->image_path,
    			"name" => $product->name,
    			"details" => $product->details,
    			"price" => $product->price,
    			"quantity" => 1
    		);
    	}
    	Session::put('cartItems',$cartItems);
    	return redirect()->back()->with('success', 'Product added to cart!');
    }


    public function dltFromCart($id){
    	$session = Session::get('cartItems');
    	if(isset($session[$id])){
    	unset($session[$id]);
    	}
    	Session::put('cartItems', $session);
    	return redirect()->back();
    }
}
