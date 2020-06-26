<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeekablePet extends Model
{
    use SoftDeletes;

    protected $table = 'seekable_pet';
    protected $primaryKey = 'seekable_pet_id';
    protected $fillable = [
        'pet_id',
        'latitude',
        'longitude',
        'type',
        'resolved'
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'pet_id');
    }
}
