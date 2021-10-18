@extends('layouts.admin')

@section('header')
Halaman Index
@endsection

@section('content')
<div class="container ml-4">
<table class="table table-striped">
    <tr>
        <th>ID Buku</th>
        <th>ID Pengarang</th>
        <th>Nama Buku</th>
        <th>Jumlah Halaman</th>
        <th>Translate Judul Buku</th>
        <th>Aksi</th>
    </tr>
    @foreach ($buku as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->pengarang_id }}</td>
        <td>{{ $data->nama_buku }}</td>
        <td>{{ $data->jumlah_halaman }}</td>
        <td>{{ $data->translate_judul_buku }}</td>
        <td>
            <button class="btn btn-success">Edit</button>|
            <button class="btn btn-warning">Show</button>|
            <button class="btn btn-danger">Delete</button>|
        </td>
    </tr>
    @endforeach
  </table>
  <center><a class="btn btn-primary" href="{{ route('book.create') }}">Tambah Data Buku</a></center>
</div>
@endsection
