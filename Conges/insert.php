<?php
// Include config file
require_once "db.php";

// Define variables and initialize with empty values
$MatriculeProf = $DateDeb = $DateFin = "";

// Processing __
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $MatriculeProf = $_POST["MatriculeProf"];
    $DateDeb = $_POST["DateDeb"];
    $DateFin = $_POST["DateFin"];

    // Check if MatriculeProf already exists
    $checkSql = "SELECT NumConge FROM conges WHERE MatriculeProf = ?";
    if ($checkStmt = mysqli_prepare($link, $checkSql)) {
        mysqli_stmt_bind_param($checkStmt, "s", $MatriculeProf);
        mysqli_stmt_execute($checkStmt);
        mysqli_stmt_store_result($checkStmt);

        if (mysqli_stmt_num_rows($checkStmt) > 0) {
            echo '<div class="alert alert-danger">A record with this MatriculeProf already exists.</div>';
        } else {
            // Proceed with the insert
            $timestampDeb = strtotime($DateDeb);
            $timestampFin = strtotime($DateFin);

            if ($timestampFin <= $timestampDeb) {
                echo '<div class="alert alert-danger">DateFin must be greater than DateDeb.</div>';
            } else {
                // Prepare an INSERT statement
                $insertSql = "INSERT INTO conges (MatriculeProf, DateDeb, DateFin) VALUES (?, ?, ?)";
                if ($insertStmt = mysqli_prepare($link, $insertSql)) {
                    mysqli_stmt_bind_param($insertStmt, "sss", $MatriculeProf, $DateDeb, $DateFin);
                    if (mysqli_stmt_execute($insertStmt)) {
                        header("location: index.php");
                        exit();
                    } else {
                        echo "Something went wrong. Please try again later.";
                    }
                    mysqli_stmt_close($insertStmt);
                }
            }
        }
        mysqli_stmt_close($checkStmt);
    }

    // Close connection
    mysqli_close($link);
}
?>
