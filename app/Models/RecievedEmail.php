<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecievedEmail extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'recieved_emails';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'body',
        'name',
        'email',
        'subject',
        'date',
        'status',
    ];
}
