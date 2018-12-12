<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kedai extends Model
{
    protected $table = 'KedaiTable';
    protected $primarykey = 'id';
    protected $fillable = [ 'nama'];
}
