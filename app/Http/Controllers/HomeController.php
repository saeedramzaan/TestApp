<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Item;
use App\Product;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function ajaxRequest()
    {

        return view('ajax');

    }



    public function ajaxRequestPost(Request $request)

    {

        $input = $request->all();

        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }
        
     
    
    
     public function index()
    {

      

   if(auth()->user()->type=="admin"){
            
            return view('home');
         
        }else if(Auth::user()->type=="in"){

         //   $products = Product::all();

         $products = DB::select("select * from products ORDER BY id ASC");
 
        return view('productHomeIn', compact('products'));
           
        }else{
           
         
       
           $products = Product::all();
 
            return view('productHomeEx', compact('products'));
            var_dump(Auth::user()->type);
 
        }
        
        
     

     
       
    }
    
    
}
