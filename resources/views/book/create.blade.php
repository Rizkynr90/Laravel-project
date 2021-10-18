@extends('layouts.admin')

@section('header')
Halaman Create
@endsection

@section('content')
<a class="btn btn-primary" href="{{ route('book.index') }}">List Data Buku</a>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-center">
                    <h3>Penambahan Data Buku</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('book.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pengarang</label>
                            <select name="pengarang_id" class="form-control" required>
                                <option value=""></option>
                                @foreach ($pengarang as $data)
                                    <option value="{{$data['id']}}">{{$data['nama_pengarang']}}</option>
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


@endsection
