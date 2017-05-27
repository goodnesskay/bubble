<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.request');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'type_of_vehicle'=>'required',
            'number_of_cars'=>'required',
            'location_for_the_wash'=>'required',
            'wash_schedule'=>'required',
            'water_availability'=>'required',
            'service_type'=>'required',
        ]);

        $requests = new Transaction();

        $requests->type_of_vehicle = $request->input('type_of_vehicle');
        $requests->number_of_cars = $request->input('number_of_cars');
        $requests->location_for_the_wash = $request->input('location_for_the_wash');
        $requests->wash_schedule = $request->input('wash_schedule');
        $requests->water_availability = $request->input('water_availability');
        $requests->service_type = $request->input('service_type');
        $requests->created_by=Auth::User()->id;
        $requests->status=0;

        if ($requests->save())
        {
            return redirect()->back()->with('alert','Your request has been successfully made. You will receive a call from our Agent in some minutes');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('dashboard.transaction');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requests = Transaction::find($id);
        return view('dashboard.edit-transaction',['users'=>Auth::User()])->with('requests',$requests);
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
        $this->validate($request,[
            'type_of_vehicle'=>'required',
            'number_of_cars'=>'required',
            'location_for_the_wash'=>'required',
            'wash_schedule'=>'required',
            'water_availability'=>'required',
            'service_type'=>'required',
        ]);

        $requests = Transaction::find($id);

        $requests->type_of_vehicle = $request->input('type_of_vehicle');
        $requests->number_of_cars = $request->input('number_of_cars');
        $requests->location_for_the_wash = $request->input('location_for_the_wash');
        $requests->wash_schedule = $request->input('wash_schedule');
        $requests->water_availability = $request->input('water_availability');
        $requests->service_type = $request->input('service_type');
        $requests->created_by=Auth::User()->id;
        $requests->status=0;

        if ($requests->save())
        {
            return redirect()->back()->with('alert','Your request has been successfully made. You will receive a call from our Agent in some minutes');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     *  Closes a transaction
     *
     */
    public function closeRequest($id)
    {
        $requests = Transaction::find($id);
        $requests->status=1;

        if ($requests->save())
        {
            return redirect()->back()->with('alert','Your have successfully closed #123'.$requests->id.'11');
        }else{
            return redirect()->back()->with('alert','Request not successful');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $requests = Transaction::find($id);

        if($requests->destroy())
        {
            return redirect()->back()->with('alert','Your request has been successfully made. Your Transaction has been cancelled');
        }else{
            return redirect()->back()->with('alert'.'Sorry! Your request was not completed');
        }
    }
}
