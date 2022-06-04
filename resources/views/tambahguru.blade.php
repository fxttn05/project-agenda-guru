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
                    <input type="text" name="namaguru"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('namaguru')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIK Guru</label>
                    <input type="text" name="nikguru"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('nikguru')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                    <select class="form-select" name="mapel">
                      <option selected>Select Mata Pelajaran</option>
                      <option value="1">RPL</option>
                      <option value="2">MM</option>
                      <option value="2">TKJ</option>
                      <option value="2">BC</option>
                    </select>
                  </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('name')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="text" name="password"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('password')
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