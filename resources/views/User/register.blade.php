<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <title>Membership Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            margin-right: 40px;
            /* Adjusted spacing */
        }

        .navbar-nav {
            margin-left: auto;
        }

        .form-header {
            background-color: #0d47a1;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .form-container {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }

        .form-title {
            color: #0d47a1;
            margin-bottom: 20px;
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
        }

        .membership-options {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .membership-options .form-check-label {
            margin-left: 10px;
        }

        .form-check {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-2" href="{{ url('user/userdashboard') }}">Member Management System</a>

        <button class="btn btn-link btn-sm order-0 order-lg-0 ms-5" id="sidebarToggle"><i
                class="fas fa-bars"></i></button>
        <ul class="navbar-nav ms-auto ms-md-45 me-10 me-lg-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{ url('user/userdashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Manage</div>
                        <a class="nav-link" href="{{ route('user.register') }}">Register</a>
                        <a class="nav-link" href="{{ route('user.payment') }}">Make Payments</a>
                        <a class="nav-link" href="{{ route('user.eventRegister') }}">Register for Events</a>

                    </div>
                </div>

            </nav>
        </div>

        <div class="container mt-5">
            <div class="form-container">
                <div class="form-header">
                    <h2>Membership Form</h2>
                    <p>Football Club</p>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('user.register.submit') }}">
                    @csrf
                    <h4 class="form-title">Personal Information</h4>

                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="full_name"
                            placeholder="Enter full name" value="{{ old('full_name') }}">

                    </div>

                    <div class="mb-3">
                        <label for="placeOfBirth" class="form-label">Place of Birth</label>
                        <input type="text" class="form-control" id="placeOfBirth" name="place_of_birth"
                            placeholder="Enter place of birth" value="{{ old('place_of_birth') }}">
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Birth of Date</label>
                        <input type="date" class="form-control" id="dob" name="dob"
                            value="{{ old('dob') }}">
                    </div>

                    <div class="mb-3">
                        <label for="fullAddress" class="form-label">Full Address</label>
                        <textarea class="form-control" id="fullAddress" name="full_address" rows="3" placeholder="Enter full address">{{ old('full_address') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="nationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality"
                            placeholder="Enter nationality" value="{{ old('nationality') }}">
                    </div>

                    <div class="mb-3">
                        <label for="cityCountry" class="form-label">City/Country</label>
                        <input type="text" class="form-control" id="cityCountry" name="city_country"
                            placeholder="Enter city/country" value="{{ old('city_country') }}">
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter email" value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phone_number"
                            placeholder="Enter phone number" value="{{ old('phone_number') }}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter password">
                    </div>

                    <h4 class="form-title">Type Of Membership</h4>
                    <div class="membership-options">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membership_type" id="regular"
                                value="regular" {{ old('membership_type') == 'regular' ? 'checked' : '' }}>
                            <label class="form-check-label" for="regular">
                                Regular (3 months)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membership_type" id="gold"
                                value="gold" {{ old('membership_type') == 'gold' ? 'checked' : '' }}>
                            <label class="form-check-label" for="gold">
                                Gold (6 months)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membership_type" id="platinum"
                                value="platinum" {{ old('membership_type') == 'platinum' ? 'checked' : '' }}>
                            <label class="form-check-label" for="platinum">
                                Platinum (12 months)
                            </label>
                        </div>
                    </div>

                    <h4 class="form-title">Term & Condition</h4>
                    <p>This membership is valid. Membership includes the facilities available. Membership is not
                        automatic.</p>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright © Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/datatables-simple-demo.js') }}"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('layoutSidenav_nav').classList.toggle('sb-sidenav-toggled');
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
