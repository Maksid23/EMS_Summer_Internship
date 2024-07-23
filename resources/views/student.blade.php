@extends('index')

@section('title', 'Student Info Add')

@section('page_title', 'Student Info')

@section('content')
<style>
    /* Specific CSS for Student Form */
    .form-row {
        margin-bottom: 15px;
    }
    .form-group label {
        font-weight: bold;
        font-size: 16px;
    }
    .btn-primary {
        background-color: #5cb85c;
        border-color: #4cae4c;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s, border-color 0.3s;
    }
    .btn-primary:hover {
        background-color: #4cae4c;
        border-color: #398439;
    }
    .btn-primary:focus {
        outline: none;
    }
</style>

<a class="button btn btn-info" href="{{ URL::to('student/view') }}">Show Data</a>

<form action="{{ URL::to('student/store') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="student_id">Student ID</label>
            <input type="text" name="student_id" class="form-control" placeholder="Enter Student ID" required>
            <span class="text-danger">@error('student_id') {{$message}} @enderror</span>
        </div>
        <div class="form-group col-md-6">
            <label for="class_id">Class ID</label>
            <input type="text" name="class_id" class="form-control" placeholder="Enter Class ID" required>
            <span class="text-danger">@error('class_id') {{$message}} @enderror</span>
        </div>

        <ul class="list-unstyled components">
        @if(Auth::user()->role === 'Student'|| Auth::user()->role === 'Institute'||Auth::user()->role === 'Management'||Auth::user()->role === 'Faculty')
    <li class="active">
            <a href="#studentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Student</a>
            <ul class="collapse list-unstyled" id="studentSubmenu">
                <li><a href="{{ url('/student') }}" onclick="displayInfo('student', 'profile')">Profile</a></li>
                <li><a href="{{ url('/student_dashboard') }}" onclick="displayInfo('student', 'student_dashboard')">Student Dashboard</a></li>
                <li><a href="#" onclick="displayInfo('student', 'attendance')">Attendance</a></li>
            </ul>
        </li>
    @endif
    @if(Auth::user()->role === 'Parents'||Auth::user()->role === 'Institute'||Auth::user()->role === 'Management')
        <li>
            <a href="#parentsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Parents</a>
            <ul class="collapse list-unstyled" id="parentsSubmenu">
                <li><a href="{{ url('/parent') }}" onclick="displayInfo('parents', 'children')">Parent Profile</a></li>
                <li><a href="{{ url('/parentdashboard') }}" onclick="displayInfo('parents', 'progress')">Parents Dashboard</a></li>
                <li><a href="#" onclick="displayInfo('parents', 'messages')">Results</a></li>
            </ul>
        </li>
    @endif
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <h2>
                              Student Info
                            </h2>
                    <ul class="navbar-nav ml-auto">
                       
                        <li class="nav-item">
                         
                            <div class="logout-button">
                                <a href="{{ route('logout') }}" style="color: white;">
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

        <a class="button" href="{{ URL::to('student/view') }}">Show Data</a>
                            
        <form action="{{ URL::to('student/store') }}" method="post">
                @csrf
                <div class="form-row">
                    {{-- <div class="form-group col-md-6">
                        <label for="student_id">Student ID</label>
                        <input type="text" name="student_id" class="form-control" placeholder="Enter Student ID" required>
                        <span class="text-danger">@error('student_id') {{$message}} @enderror</span>
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label for="class_id">Class ID</label>
                        <input type="text" name="class_id" class="form-control" placeholder="Enter Class ID" required>
                        <span class="text-danger">@error('class_id') {{$message}} @enderror</span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="student_name">Student Name</label>
                        <input type="text" name="student_name" class="form-control" placeholder="Enter Student Name" required>
                        <span class="text-danger">@error('student_name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dob">DOB</label>
                        <input type="date" name="dob" class="form-control" required>
                        <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        <span class="text-danger">@error('gender') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="parent_guardian_contact_info">Parent/Guardian Contact Info</label>
                        <input type="text" name="parent_guardian_contact_info" class="form-control" placeholder="Enter Contact Info" required>
                        <span class="text-danger">@error('parent_guardian_contact_info') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="other_contact">Other Contact</label>
                        <input type="text" name="other_contact" class="form-control" placeholder="Enter Other Contact" required>
                        <span class="text-danger">@error('other_contact') {{$message}} @enderror</span>
                    </div>
              
                </div>

                <div class="form-group">
                    <label for="email_address">Email</label>
                    <input type="email" name="email_address" class="form-control" placeholder="Enter Email" required>
                    <span class="text-danger">@error('email_address') {{$message}} @enderror</span>
                </div>
                
                <button type="submit" class="btn-primary" name="save">Submit</button>
                
            </form>
           
        </div> 
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="student_name">Student Name</label>
            <input type="text" name="student_name" class="form-control" placeholder="Enter Student Name" required>
            <span class="text-danger">@error('student_name') {{$message}} @enderror</span>
        </div>
        <div class="form-group col-md-6">
            <label for="dob">DOB</label>
            <input type="date" name="dob" class="form-control" required>
            <span class="text-danger">@error('dob') {{$message}} @enderror</span>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" required>
                <option value="">Select Gender</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
            </select>
            <span class="text-danger">@error('gender') {{$message}} @enderror</span>
        </div>
        <div class="form-group col-md-6">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
            <span class="text-danger">@error('address') {{$message}} @enderror</span>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="parent_guardian_contact_info">Parent/Guardian Contact Info</label>
            <input type="text" name="parent_guardian_contact_info" class="form-control" placeholder="Enter Contact Info" required>
            <span class="text-danger">@error('parent_guardian_contact_info') {{$message}} @enderror</span>
        </div>
        <div class="form-group col-md-6">
            <label for="other_contact">Other Contact</label>
            <input type="text" name="other_contact" class="form-control" placeholder="Enter Other Contact" required>
            <span class="text-danger">@error('other_contact') {{$message}} @enderror</span>
        </div>
    </div>

    <div class="form-group">
        <label for="email_address">Email</label>
        <input type="email" name="email_address" class="form-control" placeholder="Enter Email" required>
        <span class="text-danger">@error('email_address') {{$message}} @enderror</span>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
    </div>

    <button type="submit" class="btn-primary" name="save">Submit</button>
</form>
@endsection
