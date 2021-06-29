<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchMaterialsTable extends Migration {
    public function up () {
        Schema::create('branch_materials', function (Blueprint $table) {
            $table->id();
            
            $table->integer('branch_id');
            $table->integer('material_id');
            $table->integer('quantity')->default(0);
            
            $table->timestamps();
        });
    }
    public function down () {
        Schema::dropIfExists('branch_materials');
    }
}
