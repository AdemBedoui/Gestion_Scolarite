<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Conge</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Create Conge</h2>
        <form id="congesForm" action="insert.php" method="POST">
            <div class="form-group">
                <label for="MatriculeProf">MatriculeProf:</label>
                <input type="text" class="form-control" id="MatriculeProf" name="MatriculeProf">
            </div>
            <div class="form-group">
                <label for="DateDeb">DateDeb:</label>
                <input type="date" class="form-control" id="DateDeb" name="DateDeb">
            </div>
            <div class="form-group">
                <label for="DateFin">DateFin:</label>
                <input type="date" class="form-control" id="DateFin" name="DateFin">
                <div id="dateError" class="text-danger"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <script>
            document.getElementById('congesForm').addEventListener('submit', function(event) {
                var dateDeb = new Date(document.getElementById('DateDeb').value);
                var dateFin = new Date(document.getElementById('DateFin').value);

                if (dateFin <= dateDeb) {
                    // Display error message
                    document.getElementById('dateError').innerHTML = 'DateFin must be greater than DateDeb.';
                    // Prevent form submission
                    event.preventDefault();
                } else {
                    // Clear any previous error messages
                    document.getElementById('dateError').innerHTML = '';
                }
            });
        </script>
    </div>
</body>
</html>
