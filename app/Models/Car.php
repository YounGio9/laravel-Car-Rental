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
            $query->where('name', 'like', '%' . request('search') . '%');
    }

    public function rental() {
        return $this->belongsTo(Rental::class, 'rental_id');
    }
}
