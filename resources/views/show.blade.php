@extends('layouts.app')
@section('content')
<div class="container mt-3" data-alert="{{ session()->has('pesan') }}">
    <div class="row">
        <div class="col-md-12">
            <div class="pt-3">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <a href="{{ ('/product/') }}" class="btn btn-success mr-2">Back</a>
                    <a href="{{ url('/product/'.$product->id.'/edit/') }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('/product/'.$product->id) }}" class="d-inline-blok" method="POST">
                            @method('DELETE')
                            @csrf
                        <button type="submit" class="btn btn-danger ml-2">Delete</button>
                    </form>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-warning">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name of Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Condition</th>  
                        <th scope="col">Insurance</th>  
                        <th scope="col">Foto</th>  
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->judul_product }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->berat }}</td>
                        <td>{{ $product->kondisi }}</td>
                        <td>{{ $product->asuransi }}</td>
                        <td>
                            {{ Storage::url($product->foto->foto_1) }}
                            {{ Storage::url($product->foto->foto_2) }}    
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection