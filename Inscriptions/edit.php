<?php
include "db_con.php";
$NumIns = $_GET["NumIns"];

if (isset($_POST["submit"])) {
  $CodeClasse = $_POST['CodeClasse'];
    $MatEtud = $_POST['MatEtud'];
    $Session = $_POST['Session'];
    $DateInscription = $_POST['DateInscription'];
    $DecisionConseil = $_POST['DecisionConseil'];
    $Rachat = $_POST['Rachat'];
    $MoyGen = $_POST['MoyGen'];
    $Dispense=$_POST['Dispense'];
    $TauxAbsences=$_POST ['TauxAbsences'];
    $Redouble=$_POST['Redouble'];
    $StOuv=$_POST['StOuv'];
    $StTech=$_POST['StTech'];
    $TypeInscrip= $_POST['TypeInscrip'];
   $MontantIns=$_POST['MontantIns'];
    $Remarque=$_POST['Remarque'];
    $Sitfin=$_POST['Sitfin'];
    $Montant =$_POST ['Montant'];
    $NoteSO = $_POST ['NoteSO'];
    $NoteST=$_POST['NoteST'];

    $sql = "UPDATE `inscriptions` SET `CodeClasse`='$CodeClasse',`MatEtud`='$MatEtud',`Session`='$Session',`DateInscription`='$DateInscription',`DecisionConseil`='$DecisionConseil',`Rachat`='$Rachat',`MoyGen`='$MoyGen',`Dispense`='$Dispense' ,`TauxAbsences`='$TauxAbsences',`Redouble`='$Redouble'
    ,`StOuv`='$StOuv' , `StTech`='$StTech',`TypeInscrip`= '$TypeInscrip', `MontantIns`='$MontantIns',`Remarque`='$Remarque' ,`Sitfin`='$Sitfin', `Montant`='$Montant',`NoteSO`='$NoteSO' ,`NoteST`='$NoteST' WHERE  NumIns = '$NumIns'";

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

  <title>Project</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    Project
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Modify informations</h3>
      <p class="text-muted">Click on update</p>
    </div>

    <?php
    $sql = "SELECT * FROM `inscriptions` WHERE NumIns = '$NumIns'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
        <div class="col">
          <label class="form-label">CodeClasse : </label>
                  <input type="text" class="form-control" name="CodeClasse" value="<?php echo $row['CodeClasse'] ?>">
          </div>
          <div class="col">
          <label class="form-label">Matricule de l'Étudiant : </label>
               <input type="text" class="form-control" name="MatEtud" value="<?php echo $row['MatEtud'] ?>">
          </div>
        </div>
        
        <label class="form-label">Session : </label>
               <input type="number" class="form-control" name="Session" value="<?php echo $row['Session'] ?>">

        <div class="mb-3">
        <label class="form-label">Date Inscription: </label>
               <input type="datetime-local" class="form-control" name="DateInscription" value="<?php echo $row['DateInscription'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">DecisionConseil : </label>
               <input type="number" class="form-control" name="DecisionConseil" value="<?php echo $row['DecisionConseil'] ?>">
        </div>
        <div class="mb-3">
        </div>
        <div class="mb-3">
        <label class="form-label">Rachat : </label>
               <input type="text" class="form-control" name="Rachat" value="<?php echo $row['Rachat'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">MoyGen : </label>
               <input type="text" class="form-control" name="MoyGen" value="<?php echo $row['MoyGen'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">Dispense : </label>
               <input type="text" class="form-control" name="Dispense" value="<?php echo $row['Dispense'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">TauxAbsences : </label>
               <input type="text" class="form-control" name="TauxAbsences" value="<?php echo $row['TauxAbsences'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">Redouble : </label>
               <input type="text" class="form-control" name="Redouble" value="<?php echo $row['Redouble'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">StOuv : </label>
               <input type="text" class="form-control" name="StOuv" value="<?php echo $row['StOuv'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">StTech : </label>
               <input type="text" class="form-control" name="StTech" value="<?php echo $row['StTech'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">TypeInscrip : </label>
               <input type="text" class="form-control" name="TypeInscrip" value="<?php echo $row['TypeInscrip'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">MontantIns : </label>
               <input type="text" class="form-control" name="MontantIns" value="<?php echo $row['MontantIns'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">Remarque : </label>
               <input type="text" class="form-control" name="Remarque" value="<?php echo $row['Remarque'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">Sitfin : </label>
               <input type="text" class="form-control" name="Sitfin" value="<?php echo $row['Sitfin'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">Montant : </label>
               <input type="text" class="form-control" name="Montant" value="<?php echo $row['Montant'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">NoteSO : </label>
               <input type="text" class="form-control" name="NoteSO" value="<?php echo $row['NoteSO'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label">NoteST : </label>
               <input type="text" class="form-control" name="NoteST" value="<?php echo $row['NoteST'] ?>">
        </div>
        <div>
          <button type="submit" class="btn btn-success" name="submit">update</button>
          <a href="index.php" class="btn btn-danger">Ignore</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>