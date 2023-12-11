<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Rumah Durian Sidikalang Ainun</title>

    <!-- Icons font CSS-->
    <link href="form/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="form/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="form/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="form/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="form/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<?php
    include "koneksi.php";

    $id_barang = $_GET['id_barang'];
    $query = mysqli_query($con, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
    $m =mysqli_fetch_object($query);
    ?>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Input Data Barang</h2>
                    <form action="olahUpdate.php" method="POST">
                    <input type="hidden" value="<?php print $m->id_barang; ?>" name="id_barang">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nama Barang" name="nama" 
                            value="<?php print $m->nama; ?>" required>
                        </div>                           
                            <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Stok Barang" name="stok" 
                            value="<?php print $m->stok; ?>" required>
                        </div>                          
                            <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Harga Barang" name="harga" 
                            value="<?php print $m->harga; ?>" required>
                        </div>
                            <div class="input-group">
                            <input class="input--style-1" type="file" name="gambar" value="<?=$m['gambar']?>">
                            <?="<img src='images/".$m['gambar']." style='width:50px; height:50px;>"?>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Deskripsi Barang" name="deskripsi" 
                            value="<?php print $m->deskripsi; ?>" required>
                        </div>                            
                            <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="form/vendor/select2/select2.min.js"></script>
    <script src="form/vendor/datepicker/moment.min.js"></script>
    <script src="form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
