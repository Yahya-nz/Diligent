<!--Footer-->
<footer class="page-footer "  style="padding-top: 20px;margin-top: 25px; background: #F8F8F8; ">

    <!-- Footer Links -->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">


            <!--First column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong style="border-left: 3px solid #E75643 ; "> &nbsp; BECOME FAN</strong>
                </h6>
                <p class="iconf"><i style="color: #E75643" class="fa fa-facebook  mr-2 "> </i>FACEBOOK </p>
                <p class="iconf"><i style="color: #E75643" class="fa fa-twitter mr-2"> </i>TWITTER</p>
                <p class="iconf"><i style="color: #E75643" class="fa fa-instagram mr-2"> </i>INSTAGRAM</p>

            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4 ">
                <h6 class="text-uppercase font-weight-bold">
                    <strong style="border-left: 3px solid #E75643 ;"> &nbsp;BANTUAN DAN PELAYANAN</strong>
                </h6>

                <p>
                    <a href="#!" style="color:black; text-decoration: none;">Cara Pemesanan</a>
                </p>
                <p>
                    <a href="#!" style="color: black; text-decoration: none;"> Konfirmasi Pembayaran</a>
                </p>
                <p>
                    <a href="#!" style="color: black; text-decoration: none;">Pertanyaan Umum</a>
                </p>

            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong style="border-left: 3px solid #E75643 ;"> &nbsp;ALAMAT</strong>
                </h6>

                <p>
                    Jl. Citarum no.20A Bandung - Cihapit,
                    Bandung Wetan, Kota Bandung,
                    Jawa Barat 40115
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-4 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong style="border-left: 3px solid #E75643 ;">&nbsp; TENTANG KAMI</strong>
                </h6>

                <p style="text-align: justify">
                    DILIGENT adalah situs website yang menyediakan berbagai macam peralatan sekolah murah dan
                    berkualitas.
                    Kami menyediakan berbagai jenis perlengkapan sekolah yang anak perlukan seperti tas
                    sekolah,alat-alat tulis, buku gambar , hingga media belajar yang berkualitas tinggi.
                </p>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 " style="background: #E75643; color: white">
        © 2019 Copyright:
        <a href="https://greatcode.id/index.php" style="color :white"> GreatCode</a>
    </div>
    <!-- Copyright -->

    <!--/.Footer Links-->
</footer>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="Assets/js/bootstrap.js"></script>
<script type="text/javascript" src="Assets/js/global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="Assets/js/swiper.min.js"></script>



<!-- Swipersliderpro -->

<script>
    var swiper = new Swiper('#swip', {
        slidesPerView: 4,
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
                spaceBetween: 30,

            },
        }
    });
</script>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.documentElement.scrollTop > 100) {
    $('.top-header').css('height' , '0');
    $('.navbarr').css('transform' , 'translateY(-40px)');
  } else {
    $('.top-header').css('height' , 'unset');
    $('.navbarr').css('transform' , 'translateY(0)');
  }
}
</script>

</html>
