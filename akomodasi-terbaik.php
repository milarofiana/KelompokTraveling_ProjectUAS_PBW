<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Bootstrap CSS -->
    <link rel="icon" href="assets/img/travelling.jpg" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">

    <title>Akomodasi-Terbaik-Madura</title>
</head>
<body>
    <?php include "tmp_header.php";?>

    <div class="main-content">
        <div class="mt-130"></div>
        <div class="banner-top">
            <img src="assets/img/akomodasi/122938669.jpg" class="img-fluid" alt="">
            <div class="overlay-img">
                <h3>Akomodasi Terbaik di Madura</h3>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail-content">
                        <div class="row" id="list">
                            <?php
                              include "database/koneksi.php";
                              $tampil_berita_cerita = $conn->query("SELECT * FROM tb_akomodasi");
                              while($data = mysqli_fetch_array($tampil_berita_cerita)){
                              ?>
                            <div class="col-md-3">
                                <div class="card-list">
                                    <a href="hotel.php">
                                    	<img src="assets/img/akomodasi/<?php echo $data['gambar'];?>" class="img-fluid featured-img mb-2">
                                        <h5 class="s-img-title"><?php echo $data['nama_akomodasi']; ?></h5>
                                    </a>
                                    <span class="icon-blue"><i class="fa fa-map-marker-alt"></i><?php echo $data['lokasi_akomodasi']; ?></span>
                                    <div class="mt-2">
                                    	<p style="color: orange">
						                    <i class="fas fa-star"></i>
						                    <i class="fas fa-star"></i>
						                    <i class="fas fa-star"></i>
						                    <i class="fas fa-star"></i>
						                    <i class="fas fa-star"></i>
						                    <span class="distance-text float-right">
							                	<i class="fa fa-map-marked-alt"><?php echo $data['jarak']; ?></i>
							                </span>
						              	</p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        <div class="row area-paginav-album">
                            <nav class="col-12">
                                <div class="text-center">
                                    <ul class="pagination" role="navigation">
                                        <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                                            <span class="page-link" aria-hidden="true">Prev</span>
                                        </li>
                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal animated fadeInDown" id="searchModal" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="area-form-search">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="mb-1 title">Ayo Traveling Sekarang!</h5>
                                    <span class="text-color">Luangkanlah waktumu untuk berlibur!</span>
                                    <hr>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="search" placeholder="Cari di Travelingyuk!" aria-label="Cari di Travelingyuk!" autocomplete="off" class="from-control any-search">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="search" placeholder="Tulis Kota Tujuanmu" aria-label="Tulis Kota Tujuanmu" autocomplete="off" class="from-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info btn-block m-btn-cari">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php include "tmp_footer.php";?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>

</body>
</html>