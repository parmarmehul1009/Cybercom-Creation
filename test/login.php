<?php

use Phppot\database;

// include 'validation.js';
require 'lib/DataSource.php';
$srv = new database();



$query = 'select * from user';
$student = $srv->select($query);
$number_of_result = $srv->num_rows($student);

while ($record = $srv->fetch($student)) {
    if (isset($_REQUEST['send']) and $_REQUEST['send'] == 'Login') {
        if ($_POST['email'] == $record['email'] && $_POST['password'] == $record['password']) {
            $_SESSION['id'] = $record['id'];
            header('location:blogpost.php');
        } else {
            header('location:login.php');
        }
    }
}

// $record = $srv->fetch($student);
// print_r($record);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="mt-5 text-center">
        <h3>Login</h3>
    </div>
    <div class="login container">
        <form class="row" name="frmContact" id="frmContact" method="post" action="" enctype="multipart/form-data" novalidate>
            <div class="form-group col-md-7">
                <label>Email</label> <span id="email-info" class="invalid-feedback"></span>
                <div class="input-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" required>
                </div>
            </div>
            <div class="form-group col-md-7">
                <label>Password</label> <span id="password-info" class=" invalid-feedback"></span>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="" required>
                </div>
            </div>
            <div class="form-group col-md-7">
                <input type="submit" name="send" class="btn btn-success" value="Login" />
            </div>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
<?php
echo '<script type="text/javascript" src="login.js"></script>';
?>