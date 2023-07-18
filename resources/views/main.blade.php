@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
</head>

<body class="bg-dark">
    <div id="container" class="container d-flex justify-content-center align-items-center">
        <div class="card text-center">
            <div class="card-header">
                DILG Drug InfoSys
            </div>
            <div class="card-body text-start">
                
                    <form action="{{ route('submitForm') }}" id="submitForm" name="submitForm" method="POST">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="row row-cols-lg-auto g-3 align-items-center">
                            <div class="mb-3">
                                <label for="Name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name"
                                    maxlength="10">
                            </div>

                            <div class="mb-3">
                                <label for="Name" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name"
                                    maxlength="10">
                            </div>

                            <div class="mb-3">
                                <label for="Name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name"
                                    maxlength="10">
                            </div>
                        </div>
                        
                        <div class="row row-cols-lg-auto g-3 align-items-center">
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" max="100" class="form-control" id="age" name="age" placeholder="Age">
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option selected>Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row row-cols-lg-auto g-3 align-items-center">
                            <div class="mb-3">
                                <label for="streetName" class="form-label">Street Name</label>
                                <input type="text" class="form-control" id="streetName" name="streetName" placeholder="Street Name" maxlength="10">
                            </div>
                        
                            <div class="mb-3">
                                <label for="barangay" class="form-label">Barangay</label>
                                <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Barangay" maxlength="10">
                            </div>
                        
                            <div class="mb-3">
                                <label for="municipalCity" class="form-label">Municipal/City</label>
                                <input type="text" class="form-control" id="municipalCity" name="municipalCity" placeholder="Municipal/City" maxlength="10">
                            </div>
                        </div>
                        <div class="row row-cols-lg-auto g-3 align-items-center">
                            <div class="mb-3">
                                <label for="province" class="form-label">Province</label>
                                <input type="text" class="form-control" id="province" name="province" placeholder="Province" maxlength="10">
                            </div>
                        
                            <div class="mb-3">
                                <label for="postalCode" class="form-label">Postal Code</label>
                                <input type="number" class="form-control" id="postalCode" name="postalCode" placeholder="Postal Code" maxlength="4">
                            </div>
                        </div>

                        <div class="row row-cols-lg-auto g-3 align-items-center">
                            <div class="mb-3">
                                <label for="contactNumber" class="form-label">Contact Number</label>
                                <input type="number" class="form-control" id="contactNumber" name="contactNumber" placeholder="Contact Number" maxlength="11">
                            </div>
                        
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option selected>Status</option>
                                    <option value="Under Investigation">Under Investigation</option>
                                    <option value="Surrendered">Surrendered</option>
                                    <option value="Escaped">Escaped</option>
                                    <option value="Deceased">Deceased</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-secondary">Clear</button>
                    </form> 
            </div>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
    </div>
</body>

</html>