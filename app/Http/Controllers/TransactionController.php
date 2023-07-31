<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction; //binding model
use Illuminate\Support\Facades\DB;



class TransactionController extends Controller
{
    public function index()
    {
        $transactions = DB::table('transactions')
        ->join('customers','transactions.c_id','customers.id')
        ->select('transactions.*','customers.name as c_name')
                    ->get();

        return view('transactions.index')
                    ->withTransactions($transactions);
    }
    public function create()
    {
        $emp = DB::table('employees')
                ->get();
        $transactions = DB::table('transactions')
                ->get();
        $customers = DB::table('customers')
                ->get();
       
        return view('transactions.create')
                ->withEmployees($emp)
                ->withCustomers($customers)
                ->withTransactions($transactions);
    }
    public function store(Request $request)
    {
        $transactions = new Transaction();
        $transactions->c_id = $request->c_id;
        $transactions->date_time = $request->date_time;
        $transactions->amount = $request->amount;
        $transactions->emp_id = $request->emp_id;
        $transactions->used_amount = $request->used_amount;


       
        
        $transactions->save();

        
        return redirect(route('transaction.show',$transactions->id));
    }

    public function show($id)
    {
        // $emp = Employee::find($id);
        $transactions = DB::table('transactions')
                ->join('customers','transactions.c_id','customers.id')
                ->join('employees','transactions.emp_id','employees.id')
                ->where('transactions.id','=',$id)
                ->select('transactions.*','customers.name as c_name','employees.name as emp_name')
               ->first();

        // $d = DB::table('designations')->select('designations.*','designations.name as designation_name');

        // echo($d);

        return view('transactions.show')
                    // ->withD($d)
                    ->withTransactions($transactions);
    }
    

}
