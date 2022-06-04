@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-12 mt-3 rounded-3">
      <div class="card-body">
        <h2>Agenda Sekolah</h2>
        <a href="/tambahagenda" type="button" class="btn btn-success">Tambah Data</a>
        <table class="table mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">MaPel</th>
                <th scope="col">Materi</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Abs</th>
                <th scope="col">Kelas</th>
                <th scope="col">Mode belajar</th>
                <th scope="col">Link</th>
                <th scope="col">Foto</th>
                <th scope="col">Keterangan</th>
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
                <td>{{$guru[$index]->namaguru}}</td>
                <td>{{$guru[$index]->mapel}}</td>
                <td>{{$row->materi}}</td>
                <td>{{$row->jammulai}}</td>
                <td>{{$row->jamselesai}}</td>
                <td>{{$row->absensiswa}}</td>
                <td>{{$row->kelas}}</td>
                <td>{{$row->modebelajar}}</td>
                <td>{{$row->link}}</td>
                <td>
                  <img src="{{asset ('foto/'.$row->foto)}}" alt="" style="width: 12vw">
                </td>
                <td>{{$row->keterangan}}</td>
                <td class="">
                  <form action="/deleteagenda/{{$row->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger mb-2">Delete</button>
                    </form>
                  <a href="/editagenda/{{$row->id}}" type="button" class="btn btn-primary">Edit</a>
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