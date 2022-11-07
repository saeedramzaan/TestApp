<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class order extends Model
{
    protected $fillable = ['item_id','order_id','item_name','item_price','user_id','user_name','category','updated_at','quantity','user_type','address','created_at'];

   // protected $fillable = ['pname','description','profile_image','sellingprice','cat_name','updated_at'];



    public static function orderFilterdb($ty,$from,$to){
 
        $value=DB::table('orders')
       // ->selectRaw('order_id,sum(item_price) as item_price')
        ->where('user_type', $ty )
        ->whereDate('updated_at','>=', $from)
        ->whereDate('updated_at','<=', $to)
        ->orderBy('user_name', 'DESC')->get();
    
        return $value;
      }
}
