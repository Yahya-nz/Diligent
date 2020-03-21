<?php include 'header.php'?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produk klik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/css.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ranga:400,700" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/swiper.min.css">
    <link rel="stylesheet" href="Assets/css/produkklik.css">
    <link rel="stylesheet" href="Assets/js-social/jssocials.css">
    <!-- <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" /> -->
    <link type="text/css" rel="stylesheet"
        href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />

</head>

<body>
    <section id="backpack" style="padding-top:133px">
        <div class="container ">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <img src="Assets/img/backpack.png" alt="" class="col-md-12 image ">
                    <img src="Assets/img/backpack (1).png" alt="" class="col-md-12 image">
                    <img src="Assets/img/backpack (2).png" alt="" class="col-md-12 image">
                </div>
                <div class="col-md-5 col-sm-9 col-xs-6">
                    <img src="Assets/img/Rectangle.png" alt="" class="col-md-12 image2">
                    <div id="share" class="pull-right" style="font-size: 14px;"></div> 
                    <p class="pull-right" style="font-size: 20px; margin-top:10px;"> Shared :&nbsp;&nbsp;&nbsp; </p>
                    <!-- <span class="fa-stack fa-lg icons">
                            <i class="fa fa-square-o fa-stack-2x" style="color: #55ACEE"></i>
                            <i class="fa fa-twitter fa-stack-1x" style="color: #55ACEE"></i>
                        </span>
                        <span class="fa-stack fa-lg icons">
                            <i class="fa fa-square-o fa-stack-2x" style="color: #25d366"></i>
                            <i class="fa fa-whatsapp fa-stack-1x" style="color: #25d366"></i>
                        </span>
                        <span class="fa-stack fa-lg icons">
                            <i class="fa fa-square-o fa-stack-2x" style="color: #3B5998"></i>
                            <i class="fa fa-facebook fa-stack-1x" style="color: #3B5998"></i>
                        </span>
                        <span class="fa-stack fa-lg icons">
                            <i class="fa fa-square-o fa-stack-2x" style="color: #c32aa3"></i>
                            <i class="fa fa-instagram fa-stack-1x" style="color: #c32aa3"></i>
                            
                        </span> -->



                </div>
                <div class="col-md-5 col-sm-12">
                    <h3>Chris Gampat The Bag</h3>
                    <h3 class="price"> IDR 50.000</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur iste, distinctio error
                        exercitationem repudiandae pariatur delectus</p>
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label ">Ukuran</label> &nbsp;
                                    <div class="col-sm-9">
                                        <select class="form-control form-control-sm">
                                            <option>Pilih</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                        </select>
                                    </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label ">Warna</label>
                                        &nbsp;
                                        <div class="col-sm-9">
                                            <select class="form-control form-control-sm">
                                                <option>Pilih</option>
                                                <option>Merah Maroon</option>
                                                <option>Coklat Susu</option>
                                                <option>Army</option>

                                            </select>
                                        </div>
                                </form>
                            </div>
                        </div>
                    
                            <!-- Plus minus -->
                        <div class="input-group offset-md-2 col-md-5 col-xs-12">
                            <div class="input-group-prepend">
                                <button class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                            </div>
                            <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1"
                                style="text-align:center ;height: auto;">
                            <div class="input-group-prepend">
                                <button class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <!-- close plus minus -->
                        <button type="button" class="btn col-md-4 cart" data-toggle="modal" data-target="#myModal"> Add
                            To Cart</button>
                    
                    </div>
                    <!-- End of Row -->
                    <!-- Deskripsi -->
                    <hr class="mt-5">
                    <button class="accordion">Deskripsi</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, id sit quam repellat
                            veritatis doloribus dolorem magnam alias dolorum tenetur natus? Delectus sint impedit porro
                            soluta quas ullam modi dolorem?</p>
                    </div>
                    <hr>
                    <button class="accordion">Informasi Lain</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, id sit quam repellat
                            veritatis doloribus dolorem magnam alias dolorum tenetur natus? Delectus sint impedit porro
                            soluta quas ullam modi dolorem?</p>
                    </div>
                    <hr>

                    <!-- End of Panel -->
                </div>
                <!-- End of col-md-5 -->
            </div>
            <!-- End of Row -->
        </div>
        <!-- Produk -->

    </section>
    <section id="produk">
        <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>Saran Produk</h2>
        </div>

        <div class="swiper-container-r col-md-12">
            <div class="swiper-wrapper">
                <div class="swiper-slide offset-md-1 col-md-2 no-padding col-xs-12">
                    <div class="card ">
                        <span><i class="fa fa-heart fa-1x pull-right mt-2 mr-2 iconl"></i> <span
                                class="news">Diskon</span></span>
                        <img src="Assets/img/product2.png" alt="Denim Jeans" style="width:100%">
                        <p>Adidas Shoes Brown & White school edition</p>
                        <p class="price">IDR 200.000</p>
                    </div>
                    <!-- End of Card -->
                </div>
                <div class="swiper-slide col-md-2 no-padding">
                    <div class="card ">
                        <span><i class="fa fa-heart fa-1x pull-right mt-2 mr-2 iconl"></i><span
                                class="newp">Baru</span></span>
                        <img src="Assets/img/product2.png" alt="Denim Jeans" style="width:100%">
                        <p>Adidas Shoes Brown & White school edition</p>
                        <p class="price">IDR 150.000</p>
                    </div>
                    <!-- End of Card -->
                </div>
                <div class="swiper-slide col-md-2 no-padding">
                    <div class="card ">
                        <span><i class="fa fa-heart fa-1x pull-right mt-2 mr-2 iconl"></i><span
                                class="news">Diskon</span></span>
                        <img src="Assets/img/product2.png" alt="Denim Jeans" style="width:100%">
                        <p>Adidas Shoes Brown & White school edition</p>
                        <p class="price">IDR 200.000</p>
                    </div>
                    <!-- End of card -->
                </div>
                <div class="swiper-slide col-md-2 no-padding">
                    <div class="card ">
                        <span><i class="fa fa-heart fa-1x pull-right mt-2 mr-2 iconl"></i><span
                                class="newp">Baru</span></span>
                        <img src="Assets/img/product2.png" alt="Denim Jeans" style="width:100%">
                        <p>Adidas Shoes Brown & White school edition</p>
                        <p class="price">IDR 180.000</p>
                    </div>
                    <!-- End of Card -->
                </div>
                <div class="swiper-slide col-md-2 no-padding">
                    <div class="card ">
                        <span><i class="fa fa-heart fa-1x pull-right mt-2 mr-2 iconl"></i><span
                                class="news">Diskon</span></span>
                        <img src="Assets/img/product2.png" alt="Denim Jeans" style="width:100%">
                        <p>Adidas Shoes Brown & White school edition</p>
                        <p class="price">IDR 200.000</p>
                    </div>
                    <!-- End of Card -->
                </div>
 
            </div>
            <!-- Add Pagination -->
            <div class="swiper-button-next swipe"></div>
            <div class="swiper-button-prev swipe"></div>

            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->

        </div>
        <!-- End of Swipper Wraper -->


        <!-- Modal -->
        <div class="modal fade modal" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body text-center">
                        <img src="Assets/img/check.png" alt="">
                        <p class="mt-4 prod">Chris Gampat The Bag</p>
                        <p class="desk">Produk telah di tambahkan ke keranjang belanja</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                    </div>
                </div>

            </div>
        </div>


    </section>

</body>
<script src="Assets/js/jquery.min.js"></script>
<script src="Assets/js/swiper.min.js"></script>
<script src="Assets/js-social/jssocials.min.js"></script>

<!-- Plus Minus -->
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

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

<script>
    var swiper = new Swiper('.swiper-container-r', {
        slidesPerView: 5,
        effect: 'slide',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        }
    });
</script>

<script>
    $("#share").jsSocials({
        showLabel: false,
        showCount: false,
        shares: ["twitter", "facebook", "pinterest", "whatsapp",]
    });
</script>



</html>
<?php include 'footer.php'?>