<!doctype html>
<html lang="en">
<head>
    <title>Student Info Add</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
   /* General Label Styles */
label {
    font-size: large;
    font-weight: bold;
}

/* Primary Button Style */
.btn-primary {
    background-color: crimson;
    color: #fff;
    border: none;
    border-radius: 5px; /* Added for consistency */
    padding: 10px 20px; /* Added for consistency */
    font-size: 16px; /* Added for consistency */
    font-weight: bold; /* Added for consistency */
    text-align: center; /* Added for consistency */
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease; /* Added box-shadow transition */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

/* Button Style for `.button` class */
.button {
    display: inline-block;
    background-color: #007BFF; /* Default background color */
    color: #fff; /* Text color */
    border: none;
    border-radius: 5px; /* Rounded corners */
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    position: absolute; /* Fixed position */
    top: 30px; /* Distance from top */
    right: 70px; /* Distance from right */
    z-index: 1000; /* Ensures the button is on top */
}

/* Hover effect */
.button:hover, .btn-primary:hover {
    background-color: violet; /* Darker shade on hover */
    transform: translateY(-2px); /* Slight lift on hover */
}

/* Active effect */
.button:active, .btn-primary:active {
    background-color: green; /* Even darker shade on click */
    transform: translateY(0); /* Reset lift effect */
}

/* Focus effect */
.button:focus, .btn-primary:focus {
    outline: none; /* Remove default focus outline */
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5); /* Custom focus outline */
}

        body {
            background-color: #E4E9F7;
            color: #333;
            font-family: Arial, sans-serif;
        }
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        #sidebar {
            background: #626cd6;
            color: #fff;
            min-width: 250px;
            max-width: 250px;
            padding-top: 20px;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: #626cd6;
            text-align: center;
        }
        #sidebar .sidebar-header h3 {
            margin: 0;
            font-size: 1.5em;
        }
        #sidebar ul.components {
            padding: 20px 0;
        }
        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
            color: #fff;
        }
        #sidebar ul li a:hover {
            color: #1c7ed6;
            background: #e9ecef;
            text-decoration: none;
        }
        #content {
            width: 100%;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 40px auto;
        }
        .form-group input, .form-group select, .btn-primary {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-primary {
            background-color: #4070F4;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #3357C4;
        }
        .button {
            position: absolute;
            right: 8px;
            margin: 2px 12px;
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            background-color: #4070F4;
            border-radius: 5px;
            transition: background-color 0.3s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .button:hover {
            background-color: #3050C4;
        }
        .button:active {
            background-color: green;
        }
        .button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
        }
        .text-danger {
            color: red;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        .navbar {
            background: #1c7ed6;
            color: #fff;
        }
        .logout-link {
            color: #f4440a;
            text-decoration: none;
            padding: 10px;
            display: inline-block;
            background-color: #126b94;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .logout-link:hover {
            background-color: #101111;
        }
        /* Footer Styling */
        .footer {
            width: 82%;
            padding: 4px 11px;
            background-color: #626cd6;
            color: #fff;
            text-align: center;
            font-family: "Montserrat", sans-serif;
            border-top: 5px solid #4954d0;
            position: fixed;
            bottom: 0;
            right: 0;
            display: flex;
            flex-direction: row; /* Change flex-direction to row */
            align-items: center;
            justify-content: space-between; /* Adjust justify-content to space-between */
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer a:hover {
            color: #DADAF2;
        }
        .footer .social-icons {
            margin-top: 20px;
        }
        .footer .social-icons a {
            display: inline-block;
            margin: 0 10px;
        }
        .footer p {
            margin-top: 20px;
            font-size: 16px;
        }
        /* Example of using Font Awesome for social icons */
        .footer .social-icons a i {
            font-size: 24px; /* Adjust icon size as needed */
        }
        .logout-button {
            background-color: #626cd6;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        h2{
          color: #626cd6;
          left: 10px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Education Management System</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#studentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Student</a>
                <ul class="collapse list-unstyled" id="studentSubmenu">
                    <li><a href="{{url('/student')}}" onclick="displayInfo('student', 'profile')">Add Student</a></li>
                    <li><a href="{{url('/student/view')}}" onclick="displayInfo('student', 'grades')">View Student</a></li>
                </ul>
            </li>
            <li>
                <a href="#parentsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Parents</a>
                <ul class="collapse list-unstyled" id="parentsSubmenu">
                    <li><a href="{{url('/parent')}}" onclick="displayInfo('parents', 'children')">Parent Profile</a></li>
                    <li><a href="{{url('/parentdashboard')}}" onclick="displayInfo('parents', 'progress')">Parent Dashboard</a></li>
                    <li><a href="#" onclick="displayInfo('parents', 'messages')">Messages</a></li>
                </ul>
            </li>
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
</div>

<!-- Footer -->
<footer class="footer">
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    <p>&copy; 2024 Education Management System. All rights reserved.</p>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGaY4zUN0g5I1RkPq8a8K5yPb4" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-jjSmVgyd0p3pXB1rRibZUAYoIIyG2Vnvb3q3njkWTt/lt3jAz5uw5T2WJ6GLX8AR" crossorigin="anonymous"></script>
</body>
</html>
