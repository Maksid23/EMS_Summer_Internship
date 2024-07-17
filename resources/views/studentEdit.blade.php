<!doctype html>
<html lang="en">
  <head>
    <title>Student Update Show</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      *{
        padding: 0%;
        margin: 0%;
      }
      .container{
        border: 1px solid black;
        width: 50%;
        height: 50%;  
      }

      label{
        font-size: large;
        font-weight: bold;
      }

      .form-control{
        width: 20%;
        height: 80%;
        border-width: 20%;
      }

      .btn-primary{
        background-color:crimson;
        color: #fff;
        border: none;
        width: 10%;        
      }
    </style>


  </head>
  <body>
      <form action="{{ route('student.update') }}" method="post">
      @csrf
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <center>
       
      
        <div class="form-group">
          <label for="">Student__ID</label>
          <input type="text" name="student_id" id="" class="form-control" placeholder="" 
         value="{{$studnt->student_id}}" aria-describedby="helpId">
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
          value="{{$studnt->class_id}}" aria-describedby="helpId">
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
          value="{{$studnt->student_name}}"  aria-describedby="helpId">
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
          value="{{$studnt->dob}}" aria-describedby="helpId">
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
    value="{{$studnt->gender}}"  aria-describedby="helpId">
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
          value="{{$studnt->address}}" aria-describedby="helpId">
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
          value="{{$studnt->parent_guardian_contact_info}}" aria-describedby="helpId">
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
          value="{{$studnt->other_contact}}" aria-describedby="helpId">
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
          value="{{$studnt->email_address}}" aria-describedby="helpId">
          <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
          </span>
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>

        <input type="hidden" name="update_id" value="{{$studnt->student_id}}">
        <button type="submit" class="btn-primary" name="save">
            Submit
        </button>
        </center>
        </form>

    </div>

  </body>
</html>