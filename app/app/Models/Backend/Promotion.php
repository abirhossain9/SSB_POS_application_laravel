<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillbale = [
        'promotion_code',
        'prmotion_price',
        'start_date',
        'end_date',
        'status'
    ];

}
