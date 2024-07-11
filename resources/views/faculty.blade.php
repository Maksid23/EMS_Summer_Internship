<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="form-title">Faculty Form</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('faculty.store') }}">
            @csrf
            <div class="form-group">
                <label for="faculty_id">Faculty ID</label>
                <input type="text" class="form-control" id="faculty_id" name="faculty_id" placeholder="Enter Faculty ID" required>
            </div>
            <div class="form-group">
                <label for="faculty_name">Faculty Name</label>
                <input type="text" class="form-control" id="faculty_name" name="faculty_name" placeholder="Enter Faculty Name" required>
            </div>
            <div class="form-group">
                <label for="faculty_age">Faculty Age</label>
                <input type="number" class="form-control" id="faculty_age" name="faculty_age" placeholder="Enter Faculty Age" required>
            </div>
            <div class="form-group">
                <label for="faculty_dob">Date of Birth</label>
                <input type="date" class="form-control" id="faculty_dob" name="faculty_dob" required>
            </div>
            <div class="form-group">
                <label for="faculty_gender">Gender</label>
                <select class="form-control" id="faculty_gender" name="faculty_gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="faculty_contact">Contact</label>
                <input type="text" class="form-control" id="faculty_contact" name="faculty_contact" placeholder="Enter Contact" required>
            </div>
            <div class="form-group">
                <label for="faculty_address">Address</label>
                <textarea class="form-control" id="faculty_address" name="faculty_address" rows="3" placeholder="Enter Address" required></textarea>
            </div>
            <div class="form-group">
                <label for="faculty_email">Email</label>
                <input type="email" class="form-control" id="faculty_email" name="faculty_email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="faculty_qualification">Qualification</label>
                <input type="text" class="form-control" id="faculty_qualification" name="faculty_qualification" placeholder="Enter Qualification" required>
            </div>
            <div class="form-group">
                <label for="faculty_doj">Date of Joining</label>
                <input type="date" class="form-control" id="faculty_doj" name="faculty_doj" required>
            </div>
            <div class="form-group">
                <label for="faculty_specializations">Specializations</label>
                <textarea class="form-control" id="faculty_specializations" name="faculty_specializations" rows="3" placeholder="Enter Specializations" required></textarea>
            </div>
            <div class="form-group">
                <label for="faculty_experience">Experience</label>
                <input type="text" class="form-control" id="faculty_experience" name="faculty_experience" placeholder="Enter Experience" required>
            </div>
            <div class="form-group">
                <label for="faculty_designation">Designation</label>
                <input type="text" class="form-control" id="faculty_designation" name="faculty_designation" placeholder="Enter Designation" required>
            </div>
            <div class="form-group">
                <label for="faculty_department">Department</label>
                <input type="text" class="form-control" id="faculty_department" name="faculty_department" placeholder="Enter Department" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
