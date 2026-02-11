<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChemicalCategory extends Model
{
    protected $fillable = ['name', 'slug', 'status'];

    public function chemicals()
    {
        return $this->belongsToMany(Chemicals::class, 'chemical_category');
    }
}