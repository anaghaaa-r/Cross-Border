<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class International extends Model
{
    use HasFactory;

    protected $table = 'international';

    protected $fillable = ['place', 'package', 'price', 'image'];
}
