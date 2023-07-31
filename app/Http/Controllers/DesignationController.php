<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Designation; //binding model
use Illuminate\Support\Facades\DB;



class DesignationController extends Controller
{
    public function index()
    {
        $designations = DB::table('designations')
                    ->get();

        return view('designation.index')
                    ->withDesignation($designations);
    }
    public function create()
    {
        $designation = DB::table('designations')
                ->get();

        return view('designation.create')
                ->withDesignation($designation);
    }
    public function store(Request $request)
    {
        $designation = new Designation();
        $designation->name = $request->name;
       
        
        $designation->save();

        return redirect(route('designation.index'));
        
    }

    
    

}
