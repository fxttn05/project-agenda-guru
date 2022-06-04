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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('linked_id'); // ngambil data namaguru, mapel
            $table->string('materi');
            $table->enum('jammulai', ['jam 1', 'jam 2', 'jam 3', 'jam 4', 'jam 5', 'jam 6', 'jam 7',]);
            $table->enum('jamselesai', ['jam 2', 'jam 3', 'jam 4', 'jam 5', 'jam 6', 'jam 7', 'jam 8',]);
            $table->integer('absensiswa');
            $table->foreignId('kelas_id'); // ngambil data kelas
            $table->enum('modebelajar', ['online', 'offline']);
            $table->string('link')->nullable();
            $table->string('foto');
            $table->string('keterangan');
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
        Schema::dropIfExists('agendas');
    }
};
