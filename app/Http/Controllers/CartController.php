<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\product;
use Session;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect('/menu');
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);
        return redirect('/menu/shopping-cart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect('/menu/shopping-cart');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('Restaurant.RestaurantCart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('Restaurant.RestaurantCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
