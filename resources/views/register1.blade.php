<!DOCTYPE html>
<!-- Source Codes By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form in HTML and CSS | CodingNepal</title>
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
  <div class="login_form">
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- Login form container -->
    <form action="{{URL::to('registerUser')}}" method="GET">
        @csrf
      <h3>Registration Form</h3>

     
      <!-- Login option separator -->
      

      <!-- Email input box -->
      <div class="input_box">
        <label for="name">Name</label>
        <input type="string" name="name" placeholder="Enter Name" required />
      </div>
      <div class="input_box">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter email address" required />
      </div>

      <!-- Paswwrod input box -->
      <div class="input_box">
        <div class="password_title">
          <label for="password">Password</label>
          <!-- <a href="#">Forgot Password?</a> -->
        </div>
        <input type="password" name="password" placeholder="Enter password" required />
      </div> 
      




      
      <!-- <label for="options">Choose an option:</label>
      <div class="dropdown-container">
        <select id="options" name="options" class="dropdown">
            <option value="Super Admin">Super Admin</option>
            <option value="Management">Management</option>
            <option value="Faculty">Faculty</option>
            <option value="Student">Student</option>
            <option value="Parent">Parent</option>
        </select>
    </div> -->












       <!-- Login button -->
      <button type="submit" name="register">Submit</button>

      <!-- <p class="sign_up">Don't have an account? <a href="#">Sign up</a></p> -->
    </form>
  </div>
</body>
</html>