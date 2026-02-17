<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * Data FUild
     */
     protected $fillable = [
        'key',
        'value'
     ];
}
