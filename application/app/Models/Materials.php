<?php

namespace App\Models;

class Materials extends BaseModel
{
    protected $collection = 'materials';

    protected $fillable = [
        "name",
        "description",
        "idMaterialTypes",
        "characteristic",
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'characteristic' => 'json',
    ];
}
