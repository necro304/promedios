<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sers', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('Vdocente');
            $table->decimal('Aevaluacion');
            $table->decimal('Coevaluacion');
            $table->decimal('nota');
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
        Schema::dropIfExists('sers');
    }
}
