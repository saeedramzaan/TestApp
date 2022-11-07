<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\free_issue;

class FreeIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $free_issue = free_issue::all()->toArray();
        return view('freeIssue_Info', compact('free_issue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $users = free_issue;
        return view('free_issue_create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $free = new free_issue();
        $free->product_name = $request->txtName;
        $free->qty = $request->txtQty;
        $free->free_qty = $request->txtFreeQty;
        $free->free_product = $request->txtFreePro;
        $free->save();
        return redirect()->back()->with('status', 'Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $free_issue = free_issue::find($id);
        return view('free_edit', compact('free_issue', 'id'));
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

    public function addPro1(Request $request , $id)
    {
        
      $free = free_issue::find($id);
      $free->product_name = $request->txtName;
      $free->qty = $request->txtPQty;
      $free->free_qty = $request->txtFQty;
      $free->free_product = $request->txtFreePro;
      $free->save();
      return redirect()->back()->with('status', 'Data Updated');

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
}
