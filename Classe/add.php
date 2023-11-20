<?php
include "db_con.php";

if (isset($_POST["submit"])) {
    $CodClasse = $_POST['CodClasse'];
    $IntClasse = $_POST['IntClasse'];
    $Département = $_POST['Département'];
    $Optionc = $_POST['Optionc'];
    $Niveau = $_POST['Niveau'];
    $IntCalsseArabB = $_POST['IntCalsseArabB'];
    $OptionAaraB = $_POST['OptionAaraB'];
    $DepartementAaraB = $_POST['DepartementAaraB'];
    $NiveauAaraB = $_POST['NiveauAaraB'];
    $CodeEtape = $_POST['CodeEtape'];
    $CodeSalima = $_POST['CodeSalima'];

    // Convert the CodClasse input to lowercase for case-insensitive comparison
    $CodClasse = strtolower($CodClasse);

    // Check if the CodClasse already exists in the database
    $checkSql = "SELECT CodClasse FROM classe WHERE LOWER(CodClasse) = '$CodClasse'";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) > 0) {
        $msg = "The CodClasse already exists. Please choose a different one.";
    } else {
        $sql = "INSERT INTO classe (CodClasse, IntClasse, Département, Optionc, Niveau, IntCalsseArabB, OptionAaraB, DepartementAaraB, NiveauAaraB, CodeEtape, CodeSalima)
                VALUES ('$CodClasse', '$IntClasse', '$Département', '$Optionc', '$Niveau', '$IntCalsseArabB', '$OptionAaraB', '$DepartementAaraB', '$NiveauAaraB', '$CodeEtape', '$CodeSalima')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: index.php?msg=New record created successfully");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
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

   <!-- Custom CSS -->
   <style>
      .container {
         margin-top: 50px;
         border: 1px solid #ccc;
         border-radius: 10px;
         padding: 20px;
      }

      .form-label {
         font-weight: bold;
      }

      .btn-container {
         margin-top: 20px;
      }
   </style>

   <title>Projet d'integration</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Projet d'integration
   </nav>

   <div class="container">
      <h3 class="text-center">Ajout d'une classe</h3>
      <p class="text-muted text-center">Complétez le formulaire pour ajouter une classe</p>

      <form action="" method="post">
         <div class="mb-3">
            <label class="form-label">Code de Classe:</label>
            <input type="text" class="form-control" name="CodClasse" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Intitulé de Classe:</label>
            <input type="text" class="form-control" name="IntClasse" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Département:</label>
            <input type="text" class="form-control" name="Département" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Option:</label>
            <input type="text" class="form-control" name="Optionc" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Niveau:</label>
            <input type="text" class="form-control" name="Niveau" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Intitulé de Classe (Arabe):</label>
            <input type="text" class="form-control" name="IntCalsseArabB" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Option (Arabe):</label>
            <input type="text" class="form-control" name="OptionAaraB" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Département (Arabe):</label>
            <input type="text" class="form-control" name="DepartementAaraB" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Niveau (Arabe):</label>
            <input type="text" class="form-control" name="NiveauAaraB" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Code Etape:</label>
            <input type="text" class="form-control" name="CodeEtape" required>
         </div>
         <div class="mb-3">
            <label class="form-label">Code Salima:</label>
            <input type="text" class="form-control" name="CodeSalima" required>
         </div>
         <div class="btn-container">
            <button type="submit" class="btn btn-success" name="submit">Ajouter</button>
            <a href="index.php" class="btn btn-danger">Annuler</a>
         </div>
      </form>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
