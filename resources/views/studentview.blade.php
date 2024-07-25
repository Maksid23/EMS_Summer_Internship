<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Info View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 5px;
        }
        thead {
            background-color: #007BFF;
            color: #FFFFFF;
        }
        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        tbody tr:nth-child(odd) {
            background-color: #F2F2F2;
        }
        tbody tr:hover {
            background-color: #ddd;
        }
    </style>
    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('student.form') }}" class="btn btn-dark">Back</a>
        </div>
    </div>
    <div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Class Name</th>
                <th>Student Name </th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Parent Contact Number</th>
                <th>Other Contact</th>
                <th>Email</th>
                <th>Delete</th>
                <th>Edit</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($studnt as $member)
                <tr>
                    <td>{{ $member->student_id }}</td>
                    <td>{{ $member->class_name  }}</td>
                    <td>{{ $member->student_name }}</td>
                    <td>{{ $member->dob }}</td>
                    <td>{{ $member->gender }}</td>
                    <td>{{ $member->address }}</td>
                    <td>{{ $member->parent_guardian_contact_info }}</td>
                    <td>{{ $member->other_contact }}</td>
                    <td>{{ $member->email_address }}</td>
                    <td><a href="{{URL::to('student/delete/'.$member->student_id)}}">
                        <button>Delete</button></a></td>
                    <td><a href="{{URL::to('student/edit/'.$member->student_id)}}"><button>Edit</button></a></td>
                    
                    <td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>