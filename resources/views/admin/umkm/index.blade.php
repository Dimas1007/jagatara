@extends('layouts.app')

@section('content')
<h1>Data UMKM</h1>

<a class="btn" href="{{ route('admin.dashboard') }}">Dashboard</a>
<a class="btn" href="{{ route('admin.umkm.create') }}">Tambah UMKM</a>

<br><br>

<table>
    <tr>
        <th>Nama Usaha</th>
        <th>Pemilik</th>
        <th>Telepon</th>
        <th>Aksi</th>
    </tr>

    @foreach ($umkms as $umkm)
    <tr>
        <td>{{ $umkm->business_name }}</td>
        <td>{{ $umkm->owner_name }}</td>
        <td>{{ $umkm->phone }}</td>
        <td>
            <a href="{{ route('admin.umkm.edit', $umkm->id) }}">Edit</a>

            <form action="{{ route('admin.umkm.destroy', $umkm->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus UMKM?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection