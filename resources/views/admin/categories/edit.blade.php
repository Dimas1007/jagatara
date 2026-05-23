@extends('layouts.app')

@section('content')
<h1>Edit Kategori</h1>

<form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Kategori</label>
    <input type="text" name="name" value="{{ $category->name }}" required>

    <button class="btn" type="submit">Update</button>
</form>
@endsection