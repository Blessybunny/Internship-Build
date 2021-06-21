<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApparelsTable extends Migration {
    public function up () {
        Schema::create('apparels', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->decimal('price', 12, 2);
            $table->string('img_url');
            
            $table->string('category');
            $table->string('type');
            
            $table->integer('stock_universal')->default(0);
            
            $table->integer('stock_xs')->default(0);
            $table->integer('stock_sm')->default(0);
            $table->integer('stock_md')->default(0);
            $table->integer('stock_lg')->default(0);
            $table->integer('stock_xl')->default(0);
            
            $table->integer('sold')->default(0);
            
            $table->timestamps();
        });
    }
    
    public function down () {
        Schema::dropIfExists('apparels');
    }
}
