@extends('index')
    
@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('clss.form') }}" class="btn btn-dark">ADD</a>
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
                <th>Class Name</th>
                <th>Class Teacher</th>
                <th>Location </th>
                <th>Delete</th>
                <th>Edit</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($class as $member)
                <tr>
                    
                    <td>{{ $member->class_name }}</td>
                    <td>{{ $member->class_teacher  }}</td>
                    <td>{{ $member->location }}</td>
                    <td><a href="{{URL::to('clss/delete/'.$member->class_id)}}" onclick="return confirm('Are you sure you want to delete this record?');">
                        <button>Delete</button></a></td>
                    <td><a href="{{URL::to('clss/edit/'.$member->class_id)}}"><button>Edit</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection