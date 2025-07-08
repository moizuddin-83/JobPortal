@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit CV</h2>
    <form action="{{ route('cv.update', $cv->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="cv">Upload New CV (PDF)</label>
            <input type="file" name="cv" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Update CV</button>
    </form>
</div>
@endsection
