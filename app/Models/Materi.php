<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'Materi';
    protected $fillable = [
        'title',
        'kategori_id',
        'overview',
        'user_id',
        'benefit',
        'description',
        'video'
    ];
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
}
