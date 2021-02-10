<?php

use Phppot\database;

// include 'validation.js';
include 'blogcatagory.php';
require 'lib/DataSource.php';
$srv = new database();

if (isset($_REQUEST['delete'])) {
    $query = "delete from category where id=" . $_REQUEST['delete'];
    echo '<script type="text/javascript">popup("Record Deleted..");</script>';
    $srv->delete($query);
    header("location:maincatagory.php");
}

// if (isset($_SESSION['message'])) {
//     echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
//     unset($_SESSION['message']);
// }





$query = 'select * from category';
$student = $srv->select($query);
$number_of_result = $srv->num_rows($student);

// $record = $srv->fetch($student);
// print_r($record);
?>
<div class="container">
    <div id="title">
        <b>Blog Catagory</b>
        <hr style="border-color: black;">
    </div>
    <div class="first-btn">
        <a href="create_catagory.php" class="btn btn-success btn-md active" role="button">Add Catagory</a>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">image</th>
                    <th scope="col">meta_title</th>
                    <th scope="col">created_at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($record = $srv->fetch($student)) {
                    $url = 'catagory/' . $record['image'];
                    echo "<tr>";
                    echo "<td scope='row'>" . $record['id'] . "</td>";
                    echo '<td><img style="width: 50px; height:50px" src="' . $url . '" alt="hello"></td>';
                    echo "<td>" . $record['meta_title'] . "</td>";
                    echo "<td>" . $record['created_at'] . "</td>";
                    echo '<td>
                        <a class="btn btn-primary btn-sm" href="update_catagory.php?id=' . $record['id'] . '"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-sm" href="maincatagory.php?delete=' . $record['id'] . '"><i class="fas fa-trash-alt"></i></a>
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