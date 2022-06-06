@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Insert Kelas</h1>
            <form method="POST" action="{{route('insertkelas')}}">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <input type="text" name="kelas"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('kelas')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Walikelas</label>
                    <select class="form-select" name="guru_id">
                        <option selected>Select Guru</option>
                        @foreach($dataguru as $data)
                            <option value="{{$data->id}}">{{$data->guru}}</option>
                        @endforeach
                    </select>
                    @error('guru')
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