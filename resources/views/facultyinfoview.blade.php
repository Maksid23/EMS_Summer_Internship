@extends('index')
@section('content')
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h1>Faculty Info -></h1>
    <!-- <a class="button" href="{{ URL::to('faculty') }}">Add Faculty Info</a> -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ URL::to('faculty') }}" class="btn btn-dark">ADD</a>
            
        </div>
    </div>  
    <br>
    <table>
        <thead>
            <tr>
                <th>faculty_id</th>
                <th>faculty_name</th>
                <!-- <th>faculty_age</th> -->
                <th>faculty_dob</th>
                <th>faculty_gender</th>
                <th>faculty_contact</th>
                <th>faculty_address</th>
                <th>faculty_email</th>
                <th>faculty_qualification</th>
                <th>faculty_doj</th>
                <th>faculty_specializations</th>
                <th>faculty_experience</th>
                <th>faculty_designation</th>
                <th>faculty_department</th>
                <th>Delete!!</th>
                <th>Update!!</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faculties as $item)
            @if($item->institute_id == Auth::user()->institute_id)
            <tr>
                <td> {{ $item->faculty_id}} </td>
                <td> {{ $item->faculty_name}} </td>
                <!-- <td> {{ $item->faculty_age}} </td> -->
                <td> {{ $item->faculty_dob}} </td>
                <td> {{ $item->faculty_gender}} </td>
                <td> {{ $item->faculty_contact}} </td>
                <td> {{ $item->faculty_address}} </td>
                <td> {{ $item->faculty_email}} </td>
                <td> {{ $item->faculty_qualification}} </td>
                <td> {{ $item->faculty_doj}} </td>
                <td> {{ $item->faculty_specializations}} </td>
                <td> {{ $item->faculty_experience}} </td>
                <td> {{ $item->faculty_designation}} </td>
                <td> {{ $item->faculty_department}} </td>
                <td>
                    <a href="{{URL::to('faculty/delete/'.$item->faculty_id)}}" onclick="return confirmDelete()">Delete</a>
                </td>
                <td>
                    <a href="{{URL::to('faculty/updateshow/'.$item->faculty_id)}}">Update</a>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this faculty member?');
        }
    </script>
@endsection
