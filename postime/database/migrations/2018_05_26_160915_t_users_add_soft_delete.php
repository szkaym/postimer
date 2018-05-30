<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TUsersAddSoftDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_users', function (Blueprint $table) {
            $table->dropUnique('unique_user_code');
            $table->dropUnique('unique_user_email');

            $table->removeColumn('user_deleted');
            $table->softDeletes();
            
            $table->index('user_code');
            $table->index('user_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_users', function (Blueprint $table) {
            //
        });
    }
}
