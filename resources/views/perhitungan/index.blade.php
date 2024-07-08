@extends('layouts.app')

@section('title', 'Perhitungan WP')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Perhitungan Metode Weighted Product</h1>
    <form action="{{ route('perhitungan.hitung') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Hitung WP</button>
    </form>
</div>
@endsection
