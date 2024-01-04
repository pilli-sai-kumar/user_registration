<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Add these scripts in the <head> section of your HTML -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <title>Register</title>

    <style>
        .containers {

            /* width: max-content; */
            /* height: auto; */
            margin: auto;

            border-radius: 5px;

            padding: 30px;
            border: 1px solid black;
        }

        .form-group {
            padding: 5px;
        }

        .error {
            color: red;
        }

        p {

            color: red;
        }
    </style>
</head>

<body>

    <div class="container ">

        <div class=" card">
            <div class="card-header">
                <div class="text-center ">




                </div>

                <div class="card-body">
                    <div class="row" style="">
                        <div class="col">
                            <div class="containers mr-auto">
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                                @endif

                                <h6 class="text-center ">
                                    <p>PARTICPANT PROFILE DETAILS </p>
                                </h6>
                                <form id="myform" class="needs-validation" enctype="multipart/form-data" novalidate="">
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">First Name<span class="required"></span></label>
                                                <input type="text" class="form-control" name="first_name"
                                                    id="first_name">

                                            </div>

                                            <div class="form-group">
                                                <label for="">Country Code<span class="required"></span></label>
                                                <select name="country_code" id="country_code" class="form-control">
                                                    <option value="+91">+91 (India)</option>
                                                    <option value="+62">+62 (Indonesia)</option>
                                                    <option value="+1">+1 (United States)</option>
                                                    <option value="+44">+44 (United Kingdom)</option>
                                                    <option value="+81">+81 (Japan)</option>
                                                    <option value="+86">+86 (China)</option>
                                                    <option value="+49">+49 (Germany)</option>
                                                    <option value="+33">+33 (France)</option>
                                                    <option value="+61">+61 (Australia)</option>
                                                    <option value="+82">+82 (South Korea)</option>

                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="">Email<span class="required"></span></label>
                                                <input type="text" class="form-control" name="email" id="email">

                                            </div>
                                            <div class="from-group">
                                                <label for="">DOB</label><br>
                                                <input type="date" name="date_of_birth" id="bod" class="form-control">

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="">Last Name<span class="required"></span></label>
                                                <input type="text" class="form-control" name="last_name" id="last_name">

                                            </div>
                                            <div class="form-group">
                                                <label for="">Mobile<span class="required"></span></label>
                                                <input type="text" class="form-control" name="mobile" id="mobile">

                                            </div>
                                            <div class="form-group">
                                                <label for="">Gender</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        value="male">
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        value="female">
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                            </div>
                                            <div class="error" id="gender-error"></div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>PARTICPANT ADDRESS DETAILS</p>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for=""> Country</label><br>
                                            <select name="country" class="form-control" id="country">

                                                <option value="">--please select--</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="IN">INDIA</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>

                                            </select>

                                        </div>

                                    </div>
                                    <hr>
                                    <p>PARTICPANT PHYSICAL DETAILS</p>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Do you want Medal?</label>

                                                <select name="medal" class="form-control" id="medal">

                                                    <option value="">--please select--</option>
                                                    <option value="yes">YES</option>
                                                    <option value="no">NO</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">


                                                <label for="">Do you want T-Shirt?</label>

                                                <select name="t_shirt" class="form-control" id="t_shirt">

                                                    <option value="">--please select--</option>
                                                    <option value="yes">YES</option>
                                                    <option value="no">NO</option>
                                                </select>

                                            </div>
                                            <div id="t_shirt_div" style="display:none">
                                                <div class="form-group">
                                                    <label for="size">Select Size:</label><br />
                                                    <select name="shirt_size" id="shirt_size" class="form-control">
                                                        <option value="large">Large</option>
                                                        <option value="medium">Medium</option>
                                                        <option value="small">Small</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <p>ADDITIONAL INFORMATION</p>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label> Emergency Contact Number </lable>

                                                    <input type="text" class="form-control" name="emergency_number"
                                                        id="emergency_number">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="backenderrors"></div>

                                    <div class="mt-3 text-center  gap-1">

                                        <button class="btn btn-danger" id="register_submit"
                                            type="button">SUBMIT</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                crossorigin="anonymous"></script>
            <script>
                $("#register_submit").click(function () {


                    if ($("#myform").valid()) {


                        var fname = $('#first_name').val();
                        var lname = $('#last_name').val();
                        var mobile = $('#mobile').val();
                        var email = $('#email').val();
                        var mobile = $('#mobile').val();
                        var bod = $('#bod').val();
                        var medal = $('#medal').val();
                        var t_shirt = $('#t_shirt').val();
                        var country = $('#country').val();
                        var emergency_number = $('#emergency_number').val();


                        if (t_shirt === "yes") {

                            var shirt_size = $('#shirt_size').val();

                        } else {
                            var shirt_size = null;


                        }


                        var formData = {
                            first_name: fname,
                            last_name: lname,
                            mobile: mobile,
                            email: email,
                            date_of_birth: bod,
                            medal: medal,
                            t_shirt: t_shirt,
                            shirt_size: shirt_size,
                            country: country,
                            emergency_number: emergency_number


                        };
                        $.ajaxSetup({
                            headers: {
                                "X-CSRF-TOKEN": "{{csrf_token()}}",
                            },
                        });

                        $.ajax({
                            type: "POST",


                            url: "{{route('form_submit')}}",
                            dataType: 'json',
                            data: formData,
                            success: function (response) {
                                console.log("Data sent successfully:", response);
                                $("#backenderrors").html("");
                                if (response.error == "true") {
                                    $("#backenderrors").html(response.message).css("color", "red");
                                } else {
                                    $("#backenderrors").html(response.message).css("color", "green")
                                }
                            },
                            error: function (error) {
                                console.error("Error sending data:", error);
                                $("#backenderrors").html("");
                                if (error.responseJSON.error == "true") {
                                    $("#backenderrors").html(error.responseJSON.message).css("color",
                                        "red");
                                }
                            }
                        });

                    }



                });
          
                $(document).ready(function () {
                    $.validator.addMethod("genderSelected", function (value, element) {
                        return $("input[name='gender']:checked").length > 0;
                    }, "Please select your gender");

                    $.validator.addMethod("validDOB", function (value, element) {
                        var selectedDate = new Date(value);
                        var currentDate = new Date();
                        var minAgeDate = new Date();
                        minAgeDate.setFullYear(minAgeDate.getFullYear() - 18);

                        return selectedDate <= minAgeDate;
                    }, "You must be at least 18 years old.");

                    $("#myform").validate({
                        rules: {
                            first_name: "required",
                            last_name: "required",
                            country_code: "required",
                            mobile: "required",
                            email: {
                                required: true,
                                // email: true
                            },
                            medal: "required",
                            t_shirt: "required",
                            gender: {
                                genderSelected: true,
                            },
                            date_of_birth: {
                                required: true,
                                validDOB: true
                            },
                            country: "required",
                            emergency_number: "required",

                        },
                        messages: {
                            first_name: "Please enter your first name",
                            last_name: "Please enter your last name",
                            country_code: "Please select a country code",
                            mobile: "Please enter your mobile number",
                            email: {
                                required: "Please enter your email address",
                                email: "Please enter a valid email address"
                            },
                            medal: "Please select an option for medal",
                            t_shirt: "Please select an option for T-shirt",
                            gender: "Please select your gender",
                            date_of_birth: {
                                required: "Please enter your date of birth",
                                date: "Please enter a valid date"
                            },
                            country: "Plese Select Country",
                            emergency_number: "Please Enter Emergency Number"
                        },
                        errorPlacement: function (error, element) {
                            if (element.attr("name") === "gender") {
                                error.appendTo("#gender-error");
                            } else {
                                error.insertAfter(element);
                            }
                        }
                    });


                    $("#t_shirt").change(function () {
                        if ($(this).val() === "yes") {
                            $("#t_shirt_div").show();

                        } else {
                            $("#t_shirt_div").hide();
                        }
                    });


                    $("#t_shirt").trigger("change");
                });
            </script>

</body>

</html>