@extends('layouts.app')

@section('title', 'Edit Employee')

@section('content')
    <h2>Edit Employee</h2>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $employee->name }}" required>
        </div>
        <div class="mb-3">
            <label for="location_code" class="form-label">Location</label>
            <select name="location_code" class="form-select" id="location_code" required>
                @foreach($locations as $location)
                    <option value="{{ $location->code }}" {{ $employee->location_code == $location->code ? 'selected' : '' }}>{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" name="birth_date" class="form-control" id="birth_date" value="{{ $employee->birth_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
