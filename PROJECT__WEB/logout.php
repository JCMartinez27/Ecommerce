<?php
session_start();

unset($_SESSION["useid"]);

unset($_SESSION["name"]);

header("location:index.php");



?>