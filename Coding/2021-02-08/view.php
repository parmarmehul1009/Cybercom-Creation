<?php
$name = $_POST['name'];
$password = $_POST['password'];
$address = $_POST['address'];
$game = $_POST['game'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$file = $_POST['file'];

echo 'name=' . $name;
echo '<br>';
echo 'password=' . $password;
echo '<br>';
echo 'address=' . $address;
echo '<br>';
echo 'game=';
foreach ($_POST['game'] as $check) {
    echo $check;
}
echo '<br>';
echo 'gender=' . $gender;
echo '<br>';
echo 'age=' . $age;
echo '<br>';
echo 'file=' . $file;
