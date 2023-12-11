<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rumah Durian Sidikalang Ainun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <div class="container px-5">
            <a class="fs-4" style="color: black;"><img src="images/logo1.png" width="60px"alt=""> Rumah Durian Sidikalang Ainun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link fs-5" href="#products" style="color: white;">Menu</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="#gallery" style="color: white;">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="#contact" style="color: white;">Kontak</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-end">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5  text-xl-start">
                        <h2 style="color: black;">Tentang Rumah Durian</h2>
                        <h1 class="display-5 fw-bolder text-success mb-2">Sidikalang Ainun</h1>
                        <p class="lead fw-normal mb-4">Rumah Durian Sidikalang Ainun ini, dimulai ketika
                            Pandemi Covid-19 mulai menyebar, dan dibangun
                            karena pada awalnya hanya berdiam diri dirumah saja, dan muncullah ide untuk
                            membuat
                            usaha kecil-kecilan. Sehingga bisa berkembang hingga saat ini.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-outline-dark btn-lg px-4" href="https://api.whatsapp.com/send?phone=62895365836437"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                             </svg> WhatsApp</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                        src="images/g1.jpg" alt="..." /></div>
            </div>
        </div>
    </header>
    <!-- product start-->
    <div id="products" class="layout_padding product_section">
        <section class="py-5">
            <div class="gallery_main">
                <h1 class="gallery_taital"><strong><span class="our_text">Menu</span> Kami</strong></h1>
                <br>
                <h2>Pembelian Dilakukan Melalui WhatsApp</h2>
            </div>
            <?php 

          include('koneksi.php');

          $query = mysqli_query($con, 'SELECT * FROM barang');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            
          ?>

          

              
            
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach($result as $result) : ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="images/<?php echo $result['gambar']?>" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $result['nama']?></h5>
                                    <!-- Product price-->
                                    Harga : Rp<?php echo number_format($result['harga']); ?>
                                    <H6>Stok : <?php echo $result['stok']; ?></H6>
                                    <h5><?php echo $result['deskripsi']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                <div class="container">
                    <div class="row">
                      <div class="col-sm-10"><h2 style="color: red;">Catatan : </h2>
                        <h3>Harga belum termasuk ongkir dan sterofoam apabila dilakukan pengiriman jarak jauh.</h3></p></div>
                      <div class="col-2">
                        <button type="button" class="btn btn-outline-dark"><a class="btn btn-outline-light btn-lg px-4" style="color: black;" href="https://api.whatsapp.com/send?phone=62895365836437"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                            <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path>
                         </svg> WhatsApp</a></button>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
                
            </div>
        </section>
    </div>
    <!-- product end-->
    <!-- Gallery start-->
    <div id="gallery" class="layout_padding2 gallery_section">
        <div class="container px-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="gallery_main">
                        <h1 class="gallery_taital"><strong><span class="our_text">Galeri</span> Kami</strong></h1>
                    </div>
                </div>
                
                <div class="col-sm-12 gallery_maain">
                    <div class="row">
                        <div class="col-sm-3" style="padding: 1%;">
                            <div class="gallery_blog">
                                <img class="img-responive" src="images/g2.jpg">
                                <div class="overlay">
                                    <h2>Susu Durian</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 " style="padding: 1%;">
                            <div class="gallery_blog">
                                <img class="img-responive" src="images/g3.jpg">
                                <div class="overlay">
                                    <h2>Daging Durian</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 " style="padding: 1%;">
                            <div class="gallery_blog">
                                <img class="img-responive" src="images/g5.jpg">
                                <div class="overlay">
                                    <h2>Daging Durian</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 " style="padding: 1%;">
                            <div class="gallery_blog">
                                <img class="img-responive" src="images/g6.jpg">
                                <div class="overlay">
                                    <h2>Durian Kupas</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 " style="padding: 1%;">
                            <div class="gallery_blog">
                                <img class="img-responive" src="images/g1.jpg">
                                <div class="overlay">
                                    <h2>Pancake Durian</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 " style="padding: 1%;">
                            <div class="gallery_blog">
                                <img class="img-responive" src="images/g4.jpg">
                                <div class="overlay">
                                    <h2>Daging Durian</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 " style="padding: 1%;">
                            <div class="gallery_blog">
                                <img class="img-responive" src="images/g7.jpg">
                                <div class="overlay">
                                    <h2>Pancake Durian</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 " style="padding: 1%;">
                            <div class="gallery_blog">
                                <img class="img-responive" src="images/g8.jpg">
                                <div class="overlay">
                                    <h2>Pancake Durian</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Gallery-->
    <!-- contact start-->
    <div id="contact" class="layout_padding product_section">
        <div class="container">
        <div class="row gy-4">
                <hr>

                <div class="col-md-6">
                    <fieldset style="background-color: rgb(209, 209, 106); padding: 2%;" class="rounded">
                        <h3>Alamat Kami</h3>
                            <div style="color: black;"><strong><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="18" y1="6" x2="18" y2="6.01"></line>
                                <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5"></path>
                                <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15"></polyline>
                                <line x1="9" y1="4" x2="9" y2="17"></line>
                                <line x1="15" y1="15" x2="15" y2="20"></line>
                             </svg> Jalan Simpang Baru, Tampan, Pekanbaru City, Riau 28291</strong>
                            </div>
                    </fieldset>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <fieldset style="background-color: rgb(209, 209, 106); padding: 2%;" class="rounded">
                        <h3>Jam Buka</h3>
                            <div style="color: black;"><strong><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <polyline points="12 7 12 12 15 15"></polyline>
                             </svg> Senin - Minggu</strong> 9AM - 21PM
                            </div>
                    </fieldset>
                </div><!-- End Info Item -->

            </div>
            <hr>
            <div class="container text-center">
                <div class="row">
                  <div class="col-7"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.714513557192!2d101.3577341!3d0.4794552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf20dd2910f3ffd6e!2sRumah%20durian%20sidikalang%20ainun!5e0!3m2!1sen!2sid!4v1658196375363!5m2!1sen!2sid" 
                    width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  <div class="col-5">
                    <h3>Pemesanan</h3>
                    <p style="text-align: start;">
                        Email     : herlinaananda9@gmail.com<br>
                        WhatsApp  : 0812 6118 7738<br>
                        Instagram : @rumahduriansidikalangainun<br>
                    </p>
                  </div>
                </div>
              </div>
          </div>
    </div>
    <!-- contact end-->
    <!-- copyright start-->
    <div class="copyright_section">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_taital">Rumah Durian Sidikalang Ainun 2022 @All Rights Reserved. <a
                            href="https://html.design"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>