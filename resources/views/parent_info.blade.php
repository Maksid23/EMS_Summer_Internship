

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents Page</title>
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
    <h1>Parents Page</h1>
    <a class="button" href="{{ URL::to('parent/show') }}">Show Parent Info</a>
    <form action="{{ URL::to('parent/insertRecord') }}" method="POST">
        @csrf
        Parent ID:<input type="text" name="parent_id" placeholder="Enter ID" required />
        <br>
        Parent Name:<input type="text" name="parent_name" placeholder="Enter Name" required />
        <br>
        Contact Number:<input type="text" name="contact_number" placeholder="Enter Contact Number" required />
        <br>
        Email:<input type="text" name="parent_email" placeholder="Enter Email" required />
        <br>
        Address:<input type="text" name="address" placeholder="Enter Address" required />
        <br>
        Relation:<input type="text" name="relationship_to_student" placeholder="F/M/G" required />
        <br>
        <input type="submit" name="save" value="Save Record" />
    </form>
    
</body>
</html>


