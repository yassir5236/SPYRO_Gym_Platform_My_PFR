<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'duration',
        'type',
        'advantage_1',
        'advantage_2',
        // Ajoutez d'autres colonnes si nécessaire
    ];
}
