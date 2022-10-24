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
        'id',
        'image',
        'title',
        'short_description',
        'long_description_title_color' ,
        'long_description' ,
        'long_description_image' ,
        'long_description_sub_image' ,
    ];
}
