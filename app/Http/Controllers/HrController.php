<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;

class HrController extends Controller
{
    public function index(){

        return view('components.nav.welcome');

    }

    public function users(){

        $data['users'] = DB::table('employees')->get();

        return response()->json($data);

    }

    public function user($id){
        $data['user'] = DB::table('employees')->where('emp_id','=',$id)->get();

        return response()->json($data);
    }

    public function payslip($id){
        $data['payslip'] = DB::table('payslip')->where('emp_id','=',$id)->get();

        return response()->json($data);
    }

    public function register(Request $request){

        Employees::create($request->all());

        return response()->json($request);

    }
  
        

}
