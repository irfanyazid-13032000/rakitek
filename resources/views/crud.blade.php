@extends('layouts.main')

@section('container')



<div class="container">


    <table class="table">
        <thead>
            <tr>
                <th scope="col">nomor</th>
                <th scope="col">nama produk</th>
                <th scope="col">kategori</th>
                <th scope="col">harga</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product )
            <h4></h4>
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$product->nama_produk}}</td>
                <td>{{$product->category->nama}}</td>
                <td>{{$product->harga}}</td>
                <td>
                    <a href="/crud/delete/{{$product->id}}" class="btn btn-success">hapus</a>
                    <a href="/crud/edit/{{$product->id}}" class="btn btn-warning">ubah</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/crud/create" class="btn btn-primary">tambah</a>

</div>



@endsection
