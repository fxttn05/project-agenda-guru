<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function guru(){
        $datas = Guru::paginate(5) ;

        $guruagenda = [];
        foreach ($datas as $data) {
            $guruagenda[] = $data->guruagenda;
        }

        return view('guru', compact('data'), ["title" => "Data Guru"]);
    }

    public function create(){
        return view('tambahguru', ["title" => "Add Data Guru"]);
    }

    public function store(Request $request){
        // dd($request->all());

        $this->validate($request, [
            'namaguru' => 'required',
            'nikguru' => 'required',
            'mapel' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
    
        Guru::create($request->all());
        return redirect()->route('guru');
    }

    public function tampilan($id){
        $data = Guru::find($id);
        return view('editdataguru', compact('data'), ["title" => "Edit Data Guru"]);
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
