<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Berita extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function artis():BelongsTo{
        return $this->belongsTo(Artis::class,'id_artis');
    }
}
