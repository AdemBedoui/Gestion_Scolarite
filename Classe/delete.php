<?php
include "db_con.php";
$CodClasse = $_GET["CodClasse"];

$sql = "DELETE FROM `classe` WHERE CodClasse = '$CodClasse'";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>
