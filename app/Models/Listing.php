<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Inertia\Testing\Concerns\Has;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'beds',
        'baths',
        'area',
        'price',
        'city',
        'street',
        'code',
        'street_nr'
    ];
}
