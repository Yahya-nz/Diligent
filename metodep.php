<?php include 'header.php'?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Metode Pembayaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Assets/css/css.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ranga:400,700" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/swiper.min.css">
    <link rel="stylesheet" href="Assets/css/metodep.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <section id="metode">
        <div class="container">
            <div class="row">
                <img src="Assets/img/Group 3 (1).png" alt="" class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-7 col-xs-12">
                    <div class="alert" role="alert">
                        <header>
                            PILIH METODE PEMBAYARAN
                        </header>
                        <div class="form-check col-md-12 col-sm-12 col-xs-12">
                            <label class="container-fluid">Transfer
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>

                            <label class="container-fluid">Cash
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>

                        </div>

                        <div class="bayar col-md-12 col-sm-12 col-xs-12">
                            <img src="Assets/img/BRI.svg" alt="">
                            <p class="mt-4">Ketentuan Pembayaran</p>
                            <p>Pembayaran dapat dilakukan melalui transfer ke rekening Bank BRI.
                                Total belanja kamu belum termasuk kode pembayaran untuk keperluan proses verifikasi
                                otomatis
                                Mohon transfer tepat sampai 3 digit terakhir</p>
                        </div>
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
                                <div class="col-md-6 text">
                                    <p> IDR 250.000</p>
                                </div>
                                <div class="col-md-6 text">Biaya Kirim</div>
                                <div class="col-md-6 text">
                                    <p> IDR 50.000</p>
                                </div>
                                <div class="col-md-6 text">Diskon</div>
                                <div class="col-md-6 text">
                                    <p>IDR 0</p>
                                </div>
                                <div class="col-md-6 text">Kode Unik</div>
                                <div class="col-md-6 text">
                                    <p>355</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 text">TOTAL BELANJA</div>
                                <div class="col-md-6 text font-weight-bold" style="color :#E75643">IDR 300.355</div>
                            </div>
                            <div class="klik text-center">
                                <button class=" col-md-8 btn text-center"><a href="http://localhost/diligent2/transfer.php">BAYAR<a/></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous">
</script>
<script src="Assets/js/bootstrap.js"></script>
<script src="Assets/js/jquery.min.js"></script>
<script type="text/javascript" src="Assets/js/global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<script src="Assets/js/swiper.min.js"></script>

</html>
<?php include 'footer.php'?>