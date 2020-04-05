=== Bootscore ===

Contributors: craftwerk
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

Requires at least: 4.5
Tested up to: 5.3.2
Requires PHP: 5.6
Stable tag: 3.0.9
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Bootscore WordPress Theme, Copyright 2019 Bastian Kreiter.


=== Plugin Name ===
Contributors: craftwerk

A starter theme called Bootscore.


== Description ==

A powerful Bootstrap WordPress Starter Theme


== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.


== Frequently Asked Questions ==

= Does this theme support any plugins? =

Bootscore includes support for Infinite Scroll in Jetpack.


== Changelog ==

    = 3.0.8 - April 05 2020 =
        
        * Improved Contactform 7 support
        * Added category templates

    = 3.0.7 - April 05 2020 =
        
        * Cleaned the nav-walker classes in header.php
        * Added Opac Overlay to all header.php
        * Contactform 7 support
        
    = 3.0.6 - April 02 2020 =
        
        * Removed woocommerce-germanized support
        * Changed to-top button
        * Updated .pot file
        * Fixed WooCommerce product gallery bug

    = 3.0.5 - March 25 2020 =
        
        * Updated WooCommerce Templates
        * Moved ml-3 from top-nav-search and top-nav-module from header.php to functions.php in widget section.
        * Shortcode in HTML Widget
        * Bug fixes
        * Changed meta and footer copyright from text-secondary to text muted
        * Updatet .pot file german Du to du

    = 3.0.4 - March 04 2020 =
        
        * Removed Edit Link in page.php
        * Removed Ajax add to cart from theme and made a Plugin (doesn´t work with Affiliate and Grouped Products)
        * Changed Category and Tag Badges to secondary
        * Added height-85 class

    = 3.0.3 - February 28 2020 =
    
        * Bug fixes

    = 3.0.2 - February 22 2020 =
    
        * Added Ajax add to cart PlugIn in theme https://quadmenu.com/add-to-cart-with-woocommerce-and-ajax-step-by-step/

    = 3.0.1 - January 30 2020 =
    
        * Moved container from header.php to page-, single-, category-, author- and archive.php
        * WooCommerce Germanized support
        * Insert alert in 404.php and search content-none.php
        * Lighten up the design
        * Deleted all category- and author.php. Use archive.php instead
        * Deleted header-blog-logo-center.php, header-blog-logo-left.php and header-fluid.php
        * Bug fixes

    = 3.0.0 - January 21 2020 =
    
        * WooCommerce Support, please read documentation how to use it https://bootscore.me/category/documentation/
        * Added theme_colors.css with bootstrap variables
        * Bootstrap custom-checkbox in comment cookie

	= 2.0.6 - November 21 2019 =
    
        * Added bootstrap filter for Contactform7 Acceptance Checkbox in functions.php
        * Added page transitions in theme_page_transition.css and theme.js. Does not work on iOS and Safari

	= 2.0.5 - November 18 2019 =
	
		* Added bootstrap.min-sketch.css. For use rename to bootstrap.min.css. Customize here https://bootstrap.build/app/project/uhPrFvLSfVUW

	= 2.0.4 - November 17 2019 =
	
		* Changed bootstrap.min.js to bootstrap.bundle.min.js. 
            * This ads tooltips and dropdowns.
            * This fixes bug with search dropdown on header-blog-logo-left.php and header-blog-logo-center.php on mobile view
        * Moved GDPR ready Google Analytics Snippet from footer.php to own google-analytics.js in folder js


	= 2.0.3 - November 12 2019 =
	
		* Bug fixes
		* Cookie Consent moved from <footer> to .page (still in footer.php)
        * To Top Button moved from <footer> to .page (still in footer.php)
        * Adding responsive sizes to fonts display-1 to display-4 and <h1> to <h6> in theme_fonts.css

	= 2.0.2 - September 13 2019 =
	
		* Bug fixes
		* Adding col-md-8 to all sidebar-left templates

	= 2.0.1 - August 17 2019 =
	
		* Added page-blank-without-container.php
		* Changed 404 Page
		* Updated .pot file

	= 2.0.0 - August 05 2019 =
		
		* Removed all Customizer settings and files by removing customizer.php, customizer.js, code in functions.php and logo upload code in all header.php. background-color, text-color and logo upload must do manually now. Logo is placed as an .svg in theme folder /img/logo.
		* Removed Custom Header function by removing the custom-header.php and changing the index.php
		* Added Favicon Links to all header.php files. Use https://realfavicongenerator.net to generate different Favicons for specific devices.
		* Updated to Bootstrap 4.3.1
		* Bug Fixes


	= 1.0.6 - July 22 2019 =
		* Tags to badge-primary
		* Internet Explorer Support. category-, archive- and author-equal-height.php set from card-deck to columns and removed flex css in theme-category.css
		* Added category-, archive- and author-equal-height-sidebar-right.php Templates. 


	= 1.0.5 - July 21 2019 =
		* Bug fix Submenu Animation in theme.js (Buggy with Search Dropdown). Commented, can be activated in theme.js

	= 1.0.4 - July 10 2019 =
		* Bug fixes
		* Submenu Animation in theme.js
		* Changed category / taxonomie badge from secondary to primary

	= 1.0.3 - June 28 2019 =
		* Bug fixes
		* Updating the readme.txt
		* Reactivating the cookie consent
		* Removing search-form tag in functions.php
		* Removing internal jQuery loading in all header.php

	= 1.0.2 - June 16 2019 =
		* Bug fixes
		* Updating the readme.txt
		* Deleting the cookie consent

	= 1.0.1 - June 1 2019 =
		* Bug fixes
		* Adding header-blog-logo-center.php
		* Adding header-blog-logo-left.php

	= 1.0.0 - April 12 2019 =
		* Initial release


== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)

* Bootstrap https://getbootstrap.com/docs/4.0/about/license/
* WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker
* jQuery https://jquery.org/license/
* Cookie Consent Script by Klaus Hartl, MIT License https://github.com/js-cookie/js-cookie
* Comments Section Script by wp-bootstrap-starter https://github.com/afterimagedesigns/wp-bootstrap-starter
* Google Fonts https://developers.google.com/fonts/faq
* Font Awesome https://fontawesome.com/license/free
* Ajax add to cart https://quadmenu.com/add-to-cart-with-woocommerce-and-ajax-step-by-step/


== Documentation ==

https://bootscore.me/category/documentation/