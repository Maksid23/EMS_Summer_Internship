<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Info View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            font-family: sans-serif;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
            border: 2px solid black;
        }

        thead {
            background-color: #f2f2f2;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: lightblue;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        a {
            color: red;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            /* Text color */
            background-color: #007BFF;
            /* Background color */
            border: none;
            border-radius: 5px;
            /* Rounded corners */
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Smooth transition effects */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
            position: fixed;
            /* Fixed position */
            top: 30px;
            /* Distance from top */
            right: 70px;
            /* Distance from right */
            z-index: 1000;
            /* Ensures the button is on top */
        }

        /* Hover effect */
        .button:hover {
            background-color: violet;
            /* Darker shade on hover */
            transform: translateY(-2px);
            /* Slight lift on hover */
        }

        /* Active effect */
        .button:active {
            background-color: green;
            /* Even darker shade on click */
            transform: translateY(0);
            /* Reset lift effect */
        }

        /* Focus effect */
        .button:focus {
            outline: none;
            /* Remove default focus outline */
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
            /* Custom focus outline */
        }
    </style>
</head>

<body>
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">EMS</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('form') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('faculty/show') }}">Show Faculty Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('faculty') }}">Add Faculty Info</a>
            </li>
        </ul>
    </nav>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h1>Faculty Info -></h1>
    <!-- <a class="button" href="{{ URL::to('faculty') }}">Add Faculty Info</a> -->
    <br>
    <table>
        <thead>
            <tr>
                <th>faculty_id</th>
                <th>faculty_name</th>
                <th>faculty_age</th>
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
            <tr>
                <td> {{ $item->faculty_id}} </td>
                <td> {{ $item->faculty_name}} </td>
                <td> {{ $item->faculty_age}} </td>
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
                    <a href=" {{URL::to('faculty/delete/'.$item->faculty_id)}} ">Delete</a>
                </td>
                <td>
                    <a href="{{URL::to('faculty/updateshow/'.$item->faculty_id)}}">Update</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>