<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscripers extends Model
{
    use HasFactory;
    protected $table = 'newsletter_subscripers';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'email' ,
    ] ;
}
