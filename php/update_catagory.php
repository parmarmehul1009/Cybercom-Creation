<?php

use Phppot\database;

// include 'validation.js';
include 'blogcatagory.php';
require 'lib/DataSource.php';

$srv = new database();


$query = 'select * from category';
$catagory = $srv->select($query);
$query = "select * from category where id=" . $_REQUEST['id'];
$student = $srv->select($query);
$record = $srv->fetch($student);
if (isset($_REQUEST['send']) and $_REQUEST['send'] == 'Update') {
    array_pop($_POST);
    $sets = "";
    foreach ($_POST as $k => $v) {
        $sets = $sets . $k . "='" . $v . "',";
    }
    $sets = rtrim($sets, ",");
    $fields = implode(",", array_keys($_POST));
    echo $sets;
    echo $fields;
    $values = "'" . implode("','", array_values($_POST)) . "'";
    $srv->update('category', $sets, "id=" . $_REQUEST['id']);
    header('location:maincatagory.php');
}
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
                        <label>meta_title</label> <span id="meta_title-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="employee" value="<?php echo $record['meta_title'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>parent_category</label> <span id="parent_category_id-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <select name="parent_category_id" id="category"><?php
                                                                            while ($record = $srv->fetch($catagory)) {
                                                                                echo '<option value="' . $record['id'] . '">' . $record['title'] . '</option>';
                                                                            }
                                                                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>image</label> <span id="image-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="file" name="image" id="image" class="form-control" placeholder="employee" value="<?php echo $record['image'] ?>" required>
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
echo '<script type="text/javascript" src=""></script>';
?>