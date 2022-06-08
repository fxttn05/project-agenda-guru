@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Edit Kelas</h1>
            <form method="POST" action="/updatekelas/{{$data->id_kelas}}">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <input type="text" name="kelas" value="{{$data->kelas}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('kelas')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                    <select class="form-select" name="guru_id">
                        <option selected>Ubah Mata pelajaran</option>
                        @foreach ($dataguru as $item)
                            <option value="{{$item->id}}">{{$item->guru}}</option>
                        @endforeach
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection