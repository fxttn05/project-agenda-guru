@extends('template')

@section('content')
<div class="row justify-content-center ">
    <div class="card col-12 mt-3 rounded-3 responsive">
      <div class="card-body overflow-auto">
        <h2>Agenda Sekolah</h2>
        <a href="/tambahagenda" type="button" class="btn btn-success">Tambah Data</a>
        <table class="table mt-3 mb-3 ">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">MaPel</th>
                <th scope="col">Materi</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Kelas</th>
                <th scope="col">Mode</th>
                <th scope="col">Link</th>
                <th scope="col">Foto</th>
                <th scope="col">Abs</th>
                <th scope="col">Keterangan</th>
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
                <td>{{$row->mapel}}</td>
                <td>{{$row->materi}}</td>
                <td>{{$row->jammulai}}</td>
                <td>{{$row->jamselesai}}</td>
                <td>{{$row->kelasagenda->kelas}}</td>
                <td>{{$row->modebelajar}}</td>
                <td>{{$row->link}}</td>
                <td>
                  <a href="{{asset ('foto/'.$row->foto)}}" target="blank" rel=" noopener noreferer">Lihat Gambar</a>
                </td>
                <td>{{$row->absensiswa}}</td>
                <td>{{$row->keterangan}}</td>
                <td class="">
                  <form action="/deleteagenda/{{$row->id_agenda}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" style="background: transparent; border: none;"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/16/undefined/external-bin-mother-earth-day-vitaliy-gorbachev-fill-vitaly-gorbachev-1.png"/></button>
                  </form>
                  <a href="/editagenda/{{$row->id_agenda}}" type="button" class="ms-1"><img src="https://img.icons8.com/material-sharp/16/undefined/edit--v2.png"/></a>
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