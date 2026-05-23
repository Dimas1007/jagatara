@extends('layouts.app')

@section('content')
<h1>Data Produk</h1>

<a class="btn" href="{{ route('admin.dashboard') }}">Dashboard</a>
<a class="btn" href="{{ route('admin.products.create') }}">Tambah Produk</a>

<br><br>

<table>
    <tr>
        <th>Nama</th>
        <th>Kategori</th>
        <th>UMKM</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->umkm->business_name }}</td>
        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
        <td>
            <a href="{{ route('admin.products.edit', $product->id) }}">Edit</a>

            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus produk?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection