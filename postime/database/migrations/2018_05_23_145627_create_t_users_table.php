<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_code', 32);
            $table->string('user_name', 191);
            $table->unsignedInteger('role_id');
            $table->string('user_email', 191);
            $table->string('user_password', 100);
            $table->rememberToken();
            $table->boolean('user_active')->default(0);
            $table->boolean('user_deleted')->default(0);
            $table->timestamps();

            $table->unique(['user_code', 'user_deleted'], 'unique_user_code');
            $table->unique(['user_email', 'user_deleted'], 'unique_user_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_users');
    }
}
