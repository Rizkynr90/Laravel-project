@extends('layouts.admin')

@section('header')
Halaman Edit
@endsection

@section('content')
@extends('layouts.admin')

@section('header')
Halaman Edit
@endsection

@section('content')
<a class="btn btn-danger" href="{{ route('pengarang.index') }}">Kembali</a>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header bg-dark text-center">
                    <h3>Edit Pengarang Buku</h3>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-body">
                    <form action="{{route('pengarang.update', $pengarang->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Pengarang</label>
                            <input type="text" value="{{$pengarang->nama_pengarang }}" class="form-control" name="nama" placeholder="Masukan Nama Pengarang....">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" value="{{$pengarang->email}}" class="form-control" name="email" placeholder="Masukan Email Pengarang....">
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" value="{{$pengarang->telp}}" class="form-control" name="telp" placeholder="Masukan Nomor Telepon Pengarang....">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
