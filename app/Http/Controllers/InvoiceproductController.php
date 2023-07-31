<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoiceproduct; //binding model
use Illuminate\Support\Facades\DB;



class InvoiceproductController extends Controller
{
    public function index()
    {
        $invoiceproducts = DB::table('invoice_products')
                    ->join('products','p_id','=','products.id')
                    ->select('invoice_products.*','products.name as p_name')
                    ->get();
        return view('invoiceproducts.index')
                    ->withInvoiceproducts($invoiceproducts);
    }
    public function create()
    {
        
        $invoices = DB::table('invoices')
                ->get();
        $products = DB::table('products')
                ->get();
        $ip=DB::table('invoice_products')
        ->get();


        return view('invoiceproducts.create')
                // ->withApprovals($approvals)
                ->withInvoices($invoices)
                ->withProducts($products)
                ->withInvoiceproducts($ip);
    }
    public function store(Request $request)
    {
        $invoices = new Invoiceproduct();
        $invoices->inv_id = $request->inv_id;
        $invoices->p_id = $request->p_id;
        $invoices->unit = $request->unit;
        $invoices->quantity = $request->quantity;
        $invoices->price = $request->price;
        $invoices->total = $request->total;
        $invoices->unit_price = $request->unit_price;
        
       
        
        $invoices->save();

        return redirect(route('invoiceproduct.index'));
        
    }

    public function show($id)
    {
        $inv = Invoiceproduct::find($id);
        return view('invoiceproducts.show')
                    ->withInvoices($inv);
    }
    

    
    

}
