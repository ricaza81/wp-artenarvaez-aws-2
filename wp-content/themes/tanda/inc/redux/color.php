<?php 
if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
// Output Customize CSS
function tanda_customize_css() { 
    global $tanda_options; if ($tanda_options['main_color_tanda'] == 7) {
?>
	<style>
		/* bootsnav.css */

nav.navbar.navbar-default.bootsnav.navbar-fixed-light a.navbar-brand::before,
nav.navbar.bootsnav.active-bg ul.nav > li > a.active {
    background: <?php echo esc_html($tanda_options['colorcode']); ?> !important;
  } 

nav.navbar.bootsnav ul.nav > li > a.active,
.navbar.bootsnav.bg-theme .attr-nav li.quote-btn a,
nav.navbar.bootsnav ul.nav > li.active > a,
nav.navbar.bootsnav ul.nav > li > a:hover,
nav.navbar.bootsnav ul.navbar-right li.dropdown ul.dropdown-menu li a:hover,
nav.navbar.bootsnav ul.navbar-left li.dropdown ul.dropdown-menu li a:hover,
nav.navbar.bootsnav ul.dropdown-menu.megamenu-content .content ul.menu-col li a:hover,
nav.bootsnav.navbar-sidebar ul.nav > li > a:hover,
nav.navbar.bootsnav ul.nav li.dropdown > ul.dropdown-menu li:hover > a,
.attr-nav > ul > li.contact i,
.attr-nav > ul.button > li > a,
.attr-nav > ul > li.button a,
.attr-nav.menu li:last-child a,
.attr-nav.button li a i,
.attr-nav > ul > li.button a {
    color: <?php echo esc_html($tanda_options['colorcode']); ?>;
  }

nav.navbar.bootsnav.active-full ul.nav > li > a.active,
nav.navbar.bootsnav.active-full ul.nav > li > a:hover {
    background: <?php echo esc_html($tanda_options['colorcode']); ?> none repeat scroll 0 0 !important;
  }

/* style.css */

.bg-theme {
  background-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.gradient-bg {
  background-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.shadow.theme::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?> none repeat scroll 0 0;
}

.shadow.theme-hard::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?> none repeat scroll 0 0;
}

.btn-gray.border {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.btn-gray.border:hover {
  background-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
  border: 2px solid <?php echo esc_html($tanda_options['colorcode']); ?> !important;
}

.btn-standard {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.btn-standard::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.btn-standard i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.bg-gradient {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.btn-theme {
  background-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
  border: 2px solid <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.btn-theme.border {
  border: 2px solid <?php echo esc_html($tanda_options['colorcode']); ?> !important;
}

.btn-theme.border:hover {
  background-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
  border: 2px solid <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.btn-theme.effect:hover, 
 .btn-theme.effect:focus {
  background: <?php echo esc_html($tanda_options['colorcode']); ?> none repeat scroll 0 0;
  border: 2px solid <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.btn-gradient::after {
  box-shadow: 0 0 10px rgba(255, 136, 0, 0.5), inset 0 0 1px 1px <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.attr-nav > a.btn-theme.effect:hover, 
.attr-nav > a.btn-theme.effect, 
.attr-nav > a.btn-theme.effect:focus {
  background: <?php echo esc_html($tanda_options['colorcode']); ?> none repeat scroll 0 0;
  border: 2px solid <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.attr-nav.social li a {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.site-heading h4 {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.site-heading.clean h2 span {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.site-heading h2 span {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.site-heading h2::before {
  background: <?php echo esc_html($tanda_options['colorcode']); ?> none repeat scroll 0 0;
}

.site-heading h2::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?> none repeat scroll 0 0;
}

.site-heading h2 span {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.heading-left h5 {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.heading-left h5::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.top-bar-area .info li i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.top-bar-area .info-colums ul li .icon i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.banner-area .carousel-control {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}


.banner-area.text-color .content h2 strong {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.banner-area .appoinment-box button {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.banner-area .content .bottom .call-us h5 {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.banner-area .content .bottom .call-us i {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.banner-area .content .bottom .call-us i::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.video-play-button {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.video-play-button.theme:before,
.video-play-button.theme:after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?> repeat scroll 0 0;
}

.video-play-button i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.about-area .info > h5 {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.about-area .info > h5::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.about-area .info ul li i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.about-area .info .progress-box .progress .progress-bar span {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.about-area .info .progress-box .progress .progress-bar span::after {
  border-top: 5px solid <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.features-area .item > i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.feature-area .features-box .item .overlay .info > a {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.top-features-area .item .icon i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;;
}

.top-features-area .item .icon i::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.top-features-area .item .more a {
    color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.feature-area .feature-box .content .content-box {
  border-left: 4px solid <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.featured-services-area .item i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.featured-services-area .item::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.choose-us-area .item .icon i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.choose-us-area .item a {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.choose-us-area .item .call i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.work-process-area .work-pro-items .item i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.work-process-area .work-pro-items .item::before, 
.work-process-area .work-pro-items .item::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.work-process-area .work-pro-items .item .item-inner::before, 
.work-process-area .work-pro-items .item .item-inner::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.works-about-items .info > h5 {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.works-about-items .info > h5::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.works-about-items ul li::after {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-area .services-items .item:hover .info > a {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-area .services-items .item .icon > i {
    color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-area .services-tabs ul li a.active {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-area .services-tabs ul li a.active::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-area .services-tabs .info .content a {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-area .services-tabs .info .content ul li::after {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.service-area .service-box .item i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.service-area .service-box .item .icon::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-details-area .content ul li::after {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-details-area .sidebar-item .title h4::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-details-area .sidebar-item.banner .thumb .content h3 i {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-details-area .sidebar-item.banner .thumb .content h3 i::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.services-details-area .sidebar-item.brochure a i {
    color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.case-studies-area .item .info .info-items .right-info a {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.case-studies-area .owl-nav .owl-prev, 
.case-studies-area .owl-nav .owl-next {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.team-area .team-items .info span {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.share-button {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.team-single-area .social ul li a:hover {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.team-single-area .content > span {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.testimonials-area .thumb i {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.testimonials-area .item::before {
  border: 15px solid <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.faq-area .info > h5 {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.faq-area .info > h5::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.faq-area .faq-content .card .card-header h4 strong {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.faq-area .faq-content .card .card-header h4 strong::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area a.btn-simple:hover {
    color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .item .info .post-sticky span {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .info .cats a:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .item .info ul li i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .item .info h4 a:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .info .meta a:hover {
    color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.btn-more:hover::after {
  border-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

a.btn-more:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .item .info a.read-more:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .thumb .cats a {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .sidebar .sidebar-item li a:hover {
    color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .sidebar .title h4::after {
  border-left: 3px solid <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .sidebar button[type="submit"] {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .sidebar input[type="submit"]:hover {
  background: <?php echo esc_html($tanda_options['colorcode']); ?> none repeat scroll 0 0;
}

.blog-area .sidebar .sidebar-item li a:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.sidebar-item.recent-post .meta-title i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.sidebar-item.recent-post li a:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.sidebar-item.recent-post li span {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.sidebar-item.tags ul li a:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .sidebar .sidebar-item.add-banner .sidebar-info::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area.single .item .content-box span {
  background: <?php echo esc_html($tanda_options['colorcode']); ?> none repeat scroll 0 0;
}

.blog-area .item blockquote::before {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .blog-content .share li a {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area.single .post-pagi-area a {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area.single .post-pagi-area a:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.comments-list .commen-item .content .title span {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.comments-info a:hover {
    background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.comments-form button {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.comments-form button:hover {
  background-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.pagination li a {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.pagination li.page-item.active a {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
  border-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.contact-area form button {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.contact-area .contact-tabs > ul li a.active::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.contact-area .contact-tabs > ul li a.active {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.contact-tabs .tab-content ul li i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}


.error-box .search form button {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

footer form button {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

footer .f-item.link li a:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

footer .f-item .download a i {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.site-preloader .ring {
  border-top-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.page-numbers {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.blog-area .pagi-area .pagination li span {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
  border-color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

#wp-calendar a, a:active, a:focus, a:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.wp-calendar-nav-prev a,
.wp-calendar-nav-next a {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.tagcloud a:hover {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

input[type="submit"],
.wp-block-search__button{
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.button-fix {
    background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.widget_calendar caption {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.widget_calendar a {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.color-customizer a.opener {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.color-customizer .text-theme {
  color: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.testimonials-area .testimonial-items .owl-carousel .owl-dots .owl-dot.active span::after,
.services-area .services-items.services-carousel.owl-carousel .owl-dot.active span::after {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

nav.navbar.bootsnav.bg-theme {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.navbar .attr-nav form button {
  background: <?php echo esc_html($tanda_options['colorcode']); ?>;
}

.banner-area.text-light .content h2 strong {
  color: #fff;
}

/*Gradient*/

.features-area .item-grid:first-child .item:first-child,
.features-area .item-grid:last-child .item:last-child,
.features-area .item-grid .item:hover {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
}

.services-details-area .sidebar-item.link li a::before {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
}
.bg-gradient {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
}

.btn-gradient::after {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
}

.breadcrumb-area.less-background {
    background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
}


.about-area .info .progress-box .progress .progress-bar {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
}

.team-single-area .basic-info::after {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
}

.faq-area .appoinment-form {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
}


.feature-area .feature-box .item i {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
}

.service-area .service-items .item .info > i {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 100%);
  -webkit-background-clip: text;
}

.service-area .service-box .item::after {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 48%);
}

.services-area .services-items .item::after {
  background: linear-gradient(90deg, <?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 48%);
}

.fun-factor-area .fun-fact .icon i {
  background: linear-gradient(90deg,<?php echo esc_html($tanda_options['color-gra']['from']); ?> 0%, <?php echo esc_html($tanda_options['color-gra']['to']); ?> 75%);
  -webkit-background-clip: text;
}
 	</style>

<?php }
}

  
add_action('wp_head', 'tanda_customize_css');
}
?>