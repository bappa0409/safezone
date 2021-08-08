 <!-- MAIN -->
 <main class="site-main">
    <div class="container">
        <div class="product-content-single">
            <div class="row">
                <div class="col-md-4 col-sm-12 padding-right">
                    <div class="product-media">
                        <div class="image-preview-container image-thick-box image_preview_container">
                            <img id="img_zoom" data-zoom-image="" src="<?php echo base_url()?>/<?php echo $show_active_product_info_by_id->thumbnail_image ?>" class="img-thumbnail" alt="">
                        </div>
                        <!-- <div class="product-preview image-small product_preview">
                            <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>
                                <a href="#" data-image="" data-zoom-image="images/detail/thick-box-1.jpg">
                                    <img src="images/detail/i1.jpg" data-large-image="images/detail/thick-box-1.jpg" alt="i1">
                                </a>
                                <a href="#" data-image="images/detail/thick-box-1.jpg" data-zoom-image="images/detail/thick-box-1.jpg">
                                    <img src="images/detail/i2.jpg" data-large-image="images/detail/thick-box-1.jpg" alt="i1">
                                </a>
                                <a href="#" data-image="images/detail/thick-box-1.jpg" data-zoom-image="images/detail/thick-box-1.jpg">
                                    <img src="images/detail/i2.jpg" data-large-image="images/detail/thick-box-1.jpg" alt="i1">
                                </a>
                                <a href="#" data-image="images/detail/thick-box-1.jpg" data-zoom-image="images/detail/thick-box-1.jpg">
                                    <img src="images/detail/i2.jpg" data-large-image="images/detail/thick-box-1.jpg" alt="i1">
                                </a>
                                <a href="#" data-image="images/detail/thick-box-1.jpg" data-zoom-image="images/detail/thick-box-1.jpg">
                                    <img src="images/detail/i2.jpg" data-large-image="images/detail/thick-box-1.jpg" alt="i1">
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="product-info-main">
                        <div class="product-name"><a href="#"><?php echo $show_active_product_info_by_id->product_name ?></a></div>
                        <span class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="review">5 Review(s)</span>
                        </span>
                        <div class="product-infomation">
                            <?php echo $show_active_product_info_by_id->short_description ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-info-price">
                        <div class="product-info-stock-sku">
                            <div class="stock available">
                                <span class="label-stock">Availability: </span><?php if ($show_active_product_info_by_id->product_stock == 1) {
                                    echo "In Stock";
                                }else{
                                    echo "Out of Stock";
                                }?>
                            </div>
                        </div>
                        <div class="transportation">
                            <span>Product with Fast Delivery</span>
                        </div>
                        <span class="price">
                            <ins><?php echo $show_active_product_info_by_id->product_price?> TAKA</ins>
                            <!-- <del>$259.00</del> -->
                        </span>
                        <form action="<?php echo base_url()?>add-to-cart" method="POST">
                            <div class="quantity">
                                <h6 class="quantity-title">Quantity:</h6>
                                <div class="buttons-added">
                                    <input type="text" value="1" title="Qty" class="input-text qty text" size="1" name="product_qty">

                                    <input type="hidden" name="product_id"  value="<?php echo $show_active_product_info_by_id->product_id; ?>">

                                    <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                    <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="single-add-to-cart">
                                <button class="btn-add-to-cart" type="submit">Add to cart</button>
                            </div>
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tab-details-product">
            <ul class="box-tab nav-tab">
                <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>
            </ul>
            <div class="tab-container">
                <div id="tab-1" class="tab-panel active">
                    <div class="box-content">
                        <p><?php echo $show_active_product_info_by_id->description ?></p>
                    </div>
                </div>
                <div id="tab-3" class="tab-panel">
                    <div class="box-content">
                        <form method="post" action="#"  class="new-review-form">
                            <a href="#" class="form-title">Write a review</a>
                            <div class="form-content">
                                <p class="form-row form-row-wide">
                                    <label>Name</label>
                                    <input type="text" value="" name="text" placeholder="Enter your name" class="input-text">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Email</label>
                                    <input type="text" name="text" placeholder="admin@example.com" class="input-text">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Review Title<span class="required">*</span></label>
                                    <input type="email" name="email" placeholder="Give your review a title" class="input-text">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Body of Review (1500)</label>
                                    <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message"></textarea>
                                </p>
                                <p class="form-row">
                                    <input type="submit" value="Submit Review" name="Submit" class="button-submit">
                                </p>
                            </div>
                        </form>
                    </div>
                </div>     
            </div>  
        </div> 
    </div>
</main>
<!-- End MAIN -->
