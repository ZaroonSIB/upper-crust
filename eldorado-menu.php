<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eldorado Menu | Upper Crust Pizza 🍕</title>
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
        <section class="bgInner">
            <div class="contianer">
                <h1 class="heading fontHeading fontWeight600 text-uppercase text-center text_primary">Eldorado Menu</h1>
                <h4 class="small_heading text-center text-white fontHeading mt-3">Gourmet Pizza Lunch And Dinner Menu</h4>
                <div class="text-center mt-4">
                    <a href="#" class="btnTheme fontHeading">View Full Menu</a>
                </div>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">Pizza</h3>
                <hr>
                <p class="fontWeight600 title ps-lg-3">Size: <strong class="ms-lg-3 bg-black text_primary p-2 rounded">[SMALL $16.95 | LARGE $25.95]</strong></p>
                <p class="mt-3 fontWeight600 small_heading2">With your choice of our Famous Crusts: Traditional Hand Tossed style, Unique Whole Wheat or our Unbelievably Gluten Free Crust!</p>
                <div class="mt-4 d-flex justify-content-between flex-wrap">
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/food.png" width="40" alt=""> COMBO</h4>
                        <p class="title mt-2 ps-lg-5">Pepperoni, mushrooms, bell pepper, onion, green chile and black olives.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/food.png" width="40" alt=""> MEAT TREAT</h4>
                        <p class="title mt-2 ps-lg-5">Pepperoni, Canadian bacon, spicy Italian sausage, and choice of 1 vegetable topping.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/food.png" width="40" alt=""> VEGGIE</h4>
                        <p class="title mt-2 ps-lg-5">Mushroom, bell pepper, onion, black olive, green chile, fresh tomato and sesame seeds.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/food.png" width="40" alt=""> BBQ CHICKEN</h4>
                        <p class="title mt-2 ps-lg-5">Special BBQ Sauce, red onion, bell pepper and BBQ chicken.</p>
                    </div>
                </div>
                <div class="row mt-4 row-cols-lg-6 row-cols-2">
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product2.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product2.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product3.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product3.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product4.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product4.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product5.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product5.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product6.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product6.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgSection bgLocation5">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">SPECIALTY Pizza</h3>
                <hr>
                <p class="fontWeight600 title ps-lg-3">Size: <strong class="ms-lg-3 bg-black text_primary p-2 rounded">[SMALL $19.75 | LARGE $28.75]</strong></p>
                <div class="mt-4 d-flex justify-content-between flex-wrap">
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/food.png" width="40" alt=""> GRECIAN GOURMET</h4>
                        <p class="title mt-2 ps-lg-5">Feta cheese, kalamata olive, bell pepper, mushroom and fresh garlic</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/food.png" width="40" alt=""> SUNNY CHICKEN PESTO</h4>
                        <p class="title mt-2 ps-lg-5">Pesto sauce, fresh marinated chicken breast and sun dried tomato</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/food.png" width="40" alt=""> MARGARITA</h4>
                        <p class="title mt-2 ps-lg-5">Red sauce with fresh basil, tomato, and fresh mozzarella</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/food.png" width="40" alt=""> NEW MEX</h4>
                        <p class="title mt-2 ps-lg-5">Tortilla Flats red chile, shredded cheddar, onion, tomato and chorizo</p>
                    </div>
                </div>
                <div class="row mt-4 row-cols-lg-6 row-cols-2">
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product7.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product7.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product8.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product8.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product9.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product9.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product10.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product10.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product11.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product11.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product12.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product12.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">BUILD-A-PIZZA</h3>
                <hr>
                <p class="fontWeight600 title ps-lg-3">Size: <strong class="ms-lg-3 bg-black text_primary p-2 rounded">[SMALL $11.75 | LARGE $19.95]</strong></p>
                <h4 class="mt-lg-5 mt-4 small_heading borderY fontHeading">CHOICE OF TOPPINGS</h4>
                <div class="row mt-lg-5 mt-4">
                    <div class="col-lg-4">
                        <h5 class="mt-3 small_heading2 fontHeading">EACH ADDITIONAL TOPPING</h5>
                        <h5 class="mt-lg-5 small_heading2 fontHeading">SMALL $2.50</h5>
                        <h5 class="mt-lg-5 small_heading2 fontHeading">LARGE $3.25</h5>
                    </div>
                    <div class="col-lg-8 ps-lg-4">
                        <div class="listPizza">
                            <ul>
                                <li>Pepperoni</li>
                                <li>Bell Pepper</li>
                                <li>Basil</li>
                                <li>Ground Beef</li>
                                <li>Mushroom</li>
                                <li>Pineapple</li>
                                <li>Sausage</li>
                                <li>Black Olive</li>
                                <li>Garlic</li>
                                <li>Chorizo</li>
                                <li>Green Olive</li>
                                <li>Jalapeno</li>
                                <li>Green Chile</li>
                                <li>Red Onion</li>
                                <li>Jalapeno</li>
                                <li>Green Chile</li>
                                <li>Red Onion</li>
                                <li>Spinach</li>
                                <li>Salami</li>
                                <li>Artichoke</li>
                                <li>Onion</li>
                                <li>Canadian Bacon</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4 class="mt-lg-5 mt-4 small_heading borderY fontHeading">SPECIALTY TOPPINGS</h4>
                <div class="row mt-lg-5 mt-4">
                    <div class="col-lg-4">
                        <h5 class="small_heading2 fontHeading">SPECIALTY TOPPINGS</h5>
                        <h5 class="mt-lg-4 small_heading2 fontHeading">SMALL $3.50</h5>
                        <h5 class="mt-lg-4 small_heading2 fontHeading">LARGE $4.50</h5>
                    </div>
                    <div class="col-lg-8 ps-lg-4">
                        <div class="listPizza">
                            <ul>
                                <li>Extra Cheese</li>
                                <li>Chicken</li>
                                <li>Fresh Mozzarella</li>
                                <li>Feta</li>
                                <li>Salmon</li>
                                <li>Kalamata Olive</li>
                                <li>Pesto</li>
                                <li>Anchovy</li>
                                <li>Pine Nuts</li>
                                <li>Sun Dried Tomatoes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 row-cols-lg-4 row-cols-2">
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product13.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product13.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product14.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product14.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product15.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product15.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product16.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product16.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgSection bgLocation5">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">CALZONES</h3>
                <hr>
                <p class="fontWeight600 title ps-lg-3">Price: <strong class="ms-lg-3 bg-black text_primary p-2 rounded">[$12.75]</strong></p>
                <h5 class="small_heading mt-lg-5 mt-4 fontWeight600">SERVED WITH SALAD</h5>
                <div class="mt-4 d-flex justify-content-between flex-wrap">
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/calzone.png" width="40" alt=""> SAUSAGE ROLL CALZONE</h4>
                        <p class="title mt-2 ps-lg-5">Spicy Italian sausage, smothered in our own marinara sauce. green chile, onion and mozzarella cheese are wrapped in pizza dough.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/calzone.png" width="40" alt=""> STROMBOLI CALZONE</h4>
                        <p class="title mt-2 ps-lg-5">Generous portions of pepperoni, Canadian bacon and white cheddar cheese. Spiced with brown mustard and wrapped in our pizza dough.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/calzone.png" width="40" alt=""> ITALIAN CALZONE</h4>
                        <p class="title mt-2 ps-lg-5">Fresh pizza dough wrapped around Canadian bacon, green chile, fresh tomato, onion and a blend of cheeses.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/calzone.png" width="40" alt=""> WHOLEWHEAT CALZONE</h4>
                        <p class="title mt-2 ps-lg-5">Whole wheat pizza dough wrapped around spinach, tomatoes, three cheeses and pesto sauce.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/calzone.png" width="40" alt=""> BUILD-A-ZONE</h4>
                        <p class="title mt-2 ps-lg-5">Your choice two cheeses, one meat and two veggies served with a side of sauce.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">SALADS</h3>
                <hr>
                <div class="mt-4 d-flex justify-content-between flex-wrap">
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/salad.png" width="40" alt=""> OUR HOME-MADE DRESSINGS</h4>
                        <p class="title mt-2 ps-lg-5">Ranch, Bleu Cheese, 1,000 Island, Caesar, Balsamic Vinaigrette, Italian, Sun-Dried Tomato and Spicy Thai. $12.50</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/salad.png" width="40" alt=""> GREEK SALAD</h4>
                        <p class="title mt-2 ps-lg-5">A bountiful salad topped with bell pepper, kalamata olive, tomato and feta cheese. Served with vinaigrette dressing and a side of bread. $12.50</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/salad.png" width="40" alt=""> CHEF SALAD</h4>
                        <p class="title mt-2 ps-lg-5">A generous salad with your choice of ham or turkey, with provolone & swiss cheese, bell pepper and tomato served with choice of dressing and a side of bread. $12.50</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/salad.png" width="40" alt=""> CAESAR SALAD</h4>
                        <p class="title mt-2 ps-lg-5">Crisp romaine lettuce, parmesan cheese, pepper and tomato. Served with house-made croutons and our own caesar dressing. $12.50</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/salad.png" width="40" alt=""> SPINACH SALAD</h4>
                        <p class="title mt-2 ps-lg-5">Fresh spinach, mixed greens, red onion, walnuts, bleu cheese crumbles, tomato served with vinaigrette and a slice of bread. $12.50</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/salad.png" width="40" alt=""> SMOKED SALMON</h4>
                        <p class="title mt-2 ps-lg-5">A fresh mixed green salad with artichoke, sun-dried tomatoes, pine nuts, fresh smoked salmon and a touch of feta, lemon and olive oil. $14.95</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/salad.png" width="40" alt=""> TOSSED SALAD</h4>
                        <p class="title mt-2 ps-lg-5">A colorful array of fresh veggies with choice of dressing. SMALL $4.75 LARGE $8.25</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/salad.png" width="40" alt=""> SALAD EXTRAS</h4>
                        <p class="title mt-2 ps-lg-5">Chicken, Meat or Cheese $3.50 | Avocado $2.95 </p>
                    </div>
                </div>
                <div class="row mt-4 row-cols-lg-4 row-cols-2">
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product17.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product17.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product18.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product18.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product19.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product19.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="itemPizzaGallery">
                            <a href="images/product/product20.jpeg" data-fancybox="gallery" data-caption="Pizza">
                                <img src="images/product/product20.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgSection bgLocation5">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">SANDWICHES </h3>
                <hr>
                <p class="fontWeight600 title ps-lg-3">Price: <strong class="ms-lg-3 bg-black text_primary p-2 rounded">[$12.25]</strong></p>

                <div class="mt-4 d-flex justify-content-between flex-wrap">
                    <div class="itemMenus w-100">
                        <h4 class="small_heading fontHeading"><img src="images/icons/sandwich.png" width="40" alt=""> SANDWICH EXTRAS</h4>
                        <p class="title mt-2 ps-lg-5">Meat or Cheese $3.50 | Avocado $2.95</p>
                    </div>
                </div>
                <h5 class="small_heading mt-4 fontWeight600">SERVED WITH A SALAD AND CHIPS</h5>
                <div class="mt-3 d-flex justify-content-between flex-wrap">
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/sandwich.png" width="40" alt=""> VEGETARIAN</h4>
                        <p class="title mt-2 ps-lg-5">Provolone and Swiss cheese, avocado, mushroom, bell pepper, onion, black olives, tomato and fresh sprouts.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/sandwich.png" width="40" alt=""> ITALIAN</h4>
                        <p class="title mt-2 ps-lg-5">Genoa salami and thinly sliced ham piled high on your choice of sub roll with provolone cheese.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/sandwich.png" width="40" alt=""> CHICKEN BREAST</h4>
                        <p class="title mt-2 ps-lg-5">Fresh marinated chicken breast with all the toppings and your choice of cheese.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/sandwich.png" width="40" alt=""> HAM</h4>
                        <p class="title mt-2 ps-lg-5">Thinly sliced ham stacked on a sub roll of your choice, topped with your choice of cheese.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/sandwich.png" width="40" alt=""> MEATBALL</h4>
                        <p class="title mt-2 ps-lg-5">This classic hot sandwich is served on a french sub roll with Parmesan cheese and provolone cheese. Add bell peppers and onions at your leisure.</p>
                    </div>
                    <div class="itemMenus">
                        <h4 class="small_heading fontHeading"><img src="images/icons/sandwich.png" width="40" alt=""> TURKEY</h4>
                        <p class="title mt-2 ps-lg-5">Thinly sliced turkey stacked on a sub roll of your choice, topped with your choice of cheese.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">LUNCH SPECIALS </h3>
                <hr>
                <p class="fontWeight600 mt-lg-5  mt-4 small_heading fontHeading ps-lg-3">MONDAY - FRIDAY 11AM-2PM</p>

                <div class="listPizza mt-4">
                    <ul>
                        <li class="w-50">1 topping 6” pizza + salad + drink $9.95</li>
                        <li class="w-50">Additional Topping $ .75 Specialty Topping $1.20</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="bgLocation5 bgSection">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">SIDES </h3>
                <hr>
                <div class="listPizza mt-4">
                    <ul>
                        <li>Garlic Bread $4.50</li>
                        <li>with Mozzarella $5.95</li>
                        <li>Side of Sauce $1.75</li>
                        <li>Chips $1.75</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">DESSERT </h3>
                <hr>
                <div class="listPizza mt-4">
                    <ul>
                        <li>Cheesecake $7.50</li>
                        <li>Pies $7.50</li>
                        <li>Cookies $3.95</li>
                        <li>Brownies with nuts $4.75</li>
                        <li>Brownies without nuts $4.50</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="bgLocation5 bgSection">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">BEER AND WINE </h3>
                <hr>
                <p class="mt-4 title fontHeading">Enjoy our selection of Local, Domestic and Imported Wines</p>
                <div class="listPizza mt-4">
                    <ul>
                        <li>Premium Draft 16 0z $5.95</li>
                        <li>Microbrew $ 5.95 Import $ 5.95</li>
                        <li>Glass $7.50</li>
                        <li>Domestic $ 5.75</li>
                        <li>Bottle $26.95</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="bgLocation5">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase">DRINKS </h3>
                <hr>
                <div class="listPizza mt-4">
                    <ul>
                        <li>Soda $3.50</li>
                        <li>Refills $.50</li>
                        <li>Milk $3.50</li>
                        <li>Coffee & Iced Tea $3.50</li>
                        <li>Hot Tea (herbal) $3.50</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="bgInner">
            <div class="container">
                <h3 class="heading fontHeading text-uppercase text_primary text-center">CHOOSE A LOCATION TO ORDER FROM </h3>
                <div class="row mt-lg-5 mt-4">
                    <div class="col-lg-6">
                        <img src="images/eldorado.png" class="w-100" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img src="images/downtown 29.png" class="w-100" alt="">
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