@extends('layouts.app')

@section('title', 'Tambah Kriteria')

@section('content')
<div class="card border-0 shadow my-5">
    <div class="card-header bg-light">
        <h3 class="h5 pt-2">Tambah Kriteria</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('kriteria.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" name="kode" id="kode" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_kriteria">Nama Kriteria</label>
                <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="atribut">Atribut</label>
                <select name="atribut" id="atribut" class="form-control" required>
                    <option value="benefit">Benefit</option>
                    <option value="cost">Cost</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bobot">Bobot</label>
                <input type="number" name="bobot" id="bobot" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #800000; border-color: #800000;">Simpan</button>
        </form>
    </div>
</div>
@endsection
