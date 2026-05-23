@extends('layouts.app')

@section('content')
<h1>Edit UMKM</h1>

<form action="{{ route('admin.umkm.update', $umkm->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Usaha</label>
    <input type="text" name="business_name" value="{{ $umkm->business_name }}" required>

    <label>Nama Pemilik</label>
    <input type="text" name="owner_name" value="{{ $umkm->owner_name }}" required>

    <label>Nomor Telepon</label>
    <input type="text" name="phone" value="{{ $umkm->phone }}">

    <label>Alamat</label>
    <textarea name="address">{{ $umkm->address }}</textarea>

    <button class="btn" type="submit">Update</button>
</form>
@endsection