$(document).ready(function () {

    // initial stage input hide error firstly
    $('#error_firstname').hide();
    $('#error_lastname').hide();
    $('#error_email').hide();
    $('#error_phone').hide();
    $('#error_pass').hide();
    $('#error_cpass').hide();
    // $('#file_error').hide();

    // intially it is true when clicking submit if any case input field has error it return false else it return true
    var firstname_err = true;
    var lastname_err = true;
    var email_err = true;
    var phone_err = true;
    var pass_err = true;
    var cpass_err = true;


    $('#firstName').blur(function () {

        validateFirstname();
    });

    $("#firstName").keydown(function(event){
        onlyalpha(event)
    });

    function onlyalpha(event){
        switch (event.keyCode) {
            case 8:  // Backspace
            case 9:  // Tab
            case 13: // Enter
            break;
            default:
            var regex = new RegExp("^[a-zA-Z $@]+$");
            var key = event.key;
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
            break;
        }
    }

    function validateFirstname() {
        var name_filter = /^[A-Za-z]+$/;
        var firstname = $('#firstName').val();
        if ($.trim(firstname).length == 0) {
            $('#error_firstname').show();
            error_firstname = "*Please Enter First Name";
            $('#error_firstname').html(error_firstname);
            firstname_err = false;
            return false;

        }else {
            $('#error_firstname').hide();
        }
    }
    
    ////////////////////////////////////


    function checkEmail(email) {
        // var email2 = $('.check_email').val();
        // console.log(email);
        $.ajax({
            method: "POST",
            url: "/mvc_loginproject/public/ajax/registerEmail.php",
            data: {
                emailid: email
            },
            success: function (data) {
                $('.email_error').html(data);
            }
        });
    }

    $('#emailAddress').keyup(function () {

        validateEmail();
        // ajaxEmailval();
    });

    //ajax with validation email repetation
//////////////////////////////////////////////

    function validateEmail() {

        var email_filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var emailAddress = $('#emailAddress').val();
        if ($.trim(emailAddress).length == 0) {
            $('#error_email').show();
            error_email = "*Please Enter Email Address";
            $('#error_email').html(error_email);
            email_err = false;
            return false;

        } else if (!(email_filter.test(emailAddress))) {
            $('#error_email').show();
            error_email = "*Please Enter Valide Email ";
            $('#error_email').html(error_email);
            email_err = false;
            return false;

        } else {
            error_email = "";
            $('#error_email').text(error_email);
            checkEmail(emailAddress);

            // error_email = "";
            // $('#error_email').text(error_email);
            // $('#error_email').hide();
        }

    }

    // for phone number 

    $('#phoneNumber').keyup(function () {

        validatePhonenumber();
    });

    function validatePhonenumber() {

        var phoneNumber_filter = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        // var phoneNumber_filter = /^(0|91)?[6-9][0-9]{9}$/;
        var phoneNumber = $('#phoneNumber').val();
        if ($.trim(phoneNumber).length == 0) {

            $('#error_phone').show();
            error_phone = "*Please Enter Phone number";
            $('#error_phone').html(error_phone);
            phone_err = false;
            return false;


        } else if (!(phoneNumber_filter.test(phoneNumber))) {
            $('#error_phone').show();
            error_phone = "*Please Enter Valide Phone ";
            $('#error_phone').html(error_phone);
            phone_err = false;
            return false;
        } else {

            $('#error_phone').hide();
            // error_phone = "";
            // $('#error_phone').text(error_phone);
        }
    }
    $('#phoneNumber').on('paste', function (event) {
        if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
            event.preventDefault();
        }
    });
    $('#phoneNumber').keypress(function (e) {

        // var charCode = (e.which) ? e.which : e.keyCode
        // if (String.fromCharCode(charCode).match(/[^0-9]/g))
        //     return false;

            $("#phoneNumber").attr("min", "10");
                var valueLength = this.value.length;
                if (valueLength == 10) {
                    return false;
                }
                var kk = e.which;
                if (kk < 48 || kk > 57)
                    e.preventDefault();
        

    });

    // for password validation

    $('#pass').blur(function () {

        validatePassword();
    });

    function validatePassword() {
        var pass_filter = /^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&]).*$/;
        var password = $('#pass').val();

        if ($.trim(password).length == 0) {
            $('#error_pass').show();
            error_pass = "*Please Enter Password";
            $('#error_pass').html(error_pass);
            pass_err = false;
            return false;

        } else if (!(pass_filter.test(password))) {
            $('#error_pass').show();
            error_pass = "*Please Password Contain at least 8 characters, 1 number, 1 lowercase character (a-z), 1 uppercase character (A-Z) and special character";
            $('#error_pass').html(error_pass);
        } else {
            $('#error_pass').hide();
            // pass_err = false;
            // return false;
            // error_pass = "";
            // $('#error_pass').html(error_pass);
        }
    }

    // for confirm password
    $('#cpass').blur(function () {

        validateConfirmPassword();
    });

    function validateConfirmPassword() {
        var password = $('#pass').val();
        var cpassword = $('#cpass').val();
        if ($.trim(cpassword).length == 0) {
            $('#error_cpass').show();
            error_cpass = "*Please Enter Confirm Password";
            $('#error_cpass').html(error_cpass);
            cpass_err = false;
            return false;
        }

        else if (password != cpassword) {
            $('#error_cpass').show();
            error_cpass = "* Both Password does not match! ";
            $('#error_cpass').html(error_cpass);
            cpass_err = false;
            return false;

        } else {
            $('#error_cpass').hide();
            // error_cpass = "";
            // $('#error_cpass').text(error_cpass);
        }
    }

    //for file upload

    // 

    // $('input[type="submit"]').prop("disabled", true);
    // var a = 0;
    // //binds to onchange event of your input field
    // $('#fileUpload').bind('change', function () {
    //     if ($('input:submit').attr('disabled', false)) {
    //         $('input:submit').attr('disabled', true);
    //     }
    //     var ext = $('#fileUpload').val().split('.').pop().toLowerCase();
    //     if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
    //         $('#error1').slideDown("slow");
    //         $('#error2').slideUp("slow");
    //         a = 0;
    //     } else {
    //         var picsize = (this.files[0].size);
    //         if (picsize > 2000000) {
    //             $('#error2').slideDown("slow");
    //             a = 0;
    //         } else {
    //             a = 1;
    //             $('#error2').slideUp("slow");
    //         }
    //         $('#error1').slideUp("slow");
    //         if (a == 1) {
    //             $('input:submit').attr('disabled', false);
    //         }
    //     }
    // });

    //while submit if wrong data return false  else return true;
    $('#submitbtn').click(function () {
        firstname_err = true;
        // lastname_err = true;
        email_err = true;
        phone_err = true;
        pass_err = true;
        cpass_err = true;
        // fileupload_err = true;


        validateFirstname();
        // console.log(validateFirstname());
        validateEmail();
        validatePhonenumber();
        validatePassword();
        validateConfirmPassword();
        // validatefile();
        if ((firstname_err == true) && (email_err == true) && (phone_err == true) && (pass_err == true) && (cpass_err == true)) {
            return true;
        } else {
            return false;
        }

    });
});