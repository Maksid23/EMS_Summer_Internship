<!doctype html>
<html lang="en">
  <head>
    <title>Student Info Add</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
   /* General Label Styles */
label {
    font-size: large;
    font-weight: bold;
}

/* Primary Button Style */
.btn-primary {
    background-color: crimson;
    color: #fff;
    border: none;
    border-radius: 5px; /* Added for consistency */
    padding: 10px 20px; /* Added for consistency */
    font-size: 16px; /* Added for consistency */
    font-weight: bold; /* Added for consistency */
    text-align: center; /* Added for consistency */
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease; /* Added box-shadow transition */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

/* Button Style for `.button` class */
.button {
    display: inline-block;
    background-color: #007BFF; /* Default background color */
    color: #fff; /* Text color */
    border: none;
    border-radius: 5px; /* Rounded corners */
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    position: absolute; /* Fixed position */
    top: 30px; /* Distance from top */
    right: 70px; /* Distance from right */
    z-index: 1000; /* Ensures the button is on top */
}

/* Hover effect */
.button:hover, .btn-primary:hover {
    background-color: violet; /* Darker shade on hover */
    transform: translateY(-2px); /* Slight lift on hover */
}

/* Active effect */
.button:active, .btn-primary:active {
    background-color: green; /* Even darker shade on click */
    transform: translateY(0); /* Reset lift effect */
}

/* Focus effect */
.button:focus, .btn-primary:focus {
    outline: none; /* Remove default focus outline */
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5); /* Custom focus outline */
}

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
        input[type="text"], input[type="date"], input[type="email"], select, .btn-primary {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-primary {
            background-color: #4070F4;
            color: #fff;
            border: none;
            cursor: pointer;
            display: inline-block;
        }
        .btn-primary:hover {
            background-color: #3357C4;
        }
        .button {
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 30px;
            right: 70px;
            z-index: 1000;
        }
        .button:hover {
            background-color: #3050C4;
        }
        .button:active {
            background-color: green;
        }
        .button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
        }
        .text-danger {
            color: red;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>

  </head>
  <body>
    <h1>Student Info Add</h1>
    <div class="container">
      <form action="{{ URL::to('student/store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="student_id">Student ID</label>
          <input type="text" name="student_id" class="form-control" placeholder="Enter Student ID" required>
          <span class="text-danger">@error('student_id') {{$message}} @enderror</span>
        </div>

        <div class="form-group">
          <label for="class_id">Class ID</label>
          <input type="text" name="class_id" class="form-control" placeholder="Enter Class ID" required>
          <span class="text-danger">@error('class_id') {{$message}} @enderror</span>
        </div>

        <div class="form-group">
          <label for="student_name">Student Name</label>
          <input type="text" name="student_name" class="form-control" placeholder="Enter Student Name" required>
          <span class="text-danger">@error('student_name') {{$message}} @enderror</span>
        </div>

        <div class="form-group">
          <label for="dob">DOB</label>
          <input type="date" name="dob" class="form-control" required>
          <span class="text-danger">@error('dob') {{$message}} @enderror</span>
        </div>

        <div class="form-group">
          <label for="gender">Gender</label>
          <select name="gender" class="form-control" required>
            <option value="">Select Gender</option>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
          </select>
          <span class="text-danger">@error('gender') {{$message}} @enderror</span>
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
          <span class="text-danger">@error('address') {{$message}} @enderror</span>
        </div>

        <div class="form-group">
          <label for="parent_guardian_contact_info">Parent/Guardian Contact Info</label>
          <input type="text" name="parent_guardian_contact_info" class="form-control" placeholder="Enter Contact Info" required>
          <span class="text-danger">@error('parent_guardian_contact_info') {{$message}} @enderror</span>
        </div>

        <div class="form-group">
          <label for="other_contact">Other Contact</label>
          <input type="text" name="other_contact" class="form-control" placeholder="Enter Other Contact" required>
          <span class="text-danger">@error('other_contact') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" id="" class="form-control" placeholder="" 
           aria-describedby="helpId">
          <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>
        <a class="button" href="{{URL::to('student/view')}}" >Show Data</a>
        <button type="submit" class="btn-primary" name="save">
            Submit
        </button>
        
        </form>

        <div class="form-group">
          <label for="email_address">Email</label>
          <input type="email" name="email_address" class="form-control" placeholder="Enter Email" required>
          <span class="text-danger">@error('email_address') {{$message}} @enderror</span>
        </div>

        <a class="button" href="{{ URL::to('student/view') }}">Show Data</a>
        <button type="submit" class="btn-primary" name="save">Submit</button>
      </form>
    </div>
  </body>
</html>
