@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="card">
            <h5 class="card-header">Update Data</h5>
            <div class="card-body">
                <form action="{{ route('product.update', ['product' => $product->product_id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <div class="form-row">
                      <div class="col">
                        <label for="harga">Harga Product</label>
                        <input type="number" class="form-control @error('harga') @enderror" id="harga" name="harga" value="{{ old('harga') ?? $product->harga }}">
                      </div>
                      <div class="col">
                        <label for="judul_product">Judul Product</label>
                        <input type="text" class="form-control @error('judul_product') @enderror" id="judul_product" name="judul_product" value="{{ old('judul_product') ?? $product->judul_product }}">
                      </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                          <label for="berat">Berat (Kg)</label>
                          <input type="number" class="form-control @error('record') @enderror"  name="berat" value="{{ old('berat') ?? $product->berat }}">
                        </div>

                        <div class="col">
                            <label for="kondisi">Kondisi</label>
                            <select id="kondisi"  name="kondisi" class="form-control">
                                <option value="Baru" {{ (old('kondisi') ?? $product->kondisi) == 'Baru' ? 'selected' : ' ' }}>
                                  Baru
                                </option>
                                <option value="Bekas" {{ (old('kondisi') ?? $product->kondisi) == 'Bekas' ? 'selected' : ' ' }}>
                                  Bekas
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="asuransi">Asuransi</label>
                      <select name="asuransi" id="asuransi">
                        <option value="Pakai" {{ (old('kondisi') ?? $product->asuransi) == 'Pakai' ? 'selected' : ' ' }}>
                          Pakai
                        </option>
                        <option value="Tidak" {{ old('kondisi')  ?? $product->asuransi == 'Tidak' ? 'selected' : ' ' }}>
                          Tidak
                        </option>
                      </select>
                    </div>

                    <div class="form-group">
                      <img src="{{ Storage::url($product->foto->foto_1) }}" alt="" style="width: 150px;">
                      <input type="file" class="form-control-file" id="image" name="image" >
                    </div>

                    <div class="form-group">
                      <img src="{{ Storage::url($product->foto->foto_2) }}" alt="" style="width: 150px;">
                      <input type="file" class="form-control-file" id="image" name="image" >
                    </div>

                    <button type="submit" class="btn btn-primary">Primary</button>

                </form>
            </div>
        </div>
    </div>
</div>


    
@endsection