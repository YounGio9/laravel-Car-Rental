<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'brand', 'price', 'description'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false)
            $query->where('name', 'like', '%' . request('search') . '%')->where('rental_id', null);
        else
            $query->where('rental_id', null); 
    }

    public function rental() {
        return $this->belongsTo(Rental::class, 'rental_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
