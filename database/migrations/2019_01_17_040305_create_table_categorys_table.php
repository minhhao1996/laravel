<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_id');
            $table->string('name',50);
            $table->string('icon');
            $table->integer('location');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_id');
            $table->string('name',50);
            $table->string('icon');
            $table->string('keyword');
            $table->integer('location');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }
}
