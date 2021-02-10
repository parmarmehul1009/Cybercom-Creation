<?php

use Phppot\database;

// include 'validation.js';
include 'blogcatagory.php';
require 'lib/DataSource.php';

$srv = new database();



$query = "select * from blog_post where id=" . $_REQUEST['id'];
$student = $srv->select($query);
$record = $srv->fetch($student);
// print_r($record);
// echo $record['name'];
if (isset($_REQUEST['send']) and $_REQUEST['send'] == 'Update') {
    array_pop($_POST);
    $sets = "";
    foreach ($_POST as $k => $v) {
        $sets = $sets . $k . "='" . $v . "',";
    }
    $sets = rtrim($sets, ",");
    // echo $sets;
    // die();
    $fields = implode(",", array_keys($_POST));
    $values = "'" . implode("','", array_values($_POST)) . "'";
    // $fields = "name,email,phone,title1,created";
    // $values = "'" . $_REQUEST['userName'] . "','" . $_REQUEST['userEmail'] . "','" . $_REQUEST['phone'] . "','" . $_REQUEST['title1'] . "','" . $_REQUEST['created'] . "'";
    $srv->update('blog_post', $sets, "id=" . $_REQUEST['id']);
    // $_SESSION['message'] = "Record Inserted...";
    header('location:mainpost.php');
}

$query = 'select * from category';
$student1 = $srv->select($query);
?>
<div class="container">
    <div id="title">
        <b>Update Catagory</b>
    </div>
    <hr style="border-color: black;">
    <div class="first-btn">
        <div class="container">
            <form name="frmContact" id="frmContact" method="post" action="" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Title</label> <span id="title-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="title" id="title" class="form-control" placeholder="employee" value="<?php echo $record['title'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>content</label> <span id="content-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="content" id="content" class="form-control" placeholder="employee" value="<?php echo $record['content'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>url</label> <span id="url-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="url" id="url" class="form-control" placeholder="employee" value="<?php echo $record['url'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>published_at</label> <span id="published_at-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="date" name="published_at" id="published_at" class="form-control" placeholder="employee" value="<?php echo $record['published_at'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>category</label> <span id="category-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <select name="category" id=""><?php
                                                            while ($record = $srv->fetch($student1)) {
                                                                echo '<option value="' . $record['title'] . '">' . $record['title'] . '</option>';
                                                            }
                                                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>image</label> <span id="image-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="file" name="image" id="image" class="form-control" placeholder="employee" value="<?php echo $record['title'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" name="send" class="btn btn-success" value="Update" />
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<?php
echo '<script type="text/javascript" src="validation.js"></script>';
?>