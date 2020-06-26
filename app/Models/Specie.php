<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    use SoftDeletes;

    protected $table = 'specie';
    protected $primaryKey = 'specie_id';
    protected $fillable = [
        'name'
    ];

    public function breed()
    {
        return $this->hasMany(Breed::class, 'specie_id', 'specie_id');
    }
}
