<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class India extends Model
{
    use HasFactory;
    
    protected $table = 'india';

    protected $fillable = ['place', 'package', 'price', 'image'];
}
