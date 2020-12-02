<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazynsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazyns', function (Blueprint $table) {
            $table->id();
            $table->integer('blogs_id')->unsigned();
            $table->integer('brons_id')->unsigned();
            $table->string('numerszafy');
            $table->string('numerstanowiska');
            $table->string('rozkazprzydzial');
            $table->string('uwagi');
            $table->timestamps();

            $table->foreign('blogs_id')->references('id')->on('blogs')
                ->onDelete('cascade');
            $table->foreign('brons_id')->references('id')->on('brons')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magazyns');
    }
}
