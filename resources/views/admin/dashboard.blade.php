@extends('layouts.app')

@section('content')

<div class="hero">
    <div>
        <span class="badge">Dashboard Wirausaha</span>
        <h1>Pusat Kendali UMKM Desa</h1>
        <p>
            Kelola produk, kategori, dan data pelaku UMKM untuk memperkuat pemasaran digital desa.
        </p>
    </div>

    <div class="hero-box">
        <h2>JAGATARA Admin</h2>
        <p>Gunakan dashboard ini untuk mengembangkan etalase bisnis desa secara terpusat.</p>
    </div>
</div>

<div class="stats">
    <div class="stat-card">
        <h1>{{ $totalProducts }}</h1>
        <p>Total Produk UMKM</p>
    </div>

    <div class="stat-card">
        <h1>{{ $totalCategories }}</h1>
        <p>Kategori Produk</p>
    </div>

    <div class="stat-card">
        <h1>{{ $totalUmkm }}</h1>
        <p>Pelaku UMKM</p>
    </div>
</div>

<div class="section-title">
    <h2>Manajemen Bisnis Desa</h2>
    <p>Kelola seluruh komponen usaha dalam satu platform.</p>
</div>

<div class="grid">
    <div class="card">
        <h3>Kelola Produk</h3>
        <p>Tambah, edit, dan hapus produk UMKM yang ditampilkan di etalase digital.</p>
        <a class="btn btn-green" href="{{ route('admin.products.index') }}">Kelola Produk</a>
    </div>

    <div class="card">
        <h3>Kelola Kategori</h3>
        <p>Atur kategori produk seperti makanan, kerajinan, pertanian, dan olahan lokal.</p>
        <a class="btn btn-green" href="{{ route('admin.categories.index') }}">Kelola Kategori</a>
    </div>

    <div class="card">
        <h3>Kelola UMKM</h3>
        <p>Kelola data pelaku usaha, pemilik, kontak, dan alamat usaha masyarakat desa.</p>
        <a class="btn btn-green" href="{{ route('admin.umkm.index') }}">Kelola UMKM</a>
    </div>
</div>

@endsection