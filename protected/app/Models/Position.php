<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['department_id', 'title', 'grade_level', 'min_salary', 'max_salary'])]
class Position extends Model
{
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
