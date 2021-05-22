<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'userId',
        'dateOfBirth',
        'industry',
        'status',
        'externalAgency',
        'certificationAgency',
        'gender',
        'genderNomenclature',
        'breed',
        'breedType',
        'breedQuality',
        'breedPurpose',
        'markingsOrColor',
        'description',
        'featured',
        'images',
        'videos',
        'father',
        'mother',
        'createdBy',
        'updatedBy',
        'title',
        'autoDetermine',
        'priceType',
        'fixedPrice',
        'toPrice',
        'fromPrice',
        'notPricedText',
        'priceUnits',
        'visibility'
        
    ];

}
