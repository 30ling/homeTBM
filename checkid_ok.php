<?php
include('./connect.php');

$userid = $_GET['userid'];
$sql = "select * from userTB where userid='$userid'";
$rst = mysqli_query($con, $sql);
$data = mysqli_fetch_array($rst);

echo isset($data['useridx']) ? "X" : "O";

?>