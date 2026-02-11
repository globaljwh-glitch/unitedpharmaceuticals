<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChemicalImage extends Model
{
    protected $fillable = [
        'chemicals_id',
        'image_key',
        'image_path'
    ];

    public function chemical()
    {
        return $this->belongsTo(Chemical::class);
    }
}