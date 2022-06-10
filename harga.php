<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bismillah</title>
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome CDN link -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</head>

<body>
    <header>
        <div class="content-database">
            <h2 align="center">Daftar Harga </h2>
        </div>
        <!-- tabel di windows -->
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h5 class="pull-left"></h5>
                        <!-- <a href="insertView.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Add
                            New</a> -->
                    </div>
                    <div class="scroll">
                        <?php
//include config file
require_once "config.php";

//attempt select query execution
$sql = "SELECT * FROM kelas";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table class="table table-bordered table-striped">';
        echo "<thead>";
        echo "<tr>";
        // echo "<th>#</th>";
        echo "<th>Nama kelas</th>";
        echo "<th>Harga</th>";
        // echo "<th>No. HP</th>";
        // echo "<th>Jadwal berangkat</th>";
        // echo "<th>Jumlah</th>";
        // echo "<th>Jumlah Lansia</th>";
        // echo "<th>Harga</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            // echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama_kelas'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            // echo "<td>" . $row['no.hp'] . "</td>";
            // echo "<td>" . $row['jadwal'] . "</td>";
            // echo "<td>" . $row['jumlah'] . "</td>";
            // echo "<td>" . $row['jumlahLansia'] . "</td>";
            // echo "<td>" . $row['harga'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else {
    echo "Oops! Something went wrong. Please try again later.";
}

// Close connection
mysqli_close($link);
?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </header>

</body>

</html>