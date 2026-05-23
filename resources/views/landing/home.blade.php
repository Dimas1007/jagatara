@extends('layouts.app')

@section('content')
<div class="hero">
    <h1>JAGATARA</h1>
    <p>Platform digital UMKM desa berbasis private cloud.</p>
</div>

<h2>Produk UMKM Desa</h2>

<div class="grid">
    @forelse ($products as $product)
        <div class="card">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}">
            @endif

            <h3>{{ $product->name }}</h3>
            <p>Kategori: {{ $product->category->name }}</p>
            <p>UMKM: {{ $product->umkm->business_name }}</p>
            <p><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>

            <a class="btn" href="{{ route('produk.show', $product->id) }}">Detail</a>
        </div>
    @empty
        <p>Belum ada produk UMKM.</p>
    @endforelse
</div>
@endsection