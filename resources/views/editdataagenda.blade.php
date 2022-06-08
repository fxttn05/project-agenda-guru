@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Edit Agenda Sekolah</h1>
            <form method="POST" action="/updateagenda/{{$data->id}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                    <select class="form-select" name="guru_id" value="">
                        @foreach($dataguru as $data2)
                            <option value="{{$data2->id}}">{{$data2->guru}}</option>
                        @endforeach
                    </select>
                    @error('guru')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Materi</label>
                    <input type="text" name="materi" value="{{$data->materi}}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('materi')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="mb-3 col-5">
                        <label for="exampleInputEmail1" class="form-label">Mulai Jam pelajaran</label>
                        <select class="form-select" name="jammulai">
                            <option selected>{{$data->jammulai}}</option>
                            <option value="1">jam 1</option>
                            <option value="2">jam 2</option>
                            <option value="3">jam 3</option>
                            <option value="4">jam 4</option>
                            <option value="5">jam 5</option>
                            <option value="6">jam 6</option>
                            <option value="7">jam 7</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <p style="text-align: center;">to</p>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleInputEmail1" class="form-label">Selesai Mata Pelajaran</label>
                        <select class="form-select" name="jamselesai">
                            <option selected>{{$data->jamselesai}}</option>
                            <option value="1">jam 2</option>
                            <option value="2">jam 3</option>
                            <option value="3">jam 4</option>
                            <option value="4">jam 5</option>
                            <option value="5">jam 6</option>
                            <option value="6">jam 7</option>
                            <option value="7">jam 8</option>
                        </select>
                    </div>
                </div>

                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas_id" value="">
                        @foreach ($datakelas as $item)
                        <option value="{{$item->id}}" selected>{{$item->kelas}}</option>
                        @endforeach
                    </select>
                    @error('kelas')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mode Pembelajaran</label>
                    <select class="form-select" name="modebelajar" value="{{$data->modebelajar}}">
                        <option selected>{{$data->modebelajar}}</option>
                        <option value="1">online</option>
                        <option value="2">offline</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link</label>
                    <input type="text" name="link" value="{{$data->link}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div class="text-danger">
                        <p>*Opsional</p>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto Dokumentasi</label>
                    <input type="file" name="foto" value="{{$data->foto}}" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('foto')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Absensi (Jumlah siswa tidak hadir per
                        sesi)</label>
                    <input type="number" name="absensiswa" value="{{$data->absensiswa}}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('absensiswa')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">keterangan</label>
                    <input type="text" name="keterangan" value="{{$data->keterangan}}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div class="text-danger">
                        <p>*Opsional</p>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
