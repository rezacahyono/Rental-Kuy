<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk_id',
        'plat_no',
        'production_year',
        'color'
    ];

    public function merk()
    {
        return $this->belongsTo(Merk::class);
    }
}
