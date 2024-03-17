<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['nombre','status'];

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
