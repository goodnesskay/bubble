<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        $users = DB::table('users')->select('*')->count();
        $transactions = DB::table('transactions')->select('*')->count();
        $uncompleteTransactions = DB::table('transactions')->select('*')->where('status','=','0')->count();
        $completeTransactions = DB::table('transactions')->select('*')->where('status','=','1')->count();
        $userTransactions = DB::table('transactions')->select('*')->where('created_by','=',Auth::User()->id)->count();
        $userUncompleteTransactions = DB::table('transactions')->select('*')->where('created_by','=',Auth::User()->id)->where('status','=','0')->count();
        $userCompleteTransactions = DB::table('transactions')->select('*')->where('created_by','=',Auth::User()->id)->where('status','=','1')->count();

        return view('home')->with('users',$users)
            ->with('transactions',$transactions)
            ->with('uncompleteTransactions',$uncompleteTransactions)
            ->with('completeTransactions',$completeTransactions)
            ->with('userTransactions',$userTransactions)
            ->with('userUncompleteTransactions',$userUncompleteTransactions)
            ->with('userCompleteTransactions',$userCompleteTransactions);
    }
}
