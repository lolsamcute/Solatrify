<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQrcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('qrcode_id')->nullable();
            $table->string('youtube_url')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('manufacture_id')->nullable();
            $table->string('slug');
            $table->string('p_description');
            $table->string('quantity');
            $table->string('sku');
            $table->string('name');
            $table->string('image');
            $table->string('oldAmount');
            $table->string('product_url')->nullable();
            $table->string('callback_url')->nullable();
            $table->string('qrcode_path')->nullable(); //path to where QRCode image is saved on our server
            $table->float('amount', 10, 4);
            $table->tinyInteger('status')->default(1)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('qrcodes');
    }
}
