@extends('template')

@section('content')
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Insert Agenda Sekolah</h1>
            <form method="POST" action="{{route('insertagenda')}}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
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


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Materi</label>
                    <input type="text" name="materi" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
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
                            <option selected>Select jam Pelajaran</option>
                            <option value="1">jam 1</option>
                            <option value="2">jam 2</option>
                            <option value="2">jam 3</option>
                            <option value="2">jam 4</option>
                            <option value="2">jam 5</option>
                            <option value="2">jam 6</option>
                            <option value="2">jam 7</option>
                        </select>
                    </div>

                    <div class="col-1">
                        <p style="text-align: center;">to</p>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="exampleInputEmail1" class="form-label">Selesai Mata Pelajaran</label>
                        <select class="form-select" name="jamselesai">
                            <option selected>Select Jam Pelajaran</option>
                            <option value="1">jam 2</option>
                            <option value="2">jam 3</option>
                            <option value="2">jam 4</option>
                            <option value="2">jam 5</option>
                            <option value="2">jam 6</option>
                            <option value="2">jam 7</option>
                            <option value="2">jam 8</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Absensi (Jumlah siswa tidak hadir per sesi)</label>
                    <input type="number" name="absensiswa" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('absensiswa')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas_id">
                        <option selected>Select Kelas</option>
                        @foreach($datakelas as $data3)
                            <option value="{{$data3->id}}">{{$data3->kelas}}</option>
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
                    <select class="form-select" name="modebelajar">
                        <option selected>Select Mode Pembelajaran</option>
                        <option value="1">online</option>
                        <option value="2">offline</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link</label>
                    <input type="text" name="link" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div class="text-danger">
                        <p>*Opsional</p>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto Dokumentasi</label>
                    <input type="file" name="foto" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('foto')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
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
