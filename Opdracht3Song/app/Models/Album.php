<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Album extends Model
{
    use HasFactory;

    protected $table = "albums";
    protected $fillable = ['name', 'year', 'times_sold'];
}
