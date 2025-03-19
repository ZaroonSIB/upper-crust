<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our History | Upper Crust Pizza 🍕</title>
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
        <section class="bgInner" style="background-image: url(images/bg/bg-bottom.3.jpg);">
            <div class="contianer">
                <h1 class="heading fontHeading fontWeight600 text-uppercase text-center text_primary">Our History</h1>
                <h4 class="small_heading text-center text-white fontHeading mt-3">History Of Our Pizza Restaurant</h4>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <div class="itemAwards shadow">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="leftHistoryInner px-lg-4">
                                <h4 class="small_heading fontHeading">GRAND OPENING OF SISTER PIZZA SHOP, MOUNTAIN HIGH PIE IN JACKSON HOLE, WYOMING, MAY 1980</h4>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="innerRightHistory">
                                <img src="images/dean-58d55532533c8.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgAction">
            <div class="container">
                <div class="blockInnerContent">
                    <p>If you’re looking for a pizza restaurant in Santa Fe, you won’t have any trouble finding one. Back in 1979, however, when Upper Crust Pizza opened up in an old jewelry store, it may not have been so easy finding a pizza place that makes your mouth water. And that’s why Bill and Dean got in the business of making pies. They began with a simple menu with items that are made to perfection and continued to add new items that the Santa Fe residents craved.</p>
                    <p>Today, you will find a <a href="https://www.uppercrustpizza.com/menu/">lunch and dinner</a> menu filled with everything from quiche to salads and sandwiches to pizzas and calzones. What makes Upper Crust Pizza a favorite is the fresh ingredients, dough that guests love to sink their teeth into, and a welcoming environment filled with live music, a relaxing patio, and a family-friendly atmosphere. When families visit, they can expect to feel like a part of the Upper Crust family.</p>
                    <p>Not many restaurants can claim that they have won, or win awards. However, Upper Crust Pizza has been serving up <a href="https://www.uppercrustpizza.com/awards/">award-winning</a> pizza for years. Consistently winning Best Local Pizza by the <a href="http://www.sfreporter.com/santafe/article-12647-restaurant-guide-directory.html">Santa Fe Reporter</a>, you can expect to find unique pizza toppings such as pine nuts and green chile, as well as traditional pepperoni, sausage, and Margherita pizzas. If you want a tasty beverage to go along with your pie, order a cold brew, an elegant glass of wine, or stick to the basic fountain drinks. Many of the beer and wines are local, adding to the charm and hometown feel of the restaurant.</p>
                    <p>Come by for a quick lunch in the afternoon, or bring the whole family for pizza night on the weekend, all are welcome to our restaurant and we can’t wait to bring a steaming, cheesy, pizza to your table for you to dig into.</p>
                </div>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <h4 class="sub_heading fontHeading text-center">READ THE EXTRAORDINARY STORY OF TWO CHILDHOOD FRIENDS WHO MAKE GREAT PIZZA</h4>
                <img src="images/exit-58d555539bc2c.jpg" class="w-100 mt-4" alt="">
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