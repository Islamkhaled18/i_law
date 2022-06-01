<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar');
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();
            $table->longText('desc_ar');
            $table->longText('desc_en')->nullable();
            $table->longText('desc_fr')->nullable();
            $table->longText('meta_desc');
            $table->longText('meta_keywords');
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
        Schema::dropIfExists('pages');
    }
}
