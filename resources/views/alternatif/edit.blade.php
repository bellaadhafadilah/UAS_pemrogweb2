@extends('layouts.app')

@section('title', 'Edit Alternatif')

@section('content')
<div class="card border-0 shadow my-5">
    <div class="card-header bg-light">
        <h3 class="h5 pt-2">Edit Alternatif</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('alternatif.update', $alternatif->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="jenis_karir">Jenis Karir</label>
                <input type="text" name="jenis_karir" id="jenis_karir" class="form-control" value="{{ $alternatif->jenis_karir }}" required>
            </div>
            <div class="form-group">
                <label for="c1">C1</label>
                <input type="number" name="c1" id="c1" class="form-control" value="{{ $alternatif->c1 }}" required>
            </div>
            <div class="form-group">
                <label for="c2">C2</label>
                <input type="number" name="c2" id="c2" class="form-control" value="{{ $alternatif->c2 }}" required>
            </div>
            <div class="form-group">
                <label for="c3">C3</label>
                <input type="number" name="c3" id="c3" class="form-control" value="{{ $alternatif->c3 }}" required>
            </div>
            <div class="form-group">
                <label for="c4">C4</label>
                <input type="number" name="c4" id="c4" class="form-control" value="{{ $alternatif->c4 }}" required>
            </div>
            <div class="form-group">
                <label for="c5">C5</label>
                <input type="number" name="c5" id="c5" class="form-control" value="{{ $alternatif->c5 }}" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #800000; border-color: #800000;">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection
