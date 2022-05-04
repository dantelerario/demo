<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partecipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'birth_date',
        'country',
        'title',
        'mobile',
        'organization',
        'position', 
        'first_name',
        'last_name',
    ];

    public $timestamps = false;
}
