<?php
session_start();
print_r($_SESSION["todo_list"][$_POST["id"]]);
?>