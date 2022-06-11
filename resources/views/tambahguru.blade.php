@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Insert Guru</h1>
            <form method="POST" action="{{route('insertguru')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                    <input type="text" name="guru" class="form-control" id="exampleInputEmail1" placeholder="Nama Guru"
                        aria-describedby="emailHelp">
                    @error('guru')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIK Guru</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK Guru">
                    @error('nik')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                    <select class="form-select" name="mapel_id" placeholder="Mata Pelajaran">
                        
                        @foreach($datamapel as $data)
                        <option value="{{$data->id}}">{{$data->mapel}}</option>
                        @endforeach
                        @error('nik')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <select class="form-control" list="browsers" id="exampleDataList" name="user_id" placeholder="Select@email">
                        <option selected></option>
                        @foreach($datauser as $data)
                        <option value="{{$data->id}}">{{$data->email}}</option>
                        @endforeach
                        @error('user_id')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
