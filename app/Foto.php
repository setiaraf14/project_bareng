<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //
    protected $guarded = [];
    protected $primaryKey = 'id_foto';

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id_foto'); 
    }
}
