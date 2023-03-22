<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
// I can do Rental::find(anyId)->users to retrieve every users that belongs to this rental
    public function users() {
        return $this->hasMany(User::class, 'rental_id');
    }
}
