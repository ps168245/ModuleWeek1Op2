<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Song extends Model
{
    use HasFactory;


    protected $table = "songs";
    protected $fillable = ['title', 'singer'];

    /*
    protected $table = 'songs';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['title', 'singer'];
    public $timestamps = true;
    */
    /*
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    */
}


