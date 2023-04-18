<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('pending');
            $table->string('spaceName');
            $table->bigInteger('space_id');
            $table->string('day');
            $table->string('hour');
            $table->string('type');
            $table->string('institution');
            $table->string('profession');
            $table->string('state');
            $table->string('city');
            $table->string('obs')->nullable()->default('');
            $table->string('title')->nullable()->default('');
            $table->string('autor')->nullable()->default('');
            $table->string('year')->nullable()->default('');
            // $table->string('fileName');
            // $table->bigInteger('peopleNumber');
            // $table->string('name');
            $table->string('cellphone');
            // $table->string('grade');
            // $table->string('age');
            // $table->string('pcdType')->nullable()->default('');
            // $table->string('project')->nullable()->default('');
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
        Schema::dropIfExists('visitas');
    }
}