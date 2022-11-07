<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;
use App\Special;
use App\Category;
use DB;

class ItemController extends Controller
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
        $items = Item::all()->toArray();
        return view('item.index', compact('items'));
    }

    public function SpecialCon()
    {
        $items = Special::all()->toArray();
        return view('item.specialCon', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all()->toArray();
        return view('imageSave', compact('cat'));
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
        $item = new Item([
            'item_name'    =>  $request->get('first_name'),
            'item_price'     =>  $request->get('last_name')
        ]);
        $item->save();
        return redirect()->route('item.create')->with('success', 'Data Added');
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

    //     DB::delete('delete from products where id = ?',[$id]);
    //  //   $student = Student::find($id);
    //   //  $student->delete();
    //     return redirect()->route('info')->with('success', 'Product '.$id.' has been deleted');


    $user = User::find($id);
    return view('imageUp', compact('user', 'id'));


        
    }

    public function destroySpe($id)
    {

        // $student = Student::find($id);
        // return view('imageSave', compact('student', 'id'));

        DB::delete('delete from specials where sid = ?',[$id]);
     //   $student = Student::find($id);
      //  $student->delete();
        return redirect()->route('specialCon')->with('success', 'Data Deleted');

    }

    
}
