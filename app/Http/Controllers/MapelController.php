<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function mapel(){
        $data = Mapel::paginate(5) ;
        return view('mapel', compact('data'), ["title" => "Data Mapel"]);
    }

    public function create(){
        return view('tambahmapel', ["title" => "Add Data Mapel"]);
    }

    public function store(Request $request){
        // dd($request->all());

        $this->validate($request, [
            'mapel' => 'required',
        ]);
    
        Mapel::create($request->all());
        return redirect()->route('kelas');
    }

    public function tampilan($id){
        $data = Mapel::find($id);
        return view('editdatakelas', compact('data'), ["title" => "Edit Data Mapel"]);
    }

    public function update(Request $request, $id){
        $data = Mapel::find($id);
        $data->update($request->all());
        return redirect()->route('mapel');
    }

    public function destroy($id){
        $data = Mapel::find($id);
        $data->delete();
        return redirect()->route('mapel');
    }
}
