<?php

use Phppot\database;

// include 'validation.js';
include 'navbar.php';
require 'lib/DataSource.php';
$srv = new database();

if (isset($_REQUEST['delete'])) {
    $query = "delete from webapp where id=" . $_REQUEST['delete'];
    echo '<script type="text/javascript">popup("Record Deleted..");</script>';
    $srv->delete($query);
    header("location:contacts.php");
}

// if (isset($_SESSION['message'])) {
//     echo '<script type="text/javascript">alert("' . $_SESSION['message'] . '");</script>';
//     unset($_SESSION['message']);
// }





$query = 'select * from webapp';
$student = $srv->select($query);
$number_of_result = $srv->num_rows($student);

// $record = $srv->fetch($student);
// print_r($record);
?>
<div class="container">
    <div id="title">
        <b>Read Contacts</b>
        <hr style="border-color: black;">
    </div>
    <div class="first-btn">
        <a href="create.php" class="btn btn-success btn-md active" role="button">Careat Contact</a>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($record = $srv->fetch($student)) {
                    echo "<tr>";
                    echo "<td scope='row'>" . $record['id'] . "</td>";
                    echo "<td>" . $record['name'] . "</td>";
                    echo "<td>" . $record['email'] . "</td>";
                    echo "<td>" . $record['phone'] . "</td>";
                    echo "<td>" . $record['title1'] . "</td>";
                    echo "<td>" . $record['created'] . "</td>";
                    echo '<td>
                        <a class="btn btn-primary btn-sm" href="update.php?id=' . $record['id'] . '"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-sm" href="contacts.php?delete=' . $record['id'] . '"><i class="fas fa-trash-alt"></i></a>
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