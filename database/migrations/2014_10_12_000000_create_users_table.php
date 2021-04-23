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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Add user on install
        \Illuminate\Support\Facades\DB::table('users')
            ->insert([
                'name' => 'olcy',
                'email' => 'me@olcy.fr',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => \Illuminate\Support\Facades\Hash::make('olcylebest123')
            ]);
        \Illuminate\Support\Facades\DB::table('users')
            ->insert([
                'name' => 'lameule',
                'email' => 'beenjaminb@gmail.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => \Illuminate\Support\Facades\Hash::make('olcylebest123')
            ]);
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
