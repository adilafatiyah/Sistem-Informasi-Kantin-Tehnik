<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class SocialAccount extends Model
{
    protected $fillable = [
        'user_id',
        'provider_user_id',
        'provider',
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
