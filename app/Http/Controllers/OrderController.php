<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Student;
use App\Order;
use DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
       $ageFrom = "0000-11-03"; 
       $ageTo = "0000-11-20";

       $orders =Order::selectRaw('item_name,user_id,order_id,user_name,sum(item_price) as tot')
       ->whereDate('updated_at','>=', $ageFrom)
       ->whereDate('updated_at','<=', $ageTo)
       ->orderBy('user_name', 'DESC')
       ->groupBy('user_name')->get();

        return view('order.index',compact('orders'));
    }

    public function sumFilter(Request $request){

            // when you face 
      //Cannot use object of type stdClass as array use below code
      // Order::WhereDate instead of DB::table('orders')->

      // Edit your applications's database config file config/database.php

      // In mysql array, set strict => false to disable MySQL's strict mode

   //   Auth::user()->products->sum('price');

       $date1 = $request->get('first_name');
       $date2 = $request->get('last_name');
    

       $orders =Order::selectRaw('item_name,user_id,order_id,user_name,sum(item_price) as tot')
       ->whereDate('updated_at','>=', $date1)
       ->whereDate('updated_at','<=', $date2)
       ->orderBy('user_name', 'DESC')
       ->groupBy('user_name')->get();

       return view('order.index',compact('orders'));

 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Item::all()->toArray();
        return view('order.create', compact('orders'));
     
    }

    public function external(){

        $orders = Item::all()->toArray();
        return view('order.create1', compact('orders'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'    =>  'required',
            'last_name'     =>  'required'
        ]);
        
        $order = new Order([
            'item_name'    =>  $request->get('first_name'),
            'item_price'     =>  $request->get('last_name'),
            'user_id'   =>  $request->get('user_id'),
            'user_name' =>  $request->get('user_name'),
        ]);
        $order->save();
        return redirect()->route('order.create')->with('success', 'Item ordered successfully');
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
        $student = Student::find($id);
        return view('student.edit', compact('student', 'id'));
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
        $this->validate($request, [
            'first_name'    =>  'required',
            'last_name'     =>  'required'
        ]);
        $student = Student::find($id);
        $student->first_name = $request->get('first_name');
        $student->last_name = $request->get('last_name');
        $student->save();
        return redirect()->route('student.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Data Deleted');

    }
}