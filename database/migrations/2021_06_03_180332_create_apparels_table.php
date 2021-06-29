<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApparelsTable extends Migration {
    public function up () {
        Schema::create('apparels', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->integer('category_id');
            $table->string('type');
            $table->decimal('price', 10, 2);
            $table->string('img_url');
            
            $table->timestamps();
        });
    }
    
    public function down () {
        Schema::dropIfExists('apparels');
    }
}
