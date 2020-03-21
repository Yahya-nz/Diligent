<?php include 'header.php'?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detail Pembeli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/css.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ranga:400,700" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/swiper.min.css">
    <link rel="stylesheet" href="Assets/css/detailp.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>

<body>
    <section id="detail">
        <div class="container">
            <div class="row">
                <img src="Assets/img/Group 3.png"  class="col-md-12 col-sm-12 col-xs-12" alt="">
                <div class="col-md-7 col-xs-12">
                    <div class="alert " role="alert">
                        <header>
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-5 font-weight-bold">DETAIL PEMBELI</div>
                                <div class="col-md-7 col-sm-7 col-xs-7" style="float: right;">Apakah anda sudah memiliki akun? Klik<a href="#">
                                        Login</a></div>
                            </div>
                        </header>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Pembeli</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">No Telepon</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Provinsi</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Jawa Timur</option>
                                    <option>Jawa Barat</option>
                                    <option>Kalimantan Utara</option>
                                    <option>Papua</option>
                                    <option>Jawa Tengah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kabupaten</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Pasuruan</option>
                                    <option>Pacitan</option>
                                    <option>Probolinggo</option>
                                    <option>Blitar</option>
                                    <option>Krian</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kecamatan</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Purwosari</option>
                                    <option>Purwosari</option>
                                    <option>Purwosari</option>
                                    <option>Purwosari</option>
                                    <option>Purwosari</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Kode Pos</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Jadikan Akun Member
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-5 col-xs-12">
                    <div class="alert" role="alert">
                        <header>
                            RINGKASAN PESANAN
                        </header>
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col-md-6 text">Total Harga Barang</div>
                                <div class="col-md-6 text"><p> IDR 250.000</p></div>
                                <div class="col-md-6 text">Biaya Kirim</div>
                                <div class="col-md-6 text"><p> IDR 50.000</p></div>
                                <div class="col-md-6 text">Diskon</div>
                                <div class="col-md-6 text"><p>IDR  0</p></div>
                                <div class="col-md-6 text">Kode Unik</div>
                                <div class="col-md-6 text"><p>355</p></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 text">TOTAL BELANJA</div>
                                <div class="col-md-6 text font-weight-bold" style="color :#E75643">IDR 300.355</div>
                            </div>
                            <div class="klik text-center">
                                    <button class=" col-md-8 btn text-center"><a href="http://localhost/diligent2/metodep.php">BAYAR</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php include 'footer.php'?>