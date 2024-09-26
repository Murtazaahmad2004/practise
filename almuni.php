<?php
include "sidebar.php";
include "dbconnection.php";

if (isset($_POST["submit"])) 
{
    $date = $_POST['date'];
    $deg = $_POST['deg'];
    $py = $_POST['pdy'];
    $pro = $_POST['prog'];

    $sql = "INSERT INTO almuni_form (`Entry Date`, `Degree`, `Passing Year`, `Program`) 
            VALUES ('$date', '$deg', '$py', '$pro')";

    if (mysqli_query(mysql: $conn, query: $sql)) {
        // header('location: almuni_form');
        echo "<script>alert('Data Inserted.')</script>";
    } else {
        echo "<script>alert('Data Not Inserted.')</script>";
    }

    mysqli_close(mysql: $conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almuni Form</title>
    <style>
        .panel-default{
            margin-left: 200px;
        }
        .container-fluid{
            margin-left: 200px;
            margin-top: 100px;
        }
        .form-group{
            margin-left: 85%;
            margin-top: 2%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <section class="row2">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Almuni Form</b>
                    </div>
                    <div class="panel-body">
                        <div>
                            <form method="post">
                                <div class="fields">
                                    <div class="input-field">
                                        <label>Entry Date</label>
                                        <input type="text" name="date" placeholder="Enter Date" class="form-control" />
                                    </div>
                                    <div class="input-field">
                                        <label>Degree</label>
                                        <input type="text" name="deg" placeholder="Degree Name" class="form-control" />
                                    </div>
                                    <div class="input-field">
                                        <label>Passing Degree Year</label>
                                        <input type="text" name="pdy" placeholder="Enter Passing Degree Year" class="form-control" />
                                    </div>
                                    <div class="input-field">
                                        <label>Program</label>
                                        <input type="text" name="prog" placeholder="Enter Program" class="form-control" />
                                    </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </section>
    </div>
</body>
</html>