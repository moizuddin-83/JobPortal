@extends('layouts.app') {{-- or your appropriate layout --}}

@section('content')
<div class="container">
    <h2>My CVs</h2>
    
    @foreach ($cvs as $cv)
        <div class="card my-3 p-3">
            <p><strong>Path:</strong> {{ $cv->cv_path }}</p>
            <a href="{{ asset('storage/' . $cv->cv_path) }}" target="_blank" class="btn btn-sm btn-success">View</a>
            <a href="{{ route('cv.edit', $cv->id) }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="{{ route('cv.destroy', $cv->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this CV?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
