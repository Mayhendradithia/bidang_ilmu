<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mitra extends Model
{
    use HasFactory;
    // Di dalam model Mitra
    protected $fillable = ['image'];
    protected $table = 'mitra';

}
