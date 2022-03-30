@extends('layouts.main')

@section('container')

<div class="container">
    <form method="post" action="/crud/store">
        @csrf
        <div class="mt-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">nama produk</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_produk">
            </div>
        </div>
        <div class="mt-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">kategori</label>
            <div class="col-sm-3">
                <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{$category->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mt-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">harga</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="harga">
            </div>
        </div>
        <button href="/crud/store" class="btn btn-primary">tambah</button>
    </form>
</div>

@endsection
