<!-- resources/views/showcourse.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>All Courses</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {    
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        thead th {
            background-color: #f2f2f2;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .actions a:hover {
            text-decoration: underline;
        }
        .alert {
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            margin-bottom: 20px;
            text-align: center;
        }
        .add-course-btn {
            position: absolute;
            top: 60px;
            right: 90px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .add-course-btn:hover {
            background-color: #0056b3;
        }
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 10px;
            }
            table, thead, tbody, th, td, tr {
                display: block;
            }
            thead tr {
                display: none;
            }
            tbody tr {
                margin-bottom: 10px;
                border-bottom: 2px solid #ddd;
            }
            tbody td {
                border: none;
                padding: 10px;
                position: relative;
                padding-left: 50%;
            }
            tbody td:before {
                position: absolute;
                top: 10px;
                left: 10px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                content: attr(data-label);
                font-weight: bold;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/course/add" class="add-course-btn">Add Course</a>
        <h1>All Courses</h1>
        <table>
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>User ID</th>
                    <th>Course Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $field)
                    <tr>
                        <td data-label="Course ID">{{ $field->course_id }}</td>
                        <td data-label="User ID">{{ $field->user_id }}</td>
                        <td data-label="Course Name">{{ $field->course_name }}</td>
                        <td data-label="Actions" class="actions">
                            <a href="{{URL::to('/course/delete/'.$field->course_id)}}" class="delete-link">Delete</a>
                            <a href="{{URL::to('/course/edit/'.$field->course_id)}}">Edit</a>  
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
    <script>
        document.querySelectorAll('.delete-link').forEach(function(element) {
            element.addEventListener('click', function(event) {
                var confirmed = confirm('Are you sure you want to delete this course?');
                if (!confirmed) {
                    event.preventDefault();
                }
            });
        });
    </script>
    
</body>
</html>