<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'condition',
        'quantity'
    ];

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
