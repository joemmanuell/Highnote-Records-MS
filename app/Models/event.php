<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'eventName',
        'eventDate',
        'artistID',
        'eventOrganizer',
        'fixedFee',
        'doorFee',
        'merchandiseSales',
    ];
    public static function getOptions()
    {
        return self::pluck('artistName');
    }
    

}
