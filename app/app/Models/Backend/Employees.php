<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $fillbale = [
        'fullname',
        'gender',
        'company',
        'slug',
        'phone',
        'address',
        'email',
        'image',
        'group',
        'status',
    ];
}
