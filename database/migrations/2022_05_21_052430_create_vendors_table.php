<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('user_name');
            $table->string('password');
            $table->integer('role_id')->nullable()->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_active')->nullable();
            $table->string('default_language')->nullable();
            $table->integer('country_id')->nullable()->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('governorate_id')->nullable()->unsigned();
            $table->foreign('governorate_id')->references('id')->on('governorates')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('city_id')->nullable()->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('address')->nullable();
            $table->string('land_line')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('whatsApp')->nullable();
            $table->string('company_name')->nullable();
            $table->string('image')->nullable();
            $table->longText('bio')->nullable();
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
        Schema::dropIfExists('vendors');
    }
}
