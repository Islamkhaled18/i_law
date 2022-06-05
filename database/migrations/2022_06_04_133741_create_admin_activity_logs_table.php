<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminActivityLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_activity_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->text('phone')->nullable();
            $table->boolean('is_active')->nullable();
            $table->string('default_language')->comment('Arabic Or English')->nullable();
            $table->string('image')->nullable()->nullable();
            $table->string('date_time')->nullable();
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
        Schema::dropIfExists('admin_activity_logs');
    }
}
