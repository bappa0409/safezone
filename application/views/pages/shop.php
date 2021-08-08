<!-- MAIN -->
<main class="site-main product-list product-grid">
    <div class="container">
        <ol class="breadcrumb-page">
            <li><a href="<?php echo base_url()?>">Home </a></li>
            <li class="active">Shop Gallery</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 float-none float-right padding-left-5">
                <div class="main-content">
                    <div class="promotion-banner style-3">
                        <a href="#" class="banner-img"><img src="<?php echo base_url()?>/assets/images/product/banner-product.jpg" alt="banner-product"></a>
                    </div>
                    <div class="toolbar-products">
                        <h4 class="title-product">Shop Gallery</h4>
                        <div class="toolbar-option">
                            <div class="toolbar-sort">
                                <select class="chosen-select sorter-options form-control" >
                                    <option selected="selected" value="position">Sort by popularity</option>
                                    <option value="name">Name</option>
                                    <option value="price">Price</option>
                                </select>
                            </div>
                            <div class="toolbar-per">               
                                <select class="chosen-select limiter-options form-control" >
                                    <option selected="selected" value="6">20 per page</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                </select>
                            </div> 
                            <div class="modes">
                                <a href="grid-product.html" class="active modes-mode mode-grid" title="Grid"><i class="flaticon-squares"></i>
                                    <span>Grid</span>
                                </a>
                                <a href="list-product.html" title="List" class="modes-mode mode-list"><i class="flaticon-interface"></i>
                                    <span>List</span>
                                </a>
                            </div>
                        </div>  
                    </div>
                    <div class="products products-list products-grid equal-container">

                        <?php 
                        foreach ($show_active_product_info as $show_info) {
                            ?>
                            <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="<?php echo base_url();?>product-details/<?php echo $show_info->product_id;?>"><img src="<?php echo base_url()?>/<?php echo $show_info->thumbnail_image ?>" alt="p8"></a>
                                        </div>
                                        <!-- <span class="onsale">-50%</span> -->
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#"><?php echo $show_info->product_name ?></a></div>
                                        <span class="price">
                                            <ins><?php echo $show_info->product_price ?> TAKA</ins>
                                            <!-- <del>$259.00</del> -->
                                        </span>
                                        <span class="star-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="review">5 Review(s)</span>
                                        </span>

                                        <div class="single-add-to-cart">
                                            <a href="#" class="btn-block btn-add-to-cart">Add to cart</a>
                                            <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                            <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        } ?>
                    </div>
                    <div class="pagination">
                        <ul class="nav-links">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="back-next"><a href="#">Next</a></li>
                        </ul>
                        <span class="show-resuilt">Showing 1-8 of 12 result</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="col-sidebar">
                    <div class="filter-options">
                        <div class="block-title">Shop by</div>
                        <div class="block-content">
                            <div class="filter-options-item filter-categori">
                                <div class="filter-options-title">Categories</div>
                                <div class="filter-options-content">
                                    <ul>
                                        <?php 
                                        foreach ($show_active_categories_info as $show_info) {?>
                                            <li>
                                                <label class="inline" >
                                                    <input type="checkbox">
                                                    <span class="input"></span><?php echo $show_info->category_name ?>
                                                </label>
                                            </li>
                                            <?php 
                                        }?>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-options-item filter-brand">
                                <div class="filter-options-title">Brand</div>
                                <div class="filter-options-content">
                                    <ul>
                                        <?php 
                                        foreach ($show_active_brands_info as $show_info) {?>
                                            <li>
                                                <label class="inline" >
                                                    <input type="checkbox">
                                                    <span class="input"></span><?php echo $show_info->brand_name ?>
                                                </label>
                                            </li>
                                            <?php 
                                        }?>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-options-item filter-price">
                                <div class="filter-options-title">Price</div>
                                <div class="filter-options-content">
                                    <div class="price_slider_wrapper">
                                        <div data-label-reasult="Price:" data-min="0" data-max="3000" data-unit="$" class="slider-range-price " data-value-min="85" data-value-max="2000">
                                            <span class="text-right">Filter</span>
                                        </div>
                                        <div class="price_slider_amount">
                                            <div class="price_label">
                                                Price: <span class="from">$85</span>-<span class="to">$2000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-options-item filter-size">
                                <div class="filter-options-title">Size</div>
                                <div class="filter-options-content">
                                    <ul>
                                        <li><label class="inline" ><input type="checkbox"><span class="input">S</span></label></li>
                                        <li><label class="inline" ><input type="checkbox"><span class="input">M</span></label></li>
                                        <li><label class="inline" ><input type="checkbox"><span class="input">L</span></label></li>
                                        <li><label class="inline" ><input type="checkbox"><span class="input">XL</span></label></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-options-item filter-color">
                                <div class="filter-options-title">Color</div>
                                <div class="filter-options-content">
                                    <ul>
                                        <li><label class="inline" ><input type="checkbox"><span class="input"></span>Red<span class="value">(217)</span></label></li>
                                        <li><label class="inline" ><input type="checkbox"><span class="input"></span>Black<span class="value">(79)</span></label></li>
                                        <li><label class="inline" ><input type="checkbox"><span class="input"></span>Grey<span class="value">(116)</span></label></li>
                                        <li><label class="inline" ><input type="checkbox"><span class="input"></span>While<span class="value">(38)</span></label></li>
                                    </ul>
                                    <ul>
                                        <li><label class="inline" ><input type="checkbox"><span class="input"></span>Yellow<span class="value">(179)</span></label></li>
                                        <li><label class="inline" ><input type="checkbox"><span class="input"></span>Blue<span class="value">(283)</span></label></li>
                                        <li><label class="inline" ><input type="checkbox"><span class="input"></span>Pink<span class="value">(29)</span></label></li>
                                        <li><label class="inline" ><input type="checkbox"><span class="input"></span>Green<span class="value">(205)</span></label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                                <a href="#"><img src="<?php echo base_url()?>/assets/images/home1/r1.jpg" alt="r1"></a>
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
                                <a href="#"><img src="<?php echo base_url()?>/assets/images/home1/r2.jpg" alt="r2"></a>
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
                                <a href="#"><img src="<?php echo base_url()?>/assets/images/home1/r3.jpg" alt="r3"></a>
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
                                <a href="#"><img src="<?php echo base_url()?>/assets/images/home1/r4.jpg" alt="r4"></a>
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
                                <a href="#"><img src="<?php echo base_url()?>/assets/images/home1/r5.jpg" alt="r5"></a>
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
                                <a href="#"><img src="<?php echo base_url()?>/assets/images/home1/r6.jpg" alt="r6"></a>
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
                    <a href="#" class="item-brand"><img src="<?php echo base_url()?>/assets/images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="<?php echo base_url()?>/assets/images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="<?php echo base_url()?>/assets/images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="<?php echo base_url()?>/assets/images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="<?php echo base_url()?>/assets/images/home1/brand1.jpg" alt="brand1"></a>
                    <a href="#" class="item-brand"><img src="<?php echo base_url()?>/assets/images/home1/brand1.jpg" alt="brand1"></a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- END MAIN -->