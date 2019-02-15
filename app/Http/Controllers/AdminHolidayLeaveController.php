<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHolidayLeaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function leave(Request $request)
    {
        $id = Auth::id();
        $employe = new Emp_record;
        $employe->user_id = $id;
        $date = $request ->input('date');

        $time  = strtotime($date);
        $day   = date('d',$time);
        $month = date('m',$time);
        $year  = date('Y',$time);

        $employe->day = $day;
        $employe->month = $month;
        $employe->year = $year;

        $employe->status = 'L';

        $employe->save();

        return redirect()->route('admin-attendance.index');
    }
    public function holiday(Request $request)
    {
        $id = Auth::id();
        $employe = new Emp_record;
        $employe->user_id = $id;
        $date = $request ->input('date');

        $time  = strtotime($date);
        $day   = date('d',$time);
        $month = date('m',$time);
        $year  = date('Y',$time);

        $employe->day = $day;
        $employe->month = $month;
        $employe->year = $year;

        $employe->status = 'H';

        $employe->save();

        return redirect()->route('admin-attendance.index');
    }
}
