<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public $timestamps = true;
    protected $fillable = ['name', 'slug', 'city', 'state', 'image'];
    use HasFactory;
}
