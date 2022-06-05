@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Edit Kelas</h1>
            <form method="POST" action="/updatemapel/{{$data->id}}">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mapel</label>
                    <input type="text" name="mapel" value="{{$data->mapel}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('mapel')
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