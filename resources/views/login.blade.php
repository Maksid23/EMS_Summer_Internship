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
    @if(session()->has('success'))
    <div class="alert alert-success">
        <p> {{session()->get('success')}} </p>
    </div>
    @endif
    <!-- Login form container -->
    <form action="{{route('loginUser')}}" method="POST">
    {{-- <form action="{{URL::to('loginUser')}}" method="GET"> --}}
      <h3>Edu-Master</h3>

     @csrf
      <!-- Login option separator -->
      

      <!-- Email input box -->
      <div class="input_box">
        <label for="id">ID</label>
        <input type="string" name="user_id" placeholder="Enter ID" required />
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
        

        <input type="password" name="password" placeholder="Enter your password" required />
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
      <button type="submit" name="login">Log In</button>

      <!-- <p class="sign_up">Don't have an account? <a href="#">Sign up</a></p> -->
    </form>
  </div>
</body>
</html>