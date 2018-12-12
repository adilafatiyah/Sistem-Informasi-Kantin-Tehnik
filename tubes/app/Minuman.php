<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    protected $table = 'MinumanTable';
    protected $primarykey = 'id_minuman';
    protected $fillable = [ 'nama_minuman','harga_minuman'];
}
