<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];
    protected $primaryKey = 'product_id';

    public function foto(){
        return $this->hasOne(Foto::class, 'product_id', 'product_id'); 
    }
}
