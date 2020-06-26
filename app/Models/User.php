<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use SoftDeletes;

    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar_image',
        'user_type_id'
    ];

    
    public function ngo()
    {
        return $this->hasMany(Ngo::class, 'user_id', 'user_id');
    }

    public function pet()
    {
        return $this->hasMany(Pet::class, 'user_id', 'user_id');
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_type_id', 'user_type_id');
    }
}
