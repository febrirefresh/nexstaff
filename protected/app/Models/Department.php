<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['code', 'name', 'head_employee_id'])]
class Department extends Model
{
    public function headEmployee()
    {
        return $this->belongsTo(Employee::class, 'head_employee_id');
    }
}
