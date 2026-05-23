@extends('layouts.app')

@section('content')
<h1>Data Kategori</h1>

<a class="btn" href="{{ route('admin.dashboard') }}">Dashboard</a>
<a class="btn" href="{{ route('admin.categories.create') }}">Tambah Kategori</a>

<br><br>

<table>
    <tr>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>

    @foreach ($categories as $category)
    <tr>
        <td>{{ $category->name }}</td>
        <td>
            <a href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>

            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus kategori?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection