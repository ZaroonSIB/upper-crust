<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EL Dorado | Upper Crust Pizza 🍕</title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <section class="bgInner" style="background-image: url(images/bg/chalkboard.jpg);">
            <div class="contianer">
                <h1 class="heading fontHeading fontWeight600 text-uppercase text-center text_primary">EL Dorado</h1>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="itemLocationAd">
                            <p class="address small_heading fontHeading"><strong>Address</strong></p>
                            <p class="title mt-2">5 Colina Dr Santa Fe, NM 87508</p>
                        </div>
                        <div class="itemLocationAd mt-4">
                            <p class="phone small_heading fontHeading"><strong>PHONE</strong></p>
                            <p class="title mt-2 fontHeading"><a href="tel:505-471-1111">#: 505-471-1111</a></p>
                        </div>
                        <div class="itemLocationAd mt-4">
                            <p class="time small_heading fontHeading"><strong>HOURS</strong></p>
                            <div class="d-flex flex-wrap">
                                <div>
                                    <p class="title fontHeading mt-3">Sunday to Thursday</p>
                                    <p class="title mt-2">11am - 8pm</p>
                                </div>
                                <div class="ms-lg-4">
                                    <p class="title fontHeading mt-3">Friday and Saturday </p>
                                    <p class="title mt-2">11am-9pm</p>
                                </div>
                            </div>
                            <p class="title fontHeading mt-3">Happy Hour Specials</p>
                            <p class="title mt-2">2pm – 6pm</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <img src="images/eldorado.jpeg" class="w-100 rounded-4 shadow" alt="">
                    </div>
                </div>
                <div class="mt-lg-5 mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3246.700103531923!2d-105.88865152511207!3d35.536408037917504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8718f8b023cace11%3A0xefa27415951d3c8c!2sUpper%20Crust%20Pizza%20El%20Dorado!5e0!3m2!1sen!2sus!4v1742207608329!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <section class="bg-black">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery8.jpg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery8.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery9.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery9.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery10.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery10.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery11.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery11.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery12.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery12.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'include/footer.php'; ?>
    <?php include 'include/footer-links.php'; ?>
    <script>
        $('[data-fancybox="gallery"]').fancybox({});
    </script>
</body>

</html>