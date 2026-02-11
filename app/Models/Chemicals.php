<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chemicals extends Model
{
    protected $table = "chemicalss";
    protected $fillable = [
        'chemical_name',
        'nonproprietary_names',
        'synonyms',
        'chemical_registry',
        'empirical_formula',
        'structural_formula',
        'applications',
        'description',
        'pharmacopeial_specifications',
        'typical_properties',
        'stability_storage',
        'incompatibilities',
        'method_of_manufacture',
        'safety',
        'handling_precautions',
        'regulatory_status',
        'related_substances',
        'comments'
    ];

    public function categories()
    {
        return $this->belongsToMany(
            ChemicalCategory::class,
            'chemical_category',
            'chemical_id',
            'category_id'
        );
    }

    public function images()
    {
        return $this->hasMany(ChemicalImage::class);
    }

    // Super powerful helper
    public function imagesByKey($key)
    {
        return $this->images->where('image_key', $key);
    }
}


