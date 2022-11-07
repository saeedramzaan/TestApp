<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    protected $fillable = ['pid','category','pname','description','profile_image','sellingprice','cat_name','updated_at','des1','des2','des3'];

    public static function getdepartmentEmployee1($departmentid=0,$from,$to){
 
        $value=DB::table('products')
        ->where('category', $departmentid )
        ->whereDate('updated_at','>=', $from)
        ->whereDate('updated_at','<=', $to)->get();
    
        return $value;
      }

      public static function getdepartmentEmployee($departmentid=0){

        $value=DB::table('products')->where('category', $departmentid )->get();
   
        return $value;
      }


      

      

     

  
      public function getImageAttribute()
  {
     return $this->profile_image;
  }
}


