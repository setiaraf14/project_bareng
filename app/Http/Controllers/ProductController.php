<?php

namespace App\Http\Controllers;

use App\Product;
use App\Foto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create', [
            'title' => 'Tambah Data Products'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'harga' => 'required|integer',
            'judul_product' => 'required|min:10|max:255',
            'berat' => 'required|integer',
            'kondisi' => 'required|min:4|max:255',
            'asuransi' => 'required'
        ]);
        $img_validator = $request->validate([
            'foto_1' => 'file|image|max:1024',
            'foto_2' => 'file|image|max:1024'
        ]);
        $product = Product::create($validator);
        $foto = new Foto;
        // dd($product->foto());
        $img_validator['foto_1'] = $request->file('foto_1')->store('assets/gambar', 'public');
        $img_validator['foto_2'] = $request->file('foto_2')->store('assets/gambar', 'public');
        $foto->foto_1 = $img_validator['foto_1'];
        $foto->foto_2 = $img_validator['foto_2'];
        $product->foto()->save($foto);
        return 'ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
