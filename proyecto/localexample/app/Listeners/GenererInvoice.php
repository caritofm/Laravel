<?php

namespace App\Listeners;

use App\Events\CreateOrderEvent;
use App\Models\Invoce;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenererInvoice
{
  
    public function __construct()
    {
        
    }

   
    public function handle(CreateOrderEvent $event): void
    {
        Invoce::Create([
            'amount' => $event->order->total_amount,
            'order_id' => $event->order->id,
        ]);
    }
}
