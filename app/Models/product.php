<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class product extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable =[
        'Product_name','productdesc'

            ];

        public $translatable =[
          'Product_name','productdesc'
        ];

}
