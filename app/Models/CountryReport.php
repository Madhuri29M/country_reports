<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryReport extends Model
{   
    protected $table = 'country_reports';

    protected $fillable = [
  		'id','data'
    ];
}
