<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Position;

use App\Models\Department;

use App\Models\Employee;

class PositionController extends Controller
{
    public function index()
    {
        $search = request('search');
        $positions = Position::with('department')
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%");
            })
            ->paginate(10);

        $departments = Department::all();

        $employees = Employee::all();

        return view('positions.index', compact('positions', 'search', 'departments', 'employees'));
    }

    public function create()
    {
        $departments = Department::all();

        return view('positions.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'department_id' => 'required|exists:departments,id',
            'title' => 'required',
            'grade_level' => 'required',
            'min_salary' => 'required|numeric',
            'max_salary' => 'required|numeric|gte:min_salary',
        ]);

        Position::create($validatedData);

        return redirect()->route('positions.index')->with('success', 'Position created successfully.');
    }

    public function edit(Position $position)
    {
        $departments = Department::all();

        return view('positions.edit', compact('position', 'departments'));
    }

    public function update(Request $request, Position $position)
    {
        $validatedData = $request->validate([
            'department_id' => 'required|exists:departments,id',
            'title' => 'required',
            'grade_level' => 'required',
            'min_salary' => 'required|numeric',
            'max_salary' => 'required|numeric|gte:min_salary',
        ]);

        $position->update($validatedData);

        return redirect()->route('positions.index')->with('success', 'Position updated successfully.');
    }

    public function destroy(Position $position)
    {
        $position->delete();

        return redirect()->route('positions.index')->with('success', 'Position deleted successfully.');
    }
}
