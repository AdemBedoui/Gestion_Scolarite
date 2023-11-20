<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 800px;
            margin: 0 auto;
        }

        table {
            width: 100%;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   

            // Function to load table
            function loadTable(searchValue = ''){
                $.ajax({
                    url: 'load-table.php',
                    method: 'POST',
                    data: { searchValue: searchValue },
                    success: function(response){
                        $('#congesTable').html(response);
                    }
                });
            }

            // Initial load
            loadTable();

            // Search functionality
            $('#searchValue').on('input', function(){
                var searchValue = $(this).val();
                loadTable(searchValue);
            });
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Liste de Conges</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Ajouter un conges</a>
                    </div>
                    <div>
                        <label for="searchValue">Search:</label>
                        <input type="text" id="searchValue" class="form-control"style="width: 300px; display: inline-block; margin-right: 10px;" placeholder="Enter name or CIN" />
                    </div>
                    <div id="congesTable">
                        <!-- This is where the dynamically loaded table will appear -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
