@extends('layouts.admin')
@section('header')
Halaman Index
@endsection
@section('content')
<center><a class="btn btn-primary" href="{{ route('pengarang.create')}}">Tambah Data Pengarang</a></center>
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
            <a href="{{ route('pengarang.edit', $data->id) }}" class="btn btn-success">Edit</a>
            <a href="{{ route('pengarang.show', $data->id) }}" class="btn btn-warning">Show</a>
            <br>
            <form action="{{ route('pengarang.destroy', $data->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection
