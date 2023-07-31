<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Approval; //binding model
use Illuminate\Support\Facades\DB;



class ApprovalController extends Controller
{
    public function index()
    {
        $approvals = DB::table('approvals')
                    ->join('employees','emp_id','=','employees.id')
                    ->select('approvals.*','employees.name as emp_name')
                    ->get();



        return view('approvals.index')
                    ->withApprovals($approvals);
    }
    public function create()
    {
        $approvals = DB::table('approvals')
                ->get();
        $employees = DB::table('employees')
                ->get();

        return view('approvals.create')
                ->withApprovals($approvals)
                ->withEmployees($employees);
    }
    public function store(Request $request)
    {
        $approvals = new Approval();
        $approvals->emp_id = $request->emp_id;
        $approvals->approval = $request->approval;
       
        
        $approvals->save();

        return redirect(route('approvals.index'));
        
    }

    
    

}
