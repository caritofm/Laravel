<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Listeners\GenererInvoice;
use App\Models\Invoce;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {

    
       $order =  Order::create([
            'user_id' => 10,
            'total_amount' => 100.00,
        ]);
        
        CreateOrderEvent::dispatch($order);
        return response()->json([
            'message' => 'Order created successfully',
            'order' => $order,
        ]);
    }
}
