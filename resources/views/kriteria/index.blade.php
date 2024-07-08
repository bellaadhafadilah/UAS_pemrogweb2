@extends('layouts.app')

@section('title', 'Data Kriteria')

@section('content')
    <div class="container mt-4">
        <a href="{{ route('kriteria.create') }}" class="btn mb-3" style="background-color: #800000; color: #ffffff;">Tambah Kriteria</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="background-color: #800000; color: #ffffff;">ID</th>
                    <th style="background-color: #800000; color: #ffffff;">Kode</th>
                    <th style="background-color: #800000; color: #ffffff;">Nama Kriteria</th>
                    <th style="background-color: #800000; color: #ffffff;">Atribut</th>
                    <th style="background-color: #800000; color: #ffffff;">Bobot</th>
                    <th style="background-color: #800000; color: #ffffff;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kriterias as $kriteria)
                    <tr>
                        <td>{{ $kriteria->id }}</td>
                        <td>{{ $kriteria->kode }}</td>
                        <td>{{ $kriteria->nama_kriteria }}</td>
                        <td>{{ $kriteria->atribut }}</td>
                        <td>{{ $kriteria->bobot }}</td>
                        <td>
                            <a href="{{ route('kriteria.edit', $kriteria->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kriteria.destroy', $kriteria->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
