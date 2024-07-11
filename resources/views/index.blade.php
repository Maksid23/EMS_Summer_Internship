<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        body {
            background-color: #f0f4f8;
            color: #333;
        }
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        #sidebar {
            background: #2a9df4;
            color: #fff;
            min-width: 250px;
            max-width: 250px;
            padding-top: 20px;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: #1c7ed6;
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
        #info-display {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    </style>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Education Management</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#studentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Student</a>
                <ul class="collapse list-unstyled" id="studentSubmenu">
                    <li><a href="{{url('/student')}}" onclick="displayInfo('student', 'profile')">Profile</a></li>
                    <li><a href="#" onclick="displayInfo('student', 'grades')">Grades</a></li>
                    <li><a href="#" onclick="displayInfo('student', 'attendance')">Attendance</a></li>
                </ul>
            </li>
            <li>
                <a href="#instituteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Institute</a>
                <ul class="collapse list-unstyled" id="instituteSubmenu">
                    <li><a href="#" onclick="displayInfo('institute', 'view institute')">View Institute</a></li>
                    <li><a href="{{url('/institute')}}" onclick="displayInfo('institute', 'profile')">Add Institute</a></li>
                    <li><a href="#" onclick="displayInfo('institute', 'classes')">Classes</a></li>
                    <li><a href="#" onclick="displayInfo('institute', 'schedule')">Schedule</a></li>
                </ul>
            </li>
            <li>
                <a href="#teacherSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teacher</a>
                <ul class="collapse list-unstyled" id="teacherSubmenu">
                    <li><a href="{{url('/faculty')}}" onclick="displayInfo('teacher', 'profile')">Faculty Profile</a></li>
                    <li><a href="#" onclick="displayInfo('teacher', 'classes')">Classes</a></li>
                    <li><a href="#" onclick="displayInfo('teacher', 'schedule')">Schedule</a></li>
                </ul>
            </li>
            <li>
                <a href="#managementSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Management</a>
                <ul class="collapse list-unstyled" id="managementSubmenu">
                    <li><a href="#" onclick="displayInfo('management', 'staff information')">Staff information</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'add staff')">Add Staff</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'reports')">Reports</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'analytics')">Analytics</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'settings')">Settings</a></li>
                </ul>
            </li>
            <li>
                <a href="#parentsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Parents</a>
                <ul class="collapse list-unstyled" id="parentsSubmenu">
                    <li><a href="#" onclick="displayInfo('parents', 'children')">Children</a></li>
                    <li><a href="#" onclick="displayInfo('parents', 'progress')">Progress</a></li>
                    <li><a href="#" onclick="displayInfo('parents', 'messages')">Messages</a></li>
                </ul>
            </li>
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
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
    Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container-fluid">
            <div id="info-display">
                <h2>Welcome to the Admin Dashboard</h2>
                <p>Select an option from the sidebar to view information.</p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- Custom JavaScript -->

</body>
</html>
