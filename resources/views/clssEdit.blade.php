<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .form-container {
            margin-top: 50px;
        }

        .form-container form {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            border-radius: 5px;
            border: 1px solid #ced4da;
            width: 100%;
            padding: 10px;
        }

        input[type="submit"] {
            width: auto;
        }

        .form-container .button {
            width: 100%; /* Make the button full-width */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

        .form-container .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .form-container .button-container .button {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Submit Your Details</h2>
                <form action="{{route('clss.update')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="class_id">Class_ID</label>
                        <input type="text" class="form-control" id="class_id" name="class_id" 
                        value="{{$class->class_id}}" required>
                    </div>
                    <div class="form-group">
                        <label for="staff_id">Staff_ID</label>
                        <input type="text" class="form-control" id="staff_id" name="staff_id" 
                        value="{{$class->staff_id}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location"
                        value="{{$class->location}}"  required>
                    </div>
                    <input type="hidden" name="update_id" value="{{$class->class_id}}">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>