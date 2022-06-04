<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function kelas(){
        $data = Kelas::paginate(5) ;
        return view('kelas', compact('data'), ["title" => "Data Kelas"]);
    }

    public function create(){
        return view('tambahkelas', ["title" => "Add Data Kelas"]);
    }

    public function store(Request $request){
        // dd($request->all());

        $this->validate($request, [
            'kelas' => 'required',
            'walikelas' => 'required'
        ]);
    
        Kelas::create($request->all());
        return redirect()->route('kelas');
    }

    public function tampilan($id){
        $data = Kelas::find($id);
        return view('editdatakelas', compact('data'), ["title" => "Edit Data Kelas"]);
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
