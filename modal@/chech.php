<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['letter'];
    echo $name."<br />".$email."<br />".$mobile."<br />".$message."<br />";
}
?>