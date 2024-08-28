<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Location;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('location')->get();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('employees.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location_code' => 'required',
            'birth_date' => 'required|date',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $locations = Location::all();
        return view('employees.edit', compact('employee', 'locations'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'location_code' => 'required',
            'birth_date' => 'required|date',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
