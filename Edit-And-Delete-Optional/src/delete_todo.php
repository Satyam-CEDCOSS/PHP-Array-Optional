<?php
session_start();
array_splice($_SESSION["todo_list"],$_POST["id"],1);
?>
<!-- TODO LIST DELETE  -->