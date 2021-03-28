<?php

namespace App\Http\Controllers\Front;

use App\OrderItems;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;
use App\Order;
use Carbon\Carbon;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('front.checkout.index');
    }

    public function store(Request $request)
    {
        try {
            // Insert into orders table
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'date' => Carbon::now(),
                'status' => 0
            ]);

            // Insert into order items table
            foreach (Cart::instance('default')->content() as $item) {

                OrderItems::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                    'price' => $item->price
                ]);
            }

            Cart::instance('default')->destroy();


            return redirect()->back()->with('msg', 'Success Thank you');
            // Success

        } catch (Exception $e) {
            // Code
        }
    }
}
