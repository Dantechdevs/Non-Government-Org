<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Young extends Model
{
    use HasFactory;
      protected  $fillable= [

       'first_name',
       'middle_name',
       'last_name',
       'position',
       'sort_date',
       'department',
       'image_url',
       'description',
       'bio'

    ];
}
