<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
    public function up () {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            $table->string('email');
            $table->string('delivery-type');
            
            $table->string('payment-type')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('postal-code')->nullable();
            $table->string('city-name')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            
            $table->string('pickup-location')->nullable();
            
            $table->integer('apparel-id');
            $table->integer('apparel-quantity');
            $table->string('apparel-size')->nullable();
            
            $table->timestamps();
        });
    }
    public function down () {
        Schema::dropIfExists('orders');
    }
}
