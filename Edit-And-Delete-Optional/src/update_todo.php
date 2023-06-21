<?php
session_start();
print_r($_POST);
$_SESSION["todo_list"][$_POST["values"]] = $_POST["id"];
?>
<!-- UPDATE WORK HERE  -->