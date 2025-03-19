<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Upper Crust </title>
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
      <div class="heroBanner position-relative">
         <div class="container">
            <div class="textBanner">
               <h1 class="large_heading fontBanner text-center text-uppercase strokeBlack text_primary">Upper Crust Pizza</h1>
               <div class="heroPizza">
                  <img src="images/pizza-hero.png" alt="">
               </div>
            </div>
         </div>
         <div class="bg-fixed overlayBg"></div>
      </div>
      <div class="container">
         <div class="text-center bannerBottom mt-5">
            <div class="btnBlock d-flex justify-content-center">
               <a href="#">
                  <span><i class="fa fa-phone"></i></span>
                  <span class="fontHeading">DOWNTOWN 505-982-0000</span>
               </a>
               <a href="#">
                  <span><i class="fa fa-phone"></i></span>
                  <span class="fontHeading text-uppercase">EL Dorado 505-471-1111</span>
               </a>
            </div>
         </div>
      </div>
      <section class="bgLocation">
         <div class="container">
            <h2 class="heading fontHeading fontWeight600 text-uppercase text-center">Menu Favorites</h2>
            <div class="sliderMenu mt-lg-5 mt-4">
               <div class="itemDish">
                  <div class="innerDish">
                     <a href="#">
                        <div class="dishImg">
                           <img src="images/pizza-1.jpg" alt="">
                        </div>
                        <p class="mt-3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        <h3 class="small_heading fontHeading text-uppercase mt-2">Grecian Gormet Pizza</h3>
                        <p class="mt-2">A platter of our handcrafted sushi, curated by our head chef</p>
                     </a>
                  </div>
               </div>
               <div class="itemDish">
                  <div class="innerDish">
                     <a href="#">
                        <div class="dishImg">
                           <img src="images/pizza-2.jpg" alt="">
                        </div>
                        <p class="mt-3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        <h3 class="small_heading fontHeading text-uppercase mt-2">Grecian Gormet Pizza</h3>
                        <p class="mt-2">A platter of our handcrafted sushi, curated by our head chef</p>
                     </a>
                  </div>
               </div>
               <div class="itemDish">
                  <div class="innerDish">
                     <a href="#">
                        <div class="dishImg">
                           <img src="images/pizza-3.jpg" alt="">
                        </div>
                        <p class="mt-3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        <h3 class="small_heading fontHeading text-uppercase mt-2">Grecian Gormet Pizza</h3>
                        <p class="mt-2">A platter of our handcrafted sushi, curated by our head chef</p>
                     </a>
                  </div>
               </div>
               <div class="itemDish">
                  <div class="innerDish">
                     <a href="#">
                        <div class="dishImg">
                           <img src="images/pizza-4.jpg" alt="">
                        </div>
                        <p class="mt-3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        <h3 class="small_heading fontHeading text-uppercase mt-2">Grecian Gormet Pizza</h3>
                        <p class="mt-2">A platter of our handcrafted sushi, curated by our head chef</p>
                     </a>
                  </div>
               </div>
            </div>
            <div class="text-center mt-lg-5 mt-4">
               <a href="#" class="btnTheme fontHeading">View Full Menu</a>
            </div>
         </div>
      </section>
      <section class="bgSection">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="itemBottomBanner text-center">
                     <div class="iconBottom">
                        <img src="images/icons/pizza.png" alt="">
                     </div>
                     <h4 class="sub_heading fontHeading text-uppercase">Original Recipes</h4>
                     <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deserunt dolorem nobis harum reiciendis numquam...</p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="itemBottomBanner text-center">
                     <div class="iconBottom">
                        <img src="images/icons/salad.png" alt="">
                     </div>
                     <h4 class="sub_heading fontHeading text-uppercase">Qualty Foods</h4>
                     <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deserunt dolorem nobis harum reiciendis numquam...</p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="itemBottomBanner text-center">
                     <div class="iconBottom">
                        <img src="images/icons/delivery-bike.png" alt="">
                     </div>
                     <h4 class="sub_heading fontHeading text-uppercase">Fastest Delivery</h4>
                     <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deserunt dolorem nobis harum reiciendis numquam...</p>
                  </div>
               </div>
               </script>
            </div>
            <div class="text-center bannerBottom mt-5">
               <div class="btnBlock d-flex justify-content-center">
                  <a href="#">
                     <span><i class="fa fa-phone"></i></span>
                     <span class="fontHeading">DOWNTOWN 505-982-0000</span>
                  </a>
                  <a href="#">
                     <span><i class="fa fa-phone"></i></span>
                     <span class="fontHeading text-uppercase">EL Dorado 505-471-1111</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="bgLocation">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-9">
                  <h3 class="heading fontHeading fontWeight600 text-uppercase mt-3 text-center">Two Convenient Locations to Order From</h3>
               </div>
            </div>
            <div class="row mt-lg-5 justify-content-center">
               <div class="col-lg-4">
                  <div class="itemLocation">
                     <img src="images/downtown.jpg" alt="">
                     <h4 class="sub_heading fontHeading text_primary mt-4 text-uppercase text-center">Downtown</h4>
                     <p class="mt-3">8721 M Central Avenue, Los Angeles, CA 90036 Daily 11AM - 10PM</p>
                     <h5 class="small_heading fontHeading mt-3"><a class="text_secondary" href="tel:505-982-0000"><i class="fa fa-phone"></i> 505-982-0000</a></h5>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="itemLocation">
                     <img src="images/downtown.jpg" alt="">
                     <h4 class="sub_heading fontHeading text_primary mt-4 text-uppercase text-center">EL Dorado
                     </h4>
                     <p class="mt-3">8721 M Central Avenue, Los Angeles, CA 90036 Daily 11AM - 10PM</p>
                     <h5 class="small_heading fontHeading mt-3"><a class="text_secondary" href="tel:505-982-0000"><i class="fa fa-phone"></i> 505-471-1111</a></h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bgPrimary pizzaSlice">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="leftAbout">
                     <img src="images/about.png" alt="">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="rightAbout ps-lg-5">
                     <h2 class="heading ottFors fontWeight600 text-uppercase">Nationally Acclaimed Pizza</h2>
                     <p class="sub_heading mt-2 fontHeading text-uppercase"><i>Award Winning Pizza</i></p>
                     <p class="mt-3">Not many restaurants can claim that they have won, or win awards. However, UPPER CRUST PIZZA has been serving up award-wining pizza for years. Consistently winning Best Local Pizza by the Santa Fe Reporter, you can expect to find unique pizza toppings such as pine nuts and green chille, as well as traditional pepperoni, sausage, and Margherita pizza. If you want a tasty beverage to go along with your pie, order a cold brew, an elegant glass of wine, or stick to the basic fountain drinks. Many of the beer and wines are local, adding to the charm and hometown feel of the restaurant.</p>
                     <a href="#" class="btnBlack mt-4">Know More</a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="bgSection">
         <div class="container-fluid">
            <h4 class="sub_heading fontHeading fontWeight600 text-uppercase mt-3 text-center text_primary">Order Now</h4>
            <h3 class="heading fontHeading fontWeight600 text-uppercase mt-3 text-center">There Ways to Enjoy Upper Crsut Pizza</h3>
            <div class="row mt-lg-5 mt-4">
               <div class="col-lg-3 px-lg-2">
                  <div class="itemLeftPizza">
                     <a href="#">
                        <img src="images/location-img.jpg" alt="">
                        <div class="overLayItem">
                           <h4 class="small_heading text-center fontHeading text-uppercase">Locations</h4>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 px-lg-2">
                  <div class="itemLeftPizza">
                     <a href="#">
                        <img src="images/online-order.jpg" alt="">
                        <div class="overLayItem">
                           <h4 class="small_heading text-center fontHeading text-uppercase">Online Order</h4>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 px-lg-2">
                  <div class="itemLeftPizza">
                     <a href="#">
                        <img src="images/pizza-delivery.jpg" alt="">
                        <div class="overLayItem">
                           <h4 class="small_heading text-center fontHeading text-uppercase">Delivery</h4>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bgSecondary py-lg-0 position-relative">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="leftAction">
                     <h3 class="heading fontHeading text_primary fontWeight600 text-uppercase">Award Winning Pizza</h3>
                     <h4 class="small_heading fontHeading text-white my-3 text-uppercase">Know Our Price</h4>
                     <a href="#" class="btnTheme mt-4 fontHeading">View Price List</a>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="rightAction">
                     <img src="images/promo-12-img.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bgLocation">
         <div class="container">
            <h3 class="heading fontHeading fontWeight600 text-uppercase mt-3 text-center">Wait There's More</h3>
            <div class="row mt-lg-5 mt-4">
               <div class="col-lg-6">
                  <div class="leftMore">
                     <div class="itemMore bgPrimary">
                        <div class="imgMore">
                           <img src="images/history.jpg" alt="">
                        </div>
                        <div class="rightMore">
                           <h4 class="small_heading text-uppercase fontHeading">History</h4>
                           <p class="mt-2">Grand opening of sister pizza shop, Mountain High Pie in Jackson Hole, Wyoming, May 1980</p>
                        </div>
                     </div>
                     <div class="itemMore bgSecondary">
                        <div class="imgMore">
                           <img src="images/pizza-wining.jpg" alt="">
                        </div>
                        <div class="rightMore">
                           <h4 class="small_heading text-uppercase fontHeading">Award Winning Pizza</h4>
                           <p class="mt-2">Testimonials are short quotes from people who love you brand it's a great way to convince customers to try your services.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="itemMore bgSecondary">
                     <div class="imgMore">
                        <img src="images/ambiance.jpg" alt="">
                     </div>
                     <div class="rightMore">
                        <h4 class="small_heading text-uppercase fontHeading">Check out the Ambiance</h4>
                        <p class="mt-2">Testimonials are short quotes from people who love you brand it's a great way to convince customers to try your services.</p>
                     </div>
                  </div>
                  <div class="itemMore bgPrimary">
                     <div class="imgMore">
                        <img src="images/crust.jpg" alt="">
                     </div>
                     <div class="rightMore">
                        <h4 class="small_heading text-uppercase fontHeading">Gluten Free Crusts</h4>
                        <p class="mt-2">Grand opening of sister pizza shop, Mountain High Pie in Jackson Hole, Wyoming, May 1980</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="text-center bannerBottom mt-5">
               <div class="btnBlock d-flex justify-content-center">
                  <a href="#">
                     <span><i class="fa fa-phone"></i></span>
                     <span class="fontHeading">DOWNTOWN 505-982-0000</span>
                  </a>
                  <a href="#">
                     <span><i class="fa fa-phone"></i></span>
                     <span class="fontHeading text-uppercase">EL Dorado 505-471-1111</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="bgTestimonial">
         <div class="container">
            <div class="testimonialSlider">
               <div class="itemTestimonail">
                  <div class="innerTestimonial">
                     <div class="auther">
                        <img src="images/review-author-5.jpg">
                     </div>
                     <p class="small_heading text-white fontWeight400 mt-4">" Egestas egestas magna ipsum vitae purus efficitur ipsum primis in cubilia laoreet augue egestas luctus donec ociis vitae purus diam integer congue magna undo impedit lacus dolor "</p>
                     <div class="testimonialAuthor mt-lg-5 mt-4">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h4 class="mt-3 small_heading text-white fontHeading text-uppercase">Person Name</h4>
                     </div>
                  </div>
               </div>
               <div class="itemTestimonail">
                  <div class="innerTestimonial">
                     <div class="auther">
                        <img src="images/review-author-5.jpg">
                     </div>
                     <p class="small_heading text-white fontWeight400 mt-4">" Egestas egestas magna ipsum vitae purus efficitur ipsum primis in cubilia laoreet augue egestas luctus donec ociis vitae purus diam integer congue magna undo impedit lacus dolor "</p>
                     <div class="testimonialAuthor mt-lg-5 mt-4">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h4 class="mt-3 small_heading text-white fontHeading text-uppercase">Person Name</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- <section>
         <div class="container">
            <h3 class="heading fontHeading fontWeight600 text-uppercase mt-3 text-center">Articles & News</h3>
            <div class="sliderBlog mt-lg-5 mt-4">
               <div class="itemBlog">
                  <div class="innerBlog">
                     <a href="#">
                        <div class="blogImg">
                           <img src="images/blog/img-01.jpg" alt="">
                        </div>
                        <div class="blogDes">
                           <h4 class="small_heading my-lg-3 fontHeading text-uppercase">Quaerat neque purus ipsum neque dolor</h4>
                           <p>Quaerat neque purus ipsum neque dolor primis tempus impedit</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="itemBlog">
                  <div class="innerBlog">
                     <a href="#">
                        <div class="blogImg">
                           <img src="images/blog/img-02.jpg" alt="">
                        </div>
                        <div class="blogDes">
                           <h4 class="small_heading my-lg-3 fontHeading text-uppercase">Quaerat neque purus ipsum neque dolor</h4>
                           <p>Quaerat neque purus ipsum neque dolor primis tempus impedit</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="itemBlog">
                  <div class="innerBlog">
                     <a href="#">
                        <div class="blogImg">
                           <img src="images/blog/img-03.jpg" alt="">
                        </div>
                        <div class="blogDes">
                           <h4 class="small_heading my-lg-3 fontHeading text-uppercase">Quaerat neque purus ipsum neque dolor</h4>
                           <p>Quaerat neque purus ipsum neque dolor primis tempus impedit</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <section class="py-lg-4">
         <div class="container">
            <!-- <h3 class="heading fontHeading fontWeight600 text-uppercase mt-3 text-center">Our Partner</h3> -->
            <div class="partnerSlider">
               <div class="itemPartner">
                  <div class="innerPartner">
                     <img src="images/brand/brand-11.png" alt="">
                  </div>
               </div>
               <div class="itemPartner">
                  <div class="innerPartner">
                     <img src="images/brand/brand-12.png" alt="">
                  </div>
               </div>
               <div class="itemPartner">
                  <div class="innerPartner">
                     <img src="images/brand/brand-13.png" alt="">
                  </div>
               </div>
               <div class="itemPartner">
                  <div class="innerPartner">
                     <img src="images/brand/brand-14.png" alt="">
                  </div>
               </div>
               <div class="itemPartner">
                  <div class="innerPartner">
                     <img src="images/brand/brand-15.png" alt="">
                  </div>
               </div>
               <div class="itemPartner">
                  <div class="innerPartner">
                     <img src="images/brand/brand-16.png" alt="">
                  </div>
               </div>
               <div class="itemPartner">
                  <div class="innerPartner">
                     <img src="images/brand/brand-17.png" alt="">
                  </div>
               </div>
               <div class="itemPartner">
                  <div class="innerPartner">
                     <img src="images/brand/brand-18.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
   <?php include 'include/footer.php'; ?>
   <?php include 'include/footer-links.php'; ?>
</body>
<script>
   $('[data-fancybox="gallery"]').fancybox({});
</script>

</html>