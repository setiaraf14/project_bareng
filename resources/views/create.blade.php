@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="nama_product">Nama Product</label>
                                    <input type="text" name="judul_product" id="nama_product" class="form-control @error('judul_product') is-invalid @enderror" placeholder="Nama Product" autocomplete="off" value="{{ old('judul_product') }}">
                                    @error('judul_product')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="berat">Berat</label>
                                    <input type="text" name="berat" id="berat" class="form-control @error('berat') is-invalid @enderror" placeholder="Berat Product" autocomplete="off" value="{{ old('berat') }}">
                                    @error('berat')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="kondisi">Kondisi</label>
                                    <input type="text" name="kondisi" id="kondisi" class="form-control @error('kondisi') is-invalid @enderror" placeholder="Kondisi Product" autocomplete="off" value="{{ old('kondisi') }}">
                                    @error('kondisi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="asuransi">Asuransi</label>
                                    <select name="asuransi" id="asuransi" class="custom-select @error('asuransi') is-invalid @enderror">
                                        <option value="" selected hidden>Pilih</option>
                                        <option value="Opsional" {{ old('asuransi') == 'Opsional' ? 'selected' : '' }}>Opsional</option>
                                    </select>
                                    @error('asuransi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga Product" autocomplete="off" value="{{ old('harga') }}">
                                </div>
                                @error('harga')
                                        {{ $message }}
                                    @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="foto">Foto Product Unggulan</label>
                                    <input type="file" name="foto_1" id="foto" class="custom-file @error('foto_1') is-invalid @enderror">
                                    @error('foto_1')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="foto1">Foto Pendukung</label>
                                    <input type="file" name="foto_2" id="foto1" class="custom-file @error('foto_2') is-invalid @enderror">
                                    @error('foto_2')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
