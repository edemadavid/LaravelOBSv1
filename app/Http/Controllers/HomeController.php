<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\AccountsType;
use App\Models\Currency;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Throwable;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userid = Auth::user()->id;
        try{

            $accounts = Accounts::where('user_id', $userid)->get();


            // $accounts_type = $accounts->accounts_types_id;
            // $currency = $accounts->currency_id;

            // $accounts_type = AccountsType::find($accounts_type);
            // $currency = Currency::find($currency);

            // dd($accounts);


            // dd($accounts);
            //

            //

            // dd($accounts_type);

            // dd($account);
        } catch (Throwable $error) {

            // $account = 'No Account';


            // return view('home', compact('account'));
            return response()->json($error->getMessage(), 500);
        }


        return view('home', compact('accounts'));

    }


}
