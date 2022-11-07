<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Product;
use App\Order;
use App\Item;
use App\Category;
use App\Special;
use DB;
use Illuminate\Support\Facades\Auth;
   
class SPController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        
        return view('stripe');
      
    }

  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        if(!empty($request->input('txtAdd'))) {
    
            $address = $request->txtAdd;
      
        }else{

            $address = Auth::user()->address;
           

        }
      
        foreach (session('cart') as $id => $details) {

       $tot =     Session::get('total');

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
            session()->forget('cart'); 
            }

        Session::flash('success', 'Payment successful!');
     
        return back();


    }

}