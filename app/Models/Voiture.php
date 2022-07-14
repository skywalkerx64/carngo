<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voiture extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable=['marque', 'modele', 'cout', 'n_dispo', 'image', 'description', 'deleted_at'];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
