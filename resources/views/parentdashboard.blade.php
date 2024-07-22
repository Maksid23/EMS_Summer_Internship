<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Dashboard</title>
    <style>
        body {
            background-color: #f0f2f5;
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #626cd6;
            color: #ffffff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        nav {
            background-color: #4e57b5;
            padding: 10px 30px;
        }
        nav a {
            color: #ffffff;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            display: flex;
            flex: 1;
        }
        .sidebar {
            background-color: #626cd6;
            color: #ffffff;
            padding: 20px;
            width: 250px;
            position: sticky;
            top: 0;
            height: calc(100vh - 80px); /* Adjust height based on header and footer */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .sidebar a {
            color: #ffffff;
            display: block;
            margin: 10px 0;
            text-decoration: none;
            font-weight: bold;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .main-content {
            flex: 1;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h2 {
            color: #626cd6;
            margin-bottom: 20px;
            font-size: 20px;
        }
        .button {
            background-color: #626cd6;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #4e57b5;
        }
        footer {
            background-color: #626cd6;
            color: #ffffff;
            text-align: center;
            padding: 10px 30px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Parent Dashboard</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <a href="#">Logout</a>
        </nav>
    </header>
    <div class="container">
        <div class="sidebar">
            <h2>Navigation</h2>
            <a href="{{ URL::to('parent/show') }}">Show Parent Info</a>
            <a href="{{ URL::to('parent/add') }}">Add New Parent</a>
            <a href="{{ URL::to('parent/update') }}">Update Parent Info</a>
            <a href="{{ URL::to('parent/delete') }}">Delete Parent</a>
        </div>
        <div class="main-content">
            <div class="card">
                <h2>View Parent Info</h2>
                <a href="{{ URL::to('parent/show') }}" class="button">Show Info</a>
            </div>
            <div class="card">
                <h2>Add New Parent</h2>
                <a href="{{ URL::to('parent/add') }}" class="button">Add Parent</a>
            </div>
            <div class="card">
                <h2>Update Parent Info</h2>
                <a href="{{ URL::to('parent/update') }}" class="button">Update Info</a>
            </div>
            <div class="card">
                <h2>Delete Parent</h2>
                <a href="{{ URL::to('parent/delete') }}" class="button">Delete Parent</a>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Parent Dashboard. All Rights Reserved.</p>
    </footer>
</body>
</html>
