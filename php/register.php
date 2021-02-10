<?php

use Phppot\database;

// include 'validation.js';
require 'lib/DataSource.php';

$srv = new database();
if (isset($_REQUEST['send']) and $_REQUEST['send'] == 'Register') {
    array_pop($_POST);
    $fields = implode(",", array_keys($_POST));
    $values = "'" . implode("','", array_values($_POST)) . "'";
    // $fields = "name,email,phone,title1,created";
    // $values = "'" . $_REQUEST['userName'] . "','" . $_REQUEST['userEmail'] . "','" . $_REQUEST['phone'] . "','" . $_REQUEST['title1'] . "','" . $_REQUEST['created'] . "'";
    $srv->insert('user', $fields, $values);
    // $_SESSION['message'] = "Record Inserted...";
    header('location:login.php');
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>

    <div class="container main-div">
        <div>
            <h3>registration</h3>
        </div>
        <div class="register">
            <form name="frmContact" id="frmContact" method="post" action="" enctype="multipart/form-data" novalidate>
                <div class="form-group col-md-7">
                    <label>Prefix</label> <span id="prefix-info" class=" invalid-feedback"></span>
                    <div class="input-group">
                        <select name="prefix" id="prefix">
                            <option value="Mr" selected>Mr</option>
                            <option value="Miss">Miss</option>
                            <option value="Mrs">Mrs</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-7">
                    <label>First Name</label> <span id="first_name-info" class="invalid-feedback"></span>
                    <div class="input-group">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name" required>
                    </div>
                </div>
                <div class="form-group col-md-7">
                    <label>Last Name</label> <span id="last_name-info" class="invalid-feedback"></span>
                    <div class="input-group">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter first name" required>
                    </div>
                </div>
                <div class="form-group col-md-7">
                    <label>Email</label> <span id="email-info" class="invalid-feedback"></span>
                    <div class="input-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" required>
                    </div>
                </div>
                <div class="form-group col-md-7">
                    <label>Mobile Number</label> <span id="mobile-info" class="invalid-feedback"></span>
                    <div class="input-group">
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="1234567890" required>
                    </div>
                </div>
                <div class="form-group col-md-7">
                    <label>Password</label> <span id="password-info" class=" invalid-feedback"></span>
                    <div class="input-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="form-group col-md-7">
                    <label>Confirm Password</label> <span id="cpassword-info" class=" invalid-feedback"></span>
                    <div class="input-group">
                        <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="form-group col-md-7">
                    <label>Information</label> <span id="information-info" class=" invalid-feedback"></span>
                    <div class="input-group">
                        <textarea name="information" id="information" cols="50" rows="3"></textarea>
                    </div>
                </div>
                <div class="col">
                    <input type="submit" name="send" class="btn btn-success" value="Register" />
                </div>
            </form>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
echo '<script type="text/javascript" src="register.js"></script>';
?>