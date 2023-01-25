<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected  $fillable = [
        'logo',
        'sliders',
        'title_ar',
        'title_en',
        'desc_ar',
        'desc_en',
        'year_of_experince',
        'phone',
        'email',
        'address_ar',
        'address_en',
        'youtube',
        'facebook',
        'twitter',
        'terms_conditions',
        'shipping_policy',
        'returns',
        'work_date'
    ];

    protected $casts = [
        'sliders' => 'array',
    ];
}
