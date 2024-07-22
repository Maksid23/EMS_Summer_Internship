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
                    <!-- <li><a href="#" onclick="displayInfo('student', 'attendance')">Attendance</a></li> -->
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
                <!-- Other navbar content -->

                <!-- Logout Section -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <div class="logout-button">
                        <a href="{{ route('logout') }}"style="color: white;">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div id="info-display">
                <h2>Welcome to the Parent Dashboard</h2>
                <p>Select an option from the sidebar to view information.</p>
            </div>
        </div>
        <div class="footer">
            <p>Connect with us:</p>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <p>&copy; 2024 Education Management System. All rights reserved.</p>
        </div>
    </div>
</div>

<!-- Bootstrap and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom Script -->
<script>
    function displayInfo(section, type) {
        // Implement your logic to display the information based on section and type
        console.log(section, type);
    }
</script>
</body>
</html>
