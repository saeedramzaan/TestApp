<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Special extends Model
{
    protected $fillable = ['sid','id','pname','oldprice','newprice','status','profile_image'];


}
