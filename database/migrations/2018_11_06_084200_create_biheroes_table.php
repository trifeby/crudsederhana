<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiheroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biheroes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('nama');
            $table->string('asal');
            $table->string('lahirwafat');
            $table->string('penetapan');
            $table->string('ringkasan');
            $table->text('penjelasan');
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
                Schema::table('biheroes', function (Blueprint $collection) {
            $collection->drop();
        });
    }
}
