@extends('index')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Parent ID</th>
                <th>Parent Name</th>
                <th>Contact Number</th>
                <th>Parent Email</th>
                <th>Address</th>
                <th>Student ID</th>
                <th>Relationship to Student</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parents as $item)
            @if($item->institute_id == Auth::user()->institute_id)
            <tr>
                <td>{{ $item->parent_id }}</td>
                <td>{{ $item->parent_name }}</td>
                <td>{{ $item->contact_number }}</td>
                <td>{{ $item->parent_email }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->student_id }}</td>
                <td>{{ $item->relationship_to_student }}</td>
                <td><a href="{{ URL::to('parent/deleteRecord/'.$item->parent_id) }}" onclick="return confirmDelete()">Delete</a></td>
                <td><a href="{{ URL::to('parent/updateRecord/'.$item->parent_id) }}">Edit</a></td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <a class="button" href="{{ URL::to('parent') }}">Add parent</a>

    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this record?');
        }
    </script>
@endsection