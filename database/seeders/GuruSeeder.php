<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mapel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Mapel::all() as $key => $mapel){
           DB::table('gurus')->insert([
            'nik' => '20221231',
            'mapel_id' => $mapel->id,
            
        ]); 
        }

        // foreach(User::all() as $key => $user){
        //     DB::table('gurus')->insert([
        //         'user_id' =>$user->id,
        //     ]);
        // }
        
    }
}
