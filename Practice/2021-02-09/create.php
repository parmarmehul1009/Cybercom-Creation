<?php

use Phppot\database;

// include 'validation.js';
include 'navbar.php';
require 'lib/DataSource.php';

$srv = new database();
if (isset($_REQUEST['send']) and $_REQUEST['send'] == 'Create') {
    array_pop($_POST);
    $fields = implode(",", array_keys($_POST));
    $values = "'" . implode("','", array_values($_POST)) . "'";
    // $fields = "name,email,phone,title1,created";
    // $values = "'" . $_REQUEST['userName'] . "','" . $_REQUEST['userEmail'] . "','" . $_REQUEST['phone'] . "','" . $_REQUEST['title1'] . "','" . $_REQUEST['created'] . "'";
    $srv->insert('webapp', $fields, $values);
    // $_SESSION['message'] = "Record Inserted...";
    header('location:contacts.php');
}

?>

<div class="container">
    <div id="title">
        <b>Create Contact</b>
    </div>
    <hr style="border-color: black;">
    <div class="first-btn">
        <div class="container">
            <form name="frmContact" id="frmContact" method="post" action="" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="form-group col-md-5">
                        <label>Name</label> <span id="userName-info" class="invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" id="userName" placeholder="Enter name" required>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Email</label> <span id="userEmail-info" class="invalid-feedback"></span>
                        <div class="input-group">
                            <input type="email" name="email" id="userEmail" class="form-control" placeholder="example@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Phone</label> <span id="phone-info" class="invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="1234567890" required>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Title</label> <span id="title1-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="title1" id="title1" class="form-control" placeholder="employee" required>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Created</label> <span id="created-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="date" name="created" id="created" class="form-control" placeholder="date" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" name="send" class="btn btn-success" value="Create" />
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<?php
echo '<script type="text/javascript" src="validation.js"></script>';
?>