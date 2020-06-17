<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];

    // public function foto(){
    //     return $this->hasOne(Telepon::class, 'karyawan_id', 'id'); //sbenernya kalo primary keynya id ga perlu di tulis id nya , kalo bdea bukan id primary key baru di tulis
    // }
}
