<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function agenda(){
        $datas = Agenda::select('agendas.*', 'gurus.*', 'kelas.*', 'mapels.*')
		->leftJoin('gurus', 'agendas.guru_id', 'gurus.id')
		->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')
		->leftJoin('mapels', 'mapels.id', 'gurus.mapel_id')
		->paginate(5);

        // dd($datas[0]);
        
        return view('agenda',[
            'title' => 'Data Agenda',
            'datas' => $datas,
        ]);
    }

    public function create(){
        return view('tambahagenda', ["title" => "Add Data Agenda"]);
    }

    public function store(Request $request){
        // dd($request->all());

        $this->validate($request, [
            'namaguru' => 'required',
            'mapel' => 'required',
            'materi' => 'required',
            'jammulai' => 'required',
            'jamselesai' => 'required',
            'kelas' => 'required',
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
        return view('editdataagenda', compact('data',), ["title" => "Edit Data Agenda"]);
    }

    public function update(Request $request, $id){
        $data = Agenda::find($id);
        $data->update($request->all());
        return redirect()->route('agenda');
    }

    public function destroy($id){
        $data = Agenda::find($id);
        $data->delete();
        return redirect()->route('agenda');
    }
}
