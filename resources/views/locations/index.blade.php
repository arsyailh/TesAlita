@extends('layouts.app')

@section('title', 'Locations')

@section('content')
    <h2>Locations</h2>
    <a href="{{ route('locations.create') }}" class="btn btn-primary mb-3">Add Location</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
                <tr>
                    <td>{{ $location->id }}</td>
                    <td>{{ $location->code }}</td>
                    <td>{{ $location->name }}</td>
                    <td>
                        <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('locations.destroy', $location->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
