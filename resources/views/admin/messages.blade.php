@extends('admin.layouts.app') {{-- Or use your layout --}}

@section('content')
<div class="container">
    <h2>All Applications</h2>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Job Title</th>
                <th>Candidate</th>
                <th>Company</th>
                <th>Status</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $application->job->job_title ?? 'N/A' }}</td>
                    <td>{{ $application->user->name ?? 'Unknown' }}</td>
                    <td>{{ $application->job->company_name ?? 'N/A' }}</td>
                    <td>
                        @if($application->status === 'in progress')
                            <span class="badge badge-warning">In Progress</span>
                        @elseif($application->status === 'approved')
                            <span class="badge badge-success">Accepted</span>
                        @elseif($application->status === 'refused')
                            <span class="badge badge-danger">Refused</span>
                        @else
                            <span class="badge badge-secondary">Unknown</span>
                        @endif
                    </td>
                    <td>{{ $application->updated_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
