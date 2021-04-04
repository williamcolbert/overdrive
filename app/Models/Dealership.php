<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealership extends Model
{
    use HasFactory;

    public function serviceTypes()
    {
        return $this->belongsToMany(ServiceType::class);
    }
}
