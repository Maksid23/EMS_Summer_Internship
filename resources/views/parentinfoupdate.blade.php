<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    <style>
        body {
            background-color: #E4E9F7;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #4070F4;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"],
        input[type="hidden"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4070F4;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #3057c4;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Details</h1>
        <form id="editForm" action="{{ URL::to('/parent/update') }}" method="POST">
            @csrf
            <!-- Parent ID:<input type="text" name="parent_id" value="{{ $parent->parent_id }}" placeholder="Enter ID" /> -->
            Parent Name:<input type="text" name="parent_name" value="{{ $parent->parent_name }}" placeholder="Enter name" />
            Contact Number:<input type="text" maxlength="10" name="contact_number" value="{{ $parent->contact_number }}" placeholder="Enter contact number" />
            Email:<input type="text" name="parent_email" value="{{ $parent->parent_email }}" placeholder="Enter email" />
            Address:<input type="text" name="address" value="{{ $parent->address }}" placeholder="Enter address" />
            Relation:<input type="text" name="relationship_to_student" value="{{ $parent->relationship_to_student }}" placeholder="F/M/G" />
            <input type="hidden" name="update_id" value="{{ $parent->parent_id }}" />
            <input type="submit" name="save" value="Update Record" onclick="return confirmSubmit()" />
        </form>
    </div>

    <script>
        function confirmSubmit() {
            return confirm('Are you sure you want to update this record?');
        }
    </script>
</body>

</html>
