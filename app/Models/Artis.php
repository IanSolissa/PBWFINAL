<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artis extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function berita():HasMany{
        return $this->hasMany(Berita::class,'id');
    }
}
