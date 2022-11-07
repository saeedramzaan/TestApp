<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class free_issue extends Model
{
    protected $fillable = ['id','type','product_name','qty','free_qty','lower_limit','upper_limit','free_product'];
}
