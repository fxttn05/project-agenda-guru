@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-11 mt-3 rounded-3">
      <div class="card-body">
        <h2>Data Guru</h2>
        <a href="/tambahguru" type="button" class="btn btn-success">Tambah Data</a>
        <table class="table mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">NIK Guru</th>
                <th scope="col">MaPel</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
              @foreach($data as $index => $row)
              <tr>
                <th scope="row">{{$index + $data->firstItem()}}</th>
                <td>{{$row->guru}}</td>
                <td>{{$row->nik}}</td>
                <td>{{$row->mapelguru->mapel}}</td>
                <td>{{$row->userguru->email}}</td>
                <td>{{$row->userguru->password}}</td>
                <td class="d-flex">
                  <form action="/deleteguru/{{$row->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger me-2">Delete</button>
                    </form>
                  <a href="/editguru/{{$row->id}}" type="button" class="btn btn-primary">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
      </div>
    </div>
</div>
@endsection