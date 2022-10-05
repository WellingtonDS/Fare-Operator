<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    use HasFactory;
    protected $table = 'fare_state'; 
    protected $fillable = [
        'user_id', 'title', 'description', 'content',
        'price', 'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories() 
    {
        return $this->belongsToMany(Operator::class, 'fare_state_operators');
    }
}
