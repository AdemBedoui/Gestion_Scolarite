<?php
// Include config file
require_once "db.php";

// Check if search value is set
if(isset($_POST['searchValue'])){
    // Sanitize the search value to prevent SQL injection
    $searchValue = mysqli_real_escape_string($link, $_POST['searchValue']);
    
    // SQL query to get filtered results
    $sql = "SELECT c.NumConge, c.MatriculeProf, p.Nom, p.Prénom, p.`CIN ou Passeport`, c.DateDeb, c.DateFin FROM conges c
            JOIN Prof p ON c.MatriculeProf = p.`Matricule Prof`
            WHERE p.Nom LIKE '%$searchValue%' OR p.Prénom LIKE '%$searchValue%' OR p.`CIN ou Passeport` LIKE '%$searchValue%'
            ORDER BY c.NumConge";
} else {
    // SQL query to get all results
    $sql = "SELECT c.NumConge, c.MatriculeProf, p.Nom, p.Prénom, p.`CIN ou Passeport`, c.DateDeb, c.DateFin FROM conges c
            JOIN Prof p ON c.MatriculeProf = p.`Matricule Prof`
            ORDER BY c.NumConge";
}

// Execute the query
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>MatriculeProf</th>";
        echo "<th>Nom</th>";
        echo "<th>Prénom</th>";
        echo "<th>CIN ou Passeport</th>";
        echo "<th>DateDeb</th>";
        echo "<th>DateFin</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['NumConge'] . "</td>";
            echo "<td>" . $row['MatriculeProf'] . "</td>";
            echo "<td>" . $row['Nom'] . "</td>";
            echo "<td>" . $row['Prénom'] . "</td>";
            echo "<td>" . $row['CIN ou Passeport'] . "</td>";
            echo "<td>" . $row['DateDeb'] . "</td>";
            echo "<td>" . $row['DateFin'] . "</td>";
            echo "<td>";
            echo '<a href="read.php?id=' . $row['NumConge'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
            echo '<a href="update.php?id=' . $row['NumConge'] . '" class="mr-3" title="Update Record" data-toggle="tooltip" disabled><span class="fa fa-pencil"></span></a>';
            echo '<a href="delete.php?id=' . $row['NumConge'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else {
    echo "Oops! Something went wrong. Please try again later.";
}

// Close connection
mysqli_close($link);
?>
