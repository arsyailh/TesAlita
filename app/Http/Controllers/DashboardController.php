<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Location;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $locations = Location::all();

        return view('dashboard', compact('employees', 'locations'));
    }

    public function filter(Request $request)
    {
        $age = $request->input('age');
        $locationCode = $request->input('location_code');
        
        $query = Employee::query();
        
        if ($age) {
            $minBirthDate = Carbon::now()->subYears($age)->startOfDay();
            $query->where('birth_date', '<=', $minBirthDate);
        }

        if ($locationCode) {
            $query->where('location_code', $locationCode);
        }

        $employees = $query->get();
        $locations = Location::all();

        return view('dashboard', compact('employees', 'locations'));
    }
}
