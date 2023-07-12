<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class artist extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'legalName',
        'artistName',
        'sexselection',
        'DOB',
        'nationality',
        'contactDetails',
        'address',
        'socialMediaHandle',
        'biography',
    ];
}
