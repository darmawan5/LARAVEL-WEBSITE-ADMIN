<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['nama_barang','jenis_barang','nama_kecamatan','nama_kelurahan','nama_kota','nama_provinsi'];
}
