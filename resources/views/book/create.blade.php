@extends('layouts.admin')

@section('header')
Halaman Create
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Buku
                </div>
                <div class="card-body">
                    <form action="{{route('pengarang.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pengarang</label>
                            <select name="id" class="form-control" required>
                                @foreach ($buku as $data)
                                    <option value="{{ $data['id'] }}">{{ $data['nama_pengarang'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Buku</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Halaman Buku</label>
                            <input type="text" class="form-control" name="jumhal" required>
                        </div>
                        <div class="form-group">
                            <label for="">Translate Judul Buku</label>
                            <input type="text" class="form-control" name="translate">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<center><a class="btn btn-primary" href="{{ route('book.index') }}">List Data Buku</a></center>

@endsection
