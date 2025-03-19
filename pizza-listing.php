<?php
$toppings = [
    'Mozzarella',
    'Bacon',
    'Black Olives',
    'Chicken',
    'Garlic',
    'Green Peppers',
    'Jalapenos',
    'Mayo',
    'Mushrooms',
    'Oregano',
    'Philly Steak',
    'Red Onions',
    'Sausage',
    'Tomatoes'
];
$toppings2 = [
    'Anchovies',
    'Banana Peppers',
    'Cheddar Jack',
    'Feta',
    'Green Olives',
    'Ham',
    'Lettuce',
    'Meatballs',
    'Onions',
    'Pepperoni',
    'Pineapple',
    'Romano',
    'Spinach'
];
?>
<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop | Upper Crust Pizza 🍕</title>
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
                <h1 class="heading fontHeading fontWeight600 text-uppercase text-center text-white">Upper Crust Pizza Shop</h1>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="itemListing">
                            <a href="#">
                                <div class="imgProduct">
                                    <img src="images/product/product.jpeg" />
                                </div>
                                <div class="productDescriptionLis">
                                    <h4 class="small_heading fontHeading fontWeight">Cheese</h4>
                                    <h3 class="title mt-1 fontHeading">$12.49 <span>$25.49</span></h3>
                                    <p class="mt-1">Our Cheese is topped with Mozzarella Cheese, Pizza Sauce.</p>
                                    <button class="cartBtn w-100 mt-3 fontHeading"><i class="fa fa-"></i> Add to Cart</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- cart popup -->
    <div class="cartModal" style="display: none;">
        <div class="cartContent">
            <div class="leftCartModal">
                <img src="images/product/product.jpeg" alt="">
            </div>
            <div class="rightCartModal">
                <div class="text-end mtNegative">
                    <button class="btnClose"><i class="fa fa-times"></i></button>
                </div>
                <h3 class="small_heading fontHeading">Customize Cheese</h3>
                <p class="fontWeight600">Our Cheese is topped with Mozzarella Cheese, Pizza Sauce.</p>
                <div class="customizeBlock">
                    <div class="itemCustomise">
                        <div class="customizeHeader">
                            <p class="fontWeight600">Please select a Style and Size</p>
                        </div>
                        <div class="p-3">
                            <div class="itemOption">
                                <p class="fontWeight600">HandTossed</p>
                                <div class="itemStylePizza d-flex flex-wrap gap-2">
                                    <label for="12">
                                        <input type="radio" name="handtossed" id="12" />
                                        <span>12</span>
                                        <p>$12.49</p>
                                    </label>
                                    <label for="14">
                                        <input type="radio" name="handtossed" id="14" />
                                        <span>14</span>
                                        <p>$13.99</p>
                                    </label>
                                    <label for="16">
                                        <input type="radio" name="handtossed" id="16" />
                                        <span>16</span>
                                        <p>$15.49</p>
                                    </label>
                                </div>
                            </div>
                            <div class="itemOption mt-2">
                                <p class="fontWeight600">Thin</p>
                                <div class="itemStylePizza d-flex flex-wrap gap-2">
                                    <label for="12">
                                        <input type="radio" name="thin" id="12" />
                                        <span>12</span>
                                        <p>$12.49</p>
                                    </label>
                                    <label for="14">
                                        <input type="radio" name="thin" id="14" />
                                        <span>14</span>
                                        <p>$13.99</p>
                                    </label>
                                    <label for="16">
                                        <input type="radio" name="thin" id="16" />
                                        <span>16</span>
                                        <p>$15.49</p>
                                    </label>
                                </div>
                            </div>
                            <div class="itemOption mt-2">
                                <p class="fontWeight600">DblDecker</p>
                                <div class="itemStylePizza d-flex flex-wrap gap-2">
                                    <label for="12">
                                        <input type="radio" name="dbldecker" id="12" />
                                        <span>12 DblDecker</span>
                                        <p>$19.49</p>
                                    </label>
                                    <label for="14">
                                        <input type="radio" name="dbldecker" id="14" />
                                        <span>14 DblDecker</span>
                                        <p>$22.50</p>
                                    </label>
                                    <label for="16">
                                        <input type="radio" name="dbldecker" id="16" />
                                        <span>16 DblDecker</span>
                                        <p>$25.49</p>
                                    </label>
                                </div>
                            </div>
                            <div class="itemOption mt-2">
                                <p class="fontWeight600">GlutenFree</p>
                                <div class="itemStylePizza d-flex flex-wrap gap-2">
                                    <label for="12">
                                        <input type="radio" name="glutenFree" id="12" />
                                        <span>14</span>
                                        <p>$15.98</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itemCustomise mt-4">
                        <div class="customizeHeader">
                            <p class="fontWeight600">Speciality Pizza</p>
                        </div>
                        <div class="p-3">
                            <p>(Optional) If you like, You may customize by selecting another item for the second half</p>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="firstHalf">
                                        <p class="fontWeight600">First Half</p>
                                        <p>Cheese</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="secondtHalf">
                                        <p class="fontWeight600">Second Half</p>
                                        <select class="mt-2">
                                            <option selected>--- Select One (Optional) ---</option>
                                            <option value="Chicken Bacon Ranch">Chicken Bacon Ranch</option>
                                            <option value="BLT">BLT</option>
                                            <option value="GSM">GSM</option>
                                            <option value="Garden Harvest">Garden Harvest</option>
                                            <option value="Veggie">Veggie</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itemCustomise mt-4">
                        <div class="customizeHeader">
                            <p class="fontWeight600">Sauces</p>
                        </div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-lg-6 pe-lg-4">
                                    <div class="mainCheck mt-2">
                                        <div class="itemCheckbox">
                                            <label id="pizza">
                                                <input class="sauceCheckbox" type="checkbox" checked name="pizza_souce" id="pizza" />
                                                <span class="ps-lg-1">Pizza Sauce</span>
                                            </label>
                                        </div>
                                        <div class="itemCheck" id="pizza_souce">
                                            <div class="radioBtnImg mt-2">
                                                <label for="firstHalfC" class="half">
                                                    <input type="radio" checked name="pizza">
                                                </label>
                                                <label for="firstHalfF" class="full">
                                                    <input type="radio" name="pizza">
                                                </label>
                                                <label for="firstHalfC" class="halfRight">
                                                    <input type="radio" name="pizza">
                                                </label>
                                            </div>
                                            <select class="mt-2 selectOption w-100">
                                                <option value="Lite">Lite</option>
                                                <option selected value="Normal">Normal</option>
                                                <option value="Extra">Extra</option>
                                                <option value="X 3">X 3</option>
                                                <option value="X 4">X 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mainCheck mt-3">
                                        <div class="itemCheckbox">
                                            <label for="bbq_souce">
                                                <input class="sauceCheckbox" type="checkbox" name="bbq" id="bbq_souce" />
                                                <span class="ps-lg-1">BBQ Sauce</span>
                                            </label>
                                        </div>
                                        <div class="itemCheck" style="display: none;">
                                            <div class="radioBtnImg mt-2">
                                                <label for="firstHalfC" class="half">
                                                    <input type="radio" checked name="bbq_souce">
                                                </label>
                                                <label for="firstHalfF" class="full">
                                                    <input type="radio" name="bbq_souce">
                                                </label>
                                                <label for="firstHalfC" class="halfRight">
                                                    <input type="radio" name="bbq_souce">
                                                </label>
                                            </div>
                                            <select class="mt-2 selectOption w-100">
                                                <option value="Lite">Lite</option>
                                                <option selected value="Normal">Normal</option>
                                                <option value="Extra">Extra</option>
                                                <option value="X 3">X 3</option>
                                                <option value="X 4">X 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mainCheck mt-3">
                                        <div class="itemCheckbox">
                                            <label for="bs">
                                                <input class="sauceCheckbox" type="checkbox" name="bs" id="bs" />
                                                <span class="ps-lg-1">Buffalo Sauce</span>
                                            </label>
                                        </div>
                                        <div class="itemCheck" style="display: none;">
                                            <div class="radioBtnImg mt-2">
                                                <label for="firstHalfC" class="half">
                                                    <input type="radio" checked name="buffalo_souce">
                                                </label>
                                                <label for="firstHalfF" class="full">
                                                    <input type="radio" name="buffalo_souce">
                                                </label>
                                                <label for="firstHalfC" class="halfRight">
                                                    <input type="radio" name="buffalo_souce">
                                                </label>
                                            </div>
                                            <select class="mt-2 selectOption w-100">
                                                <option value="Lite">Lite</option>
                                                <option selected value="Normal">Normal</option>
                                                <option value="Extra">Extra</option>
                                                <option value="X 3">X 3</option>
                                                <option value="X 4">X 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mainCheck mt-3">
                                        <div class="itemCheckbox">
                                            <label for="ranch">
                                                <input class="sauceCheckbox" type="checkbox" name="ranchS" id="ranch" />
                                                <span class="ps-lg-1">Ranch</span>
                                            </label>
                                        </div>
                                        <div class="itemCheck" style="display: none;">
                                            <div class="radioBtnImg mt-2">
                                                <label for="firstHalfC" class="half">
                                                    <input type="radio" checked name="ranch">
                                                </label>
                                                <label for="firstHalfF" class="full">
                                                    <input type="radio" name="ranch">
                                                </label>
                                                <label for="firstHalfC" class="halfRight">
                                                    <input type="radio" name="ranch">
                                                </label>
                                            </div>
                                            <select class="mt-2 selectOption w-100">
                                                <option value="Lite">Lite</option>
                                                <option selected value="Normal">Normal</option>
                                                <option value="Extra">Extra</option>
                                                <option value="X 3">X 3</option>
                                                <option value="X 4">X 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-lg-4">
                                    <!-- Alfredo Sauce -->
                                    <div class="mainCheck mt-3">
                                        <div class="itemCheckbox">
                                            <label for="alfredo_sauce">
                                                <input class="sauceCheckbox" type="checkbox" name="alfredo" id="alfredo_sauce" />
                                                <span class="ps-lg-1">Alfredo Sauce</span>
                                            </label>
                                        </div>
                                        <div class="itemCheck" style="display: none;">
                                            <div class="radioBtnImg mt-2">
                                                <label for="alfredoHalf" class="half">
                                                    <input type="radio" checked name="alfredo_sauce_option">
                                                </label>
                                                <label for="alfredoFull" class="full">
                                                    <input type="radio" name="alfredo_sauce_option">
                                                </label>
                                                <label for="alfredoHalfRight" class="halfRight">
                                                    <input type="radio" name="alfredo_sauce_option">
                                                </label>
                                            </div>
                                            <select class="mt-2 selectOption w-100">
                                                <option value="Lite">Lite</option>
                                                <option selected value="Normal">Normal</option>
                                                <option value="Extra">Extra</option>
                                                <option value="X 3">X 3</option>
                                                <option value="X 4">X 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Buffalo Ranch -->
                                    <div class="mainCheck mt-3">
                                        <div class="itemCheckbox">
                                            <label for="buffalo_ranch">
                                                <input class="sauceCheckbox" type="checkbox" name="buffalo_ranch" id="buffalo_ranch" />
                                                <span class="ps-lg-1">Buffalo Ranch</span>
                                            </label>
                                        </div>
                                        <div class="itemCheck" style="display: none;">
                                            <div class="radioBtnImg mt-2">
                                                <label for="buffaloRanchHalf" class="half">
                                                    <input type="radio" checked name="buffalo_ranch_option">
                                                </label>
                                                <label for="buffaloRanchFull" class="full">
                                                    <input type="radio" name="buffalo_ranch_option">
                                                </label>
                                                <label for="buffaloRanchHalfRight" class="halfRight">
                                                    <input type="radio" name="buffalo_ranch_option">
                                                </label>
                                            </div>
                                            <select class="mt-2 selectOption w-100">
                                                <option value="Lite">Lite</option>
                                                <option selected value="Normal">Normal</option>
                                                <option value="Extra">Extra</option>
                                                <option value="X 3">X 3</option>
                                                <option value="X 4">X 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Garlic Sauce -->
                                    <div class="mainCheck mt-3">
                                        <div class="itemCheckbox">
                                            <label for="garlic_sauce">
                                                <input class="sauceCheckbox" type="checkbox" name="garlic" id="garlic_sauce" />
                                                <span class="ps-lg-1">Garlic Sauce</span>
                                            </label>
                                        </div>
                                        <div class="itemCheck" style="display: none;">
                                            <div class="radioBtnImg mt-2">
                                                <label for="garlicHalf" class="half">
                                                    <input type="radio" checked name="garlic_sauce_option">
                                                </label>
                                                <label for="garlicFull" class="full">
                                                    <input type="radio" name="garlic_sauce_option">
                                                </label>
                                                <label for="garlicHalfRight" class="halfRight">
                                                    <input type="radio" name="garlic_sauce_option">
                                                </label>
                                            </div>
                                            <select class="mt-2 selectOption w-100">
                                                <option value="Lite">Lite</option>
                                                <option selected value="Normal">Normal</option>
                                                <option value="Extra">Extra</option>
                                                <option value="X 3">X 3</option>
                                                <option value="X 4">X 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itemCustomise mt-4">
                        <div class="customizeHeader">
                            <p class="fontWeight600">Toppings</p>
                        </div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-lg-6 pe-lg-4">
                                    <?php
                                    foreach ($toppings as $index => $topping) {
                                        // Make id/name friendly (remove spaces, lowercase)
                                        $id = strtolower(str_replace(' ', '_', $topping));
                                        $isFirst = ($index === 0);
                                    ?>
                                        <div class="mainCheck mt-3">
                                            <div class="itemCheckbox">
                                                <label for="<?php echo $id; ?>">
                                                    <input class="sauceCheckbox" type="checkbox" name="<?php echo $id; ?>" id="<?php echo $id; ?>" <?php echo $isFirst ? 'checked' : ''; ?> />
                                                    <span class="ps-lg-1"><?php echo $topping; ?></span>
                                                </label>
                                            </div>
                                            <div class="itemCheck" style="<?php echo $isFirst ? 'display: block;' : 'display: none;'; ?>">
                                                <div class="radioBtnImg mt-2">
                                                    <label for="<?php echo $id; ?>Half" class="half">
                                                        <input type="radio" checked name="<?php echo $id; ?>_option">
                                                    </label>
                                                    <label for="<?php echo $id; ?>Full" class="full">
                                                        <input type="radio" name="<?php echo $id; ?>_option">
                                                    </label>
                                                    <label for="<?php echo $id; ?>HalfRight" class="halfRight">
                                                        <input type="radio" name="<?php echo $id; ?>_option">
                                                    </label>
                                                </div>
                                                <select class="mt-2 selectOption w-100">
                                                    <option value="Lite">Lite</option>
                                                    <option selected value="Normal">Normal</option>
                                                    <option value="Extra">Extra</option>
                                                    <option value="X 3">X 3</option>
                                                    <option value="X 4">X 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-6 ps-lg-4">
                                    <?php
                                    foreach ($toppings2 as $topping2) {
                                        // Make id/name friendly (remove spaces, lowercase)
                                        $id = strtolower(str_replace(' ', '_', $topping2));
                                    ?>
                                        <div class="mainCheck mt-3">
                                            <div class="itemCheckbox">
                                                <label for="<?php echo $id; ?>">
                                                    <input class="sauceCheckbox" type="checkbox" name="<?php echo $id; ?>" id="<?php echo $id; ?>" />
                                                    <span class="ps-lg-1"><?php echo $topping2; ?></span>
                                                </label>
                                            </div>
                                            <div class="itemCheck" style="display: none;">
                                                <div class="radioBtnImg mt-2">
                                                    <label for="<?php echo $id; ?>Half" class="half">
                                                        <input type="radio" checked name="<?php echo $id; ?>_option">
                                                    </label>
                                                    <label for="<?php echo $id; ?>Full" class="full">
                                                        <input type="radio" name="<?php echo $id; ?>_option">
                                                    </label>
                                                    <label for="<?php echo $id; ?>HalfRight" class="halfRight">
                                                        <input type="radio" name="<?php echo $id; ?>_option">
                                                    </label>
                                                </div>
                                                <select class="mt-2 selectOption w-100">
                                                    <option value="Lite">Lite</option>
                                                    <option selected value="Normal">Normal</option>
                                                    <option value="Extra">Extra</option>
                                                    <option value="X 3">X 3</option>
                                                    <option value="X 4">X 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itemCustomise mt-4">
                        <div class="customizeHeader">
                            <p class="fontWeight600">Quantity</p>
                        </div>
                        <div class="p-3">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="itemForm">
                                        <input type="number" name="qty" id="qty" value="1" min="1" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end mt-3">
                    <a href="#" class="btnTheme py-2 fontHeading">Add to Cart</a>
                </div>

            </div>
        </div>
    </div>
    <?php include 'include/footer.php'; ?>
    <?php include 'include/footer-links.php'; ?>
</body>
<script>
    $('[data-fancybox="gallery"]').fancybox({});
    const modal = document.querySelector('.cartModal');
    const wheelCustom = document.querySelector('.customizeBlock');

    ['.cartBtn', '.btnClose'].forEach(selector => {
        document.querySelector(selector).onclick = () => {
            const isOpen = (selector === '.cartBtn');
            modal.style.display = isOpen ? 'block' : 'none';
            document.body.style.overflow = isOpen ? 'hidden' : 'auto';
        };
    });
    wheelCustom.addEventListener("wheel", function(event) {
        event.stopPropagation();
    });

    const checkboxes = document.querySelectorAll('.sauceCheckbox');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const parent = checkbox.closest('.mainCheck');
            const itemCheck = parent.querySelector('.itemCheck');

            if (checkbox.checked) {
                itemCheck.style.display = 'block';
            } else {
                itemCheck.style.display = 'none';
            }
        });
    });
</script>

</html>