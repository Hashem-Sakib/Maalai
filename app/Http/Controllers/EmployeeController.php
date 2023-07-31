<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee; //binding model
use Illuminate\Support\Facades\DB;



class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')
        ->join('designations','employees.designation_id','designations.id')
        ->select('employees.*','designations.name as designation_name')
                    ->get();

        return view('employee.index')
                    ->withEmployees($employees);
    }
    public function create()
    {
        $emp = DB::table('employees')
                ->get();
        $designation = DB::table('designations')
                ->get();

        return view('employee.create')
                ->withEmployees($emp)
                ->withDesignation($designation);
    }
    public function store(Request $request)
    {
        $emp = new Employee();
        $emp->name = $request->name;
        $emp->designation_id = $request->designation;
        $emp->join_date = $request->join_date;

        $emp->phone = $request->phone;


        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('image'), $imageName);

        $emp->image=$imageName;
        $emp->password = $request->password;
        
        $emp->save();

        
        return redirect(route('employee.show',$emp->id));
    }

    public function show($id)
    {
        // $emp = Employee::find($id);
        $emp = DB::table('employees')
                ->join('designations','employees.designation_id','designations.id')
                ->where('employees.id','=',$id)
                ->select('employees.*','designations.name as designation_name')
               ->first();

        // $d = DB::table('designations')->select('designations.*','designations.name as designation_name');

        // echo($d);

        return view('employee.show')
                    // ->withD($d)
                    ->withEmployees($emp);
    }
    

}
