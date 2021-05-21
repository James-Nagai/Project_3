<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['Name']) && isset($_POST['Address']) && isset($_POST['MenuOrdered']) && isset($_POST['PhoneNumber']) && isset($_POST['ExtraInfo'])) {
    if ($db->dbConnect()) {
        if ($db->order("orders", $_POST['Name'], $_POST['Address'], $_POST['MenuOrdered'], $_POST['PhoneNumber'], $_POST['ExtraInfo'])) {
            echo "Order is a Success";
        } else echo "Order Failed";
    } else echo "Error: Database connection";
} else echo "All fields are very required";
?>