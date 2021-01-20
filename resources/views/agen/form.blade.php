@extends('tema.master')

@section('content')
<section id="agen" class="agen">
    <h2>Form  Pendaftaran Anggota</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route("agen_proses") }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for="nama">nama</label>
        <input type="text" name="nama" class="form-control" placeholder="masukkan nama anda">

        <label for="nowa">no WA/handphone</label>
        <input type="text" name="nowa" class="form-control" placeholder="masukan no handphone/WA">

        <label for="ttl">TTL</label>
        <input type="text" name="ttl" class="form-control" placeholder="masukan tempat tanggal lahir">

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="masukkan alamat anda ">

        <label for="nik">nik</label>
        <input type="text" name="nik" class="form-control" placeholder="nik">

        <label for="email">email</label>
        <input type="text" name="email" class="form-control" placeholder="email">

        <label for="foto">foto wajah 3 * 4</label>
        <input type="file" name="foto" class="form-control" placeholder="foto">



        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection