<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="regform/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="regform/vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="regform/css/style.css">
</head>
<body>
<?php
    include "koneksi.php";

    $id_barang = $_GET['id_barang'];
    $query = mysqli_query($con, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
    $m =mysqli_fetch_object($query);
    ?>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action= "olahUpdate.php" method="POST" id="signup-form" class="signup-form">
                    <input type="hidden" value="<?php print $m->id_barang; ?>" name="id_barang">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Nama barang</label>
                                <input type="text" class="form-input" name="nama" id="nama" 
                                value="<?php print $m->nama; ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="last_name">Stok Barang</label>
                                <input type="text" class="form-input" name="stok" id="stok"
                                value="<?php print $m->stok; ?>" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Harga barang</label>
                                <input type="text" class="form-input" name="harga" id="harga" 
                                value="<?php print $m->harga; ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="last_name">Gambar Barang</label>
                                <input type="file" class="form-input" name="gambar" id="gambar" 
                                value="<?php print $m->gambar; ?>" required/>
                                <img src='images/<?php print $m->gambar; ?>' width='70' height='90' />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Deskripsi barang</label>
                                <input type="text" class="form-input" name="deskripsi" id="deskripsi" 
                                value="<?php print $m->deskripsi; ?>" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="regform/vendor/jquery/jquery.min.js"></script>
    <script src="regform/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="regform/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="regform//jquery-validation/dist/additional-methods.min.js"></script>
    <script src="regform/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>