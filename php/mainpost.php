<?php

use Phppot\database;

// include 'validation.js';
include 'blogpost.php';
require 'lib/DataSource.php';
$srv = new database();

if (isset($_REQUEST['delete'])) {
    $query = "delete from blog_post where id=" . $_REQUEST['delete'];
    echo '<script type="text/javascript">popup("Record Deleted..");</script>';
    $srv->delete($query);
    header("location:mainpost.php");
}

// if (isset($_SESSION['message'])) {
//     echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
//     unset($_SESSION['message']);
// }





$query = 'select * from blog_post';
$student = $srv->select($query);
$number_of_result = $srv->num_rows($student);

// $record = $srv->fetch($student);
// print_r($record);
?>
<div class="container">
    <div id="title">
        <b>Blog Post</b>
        <hr style="border-color: black;">
    </div>
    <div class="first-btn">
        <a href="create_post.php" class="btn btn-success btn-md active" role="button">Add Post</a>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">category Name</th>
                    <th scope="col">title</th>
                    <th scope="col">published_at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($record = $srv->fetch($student)) {
                    echo "<tr>";
                    echo "<td scope='row'>" . $record['id'] . "</td>";
                    echo "<td>" . $record['category'] . "</td>";
                    echo "<td>" . $record['title'] . "</td>";
                    echo "<td>" . $record['published_at'] . "</td>";
                    echo '<td>
                        <a class="btn btn-primary btn-sm" href="update_post.php?id=' . $record['id'] . '"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-sm" href="mainpost.php?delete=' . $record['id'] . '"><i class="fas fa-trash-alt"></i></a>
                    </td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7">Total records: <b><?php echo $number_of_result ?></b></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>