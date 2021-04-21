<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMaterialTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materialTypes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('createdAt');
            $table->time('updatedAt');
            $table->softDeletes('deletedAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_material_types');
    }
}
