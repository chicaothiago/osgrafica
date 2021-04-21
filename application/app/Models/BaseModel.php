<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BaseModel extends Model
{
    use HasFactory, SoftDeletes;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $connection = 'mongodb';
    protected $primaryKey = 'id';
    protected $dates = [
        'updatedAt',
        'createdAt',
        'deletedAt',
    ];

}
