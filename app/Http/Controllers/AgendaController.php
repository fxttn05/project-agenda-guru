<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{
    public function agenda(){
        $data = Agenda::select('agendas.*', 'gurus.*', 'kelas.*', 'mapels.*', 'agendas.id as id_agenda')
		->leftJoin('gurus', 'agendas.guru_id', 'gurus.id')
		->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')
		->leftJoin('mapels', 'mapels.id', 'gurus.mapel_id')
		->paginate(5);
        
        return view('agenda',[
            'title' => 'Data Agenda',
            'data' => $data
        ]);
    }

    public function create(){
        $dataguru = Guru::all();
        $datamapel = Mapel::all();
        $datakelas = Kelas::all();
        return view('tambahagenda', [
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

        return redirect()->route('agenda');
    }

    public function tampilan($id){
        $data = Agenda::find($id);
        $dataguru = Guru::all();
        $datamapel = Mapel::all();
        $datakelas = Kelas::all();
        return view('editdataagenda', compact('data', 'dataguru', 'datamapel', 'datakelas'), ["title" => "Edit Data Agenda"]);
    }

    public function update(Request $request, $id){
        $data = Agenda::find($id);
        if ($request->hasFile('foto')) {
            $destination = 'foto/'.$data->foto;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalName();
            $filename = time().'.'.$extension;
            $file->move('foto/', $filename);
            $data->foto = $filename;
        }
        $data->update($request->all());
        return redirect()->route('agenda');
    }

    public function destroy($id){
        $data = Agenda::find($id);
        $data->delete();
        return redirect()->route('agenda');
    }
}
