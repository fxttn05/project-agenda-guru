<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Mapel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function guru(){
        $data = Guru::with('userguru','mapelguru')->paginate(5) ;

        return view('guru', [
            'title' => 'Data Guru',
            'data' => $data,
        ]);
    }

    public function create(){
        $datamapel = Mapel::all();
        $datauser = User::all();
        return view('tambahguru', [
            "title" => "Add Data Guru",
            'datamapel' => $datamapel,
            'datauser' => $datauser
        ]);
    }

    public function store(Request $request){
        // dd($request->all());

        $this->validate($request, [
            'guru' => 'required',
            'nik' => 'required',
        ]);
        Guru::create($request->all());
        return redirect()->route('guru');
    }

    public function tampilan($id){
        $data = Guru::find($id);
        $datamapel = Mapel::all();
        $datauser = User::all();
        return view('editdataguru', compact('data', 'datamapel', 'datauser'), ["title" => "Edit Data Guru"]);
    }

    public function update(Request $request, $id){
        $data = Guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru');
    }

    public function destroy($id){
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('guru');
    }
}
