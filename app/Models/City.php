<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function houses()
    {
        return $this->hasMany(House::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
