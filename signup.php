<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("users", $_POST['fullname'], $_POST['username'], $_POST['email'], $_POST['password'])) {
            echo "reussite";
        } else echo "echec";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
