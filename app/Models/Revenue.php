<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    protected $table = 'revenues';
    public $timestamps = true;

    protected $fillable = [
        'description',
        'value',
        'date',
    ];

}
