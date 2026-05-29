@extends('layouts.app')

@section('content')

<div class="hero">
    <div>
        <span class="badge">Ekosistem Wirausaha Desa</span>
        <h1>Bangkitkan Produk Lokal, Perkuat Ekonomi Desa</h1>
        <p>
            JAGATARA adalah platform digital UMKM desa untuk membantu pelaku usaha lokal
            memasarkan produk, memperluas pasar, dan meningkatkan daya saing melalui teknologi cloud.
        </p>

        <a class="btn" href="#produk">Lihat Produk UMKM</a>
        <a class="btn btn-green" href="/admin/dashboard">Kelola Usaha</a>
    </div>

    <div class="hero-box">
        <h2>Fokus Wirausaha</h2>
        <p>Produk lokal, branding desa, digital marketing, dan penguatan ekonomi masyarakat.</p>
        <hr>
        <p><strong>Target:</strong> UMKM naik kelas dan produk desa dikenal lebih luas.</p>
    </div>
</div>

<div class="stats">
    <div class="stat-card">
        <h1>{{ $products->count() }}</h1>
        <p>Produk Dipasarkan</p>
    </div>

    <div class="stat-card">
        <h1>{{ $products->pluck('umkm_id')->unique()->count() }}</h1>
        <p>Pelaku UMKM Aktif</p>
    </div>

    <div class="stat-card">
        <h1>24/7</h1>
        <p>Akses Etalase Digital</p>
    </div>
</div>

<div class="section-title" id="produk">
    <h2>Etalase Produk UMKM</h2>
    <p>Produk unggulan desa yang siap dipasarkan secara digital.</p>
</div>

<div class="grid">
    @forelse ($products as $product)
        <div class="card product-card">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}">
            @endif

            <br><br>
            <span class="badge">{{ $product->category->name }}</span>

            <h3>{{ $product->name }}</h3>

            <p class="business-name">
                {{ $product->umkm->business_name }}
            </p>

            <p>
                {{ Str::limit($product->description, 90) }}
            </p>

            <div class="price">
                Rp {{ number_format($product->price, 0, ',', '.') }}
            </div>

            <br>

            <a class="btn btn-green" href="{{ route('produk.show', $product->id) }}">
                Lihat Detail
            </a>
        </div>
    @empty
        <div class="card">
            <h3>Belum ada produk</h3>
            <p>Silakan tambahkan produk melalui dashboard admin.</p>
        </div>
    @endforelse
</div>

<div class="section-title">
    <h2>Mengapa JAGATARA?</h2>
    <p>Platform ini dirancang untuk mendukung transformasi UMKM desa.</p>
</div>

<div class="grid">
    <div class="card">
        <h3>Digitalisasi Produk</h3>
        <p>Produk UMKM dapat ditampilkan dalam etalase digital yang mudah diakses masyarakat.</p>
    </div>

    <div class="card">
        <h3>Branding Desa</h3>
        <p>Membantu membangun identitas desa sebagai pusat produk lokal unggulan.</p>
    </div>

    <div class="card">
        <h3>Penguatan Ekonomi</h3>
        <p>Mendorong pelaku UMKM agar lebih siap bersaing di pasar lokal maupun regional.</p>
    </div>
</div>

@endsection