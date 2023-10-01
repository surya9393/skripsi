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
        Schema::create('weather_haris', function (Blueprint $table) {
            $table->id();
            $table->float('suhu');
            $table->float('altitude');
            $table->float('tekanan');
            $table->timestamps();
            $table->float('kelembaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather_haris');
    }
};
