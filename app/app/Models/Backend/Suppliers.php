<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $fillbale = [
        'company_name',
        'supplier_name',
        'email',
        'phone',
        'address',
        'vat_number',
        'gst_number',
        'status',
    ];
}
