<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musiccatalogues extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'artistID',
        'title',
        'platform',
        'ratePerStream',
        'streams',
        'productionCost',
        'distributionCost',
    ];


}
