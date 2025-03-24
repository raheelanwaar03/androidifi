@extends('layout.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo rounded"></div>
                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="{{ asset('images/profile/'.auth()->user()->pic) }}" class="img-fluid rounded-circle"
                                        alt="">
                                </div>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-white mb-0">{{ auth()->user()->name }}</h4>
                                        <p>{{ number_format(auth()->user()->balance,2) }}</p>
                                    </div>
                                    <div class="profile-email px-2 pt-2">
                                        <h4 class="mb-0">AirDrop</h4>
                                        <p>{{ number_format(auth()->user()->airdrop,2) }}</p>
                                    </div>
                                    <div class="profile-email px-2 pt-2">
                                        <h4 class="mb-0">User ID</h4>
                                        <p>{{ auth()->user()->register_id }}</p>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary light me-1 px-3 btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#cameraModal"><i
                                                class="fa fa-camera m-0"></i> </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="cameraModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Upload images</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('User.Profile.Pic') }}"
                                                            enctype="multipart/form-data" method="POST">
                                                            <div class="input-group mb-3">
                                                                @csrf
                                                                <div class="">
                                                                    <input type="file" class="form-control"
                                                                        name="pic" required>
                                                                </div>
                                                                <button type="submit" class="btn btn-info">Upload</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card h-auto">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#profile" data-bs-toggle="tab"
                                                class="nav-link active">Profile</a>
                                        </li>
                                        <li class="nav-item"><a href="#kyc" data-bs-toggle="tab" class="nav-link">KYC</a>
                                        </li>
                                        <li class="nav-item"><a href="#settings" data-bs-toggle="tab"
                                                class="nav-link">Setting</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="profile" class="tab-pane active">
                                            <div class="profile-about-me">
                                                <div class="pt-4 border-bottom-1 pb-3">
                                                    <h4 class="text-primary">Company Massage</h4>
                                                    <p class="mb-2">Dear [{{ auth()->user()->name }}],
                                                        I am thrilled to share with you the progress and vision of [Your
                                                        Investment Company Name]. As a valued investor, your partnership has
                                                        been instrumental in propelling our journey towards financial
                                                        success and market leadership. Today, I am excited to showcase how
                                                        your trust and our strategic approach are yielding remarkable
                                                        returns and positioning us for even greater achievements in the
                                                        future.</p>
                                                </div>
                                            </div>
                                            <div class="profile-personal-info">
                                                <h4 class="text-primary mb-4">Personal Information</h4>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">Name <span class="pull-end">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>{{ auth()->user()->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7"><span>{{ auth()->user()->email }}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">User ID <span class="pull-end">:</span></h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7">
                                                        <span>{{ auth()->user()->register_id }}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-sm-3 col-5">
                                                        <h5 class="f-w-500">Status <span class="pull-end">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-9 col-7">
                                                        @if (auth()->user()->status == 'approved')
                                                            <span
                                                                class="badge light badge-success">{{ auth()->user()->status }}</span>
                                                        @else
                                                            <span
                                                                class="badge light badge-danger">{{ auth()->user()->status }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                @if ($user->Verification != '')
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            @if ($user->Verification->status == 'none')
                                                                <h5 class="f-w-500">KYC <span class="pull-end">:</span>
                                                                </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span
                                                                class="badge light badge-danger">None</span>
                                                        </div>
                                                    @else
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">KYC <span class="pull-end">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span
                                                                class="badge light badge-info">{{ $user->Verification->status }}</span>
                                                        </div>
                                                @endif
                                            </div>
                                        @else
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">KYC <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span
                                                        class="badge light badge-danger">None</span>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Member From <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7">
                                                    <span>{{ auth()->user()->created_at }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="settings" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary text-center">Account Setting</h4>
                                                <form method="post" action="{{ route('profile.update') }}">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="row">
                                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" name="name"
                                                                value="{{ auth()->user()->name }}" autofocus
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Email</label>
                                                            <input readonly name="email" type="email"
                                                                value="{{ auth()->user()->email }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <button type="submit" class="btn btn-sm btn-info">Update</button>
                                                        @if (session('status') === 'profile-updated')
                                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                                x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                                                {{ __('Saved.') }}</p>
                                                        @endif
                                                    </div>
                                                </form>
                                                <div class="m-3">
                                                    <h4 class="text-primary text-center">Change Password</h4>
                                                </div>
                                                <form action="{{ route('password.update') }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Current Password</label>
                                                        <input type="password" name="current_password"
                                                            placeholder="Password" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">New Password</label>
                                                        <input type="password" name="password" placeholder="New Password"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Confirm Password</label>
                                                        <input type="password" name="password_confirmation"
                                                            placeholder="Confirm Password" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary btn-sm" type="submit">Change</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="kyc" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">KYC</h4>
                                                <form method="POST" action="{{ route('User.KYC') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Address</label>
                                                            <input type="text" required name="address"
                                                                placeholder="1234 Main St" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Country</label>
                                                            <input list="countries" required id="country"
                                                                name="country" class="form-control">
                                                            <datalist id="countries">
                                                            </datalist>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">City</label>
                                                            <input type="text" required name="city"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">State</label>
                                                            <input type="text" required name="state"
                                                                class="form-control" id="status" placeholder="State">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Zip</label>
                                                            <input type="text" required name="zip"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Phone</label>
                                                            <input type="text" required name="phone"
                                                                placeholder="Your contact number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    @section('scripts')
        <script>
            // Array of countries
            var countries = [
                "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia",
                "Australia", "Austria",
                "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
                "Bhutan",
                "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
                "Cabo Verde", "Cambodia",
                "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo",
                "Costa Rica",
                "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic",
                "Ecuador", "Egypt",
                "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland",
                "France", "Gabon",
                "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau",
                "Guyana",
                "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel",
                "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan",
                "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
                "Madagascar",
                "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico",
                "Micronesia",
                "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru",
                "Nepal",
                "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway",
                "Oman", "Pakistan",
                "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal",
                "Qatar",
                "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines",
                "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia",
                "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands",
                "Somalia", "South Africa",
                "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria",
                "Taiwan",
                "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia",
                "Turkey", "Turkmenistan",
                "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay",
                "Uzbekistan", "Vanuatu", "Vatican City",
                "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
            ];

            // Populate datalist
            var datalist = document.getElementById("countries");
            countries.forEach(function(country) {
                var option = document.createElement("option");
                option.value = country;
                datalist.appendChild(option);
            });

            // JavaScript to handle selection from dropdown
            document.getElementById("country").addEventListener("change", function() {
                var selectedCountry = this.value;
                if (selectedCountry) {
                    alert("Selected country: " + selectedCountry);
                    // Here you can perform any action with the selected country
                }
            });
        </script>
    @endsection
