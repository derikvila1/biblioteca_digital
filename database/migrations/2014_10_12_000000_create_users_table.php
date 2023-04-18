<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

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
            // $table->string('gestorName');
            // $table->string('zone');
            // $table->string('institutionType');
            // $table->boolean('publicTypeKids')->default(false);
            // $table->boolean('publicTypeYoungs')->default(false);
            // $table->boolean('publicTypeAdults')->default(false);
            // $table->boolean('publicTypeOlds')->default(false);
            // $table->string('address');
            $table->string('email')->unique();
            // $table->string('cellphone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('roles')->default('{"type":"user", "spaces":[]}');
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