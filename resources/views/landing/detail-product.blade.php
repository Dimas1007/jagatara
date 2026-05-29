@extends('layouts.app')

@section('content')

<div class="grid">
    <div class="card">
        @if ($product->image)
            <img class="detail-img" src="{{ asset('storage/' . $product->image) }}">
        @endif
    </div>

    <div class="card">
        <span class="badge">{{ $product->category->name }}</span>

        <h1>{{ $product->name }}</h1>

        <div class="price">
            Rp {{ number_format($product->price, 0, ',', '.') }}
        </div>

        <p>{{ $product->description }}</p>

        <hr>

        <h3>Informasi Pelaku UMKM</h3>
        <p><strong>Nama Usaha:</strong> {{ $product->umkm->business_name }}</p>
        <p><strong>Pemilik:</strong> {{ $product->umkm->owner_name }}</p>
        <p><strong>Kontak:</strong> {{ $product->umkm->phone }}</p>
        <p><strong>Alamat:</strong> {{ $product->umkm->address }}</p>

        @if ($product->umkm->phone)
            <a class="btn btn-green" href="https://wa.me/{{ $product->umkm->phone }}" target="_blank">
                Hubungi Penjual
            </a>
        @endif

        <a class="btn" href="/">Kembali ke Etalase</a>
    </div>
</div>

@endsection