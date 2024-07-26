@extends('index')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-10 d-flex justify-content-end">
        <a href="{{ route('form.index') }}" class="btn btn-dark">Create</a>
    </div>
</div>
<div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>

<table>
    <thead>
        <tr>
            <th>Staff ID</th>
            <th>Institute ID</th>
            <th>Staff Name</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Designation</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $member)
            <tr>
                <td>{{ $member->staff_id }}</td>
                <td>{{ $member->institute_id }}</td>
                <td>{{ $member->staff_name }}</td>
                <td>{{ $member->contact_number }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->address }}</td>
                <td>{{ $member->designation }}</td>
                <td>{{ $member->department }}</td>
                <td>
                    <a href="{{ route('form.edit',$member->staff_id) }}" class="btn btn-dark edit-btn">Edit</a>
                    <a href="{{ route('view.destroy',$member->staff_id)}}" class="btn btn-danger delete-btn">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

@push('scripts')
    <script>
        // Confirm before navigating to edit page
        document.querySelectorAll('.edit-btn').forEach(function(button) {
            button.addEventListener('click', function(e) {
                if (!confirm('Are you sure you want to edit this item?')) {
                    e.preventDefault();
                }
            });
        });

        // Confirm before deleting
        document.querySelectorAll('.delete-btn').forEach(function(button) {
            button.addEventListener('click', function(e) {
                if (!confirm('Are you sure you want to delete this item?')) {
                    e.preventDefault();
                }
            });
        });
    </script>
@endpush
