@extends('layouts.app')

@section('content')
<h1>Dashboard Admin</h1>

<div class="grid">
    <div class="card">
        <h3>Total Produk</h3>
        <h1>{{ $totalProducts }}</h1>
    </div>

    <div class="card">
        <h3>Total Kategori</h3>
        <h1>{{ $totalCategories }}</h1>
    </div>

    <div class="card">
        <h3>Total UMKM</h3>
        <h1>{{ $totalUmkm }}</h1>
    </div>
</div>

<br>

<a class="btn" href="{{ route('admin.products.index') }}">Kelola Produk</a>
<a class="btn" href="{{ route('admin.categories.index') }}">Kelola Kategori</a>
<a class="btn" href="{{ route('admin.umkm.index') }}">Kelola UMKM</a>
@endsection