@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
      <div class="card-body">
        <h2>Data Mapel</h2>
        <a href="/tambahmapel" type="button" class="btn btn-success">Tambah Data</a>
        <table class="table mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Mapel</th>
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
                <td>{{$row->mapel}}</td>
                <td class="d-flex">
                  <form action="/deletemapel/{{$row->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger me-2">Delete</button>
                    </form>
                  <a href="/editmapel/{{$row->id}}" type="button" class="btn btn-primary">Edit</a>
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