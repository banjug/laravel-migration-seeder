<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();

            $table->string('title_album', 60);
            $table->string('release_date');
            $table->integer('year_recorded') -> unsigned();
            $table->integer('tracks') -> unsigned();
            $table->string('artist');
            $table->string('producer');
            $table->text('description') -> nullable();
            $table->string('genre', 60);

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
        Schema::dropIfExists('albums');
    }
}
