<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
      protected $fillable = [
        'name', 'patientname','description','price'
    ];
}
