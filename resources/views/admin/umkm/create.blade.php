@extends('layouts.app')

@section('content')
<h1>Tambah UMKM</h1>

<form action="{{ route('admin.umkm.store') }}" method="POST">
    @csrf

    <label>Nama Usaha</label>
    <input type="text" name="business_name" required>

    <label>Nama Pemilik</label>
    <input type="text" name="owner_name" required>

    <label>Nomor Telepon</label>
    <input type="text" name="phone">

    <label>Alamat</label>
    <textarea name="address"></textarea>

    <button class="btn" type="submit">Simpan</button>
</form>
@endsection