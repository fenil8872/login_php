<?php
include('connection.php');
$id = $_GET['deleteId']; // This gets the id parameter from the URL
$delete="DELETE FROM `tbl_state`  WHERE id='$id'";
$result=mysqli_query($conn,$delete);
header('location:read.php');
?>