<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'WebsiteController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['contact'] = 'WebsiteController/contact';
$route['insert-contact'] = 'WebsiteController/insert_contact';

$route['login'] = 'CheckoutController/customer_login';
$route['check-customer-login'] = 'CustomerLoginController/check_customer_login';
$route['logout'] = 'CustomerLoginController/customer_logout';


$route['sign-up'] = 'CheckoutController/customer_sign_up_page';
$route['insert-sign-up'] = 'CheckoutController/insert_sign_up';
$route['profile'] = 'WebsiteController/profile_page';

$route['shop'] = 'WebsiteController/shop_page';
$route['product-details/(.+)'] = 'WebsiteController/product_details_page/$1';
$route['category-wise-product/(.+)'] = 'WebsiteController/category_wise_product/$1';

$route['add-to-cart'] = 'CartController/add_to_cart';
$route['cart'] = 'CartController/show_cart';
$route['delete-to-cart/(.+)'] = 'CartController/delete_to_cart/$1';
$route['update-cart-product-quantity'] = 'CartController/update_cart_product_quantity';
$route['checkout'] = 'CheckoutController/check_out';

$route['billing'] = 'CheckoutController/billing_page';
$route['update-billing'] = 'CheckoutController/update_billing';

$route['shipping'] = 'CheckoutController/shipping_page';
$route['update-shipping'] = 'CheckoutController/update_shipping';

$route['payment'] = 'CheckoutController/payment_page';
$route['place-order'] = 'CheckoutController/place_order';

$route['success-payment'] = 'CheckoutController/success_payment';



//For Admin Section//

$route['admin'] = 'AdminLogin/login_page';
$route['admin-login-check'] = 'AdminLogin/check_admin_login';
$route['admin-logout'] = 'AdminLogin/admin_logout';

$route['admin-registration'] = 'AdminController/admin_registration';
$route['admin-register-save'] = 'AdminController/admin_register_save';
$route['dashboard'] = 'AdminController/dashboard';


$route['admin-forgot-password'] = 'AdminLogin/admin_forgot_password';
$route['admin-password-reset'] = 'AdminLogin/adminresetlink';
$route['reset'] = 'AdminLogin/reset';
$route['update-password'] = 'AdminLogin/update_password';


$route['brand-logo'] = 'AdminController/brand_logo';
$route['brand-logo-update'] = 'AdminController/brand_logo_update';


$route['promotion-images'] = 'AdminController/promotion_images';
$route['edit-promotion-images/(.+)'] = 'AdminController/edit_promotion_images_page_show/$1';
$route['promotion-images-update'] = 'AdminController/promotion_images_update';


$route['slider'] = 'AdminController/slider';
$route['add-slider'] = 'AdminController/add_slider_page_show';
$route['insert-slider'] = 'AdminController/insert_slider';
$route['delete-slider/(.+)'] = 'AdminController/delete_slider/$1';
$route['edit-slider/(.+)'] = 'AdminController/edit_slider_page_show/$1';
$route['update-slider'] = 'AdminController/update_slider';
$route['change-slider-status/(.+)/(.+)'] = 'AdminController/change_slider_status/$1/$2';


$route['add-category'] = 'AdminController/add_category_page_show';
$route['insert-category'] = 'AdminController/insert_category';
$route['manage-categories'] = 'AdminController/manage_categories_page_show';
$route['edit-category/(.+)'] = 'AdminController/edit_category_page_show/$1';
$route['update-category'] = 'AdminController/update_category';
$route['change-category-status/(.+)/(.+)'] = 'AdminController/change_category_status/$1/$2';
$route['delete-category/(.+)'] = 'AdminController/delete_category/$1';


$route['add-brand'] = 'AdminController/add_brand_page_show';
$route['insert-brand'] = 'AdminController/insert_brand';
$route['manage-brands'] = 'AdminController/manage_brands_page_show';
$route['edit-brand/(.+)'] = 'AdminController/edit_brand_page_show/$1';
$route['update-brand'] = 'AdminController/update_brand';
$route['change-brand-status/(.+)/(.+)'] = 'AdminController/change_brand_status/$1/$2';
$route['delete-brand/(.+)'] = 'AdminController/delete_brand/$1';


$route['add-product'] = 'AdminController/add_product_page_show';
$route['insert-product'] = 'AdminController/insert_product';
$route['edit-product/(.+)'] = 'AdminController/edit_product_page_show/$1';
$route['manage-products'] = 'AdminController/manage_products_page_show';
$route['update-product'] = 'AdminController/update_product';
$route['change-product-status/(.+)/(.+)'] = 'AdminController/change_product_status/$1/$2';
$route['delete-product/(.+)'] = 'AdminController/delete_product/$1';


$route['company-info'] = 'AdminController/company_info_page_show';
$route['update-company-info'] = 'AdminController/update_company_info';


$route['manage-shipping-cost'] = 'AdminController/manage_shipping_cost_page_show';
$route['add-shipping-method'] = 'AdminController/add_shipping_method_page';
$route['insert-shipping-cost'] = 'AdminController/insert_shipping_cost';
$route['edit-shipping-cost/(.+)'] = 'AdminController/edit_shipping_cost_page/$1';
$route['update-shipping-cost'] = 'AdminController/update_shipping_cost';


$route['customers-list'] = 'AdminController/customers_list';

$route['orders-list'] = 'AdminController/orders_list';