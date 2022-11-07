<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Item;
use App\Category;
use App\Special;
use App\free_issue;
use DB;

use Stripe;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }


    public function index()

  
    {
        $departmentData['data'] = Category::getCategory();
 
        return view('UpdateSearch', compact('departmentData'));
    }

    public function te()
    {

   
    $ageFrom = "2019-11-03";
    $ageTo = "2019-11-05";

     $products = Order::whereBetween('created_at', [$ageFrom, $ageTo]);
  
     return view('cartN', compact('products'));

   //$seats = 0;
   //$num_cols = 2;
   //$num_rows = ''; // assume you don't validate the request, so this can receive empty string too
   // $num_rows = 0; // will output the same as above

   

  // for($i = 1;$i< 64 ; $i++)
  // {
  //     $seats = $i."b";
  //     var_dump($i);
  // }
   
   
   
    }
    

  
 
    public function cart()
    {
      
       $products = Product::all();
       return view('cart', compact('products'));
        
    }

    public function SpeLoad(){


        $offerPro = DB::select("select * from specials where status ='Active'");
   
        return view('homeView', compact('offerPro'));
    }

    

    public function getEmployees1($departmentid=0){

        // Fetch Employees by Departmentid
        $userData['data'] = Product::getdepartmentEmployee($departmentid);
   
        echo json_encode($userData);
        exit;
      }

      public function getOrderfilter($ty,$from,$to){

        // Fetch Employees by Departmentid
        $userData['data'] = Order::orderFilterdb($ty,$from,$to);
   
        echo json_encode($userData);
        exit;
      }

    public function save($id){


        foreach (session('cart') as $id => $details) {

        $order = new Order([
            'item_id' => $details['pid'],
            'item_name'    => $details['name'],
            'item_price'     =>  $details['price'],
            'quantity'  => $details['quantity'],
            'user_id'   =>  Auth::user()->id,
            'user_name' =>  Auth::user()->name,
           'category' =>  $details['cat'],
           'user_type' => Auth::user()->type,
           'address' => Auth::user()->address,
        ]);
        $order->save();
        }
        session()->forget('cart'); 
     

        return redirect()->route('home')->with('success', 'Your purchase has been done successfully');
       
          
   
    }

    public function store1(Request $request)
{
        //  $id ="2003";
        if(!empty($request->input('txtName'))) {

            $address = $request->txtName;
      
        }else{

            $address = Auth::user()->address;
           

        }
        

          
  
//   $product = Product::find($id);
   foreach (session('cart') as $id => $details) {

   $order = new Order([

       'item_id' => $details['pid'],
       'item_name'    => $details['name'],
       'item_price'     =>  $details['price'],
       'quantity'  => $details['quantity'],
       'user_id'   =>  Auth::user()->id,
       'user_name' =>  Auth::user()->name,
      'category' =>  $details['cat'],
      'user_type' => Auth::user()->type,
      'address' => $address,
   ]);

   $order->save();
   }
   session()->forget('cart'); 

   return redirect()->route('home')->with('success', 'Data Added');


}
    
    public function addToCart($id)
    {

      //  $abc = session("abc");

      
  

        
        $abc =    Session::get('abc');
        
        $product = Product::find($id);

        
        $spe = Special::find($id);

        if(!$spe) {

            $spe = Special::find(2002);

        }

          //  echo $id1;
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
          
                
            $cart = [
                    $id => [
                        "pid"=>$product->id,
                        "name" => $product->pname,
                        "quantity" => 1,
                        "unitqty" => $product->unitquantity,
                        "price" => $product->sellingprice,
                        "photo" => $product->image,
                        "cat" => $product->category,
                        "tot" => 0,                    
                    ]

                    
            ];

          
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', "'.$abc.'Product added to cart successfully!");
        
    }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "pid"=> $product->id,
            "name" => $product->pname,
            "quantity" => 1,
            "unitqty" => $product->unitquantity,
            "price" => $product->sellingprice,
            "photo" => $product->image,
            "cat" => $product->category,
            "tot" => 0,                     
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function pay(Request $request)
    {
        if(!empty($request->input('txtName'))) {
    
            $address = $request->txtName;
      
        }else{

            $address = Auth::user()->address;
           

        }

        $this->validate($request, [
            'txtTotal'    =>  'required'
        ]);

        
            $tot = $request->get('txtTotal');
            Session::put('total', $tot);
            Session::put('address', $address);
        return redirect()->route('stripe.view')->with('tot', $tot );
    }


   

public function update(Request $request)
{
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
          //  session()->flash('success', 'Cart updated successfully');

         
        }

       
    }


    public function add_free_issue(Request $request)
    {
        // if($request->id) {
 
        //     $cart = session()->get('cart');
 
        //     if(isset($cart[$request->id])) {
 
        //         unset($cart[$request->id]);
 
        //         session()->put('cart', $cart);
        //     }
 
        //     session()->flash('success', 'Product removed successfully');
        // }
    }


 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
}
