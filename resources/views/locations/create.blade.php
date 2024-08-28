@extends('layouts.app')

@section('title', 'Add Location')

@section('content')
    <h2>Add Location</h2>
    <form action="{{ route('locations.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" name="code" class="form-control" id="code" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
