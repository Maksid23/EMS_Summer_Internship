@extends('index')
    
@section('content')
    <div class="container form-container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Submit Your Details</h2>
                <form action="{{route('clss.update')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="class_name">Class Name</label>
                        <input type="text" class="form-control" id="class_name" name="class_name" 
                        value="{{$class->class_name}}" required>
                    </div>
                    <div class="form-group">
                    <label for="class_teacher">Class Teacher</label>
                    <select class="form-control" id="class_teacher" name="class_teacher" required>
                        <option value="">Select Class Teacher</option>
                        @foreach($facultyNames as $faculty_id => $faculty_name)
                            <option value="{{ $faculty_name }}">{{ $faculty_name }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location"
                        value="{{$class->location}}"  required>
                    </div>
                    <input type="hidden" name="update_id" value="{{$class->class_id}}">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
@endsection