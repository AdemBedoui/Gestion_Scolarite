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

  <title>Liste des Classes</title>

  <!-- Custom CSS for table styling -->
  <style>
    .table-container {
      margin-top: 30px;
    }

    .table-container table {
      width: 100%;
    }

    .table-container .btn-container {
      text-align: center;
      margin-top: 20px;
    }

    .btn-container a {
      margin-right: 10px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    Projet d'integration
  </nav>

  <div class="container table-container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="btn-container">
      <a href="add.php" class="btn btn-success">Ajouter une classe</a>
    </div>

    <table class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col">Code de Classe</th>
          <th scope="col">Intitulé de Classe</th>
          <th scope="col">Département</th>
          <th scope="col">Option</th>
          <th scope="col">Niveau</th>
          <th scope="col">Intitulé de Classe (Arabe)</th>
          <th scope="col">Option (Arabe)</th>
          <th scope="col">Département (Arabe)</th>
          <th scope="col">Niveau (Arabe)</th>
          <th scope="col">Code Etape</th>
          <th scope="col">Code Salima</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `classe`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["CodClasse"] ?></td>
            <td><?php echo $row["IntClasse"] ?></td>
            <td><?php echo $row["Département"] ?></td>
            <td><?php echo $row["Optionc"] ?></td>
            <td><?php echo $row["Niveau"] ?></td>
            <td><?php echo $row["IntCalsseArabB"] ?></td>
            <td><?php echo $row["OptionAaraB"] ?></td>
            <td><?php echo $row["DepartementAaraB"] ?></td>
            <td><?php echo $row["NiveauAaraB"] ?></td>
            <td><?php echo $row["CodeEtape"] ?></td>
            <td><?php echo $row["CodeSalima"] ?></td>
            <td>
              <a href="edit.php?CodClasse=<?php echo $row["CodClasse"] ?>" class="btn btn-primary btn-sm">Modifier</a>
              <a href="delete.php?CodClasse=<?php echo $row["CodClasse"] ?>" class="btn btn-danger btn-sm">Supprimer</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxy
