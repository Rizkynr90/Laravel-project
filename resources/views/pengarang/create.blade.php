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
                    Tambah Data Pengarang
                </div>
                <div class="card-body">
                    <form action="{{route('pengarang.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pengaraang</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control" name="telp" required>
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
