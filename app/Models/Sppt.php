<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sppt extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jenispajaks()
    {
        return $this->belongsTo(Jenispajak::class);
    }
    public function getRouteKeyName()
    {
        return 'nop';
    }
}
