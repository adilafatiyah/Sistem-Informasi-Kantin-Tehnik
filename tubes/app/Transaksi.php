<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primarykey = 'id';
    protected $fillable = [ 'nama','total'];
}
