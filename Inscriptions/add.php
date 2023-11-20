<?php
include "db_con.php";

if (isset($_POST["submit"])) {
   //$NumIns = $_POST['NumIns'];
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
   $sql = "INSERT INTO `inscriptions`(`CodeClasse`,`MatEtud`,`Session`,`DateInscription`,`DecisionConseil`,`Rachat`,`MoyGen`,`Dispense` ,`TauxAbsences`,`Redouble` ,`StOuv`, `StTech`,`TypeInscrip`, `MontantIns`,`Remarque` ,`Sitfin`, `Montant`,`NoteSO`,`NoteST`) VALUES ('$CodeClasse','$MatEtud','$Session','$DateInscription','$DecisionConseil','$Rachat','$MoyGen','$Dispense' ,'$TauxAbsences','$Redouble','$StOuv' ,'$StTech','$TypeInscrip','$MontantIns','$Remarque' ,'$Sitfin','$Montant','$NoteSO' ,'$NoteST')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
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

   <title>Project</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #F33A6A;">
   Project
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add new</h3>
         <p class="text-muted">complete formulaire </p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
            

               <div class="col">
                  <label class="form-label">CodeClasse : </label>
                  <input type="text" class="form-control" name="CodeClasse">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Matricule de l'Étudiant : </label>
               <input type="text" class="form-control" name="MatEtud">
            </div>
            <div class="mb-3">
               <label class="form-label">Session : </label>
               <input type="number" class="form-control" name="Session">
            </div>
            <div class="mb-3">
               <label class="form-label">Date Inscription </label>
               <input type="datetime-local" class="form-control" name="DateInscription">
            </div>
            <div class="mb-3">
               <label class="form-label"> Decision Conseil </label>
               <input type="text" class="form-control" name="DecisionConseil">
            </div>
            <div class="mb-3">
               <label class="form-label">Rachat : </label>
               <input type="text" class="form-control" name="Rachat">
            </div>
            <div class="mb-3">
               <label class="form-label">Moyenne General : </label>
               <input type="text" class="form-control" name="MoyGen">
            </div>
            <div class="mb-3">
               <label class="form-label">Dispense : </label>
               <input type="text" class="form-control" name="Dispense">
            </div>
            <div class="mb-3">
               <label class="form-label">TauxAbsences : </label>
               <input type="text" class="form-control" name="TauxAbsences">
            </div>
            <div class="mb-3">
               <label class="form-label">Redouble : </label>
               <input type="text" class="form-control" name="Redouble">
            </div>
            <div class="mb-3">
               <label class="form-label">StOuv : </label>
               <input type="text" class="form-control" name="StOuv">
            </div>
            <div class="mb-3">
               <label class="form-label">STtech : </label>
               <input type="text" class="form-control" name="StTech">
            </div>
            <div class="mb-3">
               <label class="form-label"> Type inscription : </label>
               <input type="text" class="form-control" name="TypeInscrip">
            </div>

            <div class="mb-3">
               <label class="form-label">Montant INS : </label>
               <input type="text" class="form-control" name="MontantIns">
            </div>
            <div class="mb-3">
               <label class="form-label">Remarque : </label>
               <input type="text" class="form-control" name="Remarque">
            </div>
            <div class="mb-3">
               <label class="form-label">Sitfin : </label>
               <input type="text" class="form-control" name="Sitfin">
            </div>
            <div class="mb-3">
               <label class="form-label">Montant : </label>
               <input type="text" class="form-control" name="Montant">
            </div>
            <div class="mb-3">
               <label class="form-label">NoteSO : </label>
               <input type="text" class="form-control" name="NoteSO">
            </div>
            <div class="mb-3">
               <label class="form-label">Note ST: </label>
               <input type="text" class="form-control" name="NoteST">
            </div>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Add</button>
               <a href="index.php" class="btn btn-danger">Ignore</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

