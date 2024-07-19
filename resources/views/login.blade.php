<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 Multi Auth</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body{
            font-family: sans-serif;
        }
        body.bg-light {
            background-color: #f8f9fa;
        }

        section {
            padding: 3rem 1rem;
        }

        section .container {
            max-width: 1140px;
        }

        .card.border {
            border-color: #d1d1d1 !important;
        }

        .card-body {
            padding: 3rem 1rem;
        }

        h4.text-center {
            color: #626cd6;
        }

        .btn-primary {
            background-color: #626cd6;
            border-color: #626cd6;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: #5059b0;
            border-color: #5059b0;
        }

        .form-floating .form-control:focus~.form-label,
        .form-floating .form-control:not(:placeholder-shown)~.form-label {
            color: #626cd6;
        }

        .form-control:focus {
            border-color: #626cd6;
            box-shadow: 0 0 0 0.2rem rgba(98, 108, 214, 0.25);
        }

        .form-label {
            color: #626cd6;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
        }

        .d-grid .btn-primary {
            background-color: #626cd6;
            border-color: #626cd6;
        }

        .d-grid .btn-primary:hover,
        .d-grid .btn-primary:focus,
        .d-grid .btn-primary:active {
            background-color: #5059b0;
            border-color: #5059b0;
        }
    </style>
</head>

<body class="bg-light">
    <section class=" p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border border-light-subtle rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">


                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif

                                    @if(Session::has('error'))
                                    <div class="alert alert-success">{{ Session::get('error') }}</div>
                                    @endif

                                    <div class="mb-5">
                                        <h4 class="text-center">Login Here</h4>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('loginUser')}}" method="post">
                                @csrf
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror " name="email" id="email" placeholder="name@example.com">
                                            <label for="email" class="form-label">Email</label>
                                            @error('email')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror " name="password" id="password" value="" placeholder="Password">
                                            <label for="password" class="form-label">Password</label>
                                            @error('password')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn bsb-btn-xl btn-primary py-3" type="submit">Log in now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>