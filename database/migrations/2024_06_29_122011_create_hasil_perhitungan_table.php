<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPerhitunganTable extends Migration
{
    public function up()
    {
        Schema::create('hasil_perhitungan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternatif_id')->constrained()->onDelete('cascade');
            $table->float('nilai_s');
            $table->float('nilai_v');
            $table->integer('ranking');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hasil_perhitungan');
    }
}
