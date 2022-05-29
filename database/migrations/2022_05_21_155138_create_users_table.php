<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_name');
            $table->integer('role_id')->nullable()->unsigned();
            $table->foreign('role_id')->on('roles')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('default_language')->default('Arabic')->nullable();
            $table->integer('country_id')->nullable()->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('governorate_id')->nullable()->unsigned();
            $table->foreign('governorate_id')->references('id')->on('governorates')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('city_id')->nullable()->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('address')->nullable();
            $table->text('land_line')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('whatsApp')->nullable();
            $table->boolean('is_active')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
