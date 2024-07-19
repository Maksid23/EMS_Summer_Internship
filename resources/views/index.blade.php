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
/* dashboard */
        .dashboard{
    position: relative;
    left: 250px;
    background-color: var(--panel-color);
    min-height: 70vh;
    width: calc(100% - 250px);
    padding: 10px 14px;
    transition: var(--tran-05);
}
nav.close ~ .dashboard{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top{
    position: fixed;
    top: 0;
    left: 250px;
    display: flex;
    width: calc(100% - 250px);
    justify-content: space-between;
    align-items: center;
    padding: 10px 14px;
    background-color: var(--panel-color);
    transition: var(--tran-05);
    z-index: 10;
}
nav.close ~ .dashboard .top{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top .sidebar-toggle{
    font-size: 26px;
    color: var(--text-color);
    cursor: pointer;
}
.dashboard .top .search-box{
    position: relative;
    height: 45px;
    max-width: 600px;
    width: 100%;
    margin: 0 30px;
}
.top .search-box input{
    position: absolute;
    border: 1px solid var(--border-color);
    background-color: var(--panel-color);
    padding: 0 25px 0 50px;
    border-radius: 5px;
    height: 100%;
    width: 100%;
    color: var(--text-color);
    font-size: 15px;
    font-weight: 400;
    outline: none;
}
.top .search-box i{
    position: absolute;
    left: 15px;
    font-size: 22px;
    z-index: 10;
    top: 50%;
    transform: translateY(-50%);
    color: var(--black-light-color);
}
.top img{
    width: 40px;
    border-radius: 50%;
}
.dashboard .dash-content{
    padding-top: 00px;
}
.dash-content .title{
    display: flex;
    align-items: center;
    margin: 60px 0 30px 0;
}
.dash-content .title i{
    position: relative;
    height: 35px;
    width: 35px;
    background-color: var(--primary-color);
    border-radius: 6px;
    color: var(--title-icon-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}
.dash-content .title .text{
    font-size: 24px;
    font-weight: 500;
    color: var(--text-color);
    margin-left: 10px;
}
.dash-content .boxes{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.dash-content .boxes .box{
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 12px;
    width: calc(100% / 3 - 15px);
    padding: 15px 20px;
    background-color: #626cd6;
    transition: var(--tran-05);
}
.boxes .box i{
    font-size: 35px;
    color: var(--text-color);
}
.boxes .box .text{
    white-space: nowrap;
    font-size: 18px;
    font-weight: 500;
    color: white;
}
.boxes .box .number{
    font-size: 40px;
    font-weight: 500;
    color: white;
}
.boxes .box.box2{
    background-color: #626cd6;
}
.boxes .box.box3{
    background-color: #626cd6;
}
.dash-content .activity .activity-data{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
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
                <a href="#instituteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Institute</a>
                <ul class="collapse list-unstyled" id="instituteSubmenu">
                    <li><a href="{{url('/institute')}}" onclick="displayInfo('institute', 'view institute')">View Institute</a></li>
                    <li><a href="{{url('/institute/insertinstitute')}}" onclick="displayInfo('institute', 'profile')">Add Institute</a></li>
                    <li><a href="#" onclick="displayInfo('institute', 'classes')">Classes</a></li>
                    <li><a href="#" onclick="displayInfo('institute', 'schedule')">Schedule</a></li>
                </ul>
            </li>
            <li>
                <a href="#teacherSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Faculty</a>
                <ul class="collapse list-unstyled" id="teacherSubmenu">
                    <li><a href="{{url('/faculty')}}" onclick="displayInfo('teacher', 'profile')">Add Faculty</a></li>
                    <li><a href="{{url('/faculty/show')}}" onclick="displayInfo('teacher', 'classes')">Show Faculty</a></li>
                    <!-- <li><a href="#" onclick="displayInfo('teacher', 'schedule')">Schedule</a></li> -->
                </ul>
            </li>
            <li>
                <a href="#managementSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Management</a>
                <ul class="collapse list-unstyled" id="managementSubmenu">
                    <li><a href="{{url('/staff')}}" onclick="displayInfo('management', 'staff information')">Staff information</a></li>
                    <li><a href="{{url('/clss')}}" onclick="displayInfo('management', 'class')">Class</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'add staff')">Add Staff</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'reports')">Reports</a></li>
                    <li><a href="#" onclick="displayInfo('management', 'settings')">Settings</a></li>
                </ul>
            </li>
            <li>
                <a href="#parentsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Parents</a>
                <ul class="collapse list-unstyled" id="parentsSubmenu">
                    <li><a href="{{url('/parent')}}" onclick="displayInfo('parents', 'children')">Parent Profile</a></li>
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
                        <a href="{{ route('logout') }}">
                                Logout
                            </a>
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
        <div class="footer">
            <p>Connect with us:</p>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <p>&copy; 2024 Top-Notch. All rights reserved.</p>
        </div>
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
<section class="dashboard">
<div class="dash-content">
            <!-- <div class="overview"> -->
                <!-- <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text"></span>
                </div> -->
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Students</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total faculties</span>
                        <span class="number">1500</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total Institute</span>
                        <span class="number">100</span>
                    </div>

                </div>
            <!-- </div> -->
</section>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- Custom JavaScript -->
<!-- dharmesh -->
</body>
</html>