<?php

namespace App\Observers;

use App\Models\Invoce;
use App\Models\Order;

class OrderObserver
{
    public function created( Order $order)
    {
        Invoce::create([
            'amount' => $order->total_amount,
            'order_id' => $order->id,
        ]);
    }

    public function updated($order)
    {
        // Aquí puedes manejar la lógica después de que un pedido ha sido actualizado
    }
    public function deleted($order)
    {
        // Aquí puedes manejar la lógica después de que un pedido ha sido eliminado
    }
    public function restored($order)
    {
        // Aquí puedes manejar la lógica después de que un pedido ha sido restaurado
    }
}
