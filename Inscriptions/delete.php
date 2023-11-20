<?php
include "db_con.php";
$NumIns = $_GET["NumIns"];
$sql = "DELETE FROM `inscriptions` WHERE  NumIns = '$NumIns'";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}