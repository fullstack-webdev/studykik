=== WP Maintenance Mode ===
Contributors: Designmodo, GeorgeJipa
Plugin Name: WP Maintenance Mode
Plugin URI: http://designmodo.com/
Author: Designmodo
Author URI: http://designmodo.com/
Tags: maintenance mode, admin, administration, unavailable, coming soon, multisite, landing page, under construction, contact form, subscribe, countdown
Requires at least: 3.5
Tested up to: 4.0.0
Stable tag: 2.0.3
License: GPL-2.0+

Adds a splash page to your site that lets visitors know your site is down for maintenance. It's perfect for a coming soon page.

== Description ==

Add a maintenance page to your blog that lets visitors know your blog is down for maintenance, or add a coming soon page for a new website. User with admin rights gets full access to the blog including the front end.

Activate the plugin and your blog is in maintenance-mode, works and only registered users with enough rights can see the front end. You can use a date with a countdown timer for visitor information or set a value and unit for information. 
Also works with WordPress Multisite installs (each blog from the network has it's own maintenance settings).

= Features =

* Fully customizable (change colors, texts and backgrounds);
* Subscription form (export emails to .csv file);
* Countdown timer (remaining time);
* Contact form (receive emails from visitors);
* Coming soon page;
* Landing page templates;
* WordPress multisite;
* Responsive design;
* Social media icons;
* Works with any WordPress theme;
* SEO options;
* Exclude URLs from maintenance.

= Bugs, technical hints or contribute =

Please give us feedback, contribute and file technical bugs on [GitHub Repo](https://github.com/Designmodocom/WP-Maintenance-Mode).

= Credits =
Developed by [Designmodo](http://designmodo.com)

WordPress Theme: [Startup Framework for WordPress](http://designmodo.com/startup-wordpress/)

== Installation ==

1. Unpack the download package
2. Upload all files to the `/wp-content/plugins/` directory, include folders
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Go to `Settings` page, where you can change what settings you need (pay attention to **Exclude** option!)

== Screenshots ==

1. Maintenance Mode example
2. Maintenance Mode example #2
3. Contact form
4. Dashboard General settings
5. Dashboard Design settings
6. Dashboard Modules settings

== Frequently Asked Questions ==

= How to use plugin filters = 
See [GitHub Repo] (https://github.com/Designmodocom/WP-Maintenance-Mode) FAQ.

= Cache Plugin Support =
WP Maintenance Mode can be unstable due the cache plugins, we recommend to deactivate any cache plugin when maintenance mode is active.

= Exclude list =
If you change your login url, please add the new slug (url: http://domain.com/newlogin, then you should add: newlogin) to Exclude list from plugin settings -> General Tab.

== Changelog ==

= 2.0.3 (07/10/2014) =
* WP_Super_Cache issue was fixed
* fixed "Subscribe" button issue on Safari mobile
* fixed color of subscribe-success message (same color as subscribe_text)
* "Social networks" module edits: settings for links target + a new social network: linkedin
* new module "Google Analytics"
* loginform shortcode reintroduced
* dashboard link on maintenance page reintroduced
* the content editor accepts new css inline properties: min-height, max-height, min-width, max-width. Use them wisely! :)
* Settings & sidebar view + old translation files edited
* Update from old version 1.x to 2.x issue was fixed
* Translate on activation issue was fixed
* de_DE translation by Frank B??ltge (http://bueltge.github.io/)
* pt_PT translation (100% translated) by Pedro Mendon??a (http://www.pedromendonca.pt)
* ru_RU translation (100% translated) by affectiosus (https://github.com/affectiosus)
* nl_NL translation by dhunink (https://github.com/dhunink)
* es_ES translation (100% translated) by Erick Ruiz de Chavez (http://erickruizdechavez.com/)
* fr_FR translation by Florian TIAR (https://github.com/Mahjouba91)
* pt_BR translation by Jonatas Ara??jo (http://www.designworld.com.br/)
* sv_SE translation by Andr??as Lundgren (http://adevade.com/)

= 2.0.2 (04/09/2014) =
* Removed "Author Link" option from General
* Countdown - save details fix

= 2.0.1 (02/09/2014) =
* Reintroduced some deprecated actions from old version (but still available in next 4 releases, after that will be removed) and replaced with new ones:
- `wm_head` -> `wpmm_head`
- `wm_footer` -> `wpmm_footer`
* Multisite settings link fix
* WP_Maintenance_Mode: init (array checking for custom_css arrays, move delete cache part into a helper, etc.), add_subscriber, send_contact, redirect fixes & optimizations 
* WP_Maintenance_Mode_Admin: save_plugin_settings fixes, delete_cache (new method)
* Settings & Maintenance views fixes
* Readme.txt changes

= 2.0.0 (01/09/2014) =
* Changed design and functionality, new features
* Changed multisite behaviour: now you can activate maintenance individually (each blog from the network has it's own maintenance settings) 
* Removed actions: `wm_header`, `wm_footer`, `wm_content`
* Removed filters: `wm_header` 
* Removed [loginform] shortcode
* Some filters are deprecated (but still available in next 4 releases, after that will be removed) and replaced with new ones:
- `wm_heading` -> `wpmm_heading`, 
- `wp_maintenance_mode_status_code` -> `wpmm_status_code`
- `wm_title` -> `wpmm_meta_title`
- `wm_meta_author` -> `wpmm_meta_author`
- `wm_meta_description` -> `wpmm_meta_description`
- `wm_meta_keywords` -> `wpmm_meta_keywords`
* Added new filters:
- `wpmm_backtime` - can be used to change the backtime from page header
- `wpmm_meta_robots` - can be used to change `Robots Meta Tag` option (from General)
- `wpmm_text` - can be used to change `Text` option (from Design > Content)
- `wpmm_scripts` - can be used to embed new javascripts files
- `wpmm_styles` - can be used to embed new css files
- `wpmm_search_bots` - if you have `Bypass for Search Bots` option (from General) activated, it can be used to add new bots (useragents)
* Removed themes and now we have a "Design" & "Modules" tabs, where the look and functionality of the maintenance page can be changed as you need

= 07/07/2014 =
* Switch to new owner, contributor

= 1.8.11 (07/25/2013) =
* Fixes for php notices in scrict mode
* Alternative for check url, if curl is not installed

= 1.8.10 (07/18/2013) =
* Add check for urls, Performance topics
* Change default setting of 'Support Link' to false
* Fix network settings php notices

= 1.8.9 (06/20/2013) =
* Allow empty header, title, heading string
* Small code changes
* Add Support function
* Remove preview, will include later in a new release with extra settings page

= 1.8.8 (06/05/2013) =
* Fix path to localized flash content
* Fix preview function
* Add ukrainian translation
* Add czech translation
* Fix exclude function for IP
* Security fix for save status via Ajax

= 1.8.7 (04/07/2013) =
* Add RTL support for splash page
* Add Filter Hook `wp_maintenance_mode_status_code` Status Code; default is 503
* Add support for custom splash page; leave a file with this name `wp-maintenance-mode.php`  in the wp-content; the plugin use this file
  The plugin checks in `WP_CONTENT_DIR . '/wp-maintenance-mode.php'`
* Small minor changes
* Add filter for more date on splash page

= 1.8.6 (02/22/2013) =
* Remove log inside console for JS
* Add support for time inside the countdown
* Add filter hook `wm_meta_author`for the meta data author
* Add filter hook `wm_meta_description` for custom description
* Add filter hook `wm_meta_keywords`for custom meta keys

= 1.8.5 (01/24/2013) =
* Added new settings for hide, view notices about the active maintenance mode
* Changes on source, codex
* Fix PHP Notices [Support Thread](http://wordpress.org/support/topic/error-message-in-settings-1)
* Change default settings, added ajax
* Fix Preview function
* Fix uninstall in WPMU
* Small updates on styles for login form

= 1.8.4 (12/06/2012) =
* Fix for include JS in frontend to use countdown
* Small mini fix for a php notice
* Add charset on spalsh page for strange databases
* Enhanced default exclude adresses
* Add shortcode `[loginform]` for easy use a login form in splash page
* Test with WordPress 3.5
 
= 1.8.3 =
* Fix for the forgotten update of JS-files; slow SVN :(
* Minor Fixes

= 1.8.2 =
* Add different access for Frontend and Backend
* Add Rewrite after Login for Frontend Access
* Different small changes
* Test for WP 3.5

= 1.8.1 =
* Add option for value of robots meta tag
* Add option for optional admin login

= 1.8.0 =
* Include all scripts in backend via function
* Update datepicker and countdown js
* Supportet IP as exclude for see the frontend
* Add support for flish cache od WP Super Cache and W3 Total Cache plugins
* Fix for changes in WP 3.3 Multisite

= 1.7.1 (12/05/2011) =
* fix for WP smaller 3.2* on Network

= 1.7.0 (12/02/2011) =
* add functionalities to use in WP Multisite
* remove message in header, current is not fixed the ticked in core and the message on Admin Bar an Notice is enough
* check on WP 3.3RC1

= 1.6.10 (08/30/2011) =
* add hint in Admin Bar, if active
* small changes for WP Codex

= 1.6.9 (06/13/2011) =
* Small fix for empty string on custom design

= 1.6.8 (04/05/2011) =
* Small changes on check for datepicker
* Fix for Design monster

= 1.6.7 (01/05/2011) =
* Bugfix: new check for files for different themes; hope this fix the server errors
* Bugfix: fix add default settings
* Maintenance: different changes on the syntax
* Feature: add check for Super Admin on WP Multisite; has allways the rights for access
* Feature: now it is possible to exclude feed from maintenance mode
* Maintenance: check with 3.0.4 and 3.1-RC2
* Maintenance: update language file: .pot, de_DE
* Bugfix: JavaScript error on Bulk Actions on plugins fixed
* Maintenance: fix all notice, if set no values

= 1.6.6. (10/09/2010) =
* Maintenance: many changes on the code; $locale and hook in side frontend
* Maintenance: change attribute_escaped to esc_attr with custom method for WP smaller 2.8
* Maintenance: Update german language files
* Feature: Shortcodes is now possible in the "Text" option
* Feature: no cache header rewrite

= 1.6.5 (09/16/2010) =
* add new design "Chemistry" by [elmastudio.de](http://www.elmastudio.de/ "elmastudio.de")
* changes for include methods od class for preview
* changes the possibility for include of language specific flash files

= 1.6.4 (09/13/2010) =
* add preview functions
* bugfix for list in wp-admin/plugins.php
* remove datepicker.regional - dont work fine
* different small changes
* new language file .pot
* add flash file and change on plugin for style "Animate" for spanish language

= 1.6.3 (07/27/2010) =
* bugfix to include stylesheet on maintenance mode message

= 1.6.2 (07/08/2010) =
* add functions for hint in the new UI of WP 3.0
* add more WP Codex standard source
* fix strings in the language and languages files
* add datetimepicker-de

= 1.6.1 (06/18/2010) =
* fix a problem with https://; see [Ticket #13941](http://core.trac.wordpress.org/ticket/13941)

= 1.6 (05/17/2010) =
* bugfix for exclude sites

= 1.5.9 (05/07/2010) =
* change different points
* add possibility to wotk with MySQLDumper

= 1.5.8 (21/03/2010)=
* fix exclude error
* add textareas for heading and header fields

= 1.5.7 (03/18/2010) =
* block admin-area via role
* add message for registered users with not enough rights
* add message on login-page
* different changes

= 1.5.6 (02/25/2010) =
* changes on css, site.php and different syntax on the plugin

= 1.5.5 (02/23/2010) =
* SORRY, small bug for the url to jQuery

= 1.5.4 (02/23/2010) =
* add time for countdown
* changes for WP 3.0
* changees on rights to see frontend

= 1.5.3 (01/05/2010) =
* Fix for JavaScript with WordPress 2.9
* Add new custom fields for fronted: title, header, heading
* Fix for setting userrole to see frontend
* Change laguage files

= 1.5.2 (01/04/2010) =
* add user-role setting
* correctly the de_DE language file

= 1.5.1 (10/04/2009) =
* add small fix
* add language files (en_ES, ro_RO)

= 1.5.0 (09/28/2009) =
* add countdown
* change options
* change default options
* add field for own adress to excerpt of the maintenance mode
* etc.

= 1.4.9 (07/09/2009) =
* also ready for WordPress 2.6
* add romanian language files
* add italian language file by [Gianni Diurno](http://gidibao.net/ "Gianni Diurno")

= 1.4.8 (03/09/2009) =
* add design "Damask" by [Fabian Letscher](http://fabianletscher.de/ "Fabian Letscher")
* add design "Lego" by [Alex Frison](http://www.afrison.com/ "Alex Frison")

= 1.4.7 (26/08/2009) =
* change doc-type to utf-8 without BOM

= v1.4.6 (24/08/2009) =
* add design "Animate (Flash)" by [Sebastian Schmiedel](http://www.cayou-media.de/ "Sebastian Schmiedel")
* add new hook for add content `wm_content` to include flash on content
* add frensh language files

= v1.4.5 (19/08/2009) =
* fix html string in text on frontend
* add design "Paint" by [Marvin Labod](http://bugeyes.de/ "Marvin Labod")
* add turkey language files

= v1.4.4 (18/08/2009) =
* add design "Chastely" by [Florian Andreas Vogelmaier](http://fv-web.de/ "Florian Andreas Vogelmaier")
* add design "Only Typo" by [Robert Pfotenhauer](http://krautsuppe.de/ "Robert Pfotenhauer")

= v1.4.3 (13/08/2009) =
* add option for the Text
* add option for active maintenance mode
* add design "The FF Error" by [Thomas Meschke](http://www.lokalnetz.com/ "Thomas Meschke")
* add design "Monster" by [Sebastian Sebald](http://www.backseatsurfer.de "Sebastian Sebald")

= v1.4.2 (10/08/2009) =
* add design "The Sun" by [Nicki Steiger](http://mynicki.net/ "Nicki Steiger")
* now it is possible to add own css and add in settings the url to the css-file

= v1.4.1 (07/08/2009) =
* small html-fix

= v1.4 (06/08/2009) =
* complety new code
* options menu
* new designs by [David Hellmann](http://www.davidhellmann.com/ "David Hellmann")
