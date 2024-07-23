<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
            padding-bottom: 60px; /* Space for footer */
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
        .navbar {
            background: #1c7ed6;
            color: #fff;
        }
        .logout-button {
            background-color: #626cd6;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .logout-button a {
            color: white;
            text-decoration: none;
        }
        .logout-button:hover {
            background-color: #101111;
        }
        .footer {
            width: 100%;
            padding: 10px;
            background-color: #626cd6;
            color: #fff;
            text-align: center;
            font-family: "Montserrat", sans-serif;
            border-top: 5px solid #4954d0;
            position: fixed;
            bottom: 0;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer a:hover {
            color: #DADAF2;
        }
        .footer .social-icons a {
            display: inline-block;
            margin: 0 10px;
        }
        .footer p {
            margin-top: 0;
            font-size: 14px;
        }
        .footer .social-icons a i {
            font-size: 20px;
        }
        .btn-primary {
            margin-top: 10px;
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
            @if(Auth::user()->role === 'Student' || Auth::user()->role === 'Institute' || Auth::user()->role === 'Management' || Auth::user()->role === 'Faculty')
            <li class="active">
                <a href="#studentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Student</a>
                <ul class="collapse list-unstyled" id="studentSubmenu">
                    <li><a href="{{ url('/student') }}" onclick="displayInfo('student', 'profile')">Profile</a></li>
                    <li><a href="{{ url('/student_dashboard') }}" onclick="displayInfo('student', 'student_dashboard')">Student Dashboard</a></li>
                    <li><a href="#" onclick="displayInfo('student', 'attendance')">Attendance</a></li>
                </ul>
            </li>
            @endif
            @if(Auth::user()->role === 'Institute')
            <li>
                <a href="#instituteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Institute</a>
                <ul class="collapse list-unstyled" id="instituteSubmenu">
                    <li><a href="{{ url('/institute') }}" onclick="displayInfo('institute', 'view institute')">View Institute</a></li>
                    <li><a href="{{ url('/institute/insertinstitute') }}" onclick="displayInfo('institute', 'profile')">Add Institute</a></li>
                    <li><a href="{{ url('/course') }}" onclick="displayInfo('institute', 'classes')">Course</a></li>
                    <li><a href="#" onclick="displayInfo('institute', 'schedule')">Schedule</a></li>
                </ul>
            </li>
            @endif
            @if(Auth::user()->role === 'Faculty' || Auth::user()->role === 'Institute' || Auth::user()->role === 'Management')    
            <li>
                <a href="#teacherSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teacher</a>
                <ul class="collapse list-unstyled" id="teacherSubmenu">
                    <li><a href="{{ url('/faculty') }}" onclick="displayInfo('teacher', 'profile')">Faculty Profile</a></li>
                    <li><a href="#" onclick="displayInfo('teacher', 'classes')">Classes</a></li>
                    <li><a href="#" onclick="displayInfo('teacher', 'schedule')">Schedule</a></li>
                </ul>
            </li>
            @endif
            @if(Auth::user()->role === 'Management' || Auth::user()->role === 'Institute')
            <li>
                <a href="#managementSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Management</a>
                <ul class="collapse list-unstyled" id="managementSubmenu">
                    <li><a href="{{ url('/staff') }}" onclick="displayInfo('management', 'staff information')">Staff Information</a></li>
                    <li><a href="{{ url('/clss') }}" onclick="displayInfo('management', 'class')">Class</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'add staff')">Add Staff</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'reports')">Reports</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'settings')">Settings</a></li>
                </ul>
            </li>
            @endif
            @if(Auth::user()->role === 'Parents' || Auth::user()->role === 'Institute' || Auth::user()->role === 'Management')
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
                <!-- Other navbar content -->
                <!-- Logout Section -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <div class="logout-button">
                                <a href="{{ route('logout') }}">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Content will be injected here -->
        @yield('content')
        
        <!-- Footer -->
        <div class="footer">
            <p>Connect with us:</p>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <p>&copy; 2024 Top-Notch. All rights reserved.</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
