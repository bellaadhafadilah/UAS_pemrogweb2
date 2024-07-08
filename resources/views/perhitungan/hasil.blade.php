@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th style="background-color: #800000; color: #ffffff;">No</th>
                    <th style="background-color: #800000; color: #ffffff;">Alternatif</th>
                    <th style="background-color: #800000; color: #ffffff;">Nilai S</th>
                    <th style="background-color: #800000; color: #ffffff;">Nilai V</th>
                    <th style="background-color: #800000; color: #ffffff;">Ranking</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hasilPerhitungans as $index => $hasil)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $hasil->alternatif->jenis_karir }}</td>
                        <td>{{ $hasil->nilai_s }}</td>
                        <td>{{ $hasil->nilai_v }}</td>
                        <td>{{ $hasil->ranking }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
