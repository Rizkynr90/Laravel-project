@extends('layouts.admin')
@section('header')
Halaman Index
@endsection
@section('content')
<a class="btn btn-primary" href="{{ route('pengarang.create')}}">Tambah Data Pengarang</a>
<div class="container ml-4 mt-3">
<table class="table table-striped">
    @php
        $no = 1;
    @endphp
    <tr>
        <th>No</th>
        <th>ID Pengarang</th>
        <th>Nama Pengarang</th>
        <th>Email</th>
        <th>Nomor Telepon</th>
        <th>Aksi</th>
    </tr>
    @foreach ($pengarang as $data)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama_pengarang }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->telp }}</td>
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
