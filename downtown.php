<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Downtown | Upper Crust Pizza 🍕</title>
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
                <h1 class="heading fontHeading fontWeight600 text-uppercase text-center text_primary">Downtown</h1>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="itemLocationAd">
                            <p class="address small_heading fontHeading"><strong>Address</strong></p>
                            <p class="title mt-2">329 Old Santa Fe Trail Santa Fe, NM 87501</p>
                        </div>
                        <div class="itemLocationAd mt-4">
                            <p class="phone small_heading fontHeading"><strong>PHONE</strong></p>
                            <p class="title mt-2 fontHeading"><a href="tel:505-982-0000">#: 505-982-0000</a></p>
                        </div>
                        <div class="itemLocationAd mt-4">
                            <p class="time small_heading fontHeading"><strong>HOURS</strong></p>
                            <p class="title fontHeading mt-3">Open 7 days a week from</p>
                            <p class="title mt-2">11am-10pm</p>
                            <p class="title fontHeading mt-3">Happy Hour Specials</p>
                            <p class="title mt-2">3 pm – 6 pm</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <img src="images/downtown.jpeg" class="w-100 rounded-4 shadow" alt="">
                    </div>
                </div>
                <div class="mt-lg-5 mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1620.36376472234!2d-105.93773289179113!3d35.683710484021276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87185045c932c711%3A0x5333553fbf1a7996!2sUpper%20Crust%20Pizza%20Downtown!5e0!3m2!1sen!2sus!4v1742203230937!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <section class="bg-black">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery2.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery2.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery3.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery3.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery4.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery4.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery5.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery5.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery6.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery6.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="itemGalleryLocation">
                            <a href="images/gallery/gallery7.jpeg" data-fancybox="gallery" data-caption="Downtown">
                                <img src="images/gallery/gallery7.jpeg" alt="">
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