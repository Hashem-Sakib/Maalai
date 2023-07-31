<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice; //binding model
use Illuminate\Support\Facades\DB;



class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = DB::table('invoices')
                    ->join('employees','emp_id','=','employees.id')
                    ->join('customers','c_id','=','customers.id')
                    ->select('invoices.*','employees.name as emp_name','customers.name as c_name')
                    ->get();
        return view('invoices.index')
                    ->withInvoices($invoices);
    }
    public function create()
    {
        // $approvals = DB::table('approvals')
        //         ->get();
        $employees = DB::table('employees')
                ->get();
        $customers = DB::table('customers')
                ->get();


        return view('invoices.create')
                // ->withApprovals($approvals)
                ->withEmployees($employees)
                ->withCustomers($customers);
    }
    public function store(Request $request)
    {
        $invoices = new Invoice();
        $invoices->c_id = $request->c_id;
        $invoices->date_time = $request->date_time;
        $invoices->total_amount = $request->total_amount;
        $invoices->paid = $request->paid;
        $invoices->emp_id = $request->emp_id;
        $invoices->approved_by = $request->approved_by;
        $invoices->approval = $request->approval;
       
        
        $invoices->save();

        return redirect(route('invoice.index'));
        
    }

    public function show($id)
    {
        $inv = Invoice::find($id);
        return view('invoices.show')
                    ->withInvoices($inv);
    }
    

    
    

}
