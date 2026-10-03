<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Department;

use App\Models\Employee;

class DepartmentController extends Controller
{
    public function index()
    {
        $search = request('search');
        $departments = Department::with('headEmployee')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10);

        $employees = Employee::all();

        return view('departments.index', compact('departments', 'search', 'employees'));
    }

    public function create()
    {
        $employees = Employee::all();

        return view('departments.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:departments,code',
            'name' => 'required',
            'head_employee_id' => 'nullable|exists:employees,id',
        ]);

        Department::create($validatedData);

        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }

    public function edit(Department $department)
    {
        $employees = Employee::all();

        return view('departments.edit', compact('department', 'employees'));
    }

    public function update(Request $request, Department $department)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:departments,code,' . $department->id,
            'name' => 'required',
            'head_employee_id' => 'nullable|exists:employees,id',
        ]);

        $department->update($validatedData);

        return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Department deleted successfully.');
    }
}
