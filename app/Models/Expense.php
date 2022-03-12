<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';
    public $timestamps = true;

    protected $fillable = [
        'description',
        'value',
        'date',
    ];

}
