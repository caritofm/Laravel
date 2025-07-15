<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Editar table user
        Schema::table('users', function(blueprint $table){
            $table -> unsignedInteger('age') -> default(18);
            $table->string('addres') -> nullable();
            $table->unsignedBigInteger('zip_code') -> nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropColum(['age']);
    }
};
