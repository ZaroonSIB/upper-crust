<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact | Upper Crust Pizza 🍕</title>
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
                <h1 class="heading fontHeading fontWeight600 text-uppercase text-center text_primary">Contact</h1>
            </div>
        </section>
        <section class="bgLocation5 bgSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="sub_heading fontHeading text-uppercase">Downtown</h3>
                        <div class="itemLocationAd mt-4">
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
                            <p class="title mt-2">11am - 10pm</p>
                            <p class="title fontHeading mt-3">Happy Hour Specials</p>
                            <p class="title mt-2">3 pm - 6 pm</p>
                        </div>
                        <h3 class="sub_heading fontHeading text-uppercase mt-4 mt-lg-5">EL Dorado</h3>
                        <div class="itemLocationAd mt-4">
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
                            <p class="title mt-2">2pm - 6pm</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="rightContactForm shadow border">
                            <div class="itemForm">
                                <input type="text" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="itemForm">
                                <input type="email" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="itemForm">
                                <input type="tel" name="phone" id="phone" placeholder="Mobile Number">
                            </div>
                            <div class="itemForm">
                                <select name="location" id="location">
                                    <option>--- Select Location ---</option>
                                    <option value="Downtown">Downtown</option>
                                    <option value="EL Dorado">EL Dorado</option>
                                </select>
                            </div>
                            <div class="itemForm">
                                <textarea name="message" id="message" placeholder="How can we help you?"></textarea>
                            </div>
                            <div class="itemForm">
                                <button class="btnTheme fontHeading w-100">Submit</button>
                            </div>
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