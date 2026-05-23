@extends('layouts.app')

@section('content')
<h1>Edit Produk</h1>

<form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Nama Produk</label>
    <input type="text" name="name" value="{{ $product->name }}" required>

    <label>Kategori</label>
    <select name="category_id" required>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <label>UMKM</label>
    <select name="umkm_id" required>
        @foreach ($umkms as $umkm)
            <option value="{{ $umkm->id }}" {{ $product->umkm_id == $umkm->id ? 'selected' : '' }}>
                {{ $umkm->business_name }}
            </option>
        @endforeach
    </select>

    <label>Harga</label>
    <input type="number" name="price" value="{{ $product->price }}" required>

    <label>Deskripsi</label>
    <textarea name="description">{{ $product->description }}</textarea>

    <label>Gambar Baru</label>
    <input type="file" name="image">

    <button class="btn" type="submit">Update</button>
</form>
@endsection