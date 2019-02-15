<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeRecord extends Model
{
    protected $table = "emp_records";
    protected $fillable = [
        'user_id', 'day', 'month', 'year', 'punch_in', 'punch_out', 'duration', 'punch', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
