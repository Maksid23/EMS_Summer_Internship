<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Info Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            font-family: sans-serif;
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

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            /* Text color */
            background-color: #007BFF;
            /* Background color */
            border: none;
            border-radius: 5px;
            /* Rounded corners */
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Smooth transition effects */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
            position: absolute;
            /* Fixed position */
            top: 30px;
            /* Distance from top */
            right: 70px;
            /* Distance from right */
            z-index: 1000;
            /* Ensures the button is on top */
        }

        /* Hover effect */
        .button:hover {
            background-color: violet;
            /* Darker shade on hover */
            transform: translateY(-2px);
            /* Slight lift on hover */
        }

        /* Active effect */
        .button:active {
            background-color: green;
            /* Even darker shade on click */
            transform: translateY(0);
            /* Reset lift effect */
        }

        /* Focus effect */
        .button:focus {
            outline: none;
            /* Remove default focus outline */
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
            /* Custom focus outline */
        }
        .error{
            color:red;
        }

    </style>
</head>

<body>
    <div class="container">
        <h2 class="form-title">Faculty form12</h2>
        <a class="button" href="{{ URL::to('faculty/show') }}">Show Faculty Info</a>
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
                @error('faculty_id')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_name">Faculty Name</label>
                <input type="text" class="form-control" id="faculty_name" name="faculty_name" placeholder="Enter Faculty Name" required>
                @error('faculty_name')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_age">Faculty Age</label>
                <input type="number" class="form-control" id="faculty_age" name="faculty_age" placeholder="Enter Faculty Age" required>
                @error('faculty_age')
                <div class="error">{{ $message }}</div>
            @enderror

            </div>

            <div class="form-group">
                <label for="faculty_dob">Faculty Date of Birth</label>
                <input type="date" class="form-control" id="faculty_dob" name="faculty_dob" required>
                @error('faculty_dob')
                <div class="error">{{ $message }}</div>
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
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_address">Faculty Address</label>
                <textarea class="form-control" id="faculty_address" name="faculty_address" rows="3" placeholder="Enter Address" required></textarea>
                @error('faculty_address')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_email">Faculty Email Address</label>
                <input type="email" class="form-control" id="faculty_email" name="faculty_email" placeholder="Enter Email Address" required>
                @error('faculty_email')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_qualification">Faculty Qualification</label>
                <input type="text" class="form-control" id="faculty_qualification" name="faculty_qualification" placeholder="Enter Faculty Qualification" required>
                @error('faculty_qualification')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_doj">Faculty Date of Joining</label>
                <input type="date" class="form-control" id="faculty_doj" name="faculty_doj" required>
                @error('faculty_doj')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_specializations">Faculty Specialization</label>
                <input type="text" class="form-control" id="faculty_specializations" name="faculty_specializations" placeholder="Enter Faculty Specialization" required>
                @error('faculty_specializations')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_experience">Faculty Experience</label>
                <textarea class="form-control" id="faculty_experience" name="faculty_experience" rows="3" placeholder="Enter Experience" required></textarea>
                @error('faculty_experience')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_designation">Faculty Designation</label>
                <input type="text" class="form-control" id="faculty_designation" name="faculty_designation" placeholder="Enter Faculty Designation" required>
                @error('faculty_designation')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
                <label for="faculty_department">Faculty Department</label>
                <input type="text" class="form-control" id="faculty_department" name="faculty_department" placeholder="Enter Faculty Department" required>
                @error('faculty_department')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-primary" name="save">Submit</button>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            // Clear form data when the page is shown (including when the back button is pressed)
            $(window).on('pageshow', function(event) {
                if (event.originalEvent.persisted || performance.navigation.type === 2) {
                    $('#facultyForm').find('input:text, input:password, input:file, select, textarea').val('');
                }
            });

            $('#facultyForm').on('submit', function() {
                // Set a flag indicating the form was submitted
                sessionStorage.setItem('formSubmitted', 'true');
            });
        });
    </script>

    <br><br>
    <hr>
    <hr>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>