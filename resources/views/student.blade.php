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
   
      

      label{
        font-size: large;
        font-weight: bold;
      }

   

      .btn-primary{
        background-color:crimson;
        color: #fff;
        border: none;
             
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
    </style>


  </head>
  <body>
      <form action="{{ URL::to('student/store') }}" method="post">
      @csrf
    <div class="container">
        <h1 class="text-center">Registration</h1>
        
      
       
      
        <div class="form-group">
          <label for="">Student__ID</label>
          <input type="text" name="student_id" id="" class="form-control" placeholder="" 
          aria-describedby="helpId">
          <span class="text-danger">
            @error('student_id')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>

        <div class="form-group">
          <label for="">Class_ID</label>
          <input type="text" name="class_id" id="" class="form-control" placeholder="" 
            aria-describedby="helpId">
          <span class="text-danger">
            @error('class_id')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>

        <div class="form-group">
          <label for="">Student_name</label>
          <input type="text" name="student_name" id="" class="form-control" placeholder="" 
            aria-describedby="helpId">
          <span class="text-danger">
            @error('student_name')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>

        <div class="form-group">
          <label for="">DOB</label>
          <input type="date" name="dob" id="" class="form-control" placeholder="" 
           aria-describedby="helpId">
          <span class="text-danger">
            @error('dob')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>

        <div class="form-group">
    <label for="gender">Gender</label>
    <select name="gender" id="gender" class="form-control" 
      aria-describedby="helpId">
        <option value="">Select Gender</option>
        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
    </select>
    <span class="text-danger">
        @error('gender')
        {{ $message }}
        @enderror
    </span>
</div>


        <div class="form-group">
          <label for="">Address</label>
          <input type="text" name="address" id="" class="form-control" placeholder="" 
            aria-describedby="helpId">
          <span class="text-danger">
            @error('address')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>

        <div class="form-group">
          <label for="">Parent_guardian_contact_info</label>
          <input type="text" name="parent_guardian_contact_info" id="" class="form-control" placeholder="" 
           aria-describedby="helpId">
          <span class="text-danger">
            @error('parent_guardian_contact_info')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>

        <div class="form-group">
          <label for="">Other Contact</label>
          <input type="text" name="other_contact" id="" class="form-control" placeholder="" 
           aria-describedby="helpId">
          <span class="text-danger">
            @error('other_contact')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email_address" id="" class="form-control" placeholder="" 
           aria-describedby="helpId">
          <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
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

    </div>

  </body>
</html>