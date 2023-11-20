<?php
include "db_con.php";
$CodClasse = $_GET["CodClasse"];

if (isset($_POST["submit"])) {
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

    $sql = "UPDATE `classe` SET `IntClasse`='$IntClasse', `Département`='$Département', `Optionc`='$Optionc', `Niveau`='$Niveau', `IntCalsseArabB`='$IntCalsseArabB', `OptionAaraB`='$OptionAaraB', `DepartementAaraB`='$DepartementAaraB', `NiveauAaraB`='$NiveauAaraB', `CodeEtape`='$CodeEtape', `CodeSalima`='$CodeSalima' WHERE CodClasse = '$CodClasse'";

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
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Projet d'integration</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    Projet d'integration
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Modification des informations de la classe</h3>
      <p class="text-muted">Cliquez sur Modifier après avoir modifié des informations</p>
    </div>

    <?php
    $sql = "SELECT * FROM `classe` WHERE CodClasse = '$CodClasse'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Intitulé de Classe : </label>
            <input type="text" class="form-control" name="IntClasse" value="<?php echo $row['IntClasse'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Département : </label>
            <input type="text" class="form-control" name="Département" value="<?php echo $row['Département'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Option : </label>
          <input type="text" class="form-control" name="Optionc" value="<?php echo $row['Optionc'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Niveau : </label>
          <input type="text" class="form-control" name="Niveau" value="<?php echo $row['Niveau'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Intitulé de Classe (Arabe) : </label>
          <input type="text" class="form-control" name="IntCalsseArabB" value="<?php echo $row['IntCalsseArabB'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Option (Arabe) : </label>
          <input type="text" class="form-control" name="OptionAaraB" value="<?php echo $row['OptionAaraB'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Département (Arabe) : </label>
          <input type="text" class="form-control" name="DepartementAaraB" value="<?php echo $row['DepartementAaraB'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Niveau (Arabe) : </label>
          <input type="text" class="form-control" name="NiveauAaraB" value="<?php echo $row['NiveauAaraB'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Code Etape : </label>
          <input type="text" class="form-control" name="CodeEtape" value="<?php echo $row['CodeEtape'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Code Salima : </label>
          <input type="text" class="form-control" name="CodeSalima" value="<?php echo $row['CodeSalima'] ?>">
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
