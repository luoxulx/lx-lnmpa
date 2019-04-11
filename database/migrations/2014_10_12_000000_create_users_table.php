<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->index();
            $table->string('login_name', 128)->unique();
            $table->string('email', 128)->unique();
            $table->string('nickname', 128)->nullable();
            $table->string('picture')->nullable();
            $table->string('introduce')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 128);
            $table->tinyInteger('is_admin', false, true)->default(0)->comment('is admin');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        \Illuminate\Support\Facades\DB::statement("ALTER TABLE `users` comment 'users table'");
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
