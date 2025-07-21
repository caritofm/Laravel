<?php

namespace App\Providers;

use App\Events\CreateOrderEvent;
use App\Listeners\GenererInvoice;
use App\Models\Order;
use App\Observers\OrderObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */

    protected $listen = [
        \App\Events\CreateOrderEvent::class => [
            \App\Listeners\GenererInvoice::class,
        ],
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];
    
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Order::observe(OrderObserver::class);
    }
}
