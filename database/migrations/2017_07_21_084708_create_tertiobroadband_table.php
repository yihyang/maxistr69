<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTertiobroadbandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tertiobroadbands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50);
            $table->string('password', 20);
            $table->string('serviceName', 50);
            $table->tinyInteger('status');
            $table->string('serialNo', 20);
            $table->string('voipNo', 50);
            $table->integer('templateId');
            $table->integer('vlaninternet');
            $table->integer('vlanmgt');
            $table->integer('vlanvoip');
            $table->integer('vlaniptv');
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
        Schema::drop('tertiobroadbands');
    }
}
