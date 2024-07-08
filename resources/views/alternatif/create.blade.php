@extends('layouts.app')

@section('title', 'Tambah Alternatif')

@section('content')
<div class="card border-0 shadow my-5">
    <div class="card-header bg-light">
        <h3 class="h5 pt-2">Tambah Alternatif</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('alternatif.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="jenis_karir">Jenis Karir</label>
                <input type="text" name="jenis_karir" id="jenis_karir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="c1">C1</label>
                <input type="number" name="c1" id="c1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="c2">C2</label>
                <input type="number" name="c2" id="c2" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="c3">C3</label>
                <input type="number" name="c3" id="c3" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="c4">C4</label>
                <input type="number" name="c4" id="c4" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="c5">C5</label>
                <input type="number" name="c5" id="c5" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #800000; border-color: #800000;">Simpan</button>
        </form>
    </div>
</div>
@endsection
