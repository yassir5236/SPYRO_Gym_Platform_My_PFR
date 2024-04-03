<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subscription_type',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
