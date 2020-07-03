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

    <title>Galeri</title>
</head>
<body>
         <?php include "tmp_header.php";?>

     <div class="main-content" id="app">
        <div class="background-img" data-src="assets/img/galeri/background.jpg" style="
        background-size: cover;
        background-position: top center;
        height:705px;
        position: absolute;
        width: 100%;">
        </div>
        <div class="container mt-130">
            <div class="row">
                <div class="col-md-12">
                    <div class="bc-custom">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Galeri</span></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="detail-content">
                        <h3 class="title-content">Kumpulan Foto Travelingyuk</h3>
                        <p>Tempat untuk melihat foto menarik di dunia traveling yang memanjakan mata anda.</p>
                        <div class="mb-4">
                            <div class="album-search">
                                <span class="fa fa-search icon-search-album"></span>
                                <div class="input-group">
                                    <input type="search" placeholder="Cari Galeri Lainnya" aria-label="Cari Galeri Lainnya" autocomplete="off" class="from-control f-album search-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <?php
                              include "database/koneksi.php";
                              $tampil_berita_cerita = $conn->query("SELECT * FROM tb_galeri");
                              while($data = mysqli_fetch_array($tampil_berita_cerita)){
                              ?>
                            <div class="col-md-3">
                                <a href="#">
                                    <div class="box-album">
                                        <img src="assets/img/galeri/<?php echo $data['gambar'];?>" class="img-fluid rounded-5" alt="">
                                        <h6><?php echo $data['keterangan']; ?></h6>
                                        <p><?php echo $data['waktu']; ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">        
            <div class="row area-paginav-album">
                <div class="col-md-3">
                    <div class="t-paginav">Menampilkan <strong>1</strong> sampai
                        <strong>8</strong> dari 48 foto
                    </div>
                </div>
                <nav class="col-md-9">
                    <ul class="pagination" role="navigation">
                        <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                            <span class="page-link" aria-hidden="true">Prev</span>
                        </li>
                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" rel="next" aria-label="pagination.next">Next</a>
                        </li>
                    </ul>
                </nav>
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

    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jquery.lazy.js"></script>
    <script type="text/javascript">
    $(function () {

        $('#app img,#app .background-img,#app .area-banner').lazy({
            // effect: 'fadeIn',
            // effectTime: 1000,
            delay: 0,
            threshold: 0,
            visibleOnly: true,
            afterLoad: function (element) {
                let getClassName = element.attr('class');
                var img = element.css("background-image");
                if (getClassName === 'background-img') {
                    var gradient = "linear-gradient(180deg, rgba(255, 255, 255, 0) 0%,rgba(255, 255, 255, 1) 100%),";
                    element.css("background-image", gradient + img);
                }
                if (getClassName === 'area-banner') {
                    var gradient = "linear-gradient(0deg,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),";
                    element.css("background-image", gradient + img);
                }
            },
            onError: function (element) {
                console.log('error loading ' + element.data('src'));
                element.attr("src", window.app.asset_url + 'images/no-image.png');
            }
        });
    });
    </script>
</body>
</html>