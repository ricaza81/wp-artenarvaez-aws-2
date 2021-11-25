<?php

/*
Plugin Name: Tanda Extensions
Plugin URI: https://creativedigital.tech/Tanda
Description: Tanda Extensions For tanda WordPress Theme
Author: WordPressRiver
Version: 1.1.0
Author URI: https://creativedigital.tech/tanda
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
     die ('Silly human what are you doing here');
}

// Before VC Init

add_action( 'vc_before_init', 'tanda_vc_before_init_actions' );

function tanda_vc_before_init_actions() {

	// Home 1 

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/hero.php');

		// About

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/about.php');

		// Service

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/service/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/service/service.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/service/end.php');

		// Work

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/work/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/work/work.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/work/end.php');

		// WorkAbout

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/workabout.php');

		// Service1

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/service1/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/service1/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/service1/service1.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/service1/end.php');

		// QuickContact

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/quickcontact.php');

		// Case

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/case/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/case/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/case/case.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/case/end.php');

		// Counter

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/counter/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/counter/counter.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/counter/end.php');

		// Team

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/team.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/team/end.php');

		// Faq

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/faq/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/faq/faq.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/faq/end.php');

		// Blog

		include( plugin_dir_path( __FILE__ ) . '/widgets/home1/blog.php');

	// Pages

		// Team Single

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/team-single/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/team-single/end.php');

		// Case Single

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case-studies/single/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case-studies/single/end.php');

		// Experience

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/experience/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/experience/end.php');

		// video

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/about/video.php');

		// Why

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/choose/why/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/choose/why/why.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/choose/why/end.php');

		// Mission

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/choose/mission/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/choose/mission/mission.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/choose/mission/end.php');

		// Contact

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/contact/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/contact/formend.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/contact/contact.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/contact/end.php');

	// Services

		// Case

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case-studies/start-v1.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case-studies/start-v2.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case-studies/case.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/case-studies/end.php');

		// Client

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/client/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/client/client.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/client/end.php');

		// Service 2 

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v2/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v2/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v2/service2.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v2/end.php');

		// Service 3 

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v3/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v3/title.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v3/tab-start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v3/tab.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v3/tab-end.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/v3/end.php');

		// Service Single

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/single/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/single/intro-end.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/single/sidebar-start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/single/sidebar.php');		

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/single/sidebar-end.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/single/section1.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/single/section2.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/pages/services/single/end.php');

	//Home2 

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/end.php');

		// Testimonial

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/testimonial/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/testimonial/testimonial.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home2/testimonial/end.php');

	// Home3

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/hero.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/end.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/form-start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/hero/form-end.php');

		// Section1

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/section1/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/section1/section1.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home3/section1/end.php');

	// Home4

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home4/hero.php');

		// Section1

		include( plugin_dir_path( __FILE__ ) . '/widgets/home4/section1/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home4/section1/section1.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home4/section1/end.php');

	// Home 5

		// Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/hero.php');

		// Service

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/service/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/service/service.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/service/end.php');

		// About

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/about/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/about/about.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home5/about/end.php');

	// Home 6
	
         // Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/hero/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/hero/hero.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/hero/end.php');
	
        // About

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/about/about.php');
		
		// Faq

		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/faq/start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/faq/end.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/faq/class-start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/faq/form-start.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home6/faq/class-end.php');
		
		// Home 7
	
         // Hero

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/hero.php');
		
		// About

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/about/about.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/about/about-tab-title.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/about/about-tab-title-end.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/about/content.php');
		
		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/about/end.php');
		
		// Service

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/service/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/service/service1.php');
		
// 		include( plugin_dir_path( __FILE__ ) . '/widgets/home7/service/title.php');
		
	    include( plugin_dir_path( __FILE__ ) . '/widgets/home7/service/end.php');
		
		// Home 8
	
         // Hero
         
        include( plugin_dir_path( __FILE__ ) . '/widgets/home8/hero/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home8/hero/hero.php');
		
	    include( plugin_dir_path( __FILE__ ) . '/widgets/home8/hero/end.php');
	    
	    // Serivice
         
        include( plugin_dir_path( __FILE__ ) . '/widgets/home8/service/start.php');

		include( plugin_dir_path( __FILE__ ) . '/widgets/home8/service/service.php');
		
		  include( plugin_dir_path( __FILE__ ) . '/widgets/home8/service/title.php');
		
	    include( plugin_dir_path( __FILE__ ) . '/widgets/home8/service/end.php');
		

}