<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('semester')->default('-');
            $table->text('keterangan');
            $table->unsignedBigInteger('status')->default(0);
            $table->date('tgl_diambil')->nullable();
            $table->foreignId('user')->nullable();
            $table->timestamps();
        });

        Schema::table('surats', function($table) {
            $table->foreign('user')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
}
