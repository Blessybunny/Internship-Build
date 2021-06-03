<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApparelsCategoriesTable extends Migration {
    public function up () {
        Schema::create('apparels_categories', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            
            $table->timestamps();
        });
    }

    public function down () {
        Schema::dropIfExists('apparels_categories');
    }
}
