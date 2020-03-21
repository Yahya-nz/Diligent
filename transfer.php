<?php include 'header.php'?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transfer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Assets/css/transfer.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <section id="transfer">
        <div class="container">
            <div class="row">
                <img src="Assets/img/Group 3 (2).png" class="image" alt="">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="alert " role="alert">
                        <header>
                            TRANSFER UANG ANDA
                        </header>
                        <div class="row mb-5">
                            <div class="col-md-6 teks">
                                <p>Transfer Uang Anda Ke Nomer Berikut !</p>
                                <p>009224-215085329-2159835</p>
                                <p>Atas Nama Deatrisya Mirela Harahap</p>
                                <p class="txt">Pastikan jumlah uang benar hingga 3 digit terkahir harga.</p>
                            </div>
                            <div class="col-md-6 m-t-30 text-center ">
                               
                                <ul>
                                    <li class="li"><span id= "days"></span>HARI</li>
                                    <li class="li"><span id="hours"></span>JAM</li>
                                    <li class="li"><span id="minutes"></span>MENIT</li>
                                    <li class="li"><span id="seconds"></span>DETIK</li>
                                </ul>
                                <h4>Sisa Waktu Anda</h4>
                            </div>

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

<script>
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    let countDown = new Date('August 30, 2019 00:00:00').getTime(),
        x = setInterval(function () {

            let now = new Date().getTime(),
                distance = countDown - now;

            document.getElementById('days').innerText = Math.floor(distance / (day)),
                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

            //do something later when date is reached
            //if (distance < 0) {
            //  clearInterval(x);
            //  'IT'S MY BIRTHDAY!;
            //}

        }, second)
</script>

</html>
<?php include 'footer.php'?>