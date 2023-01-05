<form action="/action_page.php">
    <div class="container py-5">
        <div class="justify-content-center">
            <h3 class="mx-n3 mb-2 pb-2 pt-md-4 mb-md-4">Registration Form</h3>
            <div class="col-md-4 mb-4 align-items-center">
                <div class="form-outline">
                    <label for="email" class="form-label">Name:</label>
                    <input type="text" id="firstName" name="detail[fname]" class="form-control" placeholder="Enter Name" autocomplete="off" />
                    <small class="text-danger" id="error_firstname"></small>
                </div>
            </div>

            <div class="col-md-4 mb-4 align-items-center">
                <div class="form-outline">
                    <label class="form-label" for="emailAddress">Email:</label>
                    <input type="email" id="emailAddress" name="detail[email]" class="check_email form-control" placeholder="Enter Email" autocomplete="off" />
                    <small class="text-danger email_error" id="error_email"></small>
                </div>
            </div>

            <div class="col-md-4 mb-4 align-items-center">
                <div class="form-outline">
                    <label class="form-label" for="phoneNumber">Phone Number:</label>
                    <input type="text" id="phoneNumber" name="detail[phone]" class="form-control" placeholder="Enter phone number" autocomplete="off" />
                    <small class="text-danger" id="error_phone"></small>
                </div>
            </div>
            <div class="col-md-4 mb-4 align-items-center">
                <h6 class="mb-2 pb-1">Gender: </h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="detail[gender]" value="M" checked />
                    <label class="form-check-label" for="maleGender">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="detail[gender]" value="F" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                </div>
            </div>
            <div class="col-md-4 mb-4 align-items-center">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Password:</label>
                    <input type="password" id="pass" class="form-control" name="detail[pass]" placeholder="Enter password" autocomplete="off" />
                    <small class="text-danger" id="error_pass"></small>
                </div>
            </div>
            <div class="col-md-4 mb-4 align-items-center">
                <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Repeat your password:</label>
                    <input type="password" id="cpass" class="form-control" name="cpass" placeholder="Enter confirm password" autocomplete="off" />
                    <small class="text-danger" id="error_cpass"></small>
                </div>
            </div>
            <hr class="mx-n3 col-md-5 mb-3">
            <div class="col-md-3 ps-1">
                <h6 class="mb-4">Upload image</h6>
            </div>
            <div class="col-md-4 mb-4 align-items-center">
                <input class="form-control form-control-lg file-input" id="fileUpload" type="file" name="file_upload" />
                <!--  -->
                <p id="error1" style="display:none; color:#FF0000;">
                    Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                </p>
                <p id="error2" style="display:none; color:#FF0000;">
                    Maximum File Size Limit is 2MB.
                </p>
                <div class="small text-muted mt-2">Upload your Image. Max file size 2 MB</div>

            </div>
            
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                </div>
            </div>
            <div class="mt-1 pt-2">
                <input class="btn btn-primary btn-lg" id="submitbtn" name="submit" type="submit" value="Submit" />
                <!-- id="submitbtn" name="submit" -->
            </div>
        </div>
    </div>
</form>