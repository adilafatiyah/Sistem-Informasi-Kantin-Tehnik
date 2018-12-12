<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'MenuTable';
    protected $primarykey = 'id';
    protected $fillable = [ 'nama_menu','harga_menu'];
}
