<?php
include 'koneksi.php'
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Table Barang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="table-01/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Data Barang</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary bg-success">
						    <tr>
                              <th>No.</th>
						      <th>Nama Barang</th>
						      <th>Stok Barang</th>
						      <th>Harga Barang</th>
						      <th>Gambar Barang</th>
                              <th>Deskripsi Barang</th>
                              <th>Aksi</th>
						    </tr>
						  </thead>
                          <?php
    $i=0;
    $query = mysqli_query($con, "select * from barang");

    while($m=mysqli_fetch_array($query)){
        $i++;
    ?>
						  <tbody>
                          <tr class="alert" role="alert">
                            <td><?php print $i;?></td>
                            <td><?php print $m['nama'];?></td>
                            <td><?php print $m['stok'];?></td>
                            <td><?php print $m['harga'];?></td>
                            <td><?php print "<img src='images/$m[gambar]' width='70' height='90' />"; ?></td>
                            <td><?php print $m['deskripsi'];?></td>
                            <td> <a href= "formUpdate.php?id_barang=<?php print $m ['id_barang'] ?>" >Edit</a> | 
							<a href="delete.php?id_barang=<?php print $m['id_barang'] ?>" onclick="return confirm('Yakin ingin hapus data?')">Delete</a>
							
						    </tr>
    <?php
    }
    ?>

						  </tbody>

						</table>
						
	<a href="formInsert.php" class="btn btn-success mt-3">Tambah data Barang</a>
	<a href="logout.php" class="btn btn-danger mt-3">Log out</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<script src="table-01/js/jquery.min.js"></script>
  <script src="table-01/js/popper.js"></script>
  <script src="table-01/js/bootstrap.min.js"></script>
  <script src="table-01/js/main.js"></script>

	</body>
	
</html>

