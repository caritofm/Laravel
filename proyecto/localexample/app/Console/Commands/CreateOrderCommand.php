<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class CreateOrderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:order {user_id} {total_amount}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates a new order';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $user_id = $this -> argument('user_id') ; // Default user_id
        $total_amount = $this -> argument('total_amount') ; // Default total_amount 
         Order::create([
            'user_id' => $user_id, // Asegúrate de que el user_id sea válido
            'total_amount' => $total_amount, // Asegúrate de que total_amount tenga un valor válido
        ]);
        return Command::SUCCESS;
    }
}
