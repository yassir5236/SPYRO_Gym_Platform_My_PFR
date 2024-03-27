<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'user_id',
    //     'age',
    //     'weight',
    //     'height',
    //     'fitness_goal',
    // ];
    protected $fillable = [
        'user_id',
        'age',
        'weight',
        'height',
        'fitness_goal',
        'experience_level',
    ];

    /**
     * Get the user that owns the client.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
