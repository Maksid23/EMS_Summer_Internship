<!-- resources/views/editinstitute.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Institute</title>
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
                <h1>Edit Institute</h1>
            </div>
            <div class="card-body">
                <form action="{{ URL::to('institute/update_institute/' . $user->institute_id) }}" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label for="institute_id">Institute ID:</label>
                        <input type="number" class="form-control" id="institute_id" name="institute_id" value="{{ $user->institute_id }}" required>
                    </div>
                    <div class="form-group">
                        <label for="institute_name">Institute Name:</label>
                        <input type="text" class="form-control" id="institute_name" name="institute_name" value="{{ $user->institute_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact:</label>
                        <input type="number" class="form-control" id="contact" name="contact" value="{{ $user->contact }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Institute</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>