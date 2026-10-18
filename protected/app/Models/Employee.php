<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;


#[Fillable(['user_id', 'nik', 'full_name', 'email', 'phone', 'department_id', 'position_id', 'manager_id', 'employment_status', 'join_date', 'probation_end_date', 'npwp', 'bpjs_kesehatan_no', 'bpjs_tk_no', 'bank_name', 'bank_account_number', 'bank_account_holder', 'leave_balance', 'is_active'])]
class Employee extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }
}
