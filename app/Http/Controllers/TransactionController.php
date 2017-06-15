<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Mail;
use Carbon\Carbon;
use Auth;
use DB;

class TransactionController extends Controller
{
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
            'number_of_vehicle'=>'required',
            'location_for_the_wash'=>'required',
            'wash_schedule'=>'required',
            'water_availability'=>'required',
            'service_type'=>'required',
        ]);

        $requests = new Transaction();

        $requests->type_of_vehicle = $request->input('type_of_vehicle');
        $requests->number_of_vehicle = $request->input('number_of_vehicle');
        $requests->location_for_the_wash = $request->input('location_for_the_wash');
        $requests->wash_schedule = $request->input('wash_schedule');
        $requests->water_availability = $request->input('water_availability');
        $requests->service_type = $request->input('service_type');
        $requests->created_by=Auth::User()->id;
        $requests->status=0;

        if ($requests->save())
        {
//            return redirect()->back()->with('alert','Your request has been successfully made. You will receive a call from our Agent in some minutes');
            return redirect()->route('view-charges',['id'=>$requests->id,'type_of_vehicle'=>str_slug($requests->type_of_vehicle)])->with('alert','Your request has been successfully made. You will receive a call from our Agent in some minutes');
            Mail::to($request->user())->send(new Transactions($transaction));
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
    public function showAll()
    {
        $requests = DB::table('transactions')->select('*')->paginate(15);
        return view('dashboard.transaction',['users',Auth::User()])->with('requests',$requests);
    }

    public function myRequests()
    {
        $requests = DB::table('transactions')->select('*')->where('created_by','=', Auth::User()->id)->paginate(15);
        return view('dashboard.my-transaction',['users',Auth::User()])->with('requests',$requests);
    }

    public function showSingleRequest($id)
    {
        $requests = Transaction::find($id);
        return view('dashboard.view-transaction',['users'=>Auth::User()])->with('requests',$requests);
    }

    public function viewCharges($id)
    {
        $requests = Transaction::find($id);
        return view('dashboard.view-charges',['users'=>Auth::User()])->with('requests',$requests);
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
            'number_of_vehicle'=>'required',
            'location_for_the_wash'=>'required',
            'wash_schedule'=>'required',
            'water_availability'=>'required',
            'service_type'=>'required',
        ]);

        $requests = Transaction::find($id);

        $requests->type_of_vehicle = $request->input('type_of_vehicle');
        $requests->number_of_vehicle = $request->input('number_of_vehicle');
        $requests->location_for_the_wash = $request->input('location_for_the_wash');
        $requests->wash_schedule = $request->input('wash_schedule');
        $requests->water_availability = $request->input('water_availability');
        $requests->service_type = $request->input('service_type');
        $requests->created_by=Auth::User()->id;
        $requests->status=0;

        if ($requests->save())
        {
            return redirect()->back()->with('alert','Your request has been successfully made. You will receive a call from our Agent in some minutes');
            Mail::to($request->user())->send(new RequestUpdate($transaction));
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
            return redirect()->back()->with('alert','Your have successfully approved #LB01'.$requests->id.'89');
            Mail::to($request->user())->send(new RequestComplete($transaction));
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
            Mail::to($request->user())->send(new RequestDestroy($transaction));
        }else{
            return redirect()->back()->with('alert'.'Sorry! Your request was not completed');
        }
    }
}
