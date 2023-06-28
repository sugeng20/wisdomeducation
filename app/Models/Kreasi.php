<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kreasi extends Model
{
    use HasFactory;

    protected $table = 'kreasi';

    protected $guarded = [];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
