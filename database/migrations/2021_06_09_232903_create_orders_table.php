<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
    public function up () {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            $table->string('email');
            $table->string('delivery_method');
            $table->string('payment_method')->nullable();
            
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            
            $table->string('pickup_location')->nullable();
            
            $table->integer('apparel_id');
            $table->integer('apparel_quantity');
            $table->string('apparel_size')->nullable();
            
            $table->timestamps();
        });
    }
    public function down () {
        Schema::dropIfExists('orders');
    }
}
