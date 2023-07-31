<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer; //binding model
use Illuminate\Support\Facades\DB;



class CustomerController extends Controller
{
    public function index()
    {
        $customers = DB::table('customers')
                    ->get();

        return view('customers.index')
                    ->withCustomers($customers);
    }
    public function create()
    {
        $customers = DB::table('customers')
                ->get();
      
        return view('customers.create')
                ->withDesignation($customers);
    }
    public function store(Request $request)
    {
        $customers = new Customer();
        $customers->name = $request->name;
        $customers->phone1 = $request->phone1;
        $customers->phone2 = $request->phone2;
        $customers->address = $request->address;



        
        $customers->save();

        
        return redirect(route('customer.show',$customers->id));
    }

    public function show($id)
    {
        $customers = Customer::find($id);
       

      
        return view('customers.show')
                    ->withCustomers($customers);
    }
    

}
