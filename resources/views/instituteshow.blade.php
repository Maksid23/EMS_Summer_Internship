<!DOCTYPE html>
<html>
<head>
    <title>All Institutes</title>
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
        <h1>All Institutes</h1>
        <table>
            <thead>
                <tr>
                    <th>Institute ID</th>
                    <th>Institute Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($institute as $field)
                    <tr>
                        <td data-label="Institute ID">{{ $field->institute_id }}</td>
                        <td data-label="Institute Name">{{ $field->institute_name }}</td>
                        <td data-label="Address">{{ $field->address }}</td>
                        <td data-label="Contact">{{ $field->contact }}</td>
                        <td data-label="Email">{{ $field->email }}</td>
                        <td data-label="Actions" class="actions">
                            <a href="{{URL::to('institute/delete_institute/'.$field->institute_id)}}">Delete</a>
                            <a href="{{URL::to('institute/edit_institute/'.$field->institute_id)}}">Edit</a>  
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
</body>
</html>