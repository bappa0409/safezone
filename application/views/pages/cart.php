<!--MAIN -->
<main class="site-main shopping-cart">
    <div class="container">
        <ol class="breadcrumb-page">
            <li><a href="<?php echo base_url()?>">Home </a></li>
            <li class="active">Shopping Cart</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php 
                $contents = $this->cart->contents();

                if ($contents == TRUE) {
                    ?>
                    <form action="<?php echo base_url()?>update-cart-product-quantity" method="post" class="form-cart">
                        <div class="table-cart">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="tb-image">Image</th>
                                        <th class="tb-product">Product Name</th>
                                        <th class="tb-price">Unit Price</th>
                                        <th class="tb-qty">Qty</th>
                                        <th class="tb-total">SubTotal</th>
                                        <th class="tb-remove"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $contents = $this->cart->contents();
                                    foreach ($contents as $cart_value) {
                                        ?>
                                        <tr>
                                            <td class="tb-image" style="vertical-align: middle;">
                                                <a href="#" class="item-photo">
                                                    <img src="<?php echo base_url()?><?php echo $cart_value['options'] ['image']?>" alt="cart">
                                                </a>
                                            </td>
                                            <td class="tb-product" style="vertical-align: middle;">
                                                <div class="product-name"><a href="#"><?php echo $cart_value['name'] ?></a></div>
                                            </td>
                                            <td class="tb-price">
                                                <span class="price"><?php echo $cart_value['price'] ?> TK</span>
                                            </td>

                                            <td class="tb-qty">
                                                <div class="quantity">
                                                    <div class="buttons-added">
                                                        <input type="text" title="Qty" class="input-text qty text" size="1"  name="product_qty" value="<?php echo $cart_value['qty'] ?>">

                                                        <input type="hidden" name="rowid" value="<?php echo $cart_value['rowid'] ?>">

                                                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-total">
                                                <span class="price"><?php echo $cart_value['subtotal'] ?> TK</span>
                                            </td>
                                            <td class="tb-remove">
                                                <a href="<?php echo base_url(); ?>delete-to-cart/<?php echo $cart_value['rowid'] ?>" class="action-remove"><span><i class="fa fa-times" aria-hidden="true"></i></span></a>
                                            </td>
                                        </tr>
                                        <?php 
                                    }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-actions single-add-to-cart">
                            <a href="<?php echo base_url()?>shop" class="btn btn-add-to-cart" style="border: none;">
                                <span>Continue Shopping</span>
                            </a>
                            <button type="submit" class="btn-clean" >
                                <span>Update Shopping Cart</span>
                            </button>
                        </div>
                    </form>
                    <?php 
                }
                else{
                    ?>
                    <center>
                        <h1>Your cart is currently empty.</h1>
                        <h5 style="text-transform:none;">Before proceed to checkout you must add some products to your shopping cart.
                        You will find a lot of interesting products on our "Shop" page.</h5>
                        <a href="<?php echo base_url()?>shop" class="btn-add-to-cart" type="button" >SHOP NOW</a>
                    </center>
                    <?php

                }?>
            </div>
            <div class="col-md-3 padding-left-5">
                <div class="order-summary">
                    <h4 class="title-shopping-cart">Order Summary</h4>
                    <div class="checkout-element-content">
                        <ul>
                            <li style="font-weight: 600;">Sub Total <span class="order-left" style="float: right;"><?php echo $this->cart->total(); ?> TK</span></li>
                            <li style="font-weight: 600;">Coupon Discount <span class="order-left" style="float: right;">00 TK</span></li>
                            <li style="font-weight: 600;">Vat (2%) <span class="order-left" style="float: right;"><?php $vat = ($this->cart->total()*2)/100; echo  round($vat, 0);?> TK</span></li>
                            <li style="font-weight: 600;">Tax (0.5%) <span class="order-left" style="float: right;"><?php $tax = ($this->cart->total()*0.5)/100; echo round($tax, 0);?> TK</span></li>
                            <li style="font-weight: 600;">Shipping 
                                <span class="order-left" style="float: right;text-align: right; font-size: 13px;">
                                    Calculated <br> during Shipping
                                </span>
                            </li>
                        </ul>
                        <br>
                        <br>

                        <span class="order-left">Total:<span><?php $total_cost = $this->cart->total()+ $vat; echo $total_cost;?> TK</span></span>
                        <!-- <ul>
                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>I have promo code</label></li>
                        </ul> -->

                        <br>
                        <a href="<?php echo base_url()?>checkout" class="btn-checkout" style="padding: 10px 71px;">
                            <span>Check Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-recent-view">
        <div class="container">
            <div class="title-of-section">You may be also interested</div>
            <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>
                <div class="product-item style1">
                    <div class="product-inner equal-elem">
                        <div class="product-thumb">
                            <div class="thumb-inner">
                                <a href="#"><img src="images/home1/r1.jpg" alt="r1"></a>
                            </div>
                            <span class="onsale">-50%</span>
                            <a href="#" class="quick-view">Quick View</a>
                        </div>
                        <div class="product-innfo">
                            <div class="product-name"><a href="#">Women Hats</a></div>
                            <span class="price">
                                <ins>$229.00</ins>
                                <del>$259.00</del>
                            </span>
                            <span class="star-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span class="review">5 Review(s)</span>
                            </span>
                            <div class="group-btn-hover style2">
                                <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item style1">
                    <div class="product-inner equal-elem">
                        <div class="product-thumb">
                            <div class="thumb-inner">
                                <a href="#"><img src="images/home1/r2.jpg" alt="r2"></a>
                            </div>
                            <span class="onnew">new</span>
                            <a href="#" class="quick-view">Quick View</a>
                        </div>
                        <div class="product-innfo"> 
                            <div class="product-name"><a href="#">Basketball Sports Shoes</a></div>
                            <span class="price price-dark">
                                <ins>$229.00</ins>
                            </span>
                            <span class="star-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span class="review">5 Review(s)</span>
                            </span>
                            <div class="group-btn-hover style2">
                                <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item style1">
                    <div class="product-inner equal-elem">
                        <div class="product-thumb">
                            <div class="thumb-inner">
                                <a href="#"><img src="images/home1/r3.jpg" alt="r3"></a>
                            </div>
                            <a href="#" class="quick-view">Quick View</a>
                        </div>
                        <div class="product-innfo">
                            <div class="product-name"><a href="#">Dark Green Prada Sneakers</a></div>
                            <span class="price price-dark">
                                <ins>$229.00</ins>
                            </span>
                            <span class="star-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span class="review">5 Review(s)</span>
                            </span>
                            <div class="group-btn-hover style2">
                                <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item style1">
                    <div class="product-inner equal-elem">
                        <div class="product-thumb">
                            <div class="thumb-inner">
                                <a href="#"><img src="images/home1/r4.jpg" alt="r4"></a>
                            </div>
                            <a href="#" class="quick-view">Quick View</a>
                        </div>
                        <div class="product-innfo">
                            <div class="product-name"><a href="#">Clutches in Men's Bags for Men</a></div>
                            <span class="price price-dark">
                                <ins>$229.00</ins>
                            </span>
                            <div class="group-btn-hover style2">
                                <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item style1">
                    <div class="product-inner equal-elem">
                        <div class="product-thumb">
                            <div class="thumb-inner">
                                <a href="#"><img src="images/home1/r5.jpg" alt="r5"></a>
                            </div>
                            <span class="onsale">-50%</span>
                            <a href="#" class="quick-view">Quick View</a>
                        </div>
                        <div class="product-innfo">
                            <div class="product-name"><a href="#">Parka With a Hood</a></div>
                            <span class="price">
                                <ins>$229.00</ins>
                                <del>$259.00</del>
                            </span>
                            <span class="star-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span class="review">5 Review(s)</span>
                            </span>
                            <div class="group-btn-hover style2">
                                <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item style1">
                    <div class="product-inner equal-elem">
                        <div class="product-thumb">
                            <div class="thumb-inner">
                                <a href="#"><img src="images/home1/r6.jpg" alt="r6"></a>
                            </div>
                            <a href="#" class="quick-view">Quick View</a>
                        </div>
                        <div class="product-innfo">
                            <div class="product-name"><a href="#">Smartphone MTK6737 Quad Core.</a></div>
                            <span class="price price-dark">
                                <ins>$229.00</ins>
                            </span>
                            <div class="group-btn-hover style2">
                                <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-section-brand">
        <div class="container">
            <div class="section-brand style1">
                <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
                    <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- END MAIN