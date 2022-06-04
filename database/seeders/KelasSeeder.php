<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Guru::all() as $key => $guru){
            DB::table('kelas')->insert([
            'kelas' => 'XI RPL 2',
            'guru_id' => $guru->id,
        ]);}
        
    }
}
