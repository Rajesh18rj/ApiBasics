<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperHero extends Model
{
    /** @use HasFactory<\Database\Factories\SuperHeroFactory> */
    use HasFactory;
    protected $fillable = ['name', 'power'];
}