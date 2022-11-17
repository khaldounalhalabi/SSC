<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;
    protected $table = 'carousels';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'title',
        'title_color',
        'image',
    ];


    public function visitsCounter()
    {
        return visits($this);
    }

    public function visits()
    {
        return visits($this)->relation();
    }


}
