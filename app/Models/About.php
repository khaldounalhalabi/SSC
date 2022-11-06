<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'image',
        'title',
        'arabic_title',
        'short_description',
        'arabic_short_description',
        'long_description_title_color',
        'long_description',
        'arabic_long_description',
        'long_description_image',
        'long_description_sub_image',
    ];
}
