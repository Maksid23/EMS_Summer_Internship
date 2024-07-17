<!DOCTYPE html>
<html>

<head>
    <title>Enhanced Form and Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .form-container {
            background-color: #fff;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            /* Ensures padding does not affect overall width */
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
            /* Allows vertical resizing, generally a good UX choice */
        }

        .form-group button[type="submit"] {
            width: 100%;
            padding: 10px 0;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-group button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-container {
                width: calc(100% - 40px);
            }
        }

        .button-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="{{ route('form.update')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="staff_id">Staff ID:</label>
                <input value="{{ old('staff_id',$user->staff_id) }}" type="text" id="staff_id" name="staff_id">
                @error('staff_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input value="{{ old('user_id',$user->user_id) }}" type="text" id="user_id" name="user_id">
                @error('user_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="staff_name">Staff Name:</label>
                <input value="{{ old('staff_name',$user->staff_name) }}" type="text" id="staff_name" name="staff_name">
                @error('staff_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input value="{{ old('contact_number',$user->contact_number) }}" type="text" id="contact_number" name="contact_number">
                @error('contact_number')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input value="{{ old('email',$user->email) }}" type="email" id="email" name="email">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea value="{{ old('address',$user->address) }}" id="address" name="address">{{ old('address',$user->address) }}</textarea>
                @error('address')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input value="{{ old('designation',$user->designation) }}" type="text" id="designation" name="designation">
                @error('designation')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input value="{{ old('department',$user->department) }}" type="text" id="department" name="department">
                @error('department')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- // Add a hidden input field to store the user ID -->
            <input type="hidden" name="update_id" value="{{ $user->staff_id }}"> 

            <div class="form-group">
                <button type="submit" name="save">Update</button>
            </div>
        </form>


    </div>
    <div class="form-group" style="text-align: center;">
        <a href="/staff/form/view" class="button-link">View Data</a>
    </div>



</body>

</html>