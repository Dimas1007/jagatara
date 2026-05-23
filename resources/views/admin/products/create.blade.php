@extends('layouts.app')

@section('content')
<h1>Tambah Produk</h1>

<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nama Produk</label>
    <input type="text" name="name" required>

    <label>Kategori</label>
    <select name="category_id" required>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <label>UMKM</label>
    <select name="umkm_id" required>
        @foreach ($umkms as $umkm)
            <option value="{{ $umkm->id }}">{{ $umkm->business_name }}</option>
        @endforeach
    </select>

    <label>Harga</label>
    <input type="number" name="price" required>

    <label>Deskripsi</label>
    <textarea name="description"></textarea>

    <label>Gambar Produk</label>
    <input type="file" name="image">

    <button class="btn" type="submit">Simpan</button>
</form>
@endsection