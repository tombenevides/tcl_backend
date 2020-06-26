<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserType extends Model
{
    use SoftDeletes;

    protected $table = 'user_type';
    protected $primaryKey = 'user_type_id';
    protected $fillable = [
        'type',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }
}
