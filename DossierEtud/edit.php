<?php
include "db_con.php";
$Ndossier = $_GET["Ndossier"];

if (isset($_POST["submit"])) {
    //$Ndossier = $_POST['Ndossier'];
    $Motif = $_POST['Motif'];
    $MatEtud = $_POST['MatEtud'];
    $TypePiece = $_POST['TypePiece'];
    $DatePiece = $_POST['DatePiece'];
    $Session = $_POST['Session'];
    $nomfichierpiece = $_POST['nomfichierpiece'];
  $sql = "UPDATE `dossieretud` SET `Motif`='$Motif',`MatEtud`='$MatEtud',`TypePiece`='$TypePiece',`DatePiece`='$DatePiece',`Session`='$Session',`nomfichierpiece`='$nomfichierpiece' WHERE  Ndossier = $Ndossier";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

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
    <div class="text-center mb-4">
      <h3>Modification des informations</h3>
      <p class="text-muted">Cliquez sur Modifier après avoir modifié des informations</p>
    </div>

    <?php
    $sql = "SELECT * FROM `dossieretud` WHERE Ndossier = $Ndossier";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
          <label class="form-label">Motif : </label>
                  <input type="text" class="form-control" name="Motif" value="<?php echo $row['Motif'] ?>">
          </div>

          <div class="col">
          <label class="form-label">Matricule de l'Étudiant : </label>
               <input type="text" class="form-control" name="MatEtud" value="<?php echo $row['MatEtud'] ?>">
          </div>
        </div>

        <div class="mb-3">
        <label class="form-label">Type de la Pièce : </label>
               <input type="number" class="form-control" name="TypePiece" value="<?php echo $row['TypePiece'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">Date de la Pièce : </label>
               <input type="datetime-local" class="form-control" name="DatePiece" value="<?php echo $row['DatePiece'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">Session : </label>
               <input type="number" class="form-control" name="Session" value="<?php echo $row['Session'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">Nom du Fichier de la Pièce : </label>
               <input type="text" class="form-control" name="nomfichierpiece" value="<?php echo $row['nomfichierpiece'] ?>">
        </div>


        <div>
          <button type="submit" class="btn btn-success" name="submit">Modifier</button>
          <a href="index.php" class="btn btn-danger">Annuler</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>