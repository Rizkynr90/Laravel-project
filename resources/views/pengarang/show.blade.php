@extends('layouts.admin')

@section('header')
Halaman Show
@endsection

@section('content')
<a class="btn btn-danger" href="{{ route('pengarang.index') }}">Kembali</a>

<div class="container mt-3">
    <div class="row">
        <div class="col md-12">
<div class="card">
    <div class="card-header bg-dark">
        <h3 class="card-title text-center">Data Pengarang</h3>
    </div>
    <div class="card-body">
        <label for="nama_pengarang">
            Nama Pengarang :
        </label>
        {{ $pengarang->nama_pengarang }}
        <br>

        <label for="email">
            Email Pengarang :
        </label>
        {{ $pengarang->email }}
        <br>

        <label for="telp">
            Nomor Telepon Pengarang :
        </label>
        {{ $pengarang->telp }}
        <br>
    </div>
</div>
</div>
</div>
</div>
@endsection
