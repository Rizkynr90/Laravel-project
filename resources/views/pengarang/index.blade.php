@extends('layouts.admin')
@section('header')
Halaman Index
@endsection
@section('content')

<div class="container ml-4">
<table class="table table-striped">

    <tr>
        <th>ID Pengarang</th>
        <th>Nama Pengarang</th>
        <th>Email</th>
        <th>Nomor Telepon</th>
        <th>Aksi</th>
    </tr>
    @foreach ($pengarang as $data)
    <tr>
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
  <center><a class="btn btn-primary" href="{{ route('pengarang.create')}}">Tambah Data Pengarang</a></center>

</div>
@endsection
