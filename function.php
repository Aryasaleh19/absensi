<?php
$conn = mysqli_connect("localhost", "root", "", "stram");


$siaran = mysqli_query($conn, "SELECT * FROM saluran");
