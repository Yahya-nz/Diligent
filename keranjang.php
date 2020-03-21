<?php include 'header.php'?>

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="Assets/css/css.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ranga:400,700" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/swiper.min.css">
    <link rel="stylesheet" href="Assets/css/keranjang.css">


</head>

<body>
    <section id="keranjang">
        <div class="container">
            <div class="alert" role="alert">
                <header>
                    <h4 class="alert-heading">Keranjang Belanja</h4>
                </header>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <img src="Assets/img/taskuning.png" alt="">
                    </div>
                    <div class="col-md-3 col-sm-3  col-xs-12 image">
                        <p>DYMO Label Writer 450 Turbo Thermal Label Printer</p>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 plus text-center">
                        <div class="input-group offset-md-2 col-md-5 col-sm-12 col-xs-12  ">
                            <div class="input-group-prepend">
                                <button class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                            </div>
                            <input type="number" id="qty_input" class="form-control form-control-sm bg-white" value="1"
                                min="1" style="text-align:center ;height: auto;">
                            <div class="input-group-prepend">
                                <button class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-2 col-xs-12 plus text-center">
                        <button class="btn button"> REMOVE</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-xs-12 text-center">
                        <img src="Assets/img/taskuning.png" alt="">
                    </div>
                    <div class="col-md-3 col-xs-12 image">
                        <p>DYMO Label Writer 450 Turbo Thermal Label Printer</p>
                    </div>
                    <div class="col-md-4 col-xs-12 plus text-center">
                        <div class="input-group offset-md-2 col-md-5 col-sm-12 col-xs-12">
                            <div class="input-group-prepend">
                                <button class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                            </div>
                            <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1"
                                style="text-align:center ;height: auto;">
                            <div class="input-group-prepend">
                                <button class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12 plus text-center">
                        <button class="btn button"> REMOVE</button>

                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-12 cek mt-5 " style="padding: 0 45px 45px 10px; ">
                        <button class="btn pull-right"> <a href="http://localhost/diligent2/detailp.php">CHECKOUT</a> </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="Assets/js/bootstrap.js"></script>
<script src="Assets/js/jquery.min.js"></script>
<script type="text/javascript" src="Assets/js/global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#qty_input').prop('disabled', true);
        $('#plus-btn').click(function () {
            $('#qty_input').val(parseInt($('#qty_input').val()) + 1);
        });
        $('#minus-btn').click(function () {
            $('#qty_input').val(parseInt($('#qty_input').val()) - 1);
            if ($('#qty_input').val() == 0) {
                $('#qty_input').val(1);
            }

        });
    });
</script>

</html>
<?php include 'footer.php' ?>