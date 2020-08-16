<?php
/**
 * 走进我们
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php');?>

<style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style> 

  <link rel="stylesheet" id="startnext-style-main-css" href="/usr/themes/ZuanGuan/static/css/startnext-style.css" type="text/css" media="all"> 
  <style id="startnext-style-main-inline-css" type="text/css">
a:hover,
 a:focus,
 .startp-mobile-nav.mean-container .mean-nav ul li a.active,
 .startp-mobile-nav.mean-container .mean-nav ul li .dropdown-menu li.current_page_item a,
 .startp-nav nav .navbar-nav .nav-item a:hover,
 .startp-nav nav .navbar-nav .nav-item a:focus,
 .startp-nav nav .navbar-nav .nav-item a.active,
 .startp-nav .navbar-light .navbar-nav .dropdown-menu .dropdown-item:hover,
 .startp-nav .navbar-light .navbar-nav .dropdown-menu .dropdown-item.active,
 .startp-nav .navbar-light .navbar-nav .dropdown-menu .dropdown-item:active,
 .navbar-light .navbar-nav .active>.nav-link,
 .navbar-light .navbar-nav .nav-link.active,
 .navbar-light .navbar-nav .nav-link.show,
 .navbar-light .navbar-nav .show>.nav-link,
 .navbar-light .collapse ul li ul .current_page_item.active>.dropdown-item,
 .navbar-light .collapse ul>li:hover>a,
 .navbar-light .collapse ul ul>li:hover>a,
 .navbar-default .navbar-nav .show .dropdown-menu>li>a:focus,
 .navbar-default .navbar-nav .show .dropdown-menu>li>a:hover,
 .navbar-light .collapse ul ul ul>li:hover>a,
 .navbar-light .collapse ul ul,
 .navbar-light .collapse ul ul.dropdown-menu,
 .navbar-light .collapse ul ul ul,
 .navbar-light .collapse ul ul ul.dropdown-menu,
 .navbar-light .collapse ul ul ul ul,
 .navbar-light .collapse ul ul ul ul.dropdown-menu,
 .navbar-light .collapse ul ul ul ul,
 .navbar-light .collapse ul ul ul ul.dropdown-menu,
 .single-box .icon,
 .single-box:hover .icon,
 .services-content .box svg,
 .services-content .box i,
 .single-services-box .icon,
 .single-features .icon,
 .single-team .team-content ul li a:hover,
 .funfact h3,
 .pricing-table .price span,
 .single-blog-post .blog-post-content ul li i,
 .single-blog-post .blog-post-content ul li a,
 .single-blog-post .blog-post-content ul li a:hover,
 .single-blog-post .blog-post-content .read-more-btn:hover,
 .sticky .blog-post-content h3 a:hover,
 .sticky .blog-post-content ul li a:hover,
 .blog-details-area .blog-details .article-content .entry-meta li i,
 .blog-details-area .blog-details .article-content .entry-meta li a:hover,
 .blog-details-area .blog-details .article-content ul.category li a,
 .project-details-image a:hover,
 .project-details-desc .project-details-information .single-info-box ul li a:hover,
 .contact-info-box .icon,
 .contact-info-box p a:hover,
 .single-footer-widget ul.list li a:hover,
 .single-footer-widget ul.footer-contact-info li svg,
 .single-footer-widget ul.footer-contact-info li a:hover,
 .single-footer-widget ul.social-links li a,
 .single-why-choose-us .icon,
 .single-pricing-table .price span,
 .single-hosting-features .icon,
 .cta-right-content .buy-btn .btn-primary:hover,
 .cta-right-content .buy-btn .btn-primary:focus,
 .products-details .availability span,
 .products-details .products-share-social ul li a,
 .cart-table table tbody tr td.product-name a:hover,
 .user-actions svg,
 .user-actions span,
 .user-actions span a:hover,
 .user-actions span a:focus,
 .order-details .order-table table tbody tr td.product-name a:hover,
 .widget-area .widget ul li a:hover,
 .widget-area .widget_rss ul li .rss-date,
 .widget-area .calendar_wrap table #prev a,
 .widget-area .calendar_wrap table #next a,
 .pagination-area .page-numbers i,
 .pages-links .post-page-numbers i,
 .main-content .entry-content a,
 .main-content code,
 .main-content kbd,
 .main-content tt,
 .main-content var,
 blockquote::before,
 table th a,
 .blog-details .article-content p a,
 .blog-details .article-content .entry-content a,
 .blog-details .article-content code,
 .blog-details .article-content kbd,
 .blog-details .article-content tt,
 .blog-details .article-content var,
 .comments-area .comment-content .entry-content a,
 .comments-area .comment-content code,
 .comments-area .comment-content kbd,
 .comments-area .comment-content tt,
 .comments-area .comment-content var,
 #comments .comment-list .comment-body .reply a,
 #comments .comment-metadata a:hover,
 .wp-block-file a,
 .comments-area .comment-list .trackback .comment-body a,
 .single-footer-widget ul li a:hover,
 .single-footer-widget .rss-date,
 .single-footer-widget .calendar_wrap table #prev a,
 .single-footer-widget .calendar_wrap table #next a,
 .comment-navigation .nav-links .nav-previous a,
 .comment-navigation .nav-links .nav-next a,
 .repair-about-content .sub-title,
 .repair-about-content ul li span svg,
 .single-repair-services .icon,
 .single-repair-services:hover a,
 .single-repair-services:focus a,
 .iot-banner-content span,
 .single-iot-services .icon,
 .single-iot-services:hover a,
 .single-iot-services:focus a
{
	color: #787fd6;
}

.is-style-outline .wp-block-button__link
{
	color: #4069eb !important;
}

.btn-primary.disabled,
 .btn-primary:disabled,
 .pagination-area ul .page-item .page-link:hover,
 .pagination-area ul .page-item .page-link:focus,
 .pagination-area ul .page-item.active .page-link,
 .blog-details-area .blog-details .article-content ul.category li a:hover,
 .blog-details-area .blog-details .article-content .share-post ul li a:hover,
 .blog-details-area .blog-details .article-content .share-post ul li a:focus,
 .domain-search-content form button,
 .woocommerce .woocommerce-MyAccount-navigation ul li a:hover,
 .woocommerce .woocommerce-MyAccount-navigation ul li.is-active a,
 .woocommerce .woocommerce-MyAccount-content .button,
 .single-products .products-image ul li a:hover,
 .single-products .products-image ul li a:focus,
 .quick-view-modal .modal-content button.close:hover,
 .quick-view-modal .modal-content button.close:focus,
 .cart-table .btn-light,
 .widget-area .widget_product_search .woocommerce-product-search button,
 .widget-area .woocommerce-widget-layered-nav .woocommerce-widget-layered-nav-dropdown__submit,
 .widget-area .widget_price_filter button.button,
 .widget-area .widget ul li::before,
 .widget-area .tagcloud a:hover,
 .pagination-area .page-numbers:hover,
 .pagination-area .current,
 .pages-links .post-page-numbers:hover,
 .pages-links .current,
 .comment-respond .form-submit input,
 .wp-block-button .wp-block-button__link,
 .page-links .post-page-numbers:hover,
 .page-links .current,
 .has-cyan-bluish-gray-background-color.has-cyan-bluish-gray-background-color,
 .single-footer-widget ul li::before,
 .single-footer-widget .tagcloud a:hover,
 .comment-navigation .nav-links .nav-previous a:hover,
 .comment-navigation .nav-links .nav-next a:hover,
 .single-repair-box:hover a,
 .single-repair-box:focus a,
 .single-iot-box:hover a,
 .single-iot-box:focus a,
 .cart-link span,
 .owl-theme .owl-dots .owl-dot:hover span,
 .owl-theme .owl-dots .owl-dot.active span,
 .section-title .bar::before,
 .preloader,
 .startp-nav nav .others-option .btn.btn-light::after,
 .startp-nav nav .others-option .btn.btn-light::before,
 .startp-nav nav .others-option .btn.btn-primary::after,
 .startp-nav nav .others-option .btn.btn-primary::before,
 .single-services-box::before,
 .single-services-box::after,
 .single-services-box:hover .icon,
 .single-features:hover .icon,
 .single-works .icon:hover,
 .contact-cta-box .btn::before,
 .contact-cta-box .btn::after,
 .pricing-table.active-plan .btn-primary::after,
 .pricing-table.active-plan .btn-primary::before,
 .ready-to-talk .btn::before,
 .ready-to-talk .btn::after,
 .post_type_icon,
 .post_type,
 .faq-accordion .accordion .accordion-item .accordion-title:hover,
 .faq-accordion .accordion .accordion-item .accordion-title.active,
 .faq-accordion .accordion .accordion-item .accordion-title:focus,
 .blog-details-area .blog-details .article-img .date,
 .blog-details-area .post-controls-buttons div a:hover,
 .blog-details-area .post-controls-buttons div a:focus,
 .contact-info-box:hover .icon,
 .single-footer-widget ul.social-links li a:hover,
 .single-footer-widget ul.social-links li a:hover,
 .go-top:hover,
 .search-form .search-submit,
 .hosting-main-banner .hosting-banner-content ul li::before,
 .single-pricing-table.active-plan .btn-primary::after,
 .single-pricing-table.active-plan .btn-primary::before,
 .testimonials-slides.owl-theme .owl-dots .owl-dot:hover span::before,
 .testimonials-slides.owl-theme .owl-dots .owl-dot.active span::before,
 .single-hosting-features::before,
 .single-hosting-features::after,
 .single-hosting-features:hover .icon,
 .features-details-desc ul li::before,
 .features-details-desc .features-details-accordion .accordion .accordion-title i,
 .quick-view-modal .modal-content .products-content form button,
 .products-details form button,
 .products-details form .buy-btn .btn-primary::after,
 .products-details form .buy-btn .btn-primary::before,
 .products-details .products-share-social ul li a:hover,
 .order-details .payment-method p [type="radio"]:checked+label::after,
 .order-details .payment-method p [type="radio"]:not(:checked)+label::after,
 .widget-area .widget_search form .search-submit,
 .post-password-form input[type="submit"],
 .single-footer-widget .search-form form .search-submit
{
	background-color: #787fd6;
}

.products-details-tabs .content .products-reviews .form-submit .btn,
 .woocommerce-form .woocommerce-button,
 .woocommerce-ResetPassword .woocommerce-Button,
 .checkout_coupon .button
{
	background-color: #4069eb !important;
}

.pagination-area .page-numbers:hover,
 .pagination-area .current,
 .pages-links .post-page-numbers:hover,
 .pages-links .current,
 .is-style-outline .wp-block-button__link,
 .page-links .post-page-numbers:hover,
 .page-links .current,
 .single-repair-box:hover,
 .single-repair-box:focus,
 .single-iot-box:hover,
 .single-iot-box:focus,
 .form-control:focus,
 .startp-nav nav .others-option .btn.btn-light:hover,
 .startp-nav nav .others-option .btn.btn-light:focus,
 .single-team:hover .team-image img,
 .client-thumbnails .next-arrow:hover,
 .client-thumbnails .prev-arrow:hover,
 .blog-details-area .blog-details .article-content .share-post ul li a:hover,
 .blog-details-area .blog-details .article-content .share-post ul li a:focus,
 .blog-details-area .post-controls-buttons div a:hover,
 .blog-details-area .post-controls-buttons div a:focus,
 .testimonials-slides.owl-theme .owl-dots .owl-dot:hover span,
 .testimonials-slides.owl-theme .owl-dots .owl-dot.active span,
 .pages-links .post-page-numbers:hover,
 .pages-links .current,
 .is-style-outline .wp-block-button__link,
 .page-links .post-page-numbers:hover,
 .page-links .current,
 .single-repair-box:hover,
 .single-repair-box:focus,
 .single-iot-box:hover,
 .single-iot-box:focus,
 .feedback-slides .client-feedback .single-feedback .client-img img,
 .feedback-slides .client-thumbnails .item .img-fill img,
 .blog-details-area .blog-details .article-content ul.category li a
{
	border-color: #4069eb;
}

.btn-primary
{
	background-color: #787fd6;
}

.woocommerce-pagination .page-numbers li a:hover,
 .woocommerce-pagination .page-numbers li span.current,
 .products-details-tabs .content .products-reviews .form-submit .btn
{
	border: 1px solid #4069eb !important;
}

.btn::after,
 .btn::before,
 .startp-nav nav .others-option .btn.btn-primary,
 .single-services-box:hover .icon.bg-c679e3,
 .single-features:hover .icon.bg-c679e3,
 .contact-cta-box .btn-primary,
 .pricing-table.active-plan .btn-primary,
 .ready-to-talk .btn-primary,
 .single-pricing-table.active-plan .btn-primary,
 .single-hosting-features:hover .icon.bg-c679e3,
 .cta-right-content .buy-btn .btn-primary,
 .products-details form .buy-btn .btn-primary
{
	background: #787fd6;
}

.go-top,
 .domain-search-content form button:hover,
 .domain-search-content form button:focus,
 .quick-view-modal .modal-content .products-content form button:hover,
 .quick-view-modal .modal-content .products-content form button:focus,
 .quick-view-modal .modal-content .products-content form .buy-btn .button,
 .products-details form button:hover,
 .products-details form button:focus,
 .products-details form .add-to-wishlist-btn:hover,
 .products-details form .add-to-wishlist-btn:focus,
 .widget-area .widget_shopping_cart .woocommerce-mini-cart__buttons .button.wc-forward
{
	background-color: #4069eb;
}

.single-feedback-item .client-info .title span,
 .single-hosting-features .icon.bg-c679e3,
 .single-repair-feedback .client-img span,
 .single-box.bg-c679e3 .icon,
 .single-box:hover.bg-c679e3 .icon,
 .single-services-box .icon.bg-c679e3,
 .single-features
{
	color: #4069eb;
}

.single-why-choose-us::before,
 .single-team .team-info,
 .cta-area,
 .repair-about-content ul li span::before,
 .single-repair-services::after,
 .repair-why-choose-us,
 .single-iot-services::after,
 .iot-why-choose-us,
 .single-box::before,
 .services-content .box::before,
 .single-team .team-info,
 .single-works::before,
 .pricing-table .pricing-header::before,
 .client-thumbnails .next-arrow::before,
 .client-thumbnails .prev-arrow::before,
 .ready-to-talk,
 .single-blog-post .blog-image .date,
 .single-repair-box .icon::before
{
	background: linear-gradient(135deg, #4069eb 0%, #4069eb 100%);
}

.single-iot-box .icon::before,
 .bg-f7fafd,
 .blog-details-area .blog-details .article-content .blockquote,
 .contact-info-box .icon,
 .single-pricing-table .pricing-header i,
 .bg-f9fafb
{
	background: #f7fafd;
}

.hosting-main-banner,
 .hosting-boxes-area
{
	background-color: #032b8d;
}

p
{
	color: #666666
}

.startp-nav.p-relative
{
	background: #f8f8f8;
}

.startp-nav.is-sticky
{
	background: #ffffff !important;
}

.startp-nav nav .navbar-nav .nav-item a
{
	color: #4a6f8a;
}

.footer-area
{
	background: #f7fafd;
}

</style>
  <link rel="stylesheet" id="startnext-responsive-css" href="/usr/themes/ZuanGuan/static/css/startnext-responsive.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="startnext-responsive-css" href="/usr/themes/ZuanGuan/static/css/startnext-responsive.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="poppins-fonts-css" href="/usr/themes/ZuanGuan/static/css/e83a4d01387a46eca2c6666b125fbec8.css" type="text/css" media="screen"> 
  <link rel="stylesheet" id="elementor-frontend-css" href="/usr/themes/ZuanGuan/static/css/frontend.min.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="redux-google-fonts-startnext_opt-css" href="/usr/themes/ZuanGuan/static/css/456823f695ca480aaf931471704cf61f.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="google-fonts-1-css" href="/usr/themes/ZuanGuan/static/css/bc7d1374109c4493bcd3d3b557b54fd7.css" type="text/css" media="all"> 
  <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
  <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."> 
  <style type="text/css" title="dynamic-css" class="options-output">body{font-family:Poppins;}</style>
  <noscript>
   <style> .wpb_animate_when_almost_visible { opacity: 1; }</style>
  </noscript>
  <script></script> 
 </head> 
 <body class="home page-template-default page page-id-933 wpb-js-composer js-comp-ver-6.0.5 vc_responsive elementor-default elementor-page elementor-page-933"> 
  <div class="default-layout "> 
<?php $this->need('headnav.php'); ?>
   <div id="content" class="site-content"> 
    <div class="default-layout "> 
     <div id="content" class="site-content"> 
      <div id="post-933" class="post-933 page type-page status-publish hentry"> 
       <div class="entry-content"> 
        <div data-elementor-type="wp-page" data-elementor-id="933" class="elementor elementor-933" data-elementor-settings="[]"> 
         <div class="elementor-inner"> 
          <div class="elementor-section-wrap"> 

          <section class="elementor-element elementor-element-05ef9af elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="05ef9af" data-element_type="section"> 
            <div class="elementor-container elementor-column-gap-default"> 
             <div class="elementor-row"> 
              <div class="elementor-element elementor-element-237627b elementor-column elementor-col-100 elementor-top-column" data-id="237627b" data-element_type="column"> 
               <div class="elementor-column-wrap  elementor-element-populated"> 
                <div class="elementor-widget-wrap"> 
                 <div class="elementor-element elementor-element-6228ec8 elementor-widget elementor-widget-StartNext_Banner_One" data-id="6228ec8" data-element_type="widget" data-widget_type="StartNext_Banner_One.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="main-banner"> 
                    <div class="d-table"> 
                     <div class="d-table-cell"> 
                      <div class="container"> 
                       <div class="row h-100 justify-content-center align-items-center"> 
                        <div class="col-lg-5"> 
                         <div class="hero-content"> 
                          <h1>我们专注探索目标领域内容</h1> 
                          <p>ZMKI以需求为本体，以用户为导向，我们因兴趣而工作，因用户满意而放心。</p> 
                          <a href="#" class="btn btn-primary">开始探索</a> 
                         </div> 
                        </div> 
                        <div class="col-lg-6 offset-lg-1"> 
                         <div class="banner-image"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/man.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="man" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/code.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="code" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/carpet.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="carpet" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/bin.png" class="wow zoomIn" data-wow-delay="0.6s" alt="bin" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/book.png" class="wow bounceIn" data-wow-delay="0.6s" alt="book" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/dekstop.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="dekstop" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/dot.png" class="wow zoomIn" data-wow-delay="0.6s" alt="dot" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/flower-top-big.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="flower-top-big" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/flower-top.png" class="wow rotateIn" data-wow-delay="0.6s" alt="flower-top" style="visibility: visible; animation-delay: 0.6s; animation-name: rotateIn;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/keyboard.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="keyboard" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/pen.png" class="wow zoomIn" data-wow-delay="0.6s" alt="pen" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/table.png" class="wow zoomIn" data-wow-delay="0.6s" alt="table" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/tea-cup.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="tea-cup" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/headphone.png" class="wow rollIn" data-wow-delay="0.6s" alt="headphone" style="visibility: visible; animation-delay: 0.6s; animation-name: rollIn;"> 
                          <img src="/usr/themes/ZuanGuan/static/picture/main-pic.png" class="wow fadeInUp animated" data-wow-delay="0.6s" alt="main-pic" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                         </div> 
                        </div> 
                       </div> 
                      </div> 
                     </div> 
                    </div> 
                    <div class="shape1">
                     <img src="/usr/themes/ZuanGuan/static/picture/shape1.png" alt="shape">
                    </div> 
                    <div class="shape2 rotateme">
                     <img src="/usr/themes/ZuanGuan/static/picture/shape2.svg" alt="shape">
                    </div> 
                    <div class="shape3">
                     <img src="/usr/themes/ZuanGuan/static/picture/shape3.svg" alt="shape">
                    </div> 
                    <div class="shape4">
                     <img src="/usr/themes/ZuanGuan/static/picture/shape4.svg" alt="shape">
                    </div> 
                    <div class="shape5">
                     <img src="/usr/themes/ZuanGuan/static/picture/shape5.png" alt="shape">
                    </div> 
                    <div class="shape6 rotateme">
                     <img src="/usr/themes/ZuanGuan/static/picture/shape4.svg" alt="shape">
                    </div> 
                    <div class="shape7">
                     <img src="/usr/themes/ZuanGuan/static/picture/shape4.svg" alt="shape">
                    </div> 
                    <div class="shape8 rotateme">
                     <img src="/usr/themes/ZuanGuan/static/picture/shape2.svg" alt="shape">
                    </div> 
                   </div> 
                  </div> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </section>
  <section class="elementor-element elementor-element-e7d2b70 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e7d2b70" data-element_type="section"> 
            <div class="elementor-container elementor-column-gap-default"> 
             <div class="elementor-row"> 
              <div class="elementor-element elementor-element-787f30b elementor-column elementor-col-100 elementor-top-column" data-id="787f30b" data-element_type="column"> 
               <div class="elementor-column-wrap  elementor-element-populated"> 
                <div class="elementor-widget-wrap"> 
                 <div class="elementor-element elementor-element-c5a628b elementor-widget elementor-widget-Features" data-id="c5a628b" data-element_type="widget" data-widget_type="Features.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="boxes-area"> 
                    <div class="container"> 
                     <div class="row"> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </section>
           <section class="elementor-element elementor-element-4754b05 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="4754b05" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"> 
            <div class="elementor-container elementor-column-gap-no"> 
             <div class="elementor-row"> 
              <div class="elementor-element elementor-element-d4506a6 elementor-column elementor-col-100 elementor-top-column" data-id="d4506a6" data-element_type="column"> 
               <div class="elementor-column-wrap  elementor-element-populated"> 
                <div class="elementor-widget-wrap"> 
                 <div class="elementor-element elementor-element-97ed040 elementor-widget elementor-widget-StartNext_Hosting_Service" data-id="97ed040" data-element_type="widget" data-widget_type="StartNext_Hosting_Service.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="services-area ptb-80 bg-f7fafd"> 
                    <div class="container"> 
                     <div class="row h-100 justify-content-center align-items-center"> 
                      <div class="col-lg-6 col-md-12 services-content"> 
                       <div class="section-title"> 
                        <h2>我们独特且专一</h2> 
                        <div class="bar"></div> 
                        <p>ZMKI以本心出发，拒绝充数资源，满足需求是我们的方向，我们的标准建立在向日葵的初心-独特、价值、效率、品质、专一</p> 
                       </div> 
                       <div class="row"> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-wordpress"></i> WordPress 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-hdd-o"></i> Typecho 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-globe"></i> DeDe Cms 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-life-ring"></i> 帝国Cms 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-flash"></i> 设计ui 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-desktop"></i> 影音资源 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-feed"></i> Windows 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-apple"></i> Mac 
                         </div> 
                        </div> 
                       </div> 
                      </div> 
                      <div class="col-lg-6 col-md-12 services-right-image"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/book-self.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/box.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/chair.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/cloud.png" class="wow zoomIn" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/cup.png" class="wow bounceIn" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/flower-top.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/head-phone.png" class="wow zoomIn" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/monitor.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/mug.png" class="wow rotateIn" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: rotateIn;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/table.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/tissue.png" class="wow zoomIn" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/water-bottle.png" class="wow zoomIn" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/wifi.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="我们独特且专一" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/cercle-shape.png" class="bg-image rotateme" alt="我们独特且专一"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/main-pic.png" class="wow fadeInUp animated" data-wow-delay="0.6s" alt="main-pic" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                      </div> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </section>
           <section class="elementor-element elementor-element-e7d2b70 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e7d2b70" data-element_type="section"> 
            <div class="elementor-container elementor-column-gap-default"> 
             <div class="elementor-row"> 
              <div class="elementor-element elementor-element-787f30b elementor-column elementor-col-100 elementor-top-column" data-id="787f30b" data-element_type="column"> 
               <div class="elementor-column-wrap  elementor-element-populated"> 
                <div class="elementor-widget-wrap"> 
                 <div class="elementor-element elementor-element-c5a628b elementor-widget elementor-widget-Features" data-id="c5a628b" data-element_type="widget" data-widget_type="Features.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="boxes-area"> 
                    <div class="container"> 
                     <div class="row"> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </section>
           <section class="elementor-element elementor-element-68b4c82 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="68b4c82" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"> 
            <div class="elementor-container elementor-column-gap-no"> 
             <div class="elementor-row"> 
              <div class="elementor-element elementor-element-d4f995d elementor-column elementor-col-100 elementor-top-column" data-id="d4f995d" data-element_type="column"> 
               <div class="elementor-column-wrap  elementor-element-populated"> 
                <div class="elementor-widget-wrap"> 
                 <div class="elementor-element elementor-element-92132a5 elementor-widget elementor-widget-StartNext_Hosting_Service" data-id="92132a5" data-element_type="widget" data-widget_type="StartNext_Hosting_Service.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="services-area ptb-80"> 
                    <div class="container"> 
                     <div class="row h-100 justify-content-center align-items-center"> 
                      <div class="col-lg-6 col-md-12 services-left-image"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/big-monitor.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="老生常谈的WordPress 我们深耕其中 " style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/creative.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="老生常谈的WordPress 我们深耕其中 " style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/developer.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="老生常谈的WordPress 我们深耕其中 " style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/flower-top.png" class="wow zoomIn" data-wow-delay="0.6s" alt="老生常谈的WordPress 我们深耕其中 " style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/small-monitor.png" class="wow bounceIn" data-wow-delay="0.6s" alt="老生常谈的WordPress 我们深耕其中 " style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/small-top.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="老生常谈的WordPress 我们深耕其中 " style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/table.png" class="wow zoomIn" data-wow-delay="0.6s" alt="老生常谈的WordPress 我们深耕其中 " style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/target.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="老生常谈的WordPress 我们深耕其中 " style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                       <img src="/usr/themes/ZuanGuan/static/picture/cercle-shape.png" class="bg-image rotateme" alt="老生常谈的WordPress 我们深耕其中 "> 
                       <img src="/usr/themes/ZuanGuan/static/picture/main-pic.png" class="wow fadeInUp animated" data-wow-delay="0.6s" alt="老生常谈的WordPress 我们深耕其中 " style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 
                      </div> 
                      <div class="col-lg-6 col-md-12 services-content"> 
                       <div class="section-title"> 
                        <h2>老生常谈的WordPress 我们深耕其中 </h2> 
                        <div class="bar"></div> 
                        <p>我们从事WordPress相关工作多年，具有丰富的WordPress经验，站点速度优化，Linux管理，debug，模板、插件二开美化、汉化。 我们面面俱到 . . .</p> 
                       </div> 
                       <div class="row"> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-th-list"></i> 模板美化 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-code"></i> 插件二开 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-mobile-phone"></i> 站点速度优化 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-terminal"></i> 内容开发 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-apple"></i> 自适应适配 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-eyedropper"></i> ui调整 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-shopping-cart"></i> 支付能力 
                         </div> 
                        </div> 
                        <div class="col-lg-6 col-md-6"> 
                         <div class="box"> 
                          <i class="fa fa-grav"></i> 多年经验 
                         </div> 
                        </div> 
                       </div> 
                      </div> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </section> 
           <section class="elementor-element elementor-element-4a8ac54 elementor-section-full_width features-area ptb-80 bg-f7fafd elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="4a8ac54" data-element_type="section"> 
            <div class="elementor-container elementor-column-gap-default"> 
             <div class="elementor-row"> 
              <div class="elementor-element elementor-element-fdbc341 elementor-column elementor-col-100 elementor-top-column" data-id="fdbc341" data-element_type="column"> 
               <div class="elementor-column-wrap  elementor-element-populated"> 
                <div class="elementor-widget-wrap"> 
                 <div class="elementor-element elementor-element-2af01f3 elementor-widget elementor-widget-Section" data-id="2af01f3" data-element_type="widget" data-widget_type="Section.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="section-title"> 
                    <h2>向日葵-朵朵向阳开</h2> 
                    <div class="bar"></div> 
                    <p>我们在19年底正式推出向日葵·全家桶,全站优品，只为传递价值！<br>
                    我们是一支充满朝气的队伍，向日葵的积极乐观正如年轻的我们。这既是XIANGRK</p> 
                   </div> 
                  </div> 
                 </div> 
                 <div class="elementor-element elementor-element-8f1be39 elementor-widget elementor-widget-Features" data-id="8f1be39" data-element_type="widget" data-widget_type="Features.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="vc_row wpb_row vc_row-fluid"> 
                    <div class="wpb_column vc_column_container vc_col-sm-12"> 
                     <div class="vc_column-inner"> 
                      <div class="wpb_wrapper"> 
                       <div class="container "> 
                        <div class="row"> 
                         <div class="col-lg-6 col-md-6"> 
                          <div class="single-features"> 
                           <div class="icon" style="background: #cdf1d8;"> 
                            <i class="fas fa-hand-holding-usd" style="color: #44ce6f;"></i> 
                           </div> 
                           <h3><a href="javascript:;"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">售后保障</font> </font> </a></h3> 
                           <p> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">用户付费用于维护服务器运营费用,我们真诚对待每一条订单</font> </font> </p> 
                          </div> 
                         </div> 
                         <div class="col-lg-6 col-md-6"> 
                          <div class="single-features"> 
                           <div class="icon" style="background: #edc3fc;"> 
                            <i class="fa fa-mortar-board" style="color: #c679e3;"></i> 
                           </div> 
                           <h3><a href="javascript:;"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">全家桶理念</font> </font> </a></h3> 
                           <p> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">向日葵目标为一站式服务,目前已收录多个系列全家桶合集。</font> </font> </p> 
                          </div> 
                         </div> 
                         <div class="col-lg-6 col-md-6"> 
                          <div class="single-features"> 
                           <div class="icon" style="background: #f9d2c4;"> 
                            <i class="fas fa-rocket" style="color: #eb6b3d;"></i> 
                           </div> 
                           <h3><a href="javascript:;"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">优秀的访问体验</font> </font> </a></h3> 
                           <p> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">优秀的改版和运维优化，基垫提升用户体验</font> </font> </p> 
                          </div> 
                         </div> 
                         <div class="col-lg-6 col-md-6"> 
                          <div class="single-features"> 
                           <div class="icon" style="background: #edc3fc;"> 
                            <i class="fas fa-headset" style="color: #c679e3;"></i> 
                           </div> 
                           <h3><a href="javascript:;"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">付费用户100%客服售后接入</font> </font> </a></h3> 
                           <p> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">我们认真对待每一个用户，承诺付费用户100%客服售后接入</font> </font> </p> 
                          </div> 
                         </div> 
                         <div class="col-lg-6 col-md-6"> 
                          <div class="single-features"> 
                           <div class="icon" style="background: #cdf1d8;"> 
                            <i class="fa fa-user-circle-o" style="color: #44ce6f;"></i>  

                           </div> 
                           <h3><a href="javascript:;"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">完善的用户组</font> </font> </a></h3> 
                           <p> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">向日葵经多次改版，目前已有完善的用户组别。VIP尊享下载特权</font> </font> </p> 
                          </div> 
                         </div> 
                         <div class="col-lg-6 col-md-6"> 
                          <div class="single-features"> 
                           <div class="icon" style="background: #edc3fc;"> 
                            <i class="fas fa-heart" style="color: #c679e3;"></i> 
                            <!--<i class="fa fa-heart"></i>-->

                           </div> 
                           <h3><a href="javascript:;"> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">全站优品</font> </font> </a></h3> 
                           <p> <font style="vertical-align: inherit;"> <font style="vertical-align: inherit;">向日葵拒绝充数资源，满足需求是我们的方向，只为传递价值！</font> </font> </p> 
                          </div> 
                         </div> 
                        </div> 
                       </div> 
                      </div> 
                     </div> 
                    </div> 
                   </div> 
                   <div class="container"> 
                    <div class="row"> 
                    </div> 
                   </div> 
                  </div> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </section>
                   <section class="elementor-element elementor-element-7e79357 elementor-section-full_width funfacts-area ptb-80 elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="7e79357" data-element_type="section"> 
            <div class="elementor-container elementor-column-gap-default"> 
             <div class="elementor-row"> 
              <div class="elementor-element elementor-element-4e8774c elementor-column elementor-col-100 elementor-top-column" data-id="4e8774c" data-element_type="column"> 
               <div class="elementor-column-wrap  elementor-element-populated"> 
                <div class="elementor-widget-wrap"> 
                 <div class="elementor-element elementor-element-8c3ab4b elementor-widget elementor-widget-Section" data-id="8c3ab4b" data-element_type="widget" data-widget_type="Section.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="section-title"> 
                    <h2>不要把时间用来造轮子，这里有的你拿走，保留精力用来创造！</h2> 
                    <div class="bar"></div> 
                    <p>最大化节省您的时间，快速的获取资源，生产力，由我们制造</p> 
                   </div> 
                  </div> 
                 </div> 
                 <section class="elementor-element elementor-element-587300f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="587300f" data-element_type="section"> 
                  <div class="elementor-container elementor-column-gap-default"> 
                   <div class="elementor-row"> 
                    <div class="elementor-element elementor-element-cf3d21d elementor-column elementor-col-25 elementor-inner-column" data-id="cf3d21d" data-element_type="column"> 
                     <div class="elementor-column-wrap  elementor-element-populated"> 
                      <div class="elementor-widget-wrap"> 
                       <div class="elementor-element elementor-element-ae56801 elementor-widget elementor-widget-FunFacts" data-id="ae56801" data-element_type="widget" data-widget_type="FunFacts.default"> 
                        <div class="elementor-widget-container"> 
                         <div class="funfact"> 
                          <h3>1000 +</h3> 
                          <p>全网主题用户</p> 
                         </div> 
                        </div> 
                       </div> 
                      </div> 
                     </div> 
                    </div> 
                    <div class="elementor-element elementor-element-c3a7050 elementor-column elementor-col-25 elementor-inner-column" data-id="c3a7050" data-element_type="column"> 
                     <div class="elementor-column-wrap  elementor-element-populated"> 
                      <div class="elementor-widget-wrap"> 
                       <div class="elementor-element elementor-element-485ee2c elementor-widget elementor-widget-FunFacts" data-id="485ee2c" data-element_type="widget" data-widget_type="FunFacts.default"> 
                        <div class="elementor-widget-container"> 
                         <div class="funfact"> 
                          <h3>300+</h3> 
                          <p>原创文章</p> 
                         </div> 
                        </div> 
                       </div> 
                      </div> 
                     </div> 
                    </div> 
                    <div class="elementor-element elementor-element-96b6ba4 elementor-column elementor-col-25 elementor-inner-column" data-id="96b6ba4" data-element_type="column"> 
                     <div class="elementor-column-wrap  elementor-element-populated"> 
                      <div class="elementor-widget-wrap"> 
                       <div class="elementor-element elementor-element-b52571b elementor-widget elementor-widget-FunFacts" data-id="b52571b" data-element_type="widget" data-widget_type="FunFacts.default"> 
                        <div class="elementor-widget-container"> 
                         <div class="funfact"> 
                          <h3>10w+</h3> 
                          <p>全网阅读</p> 
                         </div> 
                        </div> 
                       </div> 
                      </div> 
                     </div> 
                    </div> 
                    <div class="elementor-element elementor-element-6fbb09f elementor-column elementor-col-25 elementor-inner-column" data-id="6fbb09f" data-element_type="column"> 
                     <div class="elementor-column-wrap  elementor-element-populated"> 
                      <div class="elementor-widget-wrap"> 
                       <div class="elementor-element elementor-element-c208eb0 elementor-widget elementor-widget-FunFacts" data-id="c208eb0" data-element_type="widget" data-widget_type="FunFacts.default"> 
                        <div class="elementor-widget-container"> 
                         <div class="funfact"> 
                          <h3>1000+</h3> 
                          <p>用户互动</p> 
                         </div> 
                        </div> 
                       </div> 
                      </div> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                 </section> 
                 <div class="elementor-element elementor-element-d12f653 map-bg elementor-widget elementor-widget-image" data-id="d12f653" data-element_type="widget" data-widget_type="image.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="elementor-image"> 
                    <img width="640" height="312" src="/usr/themes/ZuanGuan/static/picture/map-1-1-1-3.png" class="attachment-large size-large" alt="" srcset="/usr/themes/ZuanGuan/static/picture/map-1-1-1-3.png 910w, /usr/themes/ZuanGuan/static/picture/map-1-1-1-3-300x146.png 300w, /usr/themes/ZuanGuan/static/picture/map-1-1-1-3-768x374.png 768w, /usr/themes/ZuanGuan/static/picture/map-1-1-1-3-600x292.png 600w" sizes="(max-width: 640px) 100vw, 640px"> 
                   </div> 
                  </div> 
                 </div> 
                 <section class="elementor-element elementor-element-547389e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="547389e" data-element_type="section"> 
                  <div class="elementor-container elementor-column-gap-default"> 
                   <div class="elementor-row"> 
                    <div class="elementor-element elementor-element-99d53ff elementor-column elementor-col-100 elementor-inner-column" data-id="99d53ff" data-element_type="column"> 
                     <div class="elementor-column-wrap  elementor-element-populated"> 
                      <div class="elementor-widget-wrap"> 
                       <div class="elementor-element elementor-element-bea50c5 elementor-widget elementor-widget-Contact_Box" data-id="bea50c5" data-element_type="widget" data-widget_type="Contact_Box.default"> 
                        <div class="elementor-widget-container"> 
                         <div class="contact-cta-box"> 
                          <h3>遇到问题？我们业务范围可以帮到您？</h3> 
                          <p>我们致力于高效，我们时刻与时间赛跑</p> 
                          <a href="#" class="btn btn-primary">联系客服</a> 
                         </div> 
                        </div> 
                       </div> 
                      </div> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                 </section> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </section> 
           <section class="elementor-element elementor-element-b6656b3 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="b6656b3" data-element_type="section"> 
            <div class="elementor-container elementor-column-gap-no"> 
             <div class="elementor-row"> 
              <div class="elementor-element elementor-element-aeea94a elementor-column elementor-col-100 elementor-top-column" data-id="aeea94a" data-element_type="column"> 
               <div class="elementor-column-wrap  elementor-element-populated"> 
                <div class="elementor-widget-wrap"> 
                 <div class="elementor-element elementor-element-7b8fc6c elementor-widget elementor-widget-StratNext_Partner" data-id="7b8fc6c" data-element_type="widget" data-widget_type="StratNext_Partner.default"> 
                  <div class="elementor-widget-container"> 
                   <!-- Start Ready To Talk Area --> 
                   <div class="ready-to-talk"> 
                    <div class="container"> 
                     <div class="ready-to-talk-content"> 
                      <h3>准备好了吗？</h3> 
                      <p>我们的团队在这里回答您有关XIANGRK的问题 </p> 
                      <a href="#" class="btn btn-primary">联系客服</a> 
                      <span><a href="#">或者，立即开始免费试用 </a></span> 
                     </div> 
                    </div> 
                   </div> 
                   <!-- End Ready To Talk Area --> 
                   <div class="partner-area partner-section"> 
                    <!-- Start Partner Area --> 
                    <div class="container"> 
                     <h5>超过2000+用户选择向日葵合作</h5> 
                     <div class="partner-inner"> 
                      <div class="row"> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-5-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover5-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-6-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover6-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-7-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover7-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-8-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover8-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-9-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover9-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-10-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover10-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-11-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover11-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-12-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover12-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-13-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover13-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-14-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover14-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-15-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover15-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-2-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover2-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-17-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover17-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-18-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover18-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-1-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover1-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-2-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover2-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-3-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover1-1-1-1-3.png" alt="Partner"> </a> 
                       </div> 
                       <div class="col-lg-2 col-md-3 col-6"> 
                        <a href="#"> <img src="/usr/themes/ZuanGuan/static/picture/partner-6-1-1-1-3.png" alt="Partner"> <img src="/usr/themes/ZuanGuan/static/picture/partner-hover6-1-1-1-3.png" alt="Partner"> </a> 
                       </div> 
                      </div> 
                     </div> 
                    </div> 
                   </div> 
                   <!-- End Partner Area --> 
                  </div> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </section> 
           <section class="elementor-element elementor-element-159559d elementor-section-full_width blog-area pt-80 pb-50 elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="159559d" data-element_type="section"> 
            <div class="elementor-container elementor-column-gap-default"> 
             <div class="elementor-row"> 
              <div class="elementor-element elementor-element-7daf842 elementor-column elementor-col-100 elementor-top-column" data-id="7daf842" data-element_type="column"> 
               <div class="elementor-column-wrap  elementor-element-populated"> 
                <div class="elementor-widget-wrap"> 
                 <div class="elementor-element elementor-element-d8cb816 elementor-widget elementor-widget-Section" data-id="d8cb816" data-element_type="widget" data-widget_type="Section.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="section-title"> 
                    <h2>阅读文档</h2> 
                    <div class="bar"></div> 
                    <p>我们始终认为创新绝不是闭门造车，在去年我们与互联网用户对话交流1000余次</p> 
                   </div> 
                  </div> 
                 </div> 
                 <div class="elementor-element elementor-element-d3e3695 elementor-widget elementor-widget-StartNextBlogPost" data-id="d3e3695" data-element_type="widget" data-widget_type="StartNextBlogPost.default"> 
                  <div class="elementor-widget-container"> 
                   <div class="container"> 
                    <div class="row"> 
                    <?php if ($this->have()): ?>
                        <?php while($this->next()): ?>
                                        <div class="col-lg-4 col-md-6"> 
                      <div class="single-blog-post "> 
                       <div class="blog-image"> 
                        <a href="138.html"> <img src="https://zuanmang.net/uploads/allimg/20200516/1-200516150432328.png"> </a> 
                        <div class="date"> 
                         <i data-feather="calendar"></i><?php $this->date(); ?>
                        </div> 
                       </div> 
                       <div class="blog-post-content custom-padding"> 
                        <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3> 
                        <ul> 
                         <li> <i class="fa fa-user"></i> <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> </li> 
                        </ul> 
                        <p> </p>
                        <p> <?php $this->excerpt(140, '...'); ?></p> 
                        <p></p> 
                        <div class="mt-2"> 
                         <a href="<?php $this->permalink() ?>" class="read-more-btn">查看全文 <i data-feather="arrow-right"></i> </a> 
                        </div> 
                       </div> 
                      </div> 
                     </div>  
                     <?php endwhile; ?>
                     <?php else: ?>暂无文章<?php endif; ?>
                    </div> 
                   </div> 
                  </div> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </section> 
          </div> 
         </div> 
        </div> 
       </div>
       <!-- .entry-content --> 
      </div>
      <!-- #post-933 --> 
     </div>
     <!-- #content --> 
     <div class="go-top">
      <i data-feather="arrow-up"></i>
     </div> 
<?php $this->need('footer.php');?>
     <div class="go-top">
      <i data-feather="arrow-up"></i>
     </div> 
     <script type="text/javascript">
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/demo.k1v.cn\/StartNext\/index.php\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script> 
     <script>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/demo.k1v.cn\/StartNext\/wp-admin\/admin-ajax.php","nonce":"1dab36b6c6","shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"delicious":{"title":"Delicious"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"zh_CN","app_id":""}};
</script> 
     <script>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.8.4","urls":{"assets":"https:\/\/demo.k1v.cn\/StartNext\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes"},"editorPreferences":[]},"post":{"id":933,"title":"\u9996\u9875\u4e00\uff08\u6d45\u7eff\u8272\uff09","excerpt":""}};
</script> 
    </div>
   </div>
  </div>  
 </body>
</html>
