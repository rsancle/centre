<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "event";

    protected $fillable = [
    	'name',
        'category',
        'title',
        'gender',
        'description',
        'director',
        'regidor',
        'iluminacio',
        'sound',
        'perruquerria',
        'vestuari',
        'tramoies',
        'altres',
        'actors',
        'status',
        'outstanding',
        'break',
        'chairs',
        'language',
        'time',
        'date1',
        'date2',
        'date3',
        'date4',
        'imagefirst',
        'imagesecond',
    ];

    public static function imagePathA()
    {
        return 'images/cartell';
    }
}
