<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

use App\Models\Department;

use App\Models\Position;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with(['department', 'position', 'manager'])->when(request('search'), function ($query, $search) {
            return $query->where('full_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('nik', 'like', "%{$search}%");
        })
            ->paginate(10);

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        $positions = Position::all();
        $managers = Employee::all();

        return view('employees.create', compact('departments', 'positions', 'managers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'nik' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
            'manager_id' => 'nullable|exists:employees,id',
            'employment_status' => 'required|string|max:50',
            'join_date' => 'required|date',
            'probation_end_date' => 'nullable|date',
            'npwp' => 'nullable|string|max:20',
            'bpjs_kesehatan_no' => 'nullable|string|max:20',
            'bpjs_tk_no' => 'nullable|string|max:20',
            'bank_name' => 'nullable|string|max:100',
            'bank_account_number' => 'nullable|string|max:30',
            'bank_account_holder' => 'nullable|string|max:100',
            'leave_balance' => 'nullable|integer|min:0',
            'is_active' => 'required|boolean',
        ]);

        Employee::create($validatedData);

        return redirect()->route('employees.index')->with('success', __('Employee created successfully.'));
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $positions = Position::all();
        $managers = Employee::all();

        return view('employees.edit', compact('employee', 'departments', 'positions', 'managers'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'nik' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
            'manager_id' => 'nullable|exists:employees,id',
            'employment_status' => 'required|string|max:50',
            'join_date' => 'required|date',
            'probation_end_date' => 'nullable|date',
            'npwp' => 'nullable|string|max:20',
            'bpjs_kesehatan_no' => 'nullable|string|max:20',
            'bpjs_tk_no' => 'nullable|string|max:20',
            'bank_name' => 'nullable|string|max:100',
            'bank_account_number' => 'nullable|string|max:30',
            'bank_account_holder' => 'nullable|string|max:100',
            'leave_balance' => 'nullable|integer|min:0',
            'is_active' => 'required|boolean',
        ]);

        $employee->update($validatedData);

        return redirect()->route('employees.index')->with('success', __('Employee updated successfully.'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', __('Employee deleted successfully.'));
    }
}
