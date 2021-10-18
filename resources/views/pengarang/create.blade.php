@extends('layouts.admin')

@section('header')
Halaman Create
@endsection

@section('content')
<a class="btn btn-danger" href="{{ route('pengarang.index') }}">...List Data Pengarang</a>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header bg-dark text-center">
                    <h3>Tambah Data Pengarang</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('pengarang.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pengarang</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pengarang...." required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan Email Pengarang...." required>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control" name="telp" placeholder="Masukan Nomor Telepon Pengarang...." required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Simpan
                            </button>
                            <button type="reset" class="btn btn-warning text-light">
                                Kosongkan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
