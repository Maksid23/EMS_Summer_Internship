<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Institute Registration</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
  <div class="container">
    <form action="{{URL::to('institute/insert_institute')}}" method="post" class="needs-validation" novalidate>
      <h2 class="text-center mb-4">Institute Registration</h2>
      @csrf
      <div class="form-group">
        <label for="username">Institute_ID</label>
        <input type="text" id="institute_id" name="institute_id" class="form-control" required>
        <div class="invalid-feedback">
          Please enter a id.
        </div>
      </div>

      <div class="form-group">
        <label for="username">Institute Name</label>
        <input type="text" id="institute_name" name="institute_name" class="form-control" required>
        <div class="invalid-feedback">
          Please enter a id.
        </div>
      </div>

      <div class="form-group">
        <label for="confirm_password">Address</label>
        <input type="text" id="address" name="address" class="form-control" required>
        <div class="invalid-feedback">
          Please confirm your password.
        </div>
      </div>

      <div class="form-group">
        <label for="confirm_password">Contact</label>
        <input type="text" id="contact" name="contact" class="form-control" required>
        <div class="invalid-feedback">
          Please confirm your password.
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required>
        <div class="invalid-feedback">
          Please enter a valid email address.
        </div>
      </div>

      <div class="form-group">
        <label for="confirm_password">Password</label>
        <input type="text" id="password" name="password" class="form-control" required>
        <div class="invalid-feedback">
          Please confirm your password.
        </div>
      </div>
      

      <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
  </div>

  <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Optional: JavaScript for form validation -->
  {{-- <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation');
      
      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }
            
            // Add Bootstrap's validation styles to the form
            form.classList.add('was-validated');
          }, false);
        });
    })();
  </script> --}}
  @if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
    </div>
    @endif
</body>
</html>
