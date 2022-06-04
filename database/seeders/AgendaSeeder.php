<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guru;
use App\Models\Kelas;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Guru::all() as $key => $guru) {
            DB::table('agendas')->insert([
                'guru_id' => $guru->id,
                'mapel_id' => $guru->id,
                'materi' => 'Laravel',
                'jammulai' => 'jam 1',
                'jamselesai' => 'jam 3',
                'absensiswa' => '2',
                'modebelajar' => 'online',
                'link' => 'www.google.com',
                'foto' => '',
                'keterangan' => 'tidak masuk : Fattan, Dina',
            ]);
        }

        foreach (Kelas::all() as $key => $kelas) {
            DB::table('agendas')->insert([
                'kelas_id' => $kelas->id,
            ]);
        }
    }
}
