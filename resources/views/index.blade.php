@extends('layouts.app')

@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <a class="btn btn-primary m-3" href="{{ route('product.create') }}" role="button">Tambah Data</a>

            

            <div class="m-auto">

                @if (session('Pesan'))
                    <div class="alert alert-success">
                        {{ session('Pesan') }}
                    </div>
                @endif

                @if (session()->has('pesan_hapus'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('pesan_hapus') }}
                    </div>
                @endif

                {{-- $table->bigIncrements('product_id');
                $table->bigInteger('harga');
                $table->string('judul_product');
                $table->integer('berat');
                $table->string('kondisi');
                $table->string('asuransi'); --}}

                <table class="table">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Judul Produk</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Asuransi</th>
                        <th>Foto</th>
                        <th>Foto2</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($product as $item)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->judul_product }}</td>
                            <td>{{ $item->berat}}</td>
                            <td>{{ $item->kondisi}}</td>
                            <td>{{ $item->asuransi }}</td>
                            <td><img src="{{ Storage::url($item->foto->foto_1) }}" alt="" width="100"></td>
                            <td><img src="{{ Storage::url($item->foto->foto_2) }}" alt="" width="100"></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-primary m-1" href="#" role="button">SHOW</a>
                                    <a class="btn btn-success m-1" href="{{ route('product.edit', ['product'=> $item->product_id]) }}" role="button">Edit</a>
                                    {{-- <form action="{{ route('karyawans.destroy',['karyawan'=> $item->id]) }}" method="POST" class="">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger m-1">Hapus</button>
                                    </form> --}}
                                </div>
                            </td>
                        </tr>
                        @empty
                            <td colspan="1" class="text-center">Data Kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection