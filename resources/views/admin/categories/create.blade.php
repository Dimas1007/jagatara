@extends('layouts.app')

@section('content')
<h1>Tambah Kategori</h1>

<form action="{{ route('admin.categories.store') }}" method="POST">
    @csrf

    <label>Nama Kategori</label>
    <input type="text" name="name" required>

    <button class="btn" type="submit">Simpan</button>
</form>
@endsection