<?php

namespace App\Models;

class MaterialType extends BaseModel
{
    protected $collection = 'materialTypes';

    protected $fillable = [
        'name',
    ];

    protected $cast = [
        'name' => 'string',
    ];
}
