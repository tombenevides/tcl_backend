<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ngo extends Model
{
    use SoftDeletes;

    protected $table = 'ngo';
    protected $primaryKey = 'ngo_id';
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'description',
        'logo_image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
