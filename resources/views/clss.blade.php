@extends('index')

@section('title', 'Form Submission')

@push('styles')
    <style>
        .form-container {
            margin-top: 50px;
        }
        .button {
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 5px;
        }
        .button:hover {
            background-color: white;
            color: #007bff;
            border: 2px solid #007bff;
        }

        /* Additional styles */
        .form-container form {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            border-radius: 5px;
            border: 1px solid #ced4da;
            width: 100%;
            padding: 10px;
        }

        input[type="submit"] {
            width: auto;
        }

        .form-container .button {
            width: 100%; /* Make the button full-width */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }
    </style>
@endpush

@section('content')
    <!-- URL for view -->
    <a class="button" href="{{ route('clss.view') }}">Show Data</a>

    <!-- Form for submission -->
    <div class="row form-container">
        <div class="col-md-6 offset-md-3">
            <h2>Submit Your Details</h2>
            <form action="{{ route('clss.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="class_id">Class_ID</label>
                    <input type="text" class="form-control" id="class_id" name="class_id" required>
                </div>
                <div class="form-group">
                    <label for="staff_id">Staff_ID</label>
                    <input type="text" class="form-control" id="staff_id" name="staff_id" required>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
