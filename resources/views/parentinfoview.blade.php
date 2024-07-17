<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #E4E9F7;
            color: #333;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #4070F4;
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }
        input[type="text"], input[type="submit"] {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4070F4;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #3357C4;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }
        th {
            background-color: #4070F4;
            color: #fff;
        }
        td {
            background-color: #fff;
        }
        a {
            color: #4070F4;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>Parent ID</th>
                <th>Parent Name</th>
                <th>Contact Number</th>
                <th>Parent Email</th>
                <th>Address</th>
                <th>Relationship to Student</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($parents as $item)
            <tr>
                <td>{{ $item->parent_id }}</td>
                <td>{{ $item->parent_name }}</td>
                <td>{{ $item->contact_number }}</td>
                <td>{{ $item->parent_email }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->relationship_to_student }}</td>
                <td><a href="{{ URL::to('parent/deleteRecord/'.$item->parent_id) }}">Delete</a></td>
                <td><a href="{{ URL::to('parent/updateRecord/'.$item->parent_id) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="button" href="{{ URL::to('parent') }}">Back</a>
</body>
</html>