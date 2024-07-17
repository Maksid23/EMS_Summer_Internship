<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD</title>
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
            background-color: #007bff;
            color: #ffffff;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
        }
    </style>
    <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('form.index') }}" class="btn btn-dark">Create</a>
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
                <th>Staff ID</th>
                <th>User ID</th>
                <th>Staff Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $member)
                <tr>
                    <td>{{ $member->staff_id }}</td>
                    <td>{{ $member->user_id }}</td>
                    <td>{{ $member->staff_name }}</td>
                    <td>{{ $member->contact_number }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->address }}</td>
                    <td>{{ $member->designation }}</td>
                    <td>{{ $member->department }}</td>
                    <td>
                        <a href="{{ route('form.edit',$member->staff_id) }}" class="btn btn-dark">Edit</a>
                        <a href="{{ route('view.destroy',$member->staff_id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>




    </div>

</body>

</html>