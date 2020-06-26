<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breed extends Model
{
    use SoftDeletes;

    protected $table = 'breed';
    protected $primaryKey = 'breed_id';
    protected $fillable = [
        'name',
        'specie_id'
    ];

    public function specie()
    {
        return $this->belongsTo(Specie::class, 'specie_id', 'specie_id');
    }

    public function pet()
    {
        return $this->hasMany(Pet::class, 'breed_id', 'breed_id');
    }
}
