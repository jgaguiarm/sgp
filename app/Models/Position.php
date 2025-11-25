<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',

    ];
}
