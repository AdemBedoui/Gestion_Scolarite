<?php
include "db_con.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Projet d'integration</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Projet d'integration
    </nav>

    <div class="container">
        <?php
        if (isset($_GET["msg"])) {
            $msg = $_GET["msg"];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        ?>
        <a href="add.php" class="btn btn-dark mb-3">Ajout</a>

        <h2>Dossieretud</h2>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Num dossier</th>
                    <th scope="col">Motif</th>
                    <th scope="col">Matricule de l'Étudiant</th>
                    <th scope="col">Type de la Pièce</th>
                    <th scope="col">Date de la Pièce</th>
                    <th scope="col">Session</th>
                    <th scope="col">Nom du Fichier de la Pièce</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT d.Ndossier, d.Motif, d.MatEtud, d.TypePiece, d.DatePiece, s.Annee AS SessionAnnee,p.LibPiece AS LibPiece, d.nomfichierpiece FROM dossieretud d 
                        LEFT JOIN session s ON d.Session = s.Numero
                        LEFT JOIN piece p ON d.TypePiece = p.TypePiece";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["Ndossier"] ?></td>
                        <td><?php echo $row["Motif"] ?></td>
                        <td><?php echo $row["MatEtud"] ?></td>
                        <td><?php echo $row["LibPiece"] ?></td>
                        <td><?php echo $row["DatePiece"] ?></td>
                        <td><?php echo $row["SessionAnnee"] ?></td>
                        <td><?php echo $row["nomfichierpiece"] ?></td>
                        <td>
                            <a href="edit.php?Ndossier=<?php echo $row["Ndossier"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete.php?Ndossier=<?php echo $row["Ndossier"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
