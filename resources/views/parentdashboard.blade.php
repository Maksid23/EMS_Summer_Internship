@extends('index')
@push('styles')
    <style>
        :root {
            --primary-color: #4CAF50; /* Default primary color */
            --secondary-color: #FFC107; /* Default secondary color */
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F4F4F4;
        }
        .header {
            background-color: #4682B4;
            color: white;
            padding: 1em;
            text-align: center;
        }
        .navbar {
            background-color: var(--secondary-color);
            padding: 1em;
        }
        .navbar ul {
            list-style-type: none;
            padding: 0;
        }
        .navbar li {
            display: inline;
            margin: 0 10px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
        }
        .main-content {
            display: flex;
            justify-content: center;
            padding: 2em;
        }
        .card {
            background-color: white;
            padding: 1em;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin: 1em;
        }
        .card h2 {
            text-align: center;
        }
        .card table {
            width: 100%;
            border-collapse: collapse;
        }
        .card table, .card th, .card td {
            border: 1px solid #ddd;
        }
        .card th, .card td {
            padding: 8px;
            text-align: left;
        }
        .card th {
            color: black;
        }
        .footer {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
    @endpush
@section('content')
    <header class="header">
        <h1>Welcome, {{$parent_name}}</h1>
    </header>
    
    <main class="main-content">
        <div class="card">
            <h2>Parent Information</h2>
            <table>
                <tr>
                    <th>Student Id</th>
                    <td>{{$student_id}}</td>
                </tr>
                <tr>
                    <th>Parent Name</th>
                    <td>{{$parent_name}}</td>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <td>{{$contact_number}}</td>
                </tr>
                <tr>
                    <th>Email </th>
                    <td>{{$parent_email}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$address}}</td>
                </tr>
                <tr>
                    <th>Relation</th>
                    <td>{{$relationship_to_student}}</td>
                </tr>
                
            </table>
        </div>
    </main>
@endsection