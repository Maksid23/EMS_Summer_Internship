<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Info Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #E4E9F7;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 90px auto;
        }
        .form-title {
            margin-bottom: 20px;
            color: #4070F4;
            text-align: center;
        }
        .form-group label {
            font-weight: bold;
        }
        input[type="text"], input[type="number"], input[type="date"], input[type="email"], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button[type="submit"], .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            background-color: #4070F4;
            border-radius: 5px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
        }
        button[type="submit"]:hover, .button:hover {
            background-color: #3357C4;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        nav .navbar-nav .nav-link {
            color: #fff;
        }
        nav .navbar-nav .nav-link:hover {
            color: #ccc;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">EMS</a>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('form') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('faculty/show') }}">Show Faculty Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('faculty') }}">Add Faculty Info</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h2 class="form-title">Faculty Form</h2>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form method="POST" action="{{ route('faculty.store') }}" onsubmit="return confirm('Are you sure you want to submit this form?');">
            @csrf
            <div class="form-group">
                <label for="faculty_id">Faculty ID</label>
                <input type="text" class="form-control" id="faculty_id" name="faculty_id" placeholder="Enter Faculty ID" required>
                @error('faculty_id')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_name">Faculty Name</label>
                <input type="text" class="form-control" id="faculty_name" name="faculty_name" placeholder="Enter Faculty Name" required>
                @error('faculty_name')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_age">Faculty Age</label>
                <input type="number" class="form-control" id="faculty_age" name="faculty_age" placeholder="Enter Faculty Age" required>
                @error('faculty_age')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_dob">Faculty Date of Birth</label>
                <input type="date" class="form-control" id="faculty_dob" name="faculty_dob" required>
                @error('faculty_dob')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_gender">Faculty Gender</label>
                <select class="form-control" id="faculty_gender" name="faculty_gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="faculty_contact">Faculty Contact No</label>
                <input type="text" class="form-control" id="faculty_contact" name="faculty_contact" placeholder="Enter Faculty Contact No" required>
                @error('faculty_contact')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_address">Faculty Address</label>
                <textarea class="form-control" id="faculty_address" name="faculty_address" rows="3" placeholder="Enter Address" required></textarea>
                @error('faculty_address')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_email">Faculty Email Address</label>
                <input type="email" class="form-control" id="faculty_email" name="faculty_email" placeholder="Enter Email Address" required>
                @error('faculty_email')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_qualification">Faculty Qualification</label>
                <input type="text" class="form-control" id="faculty_qualification" name="faculty_qualification" placeholder="Enter Faculty Qualification" required>
                @error('faculty_qualification')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_doj">Faculty Date of Joining</label>
                <input type="date" class="form-control" id="faculty_doj" name="faculty_doj" required>
                @error('faculty_doj')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_specializations">Faculty Specialization</label>
                <input type="text" class="form-control" id="faculty_specializations" name="faculty_specializations" placeholder="Enter Faculty Specialization" required>
                @error('faculty_specializations')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_experience">Faculty Experience</label>
                <textarea class="form-control" id="faculty_experience" name="faculty_experience" rows="3" placeholder="Enter Experience" required></textarea>
                @error('faculty_experience')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_designation">Faculty Designation</label>
                <input type="text" class="form-control" id="faculty_designation" name="faculty_designation" placeholder="Enter Faculty Designation" required>
                @error('faculty_designation')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty_department">Faculty Department</label>
                <input type="text" class="form-control" id="faculty_department" name="faculty_department" placeholder="Enter Faculty Department" required>
                @error('faculty_department')
                <div class="error">{{ $message }} </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" name="save">Submit</button>
        </form>
    </div>
</body>
</html>
