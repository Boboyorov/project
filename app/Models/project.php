<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected  $fillable = [
        'fullname',
        'age',
        'phone',
        'birth_place',
        'gender'
    ];
}
