@extends('index')

@section('content')

    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('student.form') }}" class="btn btn-dark">ADD</a>
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
                <th>Student ID</th>
                <th>Class Name</th>
                <th>Student Name </th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Parent Contact Number</th>
                <th>Other Contact</th>
                <th>Email</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studnt as $member)
                <tr>
                    <td>{{ $member->student_id }}</td>
                    <td>{{ $member->class_name  }}</td>
                    <td>{{ $member->student_name }}</td>
                    <td>{{ $member->dob }}</td>
                    <td>{{ $member->gender }}</td>
                    <td>{{ $member->address }}</td>
                    <td>{{ $member->parent_guardian_contact_info }}</td>
                    <td>{{ $member->other_contact }}</td>
                    <td>{{ $member->email_address }}</td>
                    <td><a href="{{ URL::to('student/delete/'.$member->student_id) }}" onclick="return confirmDelete()">
                        <button>Delete</button></a></td>
                    <td><a href="{{ URL::to('student/edit/'.$member->student_id) }}"><button>Edit</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this student?');
        }
    </script>
@endsection
