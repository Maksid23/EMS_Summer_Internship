@extends('index')

@section('title', 'Faculty Info Form')

@section('content')
    <h2 class="form-title">Faculty Form</h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <form method="POST" action="{{ route('faculty.store') }}">
        @csrf
        <div class="form-group">
            <label for="faculty_name">Faculty Name</label>
            <input type="text" class="form-control" id="faculty_name" value="{{ old('faculty_name')}}" name="faculty_name" placeholder="Enter Faculty Name" required>
            @error('faculty_name')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <!-- <div class="form-group">
            <label for="faculty_age">Faculty Age</label>
            <input type="number" class="form-control" id="faculty_age" value="{{old('faculty_age')}}" name="faculty_age" min="18" placeholder="Enter Faculty Age" required>
            <span id="age_feedback" style="color: red;"></span>
            @error('faculty_age')
            <div class="error">{{ $message }} </div>
            @enderror
        </div> -->
        <div class="form-group">
            <label for="faculty_dob">Faculty Date of Birth</label>
            <input type="date" class="form-control" id="faculty_dob" value="{{old('faculty_dob')}}" name="faculty_dob" placeholder="Enter DOB" required>
            <span id="dob_feedback" style="color: red;"></span>
            @error('faculty_dob')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="faculty_gender">Faculty Gender</label>
            <select class="form-control" id="faculty_gender" value="{{old('faculty_gender')}}" name="faculty_gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="faculty_contact">Faculty Contact No</label>
            <input type="tel" class="form-control" id="faculty_contact" name="faculty_contact" value="{{old('faculty_contact')}}" maxlength="10" placeholder="Enter Faculty Contact No" required>
            <span id="phone_feedback" style="color: red;"></span>
            @error('faculty_contact')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="faculty_address">Faculty Address</label>
            <textarea class="form-control" id="faculty_address" name="faculty_address" rows="3" placeholder="Enter Address" required>{{ old('faculty_address') }}</textarea>
            @error('faculty_address')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="faculty_email">Faculty Email Address</label>
            <input type="email" class="form-control" id="faculty_email" name="faculty_email" value="{{old('faculty_email')}}" placeholder="Enter Email Address" required>
            @error('faculty_email')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            @error('password')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="faculty_qualification">Faculty Qualification</label>
            <input type="text" class="form-control" id="faculty_qualification" name="faculty_qualification" value="{{old('faculty_qualification')}}" placeholder="Enter Faculty Qualification" required>
            @error('faculty_qualification')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="faculty_doj">Faculty Date of Joining</label>
            <input type="date" class="form-control" id="faculty_doj" name="faculty_doj" value="{{old('faculty_doj')}}" required>
            @error('faculty_doj')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="faculty_specializations">Faculty Specialization</label>
            <input type="text" class="form-control" id="faculty_specializations" name="faculty_specializations" value="{{old('faculty_specializations')}}" placeholder="Enter Faculty Specialization" required>
            @error('faculty_specializations')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="faculty_experience">Faculty Experience</label>
            <textarea class="form-control" id="faculty_experience" name="faculty_experience" rows="3" placeholder="Enter Experience" required>{{ old('faculty_experience') }}</textarea>
            @error('faculty_experience')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="faculty_designation">Faculty Designation</label>
            <input type="text" class="form-control" id="faculty_designation" name="faculty_designation" value="{{old('faculty_designation')}}" placeholder="Enter Faculty Designation" required>
            @error('faculty_designation')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="faculty_department">Faculty Department</label>
            <input type="text" class="form-control" id="faculty_department" name="faculty_department" value="{{old('faculty_department')}}" placeholder="Enter Faculty Department" required>
            @error('faculty_department')
            <div class="error">{{ $message }} </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary" name="save">Submit</button>
    </form>
    <script>
        document.getElementById('faculty_dob').addEventListener('input', function() {
            var dobInput = document.getElementById('faculty_dob');
            var dobFeedback = document.getElementById('dob_feedback');
            var dob = new Date(dobInput.value);
            var today = new Date();
            var age = today.getFullYear() - dob.getFullYear();
            var monthDiff = today.getMonth() - dob.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }
            if (age < 18) {
                dobFeedback.textContent = 'You must be at least 18 years old.';
            } else {
                dobFeedback.textContent = '';
            }
        });
        function validateAge() {
            var ageInput = document.getElementById('faculty_age');
            var ageFeedback = document.getElementById('age_feedback');
            var age = parseInt(ageInput.value, 10);
            if (isNaN(age) || age < 18) {
                ageFeedback.textContent = 'Faculty must be at least 18 years old.';
                return false;
            } else {
                ageFeedback.textContent = '';
                return true;
            }
        }
        document.getElementById('faculty_contact').addEventListener('input', function() {
            var phoneInput = document.getElementById('faculty_contact');
            var phoneFeedback = document.getElementById('phone_feedback');
            var phone = phoneInput.value;
            // Allow only digits
            if (/^\d*$/.test(phone)) {
                phoneFeedback.textContent = '';
            } else {
                phoneFeedback.textContent = 'Please enter only digits.';
                phoneInput.value = phone.replace(/\D/g, ''); // Remove non-numeric characters
            }
        });
    </script>
@endsection
