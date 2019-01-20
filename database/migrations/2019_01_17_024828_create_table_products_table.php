<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_id');
            $table->string('maker_id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('contents');
            $table->string('discount')->nullable();
            $table->string('avatar');
            $table->string('price');
            $table->string('views')->default(0);
            $table->string('title')->nullable();
            $table->string('warranty')->nullable();
            $table->string('total')->default(0);
            $table->string('buyed')->default(0);
            $table->string('gifts');
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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_id');
            $table->string('maker_id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('contents');
            $table->string('discount')->nullable();
            $table->string('avatar');
            $table->string('views')->default(0);
            $table->string('price');
            $table->string('title')->nullable();
            $table->string('warranty')->nullable();
            $table->string('total')->default(0);
            $table->string('buyed')->default(0);
            $table->string('gifts');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }
}
