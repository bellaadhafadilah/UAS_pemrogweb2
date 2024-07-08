@extends('layouts.app')

@section('title', 'Data Alternatif')

@section('content')
    <div class="container mt-4">
    <a href="{{ route('alternatif.create') }}" class="btn btn-primary mb-3" style="background-color: #800000; color: #ffffff;">Tambah Alternatif</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="background-color: #800000; color: #ffffff;">ID</th>
                    <th style="background-color: #800000; color: #ffffff;">Jenis Karir</th>
                    <th style="background-color: #800000; color: #ffffff;">C1</th>
                    <th style="background-color: #800000; color: #ffffff;">C2</th>
                    <th style="background-color: #800000; color: #ffffff;">C3</th>
                    <th style="background-color: #800000; color: #ffffff;">C4</th>
                    <th style="background-color: #800000; color: #ffffff;">C5</th>
                    <th style="background-color: #800000; color: #ffffff;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alternatifs as $alternatif)
                    <tr>
                        <td>{{ $alternatif->id }}</td>
                        <td>{{ $alternatif->jenis_karir }}</td>
                        <td>{{ $alternatif->c1 }}</td>
                        <td>{{ $alternatif->c2 }}</td>
                        <td>{{ $alternatif->c3 }}</td>
                        <td>{{ $alternatif->c4 }}</td>
                        <td>{{ $alternatif->c5 }}</td>
                        <td>
                            <a href="{{ route('alternatif.edit', $alternatif->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('alternatif.destroy', $alternatif->id) }}" method="POST" class="d-inline">
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
