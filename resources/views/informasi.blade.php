@extends('layouts.app')

@section('title', 'Informasi')

@section('content')
<div class="container mt-5">
    <table class="table table-bordered mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="background-color: #800000; color: white;">C1</th>
                <th scope="col" style="background-color: #800000; color: white;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Dalam Kota</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Luar Kota</td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="background-color: #800000; color: white;">C2</th>
                <th scope="col" style="background-color: #800000; color: white;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Menguasai</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Cukup Menguasai</td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="background-color: #800000; color: white;">C4</th>
                <th scope="col" style="background-color: #800000; color: white;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>S1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>S2</td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="background-color: #800000; color: white;">C5</th>
                <th scope="col" style="background-color: #800000; color: white;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Fulltime</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Parttime</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
