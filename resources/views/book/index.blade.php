@extends('layouts.admin')

@section('header')
Halaman Index
@endsection

@section('content')
<a class="btn btn-primary" href="{{ route('book.create') }}">Tambah Data Buku</a>
<div class="container ml-4 mt-3">
<table class="table table-striped">
    <tr>
        <th>ID Buku</th>
        <th>Nama Pengarang</th>
        <th>Nama Buku</th>
        <th>Jumlah Halaman</th>
        <th>Translate Judul Buku</th>
        <th>Aksi</th>
    </tr>
    @foreach ($buku as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->pengarang->nama_pengarang }}</td>
        <td>{{ $data->nama_buku }}</td>
        <td>{{ $data->jumlah_halaman }}</td>
        <td>{!! $data->translate_judul_buku ?? "<i>Belum Tersedia</i>" !!}</td>
        <td>
            <button class="btn btn-success">Edit</button>|
            <button class="btn btn-warning">Show</button>|
            <button class="btn btn-danger">Delete</button>|
        </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection
