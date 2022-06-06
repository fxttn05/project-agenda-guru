<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function kelas(){
        $datas = Kelas::select('kelas.*', 'gurus.*', 'kelas.id as id_kelas')
		->leftJoin('gurus', 'kelas.guru_id', 'gurus.id')
		->paginate(5);
        
        return view('kelas', compact('datas'), ["title" => "Data Kelas"]);
    }

    public function create(){
        $dataguru = Guru::all();
        return view('tambahkelas', [
            "title" => "Add Data Kelas",
            'dataguru' => $dataguru
        ]);
    }

    public function store(Request $request){
        // dd($request->all());

        $this->validate($request, [
            'kelas' => 'required',
        ]);
    
        Kelas::create($request->all());
        return redirect()->route('kelas');
    }

    public function tampilan($id){
        $data = Kelas::find($id);
        $dataguru = Guru::all();
        return view('editdatakelas', compact('data', 'dataguru'), ["title" => "Edit Data Kelas"]);
    }

    public function update(Request $request, $id){
        $data = Kelas::find($id);
        $data->update($request->all());
        return redirect()->route('kelas');
    }

    public function destroy($id){
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('kelas');
    }
}
