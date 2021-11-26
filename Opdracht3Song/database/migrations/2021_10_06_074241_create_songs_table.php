<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Id = autoincrement automatisch
        timestamps = created_at en updated_at
        Nullable = false = niet opschrijven
        */
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('singer')->Nullable();
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
        Schema::dropIfExists('songs');
    }
}
