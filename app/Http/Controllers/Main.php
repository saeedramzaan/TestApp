<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class Main extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     *    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    
    public function index()
    {
//         $first_name = "Saeed";
// $last_name = "Ramzan";

// $data=array('user_name'=>$first_name,"password"=>$last_name);
// DB::table('login')->insert($data);
// echo "Record inserted successfully.<br/>";
// echo '<a href = "/insert">Click Here</a> to go back.';


return view('aboutus');


        



    }

    // public function home(){

    //  return view('homeView');

    // }

    // public function service(){

    //     return view('service');
    // }

    // public function offer(){

    //     return view('offer');
    // }

    // public function product(){

        

    //     return view('product/poulet');
    // }

    // public function poulet(){

    //     return view('product/poulet');
    // }

    // public function ch(){

    //     return view('product/ch');
    // }

    // public function cocktail(){

    //     return view('product/cocktail');
    // }

    // public function fillet(){

    //     return view('product/fillet');
    // }

    // public function huft(){


    //     return view('product/huft');
    // }

    // public function nierstuck(){

    //     return view('product/nierstuck');
    // }

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
 
     $key = Input::get('field');
     $front = Input::get('front');


   
  
     $products = DB::select("select * from products where category ='$key' and front ='$front'");
     return view('productIn',['products'=>$products]);
      
   //  $cat = Category::all()->toArray();
    // return view('products', compact('cat'));
       
     }




}
