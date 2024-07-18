

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
            margin: 90px auto;
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
        .container {
            position: absolute;
            Right: 30px;
            background-color: #4070F4;
            padding: 0px;
            border-radius: 9px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 18%;
            margin: 10px 0;
        }
        .button {
            
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            background-color: #4070F4; /* Button background color */
            border-radius: 5px;
            transition: background-color 0.3s;
           
        }

        .button:hover {
            background-color: #3050C4; /* Button hover color */
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <h1>Parents Page</h1>
    <div class="container">
        <a class="button" href="{{ URL::to('parent/show') }}">Show Parent Info</a>
    </div>

    <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->


    <form action="{{ URL::to('parent/insertRecord') }}" method="POST">
        @csrf
        Parent ID:<input type="text" name="parent_id" placeholder="Enter ID" required />
        @error('parent_id')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
        Parent Name:<input type="text" name="parent_name" placeholder="Enter Name" required />
        @error('parent_name')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
        Contact Number:<input type="text" name="contact_number" placeholder="Enter Contact Number" required />
        @error('contact_number')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
        Email:<input type="text" name="parent_email" placeholder="Enter Email" required />
        @error('parent_email')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
        Address:<input type="text" name="address" placeholder="Enter Address" required />
        @error('address')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
        Relation:<input type="text" name="relationship_to_student" placeholder="F/M/G" required />
        @error('relationship_to_student')
            <div class="error">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" name="save" value="Save Record" />
    </form>
    <a class="button" href="{{ URL::to('/form') }}">Back</a>
</body>
</html>


