@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <h2>Add Employee</h2>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="location_code" class="form-label">Location</label>
            <select name="location_code" class="form-select" id="location_code" required>
                @foreach($locations as $location)
                    <option value="{{ $location->code }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" name="birth_date" class="form-control" id="birth_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
