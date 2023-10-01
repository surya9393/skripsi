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
        Schema::create('powers_logs', function (Blueprint $table) {
            $table->id();
            $table->float('tegangan_dinamis');
            $table->float('tegangan_statis');
            $table->float('arus_dinamis');
            $table->float('arus_statis');
            $table->float('power_dinamis');
            $table->float('power_statis');
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
        Schema::dropIfExists('powers_logs');
    }
};
