<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch; //binding model
use Illuminate\Support\Facades\DB;



class BranchController extends Controller
{
    public function index()
    {
        $branches = DB::table('branches')
                    ->get();

        return view('branches.index')
                    ->withBranches($branches);
    }
    public function create()
    {
        $branches = DB::table('branches')
                ->get();

        return view('branches.create')
                ->withDesignation($branches);
    }
    public function store(Request $request)
    {
        $branches = new Branch();
        $branches->phone1 = $request->phone1;
        $branches->phone2 = $request->phone2;
        $branches->address = $request->address;
       
       
        
        $branches->save();

        return redirect(route('branch.index'));
        
    }
    public function show($id)
    {
        $branches = Branch::find($id);
       

      
        return view('branches.show')
                    ->withBranches($branches);
    }
    
}
