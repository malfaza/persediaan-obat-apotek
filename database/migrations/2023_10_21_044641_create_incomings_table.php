<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingsTable extends Migration {
    public function up() {
        Schema::create('incomings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->datetime('expire');
            $table->string('description')->nullable();
            $table->timestamps('');

            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    public function down() {
        Schema::dropIfExists('incomings');
    }
}
