<?php
    session_start();
    $txt = "";
    $cnt = 0;
    foreach ($_SESSION["todo_list"] as $value) {
        $txt .= "<li><span>".$value.
        "</span><button class='edit' onclick='edit_todo(".$cnt.
        ")'>  Edit</button><button class='delete' onclick='delete_todo("
        .$cnt++.")'>Delete</button></li>";
    }
    echo $txt;
?>
<!-- DISPLAY TODO LIST  -->
