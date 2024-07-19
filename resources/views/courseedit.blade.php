<!-- resources/views/editcourse.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007BFF;
            color: white;
        }
        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Edit Course</h1>
            </div>
            <div class="card-body">
                <form action="{{ URL::to('/course/update') }}" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label for="course_id">Course ID:</label>
                        <input type="number" class="form-control" id="course_id" name="course_id" value="{{ $course->course_id }}" required>
                    </div>
                    <div class="form-group">
                        <label for="user_id">User ID:</label>
                        <input type="number" class="form-control" id="user_id" name="user_id" value="{{ $course->user_id }}" required>
                    </div>
                    <div class="form-group">
                        <label for="course_name">Course Name:</label>
                        <input type="text" class="form-control" id="course_name" name="course_name" value="{{ $course->course_name }}" required>
                    </div>
                    <input type="hidden" name="update_id" value="{{$course->course_id}}">
                    <button type="submit" class="btn btn-primary" name="save">Update Course</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>