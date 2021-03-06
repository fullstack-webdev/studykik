=== Facebook Conversion Pixel ===
Contributors: kellenmace
Donate link: n/a
Tags: facebook, conversion, pixel, facebook pixel, facebook conversion, conversion pixel, code, add, insert
Requires at least: 3.0
Tested up to: 4.3.1
Stable tag: 1.3.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

 == Description ==
Facebook's [recommended plugin](https://www.facebook.com/help/328988437301229 "Facebook Ads Troubleshooting") for inserting Facebook Conversion Pixel code into Posts, Pages, or any other post types. Conversion tracking helps businesses measure the return on investment of their Facebook Ads by reporting on the actions people take after the ads are served.

This brief video shows how to use this plugin to easily insert conversion pixel code into the pages of your site:
[youtube https://www.youtube.com/watch?v=iTUO35AUnKg]

Features:

- Supports inserting Facebook Conversion Pixel codes into Posts, Pages, and all other custom post types that you may have on your site

- Provides a plugin options page where you can choose to enable the plugin for certain post types, and disable it for others. For example, you could choose to have the Facebook Conversion Pixel box appear when editing any of your Posts, but never appear when you're editing Pages, or vice versa.

 == Installation ==
1. Download the plugin
2. Upload to "/wp-content/plugins" folder or install through WordPress Admin Dashboard
3. Activate the Plugin
4. Go to Settings > Facebook Conversion Pixel and check the boxes to enable/disable the plugin for each of your post types, then save your settings

== Frequently Asked Questions ==

= How do I get a Conversion Tracking Pixel code? =

Click <a href="https://www.facebook.com/ads/manage">Here</a> and make sure you are logged into Facebook. Then on the left-hand side, click "Power Editor," and in the top right you'll see a button that reads Create Conversion Pixel. Copy the JavaScript code that is displayed.

= How do I insert the Facebook Conversion Pixel code on a certain page or post? =

In the WordPress Admin Dashboard, begin editing the Post, Page, or other post type that you want to change. Toward the bottom of the editor page, you'll see a "Facebook Conversion Pixel Code" box. Paste your Facebook Conversion Pixel JavaScript code into the box, make sure the "Insert Code" checkbox is checked, then save the post/page. Your code will now be inserted into that post/page every time it is loaded.

= How do I show/hide the Facebook Conversion Pixel field on certain post types? =

From the WordPress Admin Dashboard, go to Settings > Facebook Conversion Pixel and check the boxes to enable/disable the plugin for each of your post types, and save your settings. Only enable the post types on which you need to insert conversion pixel code, and leave the rest unchecked. You must have a user role of Administrator to change this.

= I have enabled the correct post type, but I still don't see the the Facebook Conversion Pixel field. Why? =

When editing a post or page, click the Screen Options button in the upper-right corner of the page, and make sure "Facebook Conversion Pixel Code" is checked. If it isn't, then the plugin's fields won't be visible.

= How can I tell if it's working? =

To verify that the pixel is working correctly, test it by navigating to the web page you put the pixel on. If it's working, the pixel will send that information back to Facebook, and you'll be able to view it in your Ads Manager.

== Changelog ==

= 1.0 =
* Initial release

= 1.1 =
* Changed plugin so that the conversion pixel field does not appear on newly added post types until the user chooses to enable the plugin for them.
* Excluded Revision and Navigation Menu post types from the plugin options page

= 1.2 =
* Updated plugin to use new CMB2 version of Custom Metaboxes and Fields library

= 1.3 =
* Updated CMB2 to latest version, cleaned up code in main plugin file, avoiding a potential php warning

= 1.3.1 =
* converted special HTML entities in database back to characters before output

= 1.3.2 =
* internationalized text strings for translation
* heightened security related to when conversion pixel code is output to the page
* made it so that only administrators can modify plugin settings

= 1.3.3 =
* fixed bug related to this plugin interfering with admin ajax requests

= 1.3.4 =
* fixed bug related to this plugin interfering with further admin ajax requests

== Screenshots ==
1. Paste in your Facebook Conversion Pixel code and check the Insert Code checkbox to insert it.

2. Enable/disable the plugin on Page, Post, or any other post type as desired on the plugin options page.