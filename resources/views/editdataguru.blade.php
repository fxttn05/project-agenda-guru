@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Edit Guru</h1>
            <form method="POST" action="/updateguru/{{$data->id}}">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                <input type="text" name="namaguru" value="{{$data->guru}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('namaguru')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIK Guru</label>
                <input type="text" name="nikguru" value="{{$data->nik}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('nikguru')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                <select class="form-select" name="mapel_id">
                    <option selected>Ubah Mata pelajaran</option>
                    @foreach ($datamapel as $item)
                        <option value="{{$item->id}}">{{$item->mapel}}</option>
                    @endforeach
                </select>
              </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input list="browsers" name="user_id"  class="form-control" id="exampleInputEmail1">
                    @foreach($datauser as $data)
                    <datalist id="browsers">
                          <option value="{{$data->id}}">{{$data->email}}</option>
                    @endforeach
                @error('user_id')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection