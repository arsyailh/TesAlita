@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard</h2>

    <form action="{{ route('dashboard.filter') }}" method="GET">
        <div class="mb-3">
            <label for="age" class="form-label">Enter Age:</label>
            <input type="number" name="age" class="form-control" id="age">
        </div>
        <div class="mb-3">
            <label for="location_code" class="form-label">Select Location:</label>
            <select name="location_code" class="form-control" id="location_code">
                <option value="">All Locations</option>
                @foreach($locations as $location)
                    <option value="{{ $location->code }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <h3></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Birth Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->location->name }}</td>
                    <td>{{ $employee->birth_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
