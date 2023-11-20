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

  <title>project</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #F33A6A;">
  Project
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
    <a href="add.php" class="btn btn-dark mb-3">Add</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">NumIns</th>
          <th scope="col">CodeClasse</th>
          <th scope="col">MatEtud</th>
          <th scope="col">Session</th>
          <th scope="col">DateInscription</th>
          <th scope="col">DecisionConseil</th>
          <th scope="col">Rachat</th>
          <th scope="col">MoyGen</th>
          <th scope="col">Dispense</th>
          <th scope="col">TauxAbsences</th>
          <th scope="col">Redouble</th>
          <th scope="col">StOuv</th>
          <th scope="col">StTech</th>
          <th scope="col">TypeInscrip</th>
          <th scope="col">MontantIns</th>
          <th scope="col">Remarque</th>
          <th scope="col">Sitfin</th>
          <th scope="col">Montant</th>
          <th scope="col">NoteSO</th>
          <th scope="col">NoteST</th>
          <th scope="col">Action</th>
        </tr>

      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `inscriptions` where 1";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["NumIns"] ?></td>
            <td><?php echo $row["CodeClasse"] ?></td>
            <td><?php echo $row["MatEtud"] ?></td>
            <td><?php echo $row["Session"] ?></td>
            <td><?php echo $row["DateInscription"] ?></td>
            <td><?php echo $row["DecisionConseil"] ?></td>
            <td><?php echo $row["Rachat"] ?></td>
            <td><?php echo $row["MoyGen"] ?></td>
            <td><?php echo $row["Dispense"] ?></td>
            <td><?php echo $row["TauxAbsences"] ?></td>
            <td><?php echo $row["Redouble"] ?></td>
            <td><?php echo $row["StOuv"] ?></td>
            <td><?php echo $row["StTech"] ?></td>
            <td><?php echo $row["TypeInscrip"] ?></td>
            <td><?php echo $row["MontantIns"] ?></td>
            <td><?php echo $row["Remarque"] ?></td>
            <td><?php echo $row["Sitfin"] ?></td>
            <td><?php echo $row["Montant"] ?></td>
            <td><?php echo $row["NoteSO"] ?></td>
            <td><?php echo $row["NoteST"] ?></td>
            <td>
              <a href="edit.php?NumIns=<?php echo $row["NumIns"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?NumIns=<?php echo $row["NumIns"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
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
