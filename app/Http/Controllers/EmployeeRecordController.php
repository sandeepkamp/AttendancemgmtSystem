<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;
use App\EmployeeRecord;

class EmployeeRecordController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emprecord = EmployeeRecord::with('user')->get();
       // dd($emprecord);

        return view('employee-record/index', ['emprecord' => $emprecord]);
    }
}
