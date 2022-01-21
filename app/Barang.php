<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    // tambahkan function dibawah pada class Barang
    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail','barang_id','id');
    }
}
