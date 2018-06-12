<?php

$l=mysqli_connect("localhost:6306","student2","pass2","student2");
$message = mysqli_escape_string($l,$_POST['message']);
$email = mysqli_escape_string($l,$_POST['email']);

?>
