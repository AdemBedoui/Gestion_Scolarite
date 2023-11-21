<?php
include "db_con.php";
$Ndossier = $_GET["Ndossier"];
$sql = "DELETE FROM `dossieretud` WHERE  Ndossier = $Ndossier";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}