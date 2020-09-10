=== bootScore ===

Contributors: craftwerk
Tags: featured-images, threaded-comments, translation-ready

Requires at least: 4.5
Tested up to: 5.5
Requires PHP: 5.6
Stable tag: 3.3.0
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Bootscore WordPress Theme, Copyright 2019 - 2020 Bastian Kreiter.


=== Plugin Name ===
Contributors: craftwerk

A starter theme called Bootscore.


== Description ==

A powerful Bootstrap WordPress Starter Theme


== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.


== Documentation ==

https://bootscore.me/category/documentation/


== Frequently Asked Questions ==

= Does this theme support any plugins? =

Bootscore includes support for Infinite Scroll in Jetpack.


== Changelog ==

    = 3.3.0 - September 10 2020 =
    
        * Close Offcanvas, Dropdown Menu, Collapsed open Navbar and opac on window resize
        * Removes <p> from excerpt is now pluggable (functions.php)
        * Removes [...] from excerpt is now pluggable (functions.php)

    = 3.2.9 - August 19 2020 =
    
        * Updated cart.php
        * Added icons to alerts.

    = 3.2.8 - August 12 2020 =
    
        * Updated to Bootstrap 4.5.2

    = 3.2.7 - August 05 2020 =
    
        * Updated to Bootstrap 4.5.1

    = 3.2.6 - July 20 2020 =
    
        * Updated to Bootstrap 4.5
        * Removed samples bootstrap.min-sketch.css and bootstrap.min-pastell.css
        * Updated to fontawesome-free-5.14.0

    = 3.2.5 - July 09 2020 =
    
        * Updated form-add-payment-method.php and single-product-reviews.php

    = 3.2.4 - July 06 2020 =
    
        * Fixed Gravatar image in author.php

    = 3.2.3 - June 18 2020 =
    
        + Changed all get_stylesheet_template_uri to get_stylesheet_directory_uri. Now you can simple replace logo and favicons on child theme by place a copy of the img folder and replace your image files.
        * Amount of posts/products in category is pluggable now
        * Changed number of posts per page in functions.php from 12 to 24
        * CSS improvements

    = 3.2.2 - May 30 2020 =
    
        * Cart empty message alert

    = 3.2.1 - May 29 2020 =
    
        * Removed bug with privacy policy translation link in cookie consent
        * Removed Offcanvas Ajax Cart from woocommerce-functions.php. Offcanvas Cart uses mini-cart.php to load the widget instead.

    = 3.2.0 - May 26 2020 =
    
        * Breadcrumb and WooCommerce breadcrumb are pluggable now
        * Styled WooCommerce buttons
        * Bug fixes

    = 3.1.9 - May 24 2020 =
    
        * Edited mini-cart.php and offcanvas cart in header-woocommerce.php
        * Bug fixes

    = 3.1.8 - May 20 2020 =
    
        * Widgets are pluggable now to extend ore remove widget areas in child-theme
        * The WooCommerce Ajax Mini Cart is now pluggable to overwrite function in child-theme
        * Moved cart icon from woocommerce-functions.php to header-woocommerce.php

    = 3.1.7 - May 18 2020 =
    
        * Removed h1 - h6 and display-1 - display-4 font-weight: 700; 
        * Removed pre installed Google Roboto font
        * Changed cookie consent link "More Information" to WordPress default privacy slug "privacy-policy" and "datenschutzerklaerung" in footer.php. Translate the link 

    = 3.1.6 - May 15 2020 =
    
        * Removed theme_header_overlay.css
        * Removed theme_header_static.css
        * Removed header-woocommerce-large-search.php
        * Added top-footer widget
        * Removed hide admin bar in frontend
        * Changed col into col-md-8 in page.php and single.php to main. Made problems with too wide content like tables etc. The sidebar was pushed down. Use No Sidebar template instead if you do not want to show a sidebar.
        * Removed id from searchform
        * Changed footer col
        * Set body font to !important to overwrite the default bootstrap.min.css
        * Removed page transition
        * Edited form-billing.php template in /woocommerce/checkout/
        * Edited form-shipping.php template in /woocommerce/checkout/

    = 3.1.5 - May 09 2020 =
    
        * Edited form-reset-password.php in /woocommerce/myaccount/
        * Edited order-again.php template in /woocommerce/order/
        * Edited order-downloads.php template in /woocommerce/order/

    = 3.1.4 - May 07 2020 =
    
        * Allow HTML in author bio and category description
        * Open comment author website link in new tab, comment-list.php
        * Removed README.md

    = 3.1.3 - May 06 2020 =
    
        * Updated woocommerce/myaccount/form-login.php
        * Removed google-analytics.js. Paste GA code in footer widget instead.
        * Adding excerpt to pages
        * Bug fixes

    = 3.1.2 - April 29 2020 =
    
        * Bug fixes

    = 3.1.1 - April 25 2020 =
    
        * Adjusted colors WooCommerce additional tab table

    = 3.1.0 - April 09 2020 =
        
        * Added author.php
        * Updated shipping-calculator.php
        * Added overlay spinner loader to offcanvas cart

    = 3.0.9 - April 07 2020 =
        
        * Added spinner loader to offcanvas cart
        * Hide Offcanvas cart-footer when cart is empty 
        * Removed Contactform 7 support and made a Plugin of it
        * Changed spinner-grow to spinner-border (iOS not working)

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


