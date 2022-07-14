<?php

namespace App\Models;

use App\Models\User;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function voiture()
    {
        return $this->belongsTo(Voiture::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
