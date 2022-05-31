<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('name_fr');
            $table->longText('desc_ar');
            $table->longText('desc_en');
            $table->longText('desc_fr');
            $table->longText('index_ar');
            $table->longText('index_en');
            $table->longText('index_fr');
            $table->integer('writer_id')->unsigned();
            $table->foreign('writer_id')->references('id')->on('writers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('section_id')->unsigned()->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('stock');
            $table->decimal('price');
            $table->decimal('offer')->nullable();
            $table->string('type')->comment('hard or PDF');
            $table->boolean('is_active');
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
        Schema::dropIfExists('books');
    }
}
