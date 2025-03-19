<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Safety Response | Upper Crust Pizza 🍕</title>
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
    <style>
        .text_primary {
            color: var(--primary-color) !important
        }
    </style>
</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <section class="bgInner" style="background-image: url(images/bg/chalkboard.jpg);">
            <div class="contianer">
                <h1 class="heading fontHeading fontWeight600 text-uppercase text-center text_primary">Safety Response</h1>
                <h4 class="small_heading text-center text-white fontHeading mt-3">All locations are now opening in accordance to New Mexico State Law</h4>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <h3 class="sub_heading fontHeading">Our Restaurant Promise</h3>
                <p class="title fontWeight600 mt-3">Upper Crust Pizza has an outstanding track record of protecting our employees and guests. To ensure everyone’s safety as we welcome you, we ask that we make the following promises to each other:</p>
                <div class="row mt-lg-5 mt-4">
                    <div class="col-lg-7">
                        <div class="leftSafety">
                            <h3 class="small_heading fontHeading">Our Promise to You:</h3>
                            <ol class="mt-4">
                                <li>We will continue to be a leader in safe sanitation practices with all team members certified in safe food handling.</li>
                                <li>Staff will wear face coverings at all times.</li>
                                <li>All staff will pass a health check or complete a health survey prior to each shift.</li>
                                <li>All seating or carry out options will comply with the appropriate social distancing guidelines.</li>
                                <li>Hand sanitizer will be available upon entry and exit.</li>
                                <li>We will clean and sanitize common areas regularly.</li>
                                <li>All tables and chairs will be cleaned and sanitized after every use.</li>
                                <li>Place settings, utensils, menus, and condiments will either be single-use or will be cleaned and sanitized after every use.</li>
                                <li>We will post information at our entrances so everyone understands the steps we must all take to keep our communities safe.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="rightSafety">
                            <img src="images/pizza-right.jpg" alt="" class="rounded-3 shadow">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-0 bgLocation5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="rightSafety">
                            <img src="images/left-pizza-safety.jpg" alt="" class="rounded-3 shadow">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="leftSafety ps-lg-4">
                            <h3 class="small_heading fontHeading">Your Promise to Us</h3>
                            <ol class="mt-4">
                                <li>You will wear a face mask when entering and/or exiting the building or moving about the building. You do not need to wear a face mask when seated at your table.</li>
                                <li>If you have been exposed to COVID-19 recently or have symptoms of COVID-19 (including a fever, cough, or shortness of breath), please help us keep everyone safe by using our contactless delivery or carry out options.</li>
                                <li>If you have underlying health conditions or are otherwise concerned about contracting COVID-19, please feel free to use our contactless delivery or take-out options.</li>
                                <li>If you have any questions about this information, please ask for a manager who will be happy to assist you.</li>
                                <h3 class="small_heading fontHeading mt-4">To our customers</h3>
                                <p class="mt-4 fontWeight600">We are working diligently to keep our customers and employees healthy while continuing to offer excellent food in a safe manner. We have modified our protocols to employ the strictest safety standards. We’ll continue to offer the great food that you love.</p>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgAction">
            <div class="container">
                <div class="actionText">
                    <h3 class="small_heading fontHeading text-white">Preventive measures</h3>
                    <p>As the situation around novel coronavirus (COVID-19) continues to evolve, we are doing everything we can to ensure your safety.</p>
                    <ol>
                        <li>We have increased the frequency of cleaning our public and kitchen areas (including counter tops, door handles, restrooms, etc.) and have continued the use of industrial strength disinfectant.</li>
                        <li>We will continue to adjust food and beverage service in accordance with current food safety recommendations.</li>
                        <li>We have increased the deployment of antibacterial hand sanitizers.</li>
                    </ol>
                    <h3 class="small_heading fontHeading text-white mt-4">Below is a communication from the CDC</h3>
                    <p class="title text_primary"><i>There is currently no vaccine to prevent coronavirus disease 2019 (COVID-19). The best way to prevent illness is to avoid being exposed to this virus. However, as a reminder, CDC always recommends everyday preventive actions to help prevent the spread of respiratory diseases, including:</i></p>
                    <ol>
                        <li>Avoid close contact with people who are sick.</li>
                        <li>Avoid touching your eyes, nose, and mouth.</li>
                        <li>Stay home when you are sick.</li>
                        <li>Cover your cough or sneeze with a tissue, then throw the tissue in the trash.</li>
                        <li>Clean and disinfect frequently touched objects and surfaces using a regular household cleaning spray or wipe.</li>
                        <li>Wash your hands often with soap and water for at least 20 seconds. If soap and water are not readily available, use an alcohol-based hand sanitizer with at least 60% alcohol. Always wash hands with soap and water if hands are visibly dirty.</li>
                    </ol>
                    <p class="mt-4 title fontWeight600">Thank you for being wonderful customers and friends of Upper Crust Pizza! From our kitchen to your home, it is truly an honor to be your Santa Fe neighbor.</p>
                    <div class="text-center mt-lg-5">
                        <a href="https://www.cdc.gov/covid/index.html" class="btnTheme fontHeading">Learn more about COVID-19</a>
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