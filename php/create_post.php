<?php

use Phppot\database;

// include 'validation.js';
include 'blogpost.php';
require 'lib/DataSource.php';

$srv = new database();
$query = 'select * from blog_post';
$catagory = $srv->select($query);
$number_of_result = $srv->num_rows($catagory);
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
    $values = "'" . $_REQUEST['title'] . "','" . $_REQUEST['content'] . "','" . $_REQUEST['url'] . "','" . $_REQUEST['published_at'] . "','" . $_REQUEST['category'] . "','" . $_FILES["image"]["name"] . "'";
    // $values = "'" . implode("','", array_values($_POST)) . "'";
    $filename = $_FILES["image"]["name"];
    echo $filename;
    // $srv->update1('blog_post', "image='" . $filename . "'", "url=" . $_POST['url']);
    $file_loc = $_FILES['image']['tmp_name'];
    $folder = "blogs/";
    move_uploaded_file($file_loc, $folder . $filename);
    $srv->insert('blog_post', $fields, $values);
    header('location:mainpost.php');
}
$query = 'select * from category';
$student = $srv->select($query);
?>

<div class="container">
    <div id="title">
        <b>Create Post</b>
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
                            <input type="url" name="url" id="url" class="form-control" placeholder="url" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>published_at</label> <span id="published_at-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="datetime-local" name="published_at" id="published_at" class="form-control" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>category</label> <span id="category-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <select name="category" id="category"><?php
                                                                    while ($record = $srv->fetch($student)) {
                                                                        echo '<option value="' . $record['title'] . '">' . $record['title'] . '</option>';
                                                                    }
                                                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>image</label> <span id="image-info" class=" invalid-feedback"></span>
                        <div class="input-group">
                            <input type="file" name="image" id="image" class="form-control" placeholder="image" required>
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
echo '<script type="text/javascript" src="create_post.js"></script>';
?>