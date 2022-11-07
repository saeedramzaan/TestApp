<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;

class CategoryController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->type=="admin"){

        $cat['data'] = Category::getCategory();
 
        return view('OrderSearch', compact('cat'));
       // $cat = Category::all()->toArray();
      //  return view('products', compact('cat'));
      
        }else{

            return view('auth.login');  
         
           
        }
    }

    public function CatName(){

    $cat['data'] = Category::getCategory();
 
        return view('UpdateSearch1', compact('cat'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search() {

      
           // $products = Product::all();
 
         //   return view('products', compact('products'));
    
        $key = Input::get('field')?: 'bar';
      //  echo $key;

      $cat = DB::select("select * from categories where name ='$key'");
           
      $products = DB::select("select * from products where category ='$key' ORDER BY id ASC");
      return view('productIn',['products'=>$products],['cat'=>$cat]);

//  $cat = Category::all()->toArray();
// return view('products', compact('cat'));


   
        if(auth()==FALSE){

            if(Auth::user()->type=="in"){

             
           
               
                return view('productIn',['products'=>$products],['cat'=>$cat]);
    
            }else if(Auth::user()->type=="ex"){
    
              
           
             
                return view('productEx',['products'=>$products],['cat'=>$cat]);
    
    
            }

          



        }

        
       
      
}
}