<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacia', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo', false, true);
            $table->string('medicamento', 35);
            $table->integer('quantidade', false, true);
            $table->float('valor', 10);
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
        Schema::dropIfExists('farmacia');
    }
};
