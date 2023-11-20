<?php
require_once "db.php";

$MatriculeProf = $DateDeb = $DateFin = "";
$id = $param_id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = trim($_POST["id"]);
    $MatriculeProf = $_POST["MatriculeProf"];
    $DateDeb = $_POST["DateDeb"];
    $DateFin = $_POST["DateFin"];

    // Check if MatriculeProf already exists
    $checkSql = "SELECT NumConge FROM conges WHERE MatriculeProf = ? AND NumConge <> ?";
    if ($checkStmt = mysqli_prepare($link, $checkSql)) {
        mysqli_stmt_bind_param($checkStmt, "si", $MatriculeProf, $id);
        mysqli_stmt_execute($checkStmt);
        mysqli_stmt_store_result($checkStmt);

        if (mysqli_stmt_num_rows($checkStmt) > 0) {
            echo "A record with this MatriculeProf already exists.";
        } else {
            // Proceed with the update
            if (strtotime($DateFin) <= strtotime($DateDeb)) {
                echo "DateFin must be greater than DateDeb.";
            } else {
                $updateSql = "UPDATE conges SET MatriculeProf = ?, DateDeb = ?, DateFin = ? WHERE NumConge = ?";
                if ($updateStmt = mysqli_prepare($link, $updateSql)) {
                    mysqli_stmt_bind_param($updateStmt, "sssi", $MatriculeProf, $DateDeb, $DateFin, $id);
                    if (mysqli_stmt_execute($updateStmt)) {
                        header("location: index.php");
                        exit();
                    } else {
                        echo "Something went wrong. Please try again later.";
                    }
                    mysqli_stmt_close($updateStmt);
                }
            }
        }
        mysqli_stmt_close($checkStmt);
    }

    // Close connection
    mysqli_close($link);
}
?>
