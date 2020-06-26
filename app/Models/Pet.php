<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use SoftDeletes;

    protected $table = 'pet';
    protected $primaryKey = 'pet_id';
    protected $fillable = [
        'name',
        'breed_id',
        'color',
        'gender',
        'myPet',
        'user_id'
    ];

    public function breed()
    {
        return $this->belongsTo(Breed::class, 'breed_id', 'breed_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function seekablePet()
    {
        return $this->hasMany(SeekablePet::class, 'pet_id', 'pet_id');
    }

    public function image()
    {
        return $this->hasMany(Image::class, 'pet_id', 'pet_id');
    }
}
