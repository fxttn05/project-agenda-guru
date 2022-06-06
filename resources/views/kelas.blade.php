@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
      <div class="card-body">
        <h2>Data Kelas</h2>
        <a href="/tambahkelas" type="button" class="btn btn-success">Tambah Data</a>
        <table class="table mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kelas</th>
                <th scope="col">Wali Kelas</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
              @foreach($datas as $index => $row)
              <tr>
                <th scope="row">{{$index + $datas->firstItem()}}</th>
                <td>{{$row->kelas}}</td>
                <td>{{$row->guru}}</td>
                <td class="d-flex">
                  <form action="/deletekelas/{{$row->id_kelas}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger me-2">Delete</button>
                    </form>
                  <a href="/editkelas/{{$row->id_kelas}}" type="button" class="btn btn-primary">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $datas->links() }}
      </div>
    </div>
</div>
@endsection