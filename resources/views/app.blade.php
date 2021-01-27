
    <h2>student registration form</h2>
        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                {{ $name ?? '' }}
                            </div>
                            <div class="form-group">
                                <label for="father_name">Father Name :</label>
                                 {{ $fname ?? '' }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                             {{ $address ?? '' }}
                        </div>
                        <div class="form-group">
                            <label for="gender" class="radio-label">Gender :</label>
                             {{ $gender ?? '' }}
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">State :</label>
                                 {{ $state ?? '' }}
                            <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                     {{ $city ?? '' }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                             {{ $birthdate ?? '' }}
                        </div>
                        <div class="form-group">
                            <label for="pincode">Pincode :</label>
                             {{ $pincode ?? '' }}
                        </div>
                        <div class="form-group">
                            <label for="course">Course :</label>
                             {{ $course ?? '' }}
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                             {{ $email ?? '' }}
                        </div>
   