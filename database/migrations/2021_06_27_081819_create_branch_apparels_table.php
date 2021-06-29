<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchApparelsTable extends Migration {
    public function up () {
        Schema::create('branch_apparels', function (Blueprint $table) {
            $table->id();
            
            $table->integer('branch_id');
            $table->integer('apparel_id');
            $table->integer('quantity_universal')->default(0);
            $table->integer('quantity_xs')->default(0);
            $table->integer('quantity_sm')->default(0);
            $table->integer('quantity_md')->default(0);
            $table->integer('quantity_lg')->default(0);
            $table->integer('quantity_xl')->default(0);
            $table->integer('quantity_sold')->default(0);
            
            $table->timestamps();
        });
    }
    public function down () {
        Schema::dropIfExists('branch_apparels');
    }
}
