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
                        <a href="{{ route('form.edit',$member->staff_id) }}" class="btn btn-dark">Edit</a>
                        <a href="{{ route('view.destroy',$member->staff_id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>




    </div>

@endsection