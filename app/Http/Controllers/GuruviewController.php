<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruviewController extends Controller
{
    public function guruview(){
        $data = Agenda::select('agendas.*', 'gurus.*', 'kelas.*', 'mapels.*', 'agendas.id as id_agenda')
		->leftJoin('gurus', 'agendas.guru_id', 'gurus.id')
		->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')
		->leftJoin('mapels', 'mapels.id', 'gurus.mapel_id')
		->paginate(10);
        
        return view('guruview.guruview',[
            'title' => 'Data Agenda',
            'data' => $data
        ]);
    }

    public function create(){
        $dataguru = Guru::all();
        $datamapel = Mapel::all();
        $datakelas = Kelas::all();

        return view('guruview.tambahguruview', [
            "title" => "Add Data Agenda",
            'dataguru' => $dataguru,
            'datamapel' => $datamapel,
            'datakelas' => $datakelas
        ]);
    }

    public function store(Request $request){
        // dd($request->all());

        $this->validate($request, [
            'materi' => 'required',
            'jammulai' => 'required',
            'jamselesai' => 'required',
            'modebelajar' => 'required',
            
        ]);
    
        $data = Agenda::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('guruview');
    }


}
