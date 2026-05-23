@extends('layouts.app')

@section('content')
<div class="card">
    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}">
    @endif

    <h1>{{ $product->name }}</h1>
    <p>Kategori: {{ $product->category->name }}</p>
    <p>UMKM: {{ $product->umkm->business_name }}</p>
    <p>Pemilik: {{ $product->umkm->owner_name }}</p>
    <p>Kontak: {{ $product->umkm->phone }}</p>
    <p>Alamat: {{ $product->umkm->address }}</p>

    <h2>Rp {{ number_format($product->price, 0, ',', '.') }}</h2>

    <p>{{ $product->description }}</p>

    <a class="btn" href="/">Kembali</a>
</div>
@endsection