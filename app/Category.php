<?php

namespace App;
Use DB;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public static function getCategory(){

        $value=DB::table('categories')->orderBy('id', 'asc')->get(); 
   
        return $value;
      }

      public static function getdepartmentEmployee($departmentid=0){

        $value=DB::table('products')->where('category', $departmentid)->get();
   
        return $value;
      }
}


