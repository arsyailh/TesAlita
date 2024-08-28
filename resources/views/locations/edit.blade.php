@extends('layouts.app')

@section('title', 'Edit Location')

@section('content')
    <h2>Edit Location</h2>
    <form action="{{ route('locations.update', $location->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" name="code" class="form-control" id="code" value="{{ $location->code }}" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $location->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
