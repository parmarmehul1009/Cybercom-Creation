<?php

use Phppot\database;

// include 'validation.js';
include 'blogcatagory.php';
require 'lib/DataSource.php';
$srv = new database();

$query = 'select * from category';
$catagory = $srv->select($query);
$flag = false;
if (isset($_REQUEST['send']) and $_REQUEST['send'] == 'Create') {
    array_pop($_POST);
    while ($record = $srv->fetch($catagory)) {
        if ($_POST['url'] == $record['url']) {
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            die();
        }
    };
    $fields = implode(",", array_keys($_POST)) . ',image';
    $values = "'" . $_REQUEST['title'] . "','" . $_REQUEST['content'] . "','" . $_REQUEST['url'] . "','" . $_REQUEST['meta_title'] . "','" . $_REQUEST['parent_category_id'] . "','" . $_REQUEST['created_at'] . "','" . $_FILES["image"]["name"] . "'";
    $filename = $_FILES["image"]["name"];
    $file_loc = $_FILES['image']['tmp_name'];
    $folder = "catagory/";
    move_uploaded_file($file_loc, $folder . $filename);
    $srv->insert('category', $fields, $values);
    header('location:maincatagory.php');
}

?>

<div class="container">
    <div id="title">
        <b>Add Catagory</b>
    </div>
    <hr style="border-color: black;">
    <div class="first-btn">
        <div class="container">
            <form name="frmContact" id="frmContact" method="post" action="" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Title</label> <span id="title-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="title" id="title" class="form-control" placeholder="title" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>content</label> <span id="content-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="content" id="content" class="form-control" placeholder="content" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>url</label> <span id="url-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="url" id="url" class="form-control" placeholder="url" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>meta_title</label> <span id="meta_title-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="meta_title" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>parent_category</label> <span id="parent_category_id-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <select name="parent_category_id" id="category"><?php
                                                                            while ($record = $srv->fetch($catagory)) {
                                                                                echo '<option value="' . $record['title'] . '">' . $record['title'] . '</option>';
                                                                            }
                                                                            ?>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="created_at" id="image" class="form-control" placeholder="employee" value="<?php echo Date("Y-m-d h:i:s"); ?>" required>
                    <div class="form-group col-md-6">
                        <label>image</label> <span id="image-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="file" name="image" id="image" class="form-control" placeholder="employee" required>
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
echo '<script type="text/javascript" src="create_catagory.js"></script>';
?>