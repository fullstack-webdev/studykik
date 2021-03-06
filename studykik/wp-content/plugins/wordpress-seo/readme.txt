=== Yoast SEO ===
Contributors: joostdevalk
Donate link: https://yoast.com/
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html
Tags: SEO, Google, xml sitemap, google search console, google webmaster tools, canonical, meta description, meta title, noindex, snippet preview, redirects, focus keyword, seo copywriting, content marketing
Requires at least: 4.2
Tested up to: 4.5
Stable tag: 3.1.2

Improve your WordPress SEO: Write better content and have a fully optimized WordPress site using Yoast SEO plugin.

== Description ==

WordPress out of the box is already technically quite a good platform for SEO, this was true when Joost wrote his original [WordPress SEO](https://yoast.com/articles/wordpress-seo/) article in 2008 (and updated every few months) and it's still true today, but that doesn't mean you can't improve it further! This plugin is written from the ground up by Joost de Valk and his team at [Yoast](https://yoast.com/) to improve your site's SEO on *all* needed aspects. While this [Yoast SEO plugin](https://yoast.com/wordpress/plugins/seo/) goes the extra mile to take care of all the technical optimization, more on that below, it first and foremost helps you write better content.  Yoast SEO forces you to choose a focus keyword when you're writing your articles, and then makes sure you use that focus keyword everywhere.

> <strong>Premium Support</strong><br>
> The Yoast team does not always provide active support for the Yoast SEO plugin on the WordPress.org forums. One on one email support is available to people who bought the [Premium Yoast SEO plugin](https://yoast.com/wordpress/plugins/seo-premium/) only.
> Note that the Premium SEO plugin has several extra features too so it might be well worth your investment, including the option to have multiple focus keywords and a redirect manager!
>
> You should also check out the [Yoast Local SEO](https://yoast.com/wordpress/plugins/local-seo/), [Yoast News SEO](https://yoast.com/wordpress/plugins/news-seo/) and [Yoast Video SEO](https://yoast.com/wordpress/plugins/video-seo/) extensions to Yoast SEO, these of course come with support too.

> <strong>Bug Reports</strong><br>
> Bug reports for Yoast SEO are [welcomed on GitHub](https://github.com/Yoast/wordpress-seo). Please note GitHub is _not_ a support forum and issues that aren't properly qualified as bugs will be closed.

= Write better content with Yoast SEO =
Using the snippet preview you can see a rendering of what your post or page will look like in the search results, whether your title is too long or too short and your meta description makes sense in the context of a search result. This way the plugin will help you not only increase rankings but also increase the click through for organic search results.

= Page Analysis =
The Yoast SEO plugins [Page Analysis](https://yoast.com/content-seo-wordpress-linkdex/) functionality checks simple things you're bound to forget. It checks, for instance, if you have images in your post and whether they have an alt tag containing the focus keyword for that post. It also checks whether your posts are long enough, if you've written a meta description and if that meta description contains your focus keyword, if you've used any subheadings within your post, etc. etc.

The plugin also allows you to write meta titles and descriptions for all your category, tag and custom taxonomy archives, giving you the option to further optimize those pages.

Combined, this plugin makes sure that your content is the type of content search engines will love!

= Technical WordPress Search Engine Optimization =
While out of the box WordPress is pretty good for SEO, it needs some tweaks here and there. This Yoast SEO plugin guides you through some of the settings needed, for instance by reminding you to enable pretty permalinks. But it also goes beyond that, by automatically optimizing and inserting the meta tags and link elements that Google and other search engines like so much:

= Meta & Link Elements =
With the Yoast SEO plugin you can control which pages Google shows in its search results and which pages it doesn't show. By default, it will tell search engines to index all of your pages, including category and tag archives, but only show the first pages in the search results. It's not very useful for a user to end up on the third page of your "personal" category, right?

WordPress itself only shows canonical link elements on single pages, Yoast SEO makes it output canonical link elements everywhere. Google has recently announced they would also use `rel="next"` and `rel="prev"` link elements in the `head` section of your paginated archives, this plugin adds those automatically, see [this post](https://yoast.com/rel-next-prev-paginated-archives/ title="rel=next & rel=prev for paginated archives") for more info.

= XML Sitemaps =
Yoast SEO plugin has the most advanced XML Sitemaps functionality in any WordPress plugin. Once you check the box, it automatically creates XML sitemaps and notifies Google & Bing of the sitemaps existence. These XML sitemaps include the images in your posts & pages too, so that your images may be found better in the search engines too.

These XML Sitemaps will even work on large sites, because of how they're created, using one index sitemap that links to sub-sitemaps for each 1,000 posts. They will also work with custom post types and custom taxonomies automatically, while giving you the option to remove those from the XML sitemap should you wish to.

Because of using [XSL stylesheets for these XML Sitemaps](https://yoast.com/xsl-stylesheet-xml-sitemap/), the XML sitemaps are easily readable for the human eye too, so you can spot things that shouldn't be in there.

= RSS Optimization =
Are you being outranked by scrapers? Instead of cursing at them, use them to your advantage! By automatically adding a link to your RSS feed pointing back to the original article, you're telling the search engine where they should be looking for the original. This way, the Yoast SEO plugin increases your own chance of ranking for your chosen keywords and gets rid of scrapers in one go!

= Breadcrumbs =
If your theme is compatible, and themes based on Genesis or by WooThemes for instance often are, you can use the built-in Breadcrumbs functionality. This allows you to create an easy navigation that is great for both users and search engines and will support the search engines in understanding the structure of your site.

Making your theme compatible isn't hard either, check [these instructions](https://yoast.com/wordpress/plugins/breadcrumbs/).

= Edit your .htaccess and robots.txt file =
Using the built-in file editor you can edit your WordPress blogs .htaccess and robots.txt file, giving you direct access to the two most powerful files, from an SEO perspective, in your WordPress install.

= Social Integration =
SEO and Social Media are heavily intertwined, that's why this plugin also comes with a Facebook OpenGraph implementation and will soon also support Google+ sharing tags.

= Multi-Site Compatible =
The Yoast SEO plugin, unlike some others, is fully Multi-Site compatible. The XML Sitemaps work fine in all setups and you even have the option, in the Network settings, to copy the settings from one blog to another, or make blogs default to the settings for a specific blog.

= Import & Export functionality =
If you have multiple blogs, setting up plugins like this one on all of them might seem like a daunting task. Except that it's not, because what you can do is simple: you set up the plugin once. You then export your settings and simply import them on all your other sites. It's that simple!

= Import functionality for other WordPress SEO plugins =
If you've used All In One SEO Pack or HeadSpace2 before using this plugin, you might want to import all your old titles and descriptions. You can do that easily using the built-in import functionality. There's also import functionality for some of the older Yoast plugins like Robots Meta and RSS footer.

Should you have a need to import from another SEO plugin to Yoast SEO or from a theme like Genesis or Thesis, you can use the [SEO Data Transporter](http://wordpress.org/extend/plugins/seo-data-transporter/) plugin, that'll easily convert your SEO meta data from and to a whole set of plugins like Platinum SEO, SEO Ultimate, Greg's High Performance SEO and themes like Headway, Hybrid, WooFramework, Catalyst etc.

Read [this migration guide](https://yoast.com/all-in-one-seo-pack-migration/) if you still have questions about migrating from another SEO plugin to Yoast SEO.

= Yoast SEO Plugin in your Language! =
Currently a huge translation project is underway, translating Yoast SEO in as much as 24 languages. So far, the translations for French and Dutch are complete, but we still need help on a lot of other languages, so if you're good at translating, please join us at [translate.yoast.com](http://translate.yoast.com).

= News SEO =
Be sure to also check out the premium [News SEO module](https://yoast.com/wordpress/plugins/news-seo/) if you need Google News Sitemaps. It tightly integrates with Yoast SEO to give you the combined power of News Sitemaps and full Search Engine Optimization.

= Further Reading =
For more info, check out the following articles:

* The [Yoast SEO Knowledgebase](http://kb.yoast.com/category/42-wordpress-seo).
* [WordPress SEO - The definitive Guide by Yoast](https://yoast.com/articles/wordpress-seo/).
* Once you have great SEO, you'll need the [best WordPress Hosting](https://yoast.com/articles/wordpress-hosting/).
* The [Yoast SEO Plugin](https://yoast.com/wordpress/plugins/seo/) official homepage.
* Other [WordPress Plugins](https://yoast.com/wordpress/plugins/) by the same author.
* Follow Yoast on [Facebook](https://facebook.com/yoast) & [Twitter](http://twitter.com/yoast).

= Tags =
seo, SEO, Yoast SEO, google, meta, meta description, search engine optimization, xml sitemap, xml sitemaps, google sitemap, sitemap, sitemaps, robots meta, rss, rss footer, yahoo, bing, news sitemaps, XML News Sitemaps, WordPress SEO, WordPress SEO by Yoast, yoast, multisite, canonical, nofollow, noindex, keywords, meta keywords, description, webmaster tools, google webmaster tools, seo pack

== Installation ==

1. Upload the `wordpress-seo` folder to the `/wp-content/plugins/` directory
1. Activate the Yoast SEO plugin through the 'Plugins' menu in WordPress
1. Configure the plugin by going to the `SEO` menu that appears in your admin menu

== Frequently Asked Questions ==

You'll find the [FAQ on Yoast.com](https://yoast.com/wordpress/plugins/seo/faq/).

== Screenshots ==

1. The Yoast SEO plugin general meta box. You'll see this on edit post pages, for posts, pages and custom post types.
2. Some of the sites using this Yoast SEO plugin.
3. The Yoast SEO settings for a taxonomy.
4. The fully configurable XML sitemap for Yoast SEO.
5. Easily import SEO data from All In One SEO pack and HeadSpace2 SEO.
6. Example of the Page Analysis functionality.
7. The advanced section of the Yoast SEO meta box.

== Changelog ==

= 3.1.2 =

Release Date: March 23rd, 2016

* Enhancements:
	* Makes sure the permalink on the frontend als makes use of the primary category if one has been selected.

* Bugfixes:
	* Fixes a compatibility issue with the upcoming WordPress 4.5, where the Yoast SEO metabox and columns were no longer shown on taxonomy and term edit pages.
	* Fixes a bug where the default category that was shown in the breadcrumbs was no longer the most deeply nested one.
	* Fixes a bug where the file editor could be accessed by non admin users. Thanks [J??rn Lund](https://github.com/mcguffin) for the patch!
	* Fixes a JS error on the post edit page that was caused when the WP slugeditor wasn't present.
	* Fixes an issue where our indexability check would fail on installs with WordFence that have the "block fake Google crawlers" setting enabled.

= 3.1.1 =

Release Date: March 8th, 2016

* Bugfixes:
	* Fixes a bug where part of the Yoast SEO metabox was no longer translated.
	* Fixes a bug where the post slug would be overwritten with the post ID in case a post was autosaved and did not have a title yet.

= 3.1 =

Release Date: March 1st, 2016

* Features:
	* Added an interface to select a primary category for a post, which are used in the post's breadcrumbs and have a few other nice SEO advantages.
	* Added SEO score column to the taxonomy overviews.

* Enhancements:
	* Replaces all checkboxes and radio buttons on settings pages with styled toggles.
	* Adds a new interface for the snippet preview which addresses most of the known UX issues:
		* To clarify how the snippet preview can be edited, we've added an 'edit' button.
		* Many users were looking for the "SEO title" and "Meta description" input fields. Those have been reintroduced and can be edited by clicking the edit button.
		* We've gotten rid of the horribly inaccessible contenteditable elements and moved back to labeled input elements.
		* The progress indicator for both SEO title and meta description has returned in the form of progress bars underneath the input elements.
		* We've made a clear distinction between the snippet preview and the snippet editor and have tried to clearly signify which input fields affect which parts of the snippet preview.
		* We've made sure both preview and snippet editor handle "%%" variables well. In the editor we show the variables and in the preview we render them.
		* We've made sure templates that are set under "Titles & Metas" are well reflected in the snippet preview and editor. When they are set, they are shown as placeholder text in the input fields.
		* The progress bars also take into account templates and "%%" variables, giving clearer indication if anything should still be added to the SEO title or meta description.
		* We've reintroduced behavior where a (generated) example meta description is made grey in the snippet preview to indicate that it's not been set.
	* Adds og:image:width and og:image:height metatags to ensure an image is properly rendered for a user the first time a page is shared on Facebook.
	* Includes a few minor performance improvements for the content analysis.
	* Slightly optimizes the way options are handled. We now only fetch the options we need.
	* Makes sure SEO scores for taxonomies are also taken into account when recalculating the SEO scores.
	* Updated the list of locales supported by Facebook.
	* Makes sure the notification to see the latest changes only pops up on major and minor version and is dismissible even if JavaScript is broken.
	* Corrected priority of gallery images in Twitter cards.
	* Added filters to allow filtering term and post content before it is sent to the recalculation tool for analysis.
	* Improved the way sitemaps are invalidated.
	* Duplicate content prevention / Crawl budget improvement: We now hide XML sitemaps for internal WP taxonomies like link category, nav menu and post format.
	* Removed all functionality related to Yahoo! directory, since it no longer exists...
	* Makes sure the post type archive link for the "Post" post type is not shown in the breadcrumbs.
	* Temporarily disabled all non-vital notifications until we come up with a more user-friendly way of dealing with them.


* Bugfixes:
	* Fixes a bug where the date was no longer shown in the snippet preview even when the option to show it was selected under "Titles & Metas".
	* Fixes a reported "property of non-object" notice that occured when no valid screen object was available. Thanks [Chris Jean](https://github.com/chrisbliss18) for the fix.
	* Fixes a bug where Google Search Console would display last_crawled and last_received dates in the wrong format.
	* Fixes a bug where the `wpseo_canonical` filter could still be overridden by an admin setting. This is no longer the case.
	* Fixes shorthand date formats for Open Graph tags.
	* Fixes a bug where calls to translate.yoast.com would fail because of issues with HTTPS.
	* Fixes a bug where the content analysis would not work properly anymore when switching multiple times between "text" and "visual" in tinyMCE.
	* Fixes a bug where the Yoast SEO metabox was no longer loaded on the Media edit page.
	* Fixes an "invalid argument warning" in the options. Thanks [Melvin Tercan](https://github.com/melvinmt) for fixing.
	* Fixes a bug where we were causing JS errors by hooking to erroneously on AjaxComplete. This solves multiple compatibility issues including the ones with "Advanced Custom Fields".
	* Fixes a bug where saving a nav menu item would cause unnecessary pings to search engines, also resulting in timeouts and long load times for saving menu's. Thanks [Ben Constable](https://github.com/BenConstable) for providing a fix.
	* Fixes memory issues caused by doing post counts with WP_Query. Thanks [Emre Erkan](https://github.com/karalamalar) for fixing.
	* Fixes a bug where sitemap caches were not properly cleared for sites that use external object caching.
	* Fixes a bug where stopwords were no longer stripped from the slug that was generated by WordPress.

= 3.0.7 =

Release Date: December 23rd, 2015

* Enhancements:
	* Removes email notifications for OnPage.org indexability check. It caused more issues than it solved.
	* Adds several UX improvements to the snippet editor, making it more clear it is editable.

= 3.0.6 =

Release Date: December 1st, 2015

* Bugfixes:
	* Fixes the recalculate tool that was broken with the Localized Flesch Reading ease change...

= 3.0.5 =

Release Date: December 1st, 2015

* Enhancements:
	* Made it possible to opt out from the OnPage.org indexability check.
	* Contains a few small performance enhancements in the Content Analysis.
	* Only includes Flesch Reading ease test when site language is set to English, since it doesn't really add value in other languages yet.

* Bugfixes:
	* Fixes a lot of issues with dismissible notices. Thanks [Craig Pearson](https://github.com/craigpearson) for writing the patch!
	* Fixes several issues with keyword recognition for keywords which contain punctuation.
	* Fixes an issue where keywords containing diacritics were not recognized in alt tags.

= 3.0.4 =

Release Date: November 25th, 2015

* Enhancement: Made the "Analyze entire site" button have better color contrast and resemble JetPack. Thanks [WPExplorer](https://github.com/wpexplorer) for the contribution.

* Bugfixes:
	* Fixes JS errors in combination with Give plugin, CMB2 Framework, ACF layout builder and any other plugin that replaces the editor with something else. Thanks a lot [Daniel Seripap](https://github.com/seripap) for fixing.
	* Fixes JavaScript error on post types without 'editor' capability. Thanks [Aaron Hipple](https://github.com/aaronhipple) for the fix and [Zvonko Bi??kup](https://github.com/codeforest) for testing.
	* Fixes a lot of text analysis issues for languages with non-latin scripts, including the "0% keyword density" issues.
	* Fixes an issue where html tags were not stripped properly from taxonomy descriptions for custom taxonomies.
	* Fixes possible "URI too long" errors when parsing shortcodes in the content before it is analyzed.


= 3.0.3 =

Release Date: November 19th, 2015

* Bugfixes:
	* Fixes a bug where the snippet preview was broken.

= 3.0.2 =

Release Date: November 19th, 2015

* Bugfixes:
	* Fixes a bug where disabling the visual editor caused our content analysis to break.
	* Fixes a bug where the content analysis would break on installs that replace tinyMCE with ckEditor. Currently only supports the html editor.
	* Fixes a bug where slug changes were not properly synchronized in the snippet preview.
	* Fixes a bug where long slugs could be broken by wrongful synchronization with the snippet preview.
	* Fixes a bug where digits were not analyzed well in the content, causing focus keywords or keyphrases with digits to no longer be matched.
	* Fixes a bug where the url in the snippet preview was not in line with permalink settings. Fixed for permalinks containing the post name.
	* Fixes a bug where focus keyphrases of more than two words would not be recognized properly in the content.
	* Fixes a bug where the translation files were corrupted causing the translations to no longer work.

* Enhancements:
	* Fixes caching problems. We've versioned file names for assets that have changed to circumvent caching strategies that consider preventing regular cache busting a good idea...

= 3.0.1 =

Release Date: November 18th, 2015

* Bugfixes:
	* Fixes a bug where users where getting error notifications about how their site was not indexable when in fact no check had been performed yet.
	* Fixes a few broken links to help docs about the OnPage.org integration.
	* Fixes an edgecase where the indexability check would go wrong for sites that filter the home url.
	* Fixes a bug where the admin email that was sent to report the current indexability status was not rendered as HTML.

= 3.0 =

Release Date: November 18th, 2015

* Features:
	* Adds realtime content analysis to the Yoast SEO metabox for all post types and taxonomies.
	* Adds a tool to recalculate all SEO scores using the new client side analysis.
	* Adds a content analysis plugin for parsing shortcodes before the content is analyzed. This means the snippet preview will now take the rendered content of shortcodes into account.
	* Adds a content analysis plugin for parsing replace vars before the content is analyzed, allowing templates set in the Yoast SEO admin to work everywhere.
	* Adds a weekly check if the homepage is indexable (in collaboration with [OnPage.org](https://en.onpage.org/lp/yoast/)).
	* Adds possibility to import titles, metas and settings from the WPSEO.de plugin.
	* Adds possibility to set Facebook (Opengraph), Twitter and Google+ metadata for taxonomies.

* Enhancements:
	* We've completely revised the UX of the Yoast SEO metabox. We've introduced multiple sections which in turn can contain one or more tabs.
	* Makes the Yoast SEO metabox on the taxonomy edit page the same as on the post edit page.
	* Makes sure the capability for the General Settings menu is also `wpseo_manage_options_capability`.
	* Adds a fix to the tour allowing for multiple plugins to use WP pointers at the same time.
	* Makes sure all Yoast SEO settings pages are also accessible through the WP admin bar.

* Bugfixes:
	* Fixes a bug where the `og:image` would not be set, even when a default image was available.
	* Fixes a bug where the links in the sitemap would 'randomly' change from https to http or the other way around (in very rare circumstances).
	* Fixes a bug where it was not possible to upload different images for different social media in the post metabox.
	* Fixes a bug where users would see the after-update notice, but were not allowed to visit the about page.
	* Fixes a bug where we were not properly splitting taxonomy metadata when a shared taxonomy term got split through a Cron job, props [Daniel Homer](https://github.com/danielhomer).

* Other notable changes:
	* Adds a JavaScript API for registering data modifications that is quite similar to `add_filter`/`apply_filters` in WordPress. Allows for filtering data before it is analyzed. See [YoastSEO.js](https://github.com/Yoast/YoastSEO.js).
    * Adds a JavaScript API for adding content analysis tests, see [YoastSEO.js](https://github.com/Yoast/YoastSEO.js).

* Because we moved the entire content analysis to JavaScript, we had to remove the following PHP filters:
	* `wpseo_pre_analysis_post_content`. Alternative: [Modifications API](https://github.com/Yoast/YoastSEO.js).
	* `wpseo_metadesc_length`. Functionality removed.
	* `wpseo_metadesc_length_reason`. Functionality removed.
	* `wpseo_body_length_score`. Alternative: [Content Checks API](https://github.com/Yoast/YoastSEO.js).
	* `wpseo_linkdex_results`. Alternative: [Content Checks API](https://github.com/Yoast/YoastSEO.js).
	* `wpseo_snippet`. Functionality removed.

= 2.3.5 =

Release Date: September 16th, 2015

* Bugfixes:
	* Fixes the Twitter image metatag that was invalidated after a recent API change by Twitter. Thanks [Andy Piper](https://github.com/andypiper) for notifying us.
	* Removes all tests directories from the release. Props [Edward Beckett](https://github.com/EdwardBeckett) for reporting.
	* Updated the minimum required version of WordPress to 4.0.

= 2.3.4 =

Release Date: August 6th, 2015

* Bugfixes:
	* Fixes a bug where the focus keyword test in the Yoast SEO metabox was broken as a regression of removing the autocomplete functionality.

= 2.3.3 =

Release Date: August 6th, 2015

* Removes the autocomplete functionality from the focus keyword field in the Yoast SEO metabox because Google is shutting down its autocomplete API [as of August 10th](http://googlewebmastercentral.blogspot.nl/2015/07/update-on-autocomplete-api.html).

* Enhancements:
	* Introduces a dismissible notice encouraging users to connect with Google Search Console.
	* Improves the dashboard widget to only show posts which are actually editable by the current user.
	* Makes the plugin conflict notices persistent and dismissible. Once dismissed, it will no longer be shown for the specific set of conflicting plugins the notice has been dismissed for.
	* Contains a few textual improvements.
	* Makes sure the counts are updated correctly and intuitively when marking a Search Console issue as fixed.

* Bugfixes:
	* Fixes a bug where current_user_can was called before init, props [Claudio Sanches](https://github.com/claudiosmweb).
	* Fixes a bug where the article:publisher metatag was also included on pages that were not of type 'article'.
	* Fixes a bug where the link to the list of posts with the same focus keyword was broken for focus keywords containing a space.
	* Fixes a bug where a h3 header was being closed with a h2 closing tag.
	* Fixes a bug where the Google Search Console issues table was giving errors on installs running on PHP 5.2.
	* Fixes a bug where the sitemap caches were no longer being cleared when running Yoast SEO in the upcoming 4.3 release of WordPress.

= 2.3.2 =

Release Date: July 23rd, 2015

* Bugfixes:
	* Fixes a bug where non-admin users were no longer able to update their profile with Yoast SEO active.
	* Fixes a bug where all labels in the Yoast SEO admin were bold.

= 2.3.1 =

Release Date: July 22nd, 2015

* Bugfixes:
	* Makes sure authors and editors cannot submit advanced metadata on a post when the advanced tab in the metabox has been disabled for them. Thanks Peter Allor from IBM for finding and reporting this issue.
	* Fixes a bug where upgrading to version 2.3 would occasionally cause WSOD's on both admin and frontend. We were unable to pinpoint the exact conflicting plugins and themes, but we are quite confident it was caused by us using, and others hooking into, WP_Query too early.

= 2.3 =

Release Date: July 21st, 2015

* Features:
	* Adds full integration with Google Search Console (formerly: Google Webmaster Tools). It is now possible to see all errors from Google straight in your WordPress install. If you have [Yoast SEO Premium](https://yoast.com/wordpress/plugins/seo-premium/#utm_source=wordpress-seo-config&utm_medium=textlink&utm_campaign=changelog), you'll even be able to fix those errors by redirecting the broken urls.
	* Adds a dashboard widget showing published posts' SEO scores. Thanks [Brandon Hubbard](https://github.com/bhubbard) for the idea!
	* Adds a customizer panel for Yoast SEO Breadcrumbs if breadcrumbs are enabled or the active theme has declared theme support for it. Props again to [Brandon Hubbard](https://github.com/bhubbard) for his awesome contribution.

* Enhancements:
	* Renames plugin from "WordPress SEO by Yoast" to "Yoast SEO".
	* Adds a warning advising to change the tagline, if a site still has the default WordPress tagline "just another WordPress site".
	* Changes the default columns visibility for the edit posts overview page. Only the SEO score column is now visible by default.
	* Contains several en_US string improvements, including a fix for a typo in the word "typos"... Thanks [Gary Jones](https://github.com/GaryJones) for redacting!
	* Adds a filter to allow filtering the content before analysis in the Twitter class, props [Pete Nelson](https://github.com/petenelson).
	* Adds a link to our knowledge base on how to retrieve a Facebook admin user ID.

* Bugfixes:
	* Fixes a bug where sitemaps for taxonomies with no eligible terms were still included and responded with 404 errors when visited.
	* Fixes a bug where breadcrumbs were wrongly nested on archive paginations, props [Filippo Buratti](https://github.com/fburatti).
	* Fixes a bug where the wrong separator was used after import/export.
	* Fixes a bug where XML Sitemaps query invalidation caused other queries to fail as well.
	* Fixes a bug where the wrong placeholder was being used for the search term string in the JSON+LD Search markup.
	* Fixes a bug where the link to the newsletter signup in the tour was broken by uncommunicated changes in Mailchimp.
	* Fixes a bug where the Edit Files settings page in the network admin was broken, props [Ajay D'Souza](https://github.com/ajaydsouza).
	* Fixes a broken link in the advanced tab of the Yoast SEO metabox to the titles and meta's settings.

* Other notable changes:
	* Removed the possibility to redirect a post in the advanced tab of the Yoast SEO metabox.
	* Moved the option to include a post in sitemap from the advanced tab of the Yoast SEO metabox to the sitemap settings.
	* Removed the option to configure sitemap priority in the advanced tab of the Yoast SEO metabox.
	* Added multiple checks to prevent plugin compatibility issue between Yoast SEO and old versions of Google Analytics by Yoast.
	* Updated the banners with new designs.

= 2.2.1 =

Release Date: June 11th, 2015

* Makes sure users can close the tour by circumventing possible JavaScript caching issues that might occur.

= 2.2 =

Release Date: June 10th, 2015

* Enhancements:
	* Contains several accessibility improvements, including 'for' attributes for labels and several links to explanatory articles.
	* Adds support for creating partial sitemaps with WP CLI, props [Lars Schenk](https://github.com/larsschenk).
	* Add Google's mobile friendly test to the SEO toolbar, props [Brandon Hubbard](https://github.com/bhubbard).
	* Makes sure slugs are not being stripped if the remaining slug is less than 3 characters, props [andyexeter](https://github.com/andyexeter).
	* Shows an activation error when dependencies were not installed properly with composer.
	* Added a filter to allow the RSS footer to be dynamically shown/hidden, props [Hugh Lashbrooke](https://github.com/hlashbrooke).
	* Added many translator comments to help translators more easily get the context.
	* Made sure Open Graph article tags are added separately, following up on the Open Graph specification.
	* Adds recommended image sizes per Social network in the social tab of the 	SEO metabox.
	* Removes the tracking functionality.
	* Shows a dismissible notice with a link to the about page that is shown after every update. The user is no longer being redirected and only has to dismiss the notice once for all sites (in case of multisite).
	* Adds a link to the about page to the general tab of the settings dashboard.
	* Makes the tour dismissible on user level.
	* Adds Twitter profile to JSON LD output.
	* Twitter profile input field now also accepts full url and automatically strips it down to just the username.
	* Only adds the JSON LD output to the frontpage, since it's not needed on other pages.
	* Makes all Yoast SEO notices dismissible.

* Bugfixes:
	* Fixes a bug where the widgets were removed from every XML file. This is now only the case for the sitemaps.
	* Fixes a bug where validation errors were shown for the wrong variables in the titles and metas settings.
	* Fixes a bug where the SEO toolbar was broken.
	* Fixes a few typos, props [Gary Jones](https://github.com/GaryJones).
	* Fixes a bug where links in tooltips were not impossible to click.
	* Fixes a broken link to the permalinks section of the advanced settings, props [Michael Nordmeyer](https://github.com/michaelnordmeyer).
	* Fixes settings import on multisite.
	* Fixes a bug where the sitemap could contain datetimes in the wrong timezone.
	* Fixes a bug where the wrong Facebook user ID was added to the fb:admins meta tag. Adding FB admin user id is now a manual process.
	* Fixed Open Graph and Twitter cards on static posts pages
	* Fixes a bug where sitemap cache was not always cleared after saving the Yoast SEO settings.

* Security:
	* Fixes a possible XSS vulnerability in the snippet preview. Thanks [Charles Neill](https://twitter.com/ccneill) and [Mazen Gamal](https://twitter.com/mazengamal) for discovering and responsibly disclosing this issue.

= 2.1.1 =

Release Date: April 21st, 2015

* Bugfixes:
	* Fixes a bug where the JSON+LD output was outputted twice when company or person info wasn't set.
	* Fixes a compatibility issue with Video SEO and WooCommerce SEO add-ons causing WSOD on the frontend for video's and WooCommerce products.
	* Fixes a compatibility issue with BBPress caused by hooking `current_user_can` too early.

= 2.1 =

Release Date: April 20th, 2015

* Features:
	* Added support for [website name JSON+LD markup](https://developers.google.com/structured-data/site-name).

* Enhancements:
	* Makes sure Twitter cards are by default enabled since they don't need to be validated anymore by Twitter.
	* Removes the Twitter url meta tag, since Twitter no longer uses it.
	* Shows a validation error when a user selects a featured image for a post that is smaller than 200x200 pixels.
	* Shows a validation error when a user tries to use shortcodes in the titles and meta's settings page that are incompatible with the type of content those titles and meta's are associated with.
	* Makes sure no taxonomy metadata is lost with the upcoming 4.2 version of WordPress.
	* Upgraded to Facebook Graph API 3.0 for fetching Facebook user ID's straight from Facebook.
	* Made the plugin conflict notices more user friendly, explaining better which piece of functionality might be impacted, offering a link to the corresponding settings and a button to deactivate the conflicting plugin.

* Bugfixes:
	* Fixes a bug where the sitemaps were no longer being served from WP transient cache.
	* Fixes a bug where breadcrumbs weren't nested properly.
	* Fixes a possible "headers already sent" error in the sitemaps.
	* Fixes a notice for the homepage URL in post type sitemaps.
	* Fixes an "undefined index" notice on the sitemaps.
	* Fixes an "undefined index" notice in the breadcrumbs.
	* Fixes a bug where translations were not loaded when used as MU-plugin.
	* Fixes a JS error that was raised when editing post-types without a TinyMCE editor.

* Security:
	* Fixes a possible XSS vulnerability. Thanks [Johannes Schmitt](https://github.com/schmittjoh) from [Scrutinizer CI](https://scrutinizer-ci.com/) for discovering and responsibly disclosing this issue.

= 2.0.1 =

Release Date: April 1st, 2015

* Bugfixes:
	* Fixes an issue where (in rare cases) people upgrading to 2.0 got stuck in a redirect loop on their admin.
	* Fixes a broken link in the Dutch translation, causing the Pinterest tab on the Social settings page to overflow into the Google+ tab.
	* Fixes a small typo on the about page.

= 2.0 =

Release Date: March 26th, 2015

* Features:
	* Simplified and revised Admin menu's:
		* Moved all advanced functionality to one "Advanced" submenu page.
		* Moved the bulk editor, the export functionality and the file editor to one "Tools" submenu page.
		* Improved consistency and usability of settings pages by having them use exactly the same, tab-based, styling.
	* Made it easy to output structured data for social profiles, person and company profiles, for use in Google Knowledge Graph.

* Enhancements:
	* Makes sure the user is redirected to the last active settings tab after saving.

* Bugfixes:
	* Fixes a bug where custom field variables were no longer working in the snippet preview.
	* Fixes a bug where the $post global was emptied by our Frontend class, causing conflicts with other plugins.
	* Fixes a bug where variables weren't replaced in the og:description meta tag.
	* Fixes a bug where the breadcrumbs caused an undefined variable notice.

* Under the hood:
	* Contains an incredible amount of code style improvements, making the code cleaner and more readable.
	* Makes sure every function in the plugin is documented using PHPDoc by having it checked automatically by the Codesniffer.
	* Refactored a lot of legacy code in the admin, mainly with regard to the way output is rendered. Provides for a better separation of concerns, making the code more comprehensible and re-usable.
	* Deprecated a large amount of form methods and moved them to the `Yoast_Form` class. Click [here](https://github.com/Yoast/wordpress-seo/blob/add975664d1f160eed262b02327a93bda5488f8b/admin/class-config.php#L172) for the list of deprecated methods.
	* Deprecated a large amount of utility functions and moved them to the `WPSEO_Utils` class. Click [here](https://github.com/Yoast/wordpress-seo/blob/add975664d1f160eed262b02327a93bda5488f8b/inc/wpseo-functions.php#L496) for the list of deprecated functions.

= 1.7.4 =

Release Date: March 11th, 2015

* Security fix: fixed possible CSRF and blind SQL injection vulnerabilities in bulk editor. Added strict sanitation to order_by and order params. Added extra nonce checks on requests sending additional parameters. Minimal capability needed to access the bulk editor is now Editor. Thanks [Ryan Dewhurst](https://github.com/ethicalhack3r) from WPScan for discovering and responsibly disclosing this issue.

= 1.7.3.3 =

Release Date: February 23rd, 2015

* Bugfixes:
	* Repair missing dependencies...

= 1.7.3.2 =

Release Date: February 23rd, 2015

* Bugfixes:
	* Fixes a bug where the rel="next" and rel="prev" links were broken for all taxonomies.
	* Removes an obsolete quote from the html for the seo metabox.

= 1.7.3.1 =

Release Date: February 19th, 2015

* Bugfixes:
	* Fixes a bug where the keyword analysis was broken.
	* Fixes a bug where our plugin raised a fatal error in the wpseo_admin bar when the $wpseo_front global was used.

= 1.7.3 =

Release Date: February 17th, 2015

* Bugfixes:
	* Fixes a bug where the translations were corrupted due to an issue with out glotpress grunt task.

= 1.7.2 =

Release Date: February 17th, 2015

* Enhancements:
	* Contains lots of performance optimizations, including removal of unnecessary inclusion and defined checks for every classfile, refactoring of frontend logic, cutting unnecessary inheritance chains et. al.
	* Adds Twitter gallery cards.
	* Adds Twitter cards for non singular pages (including Homepage).
	* Allows archive titles & meta to be set on non public post types that do have a public archive, props [xeeeveee](https://github.com/xeeeveee).
	* Huge performance gain for `enrich_defaults()`, props [Koen Van den Wijngaert](https://github.com/vdwijngaert).
	* Nextscripts removed from the OG conflict list.
	* Added full Composer support, switched to Composer for dependency management and autoloading.

* Bugfixes:
	* Fixes a bug where new posts weren't always added to the post sitemap properly in case of multiple sitemaps.
	* Fixes a grammatical error in the tutorial.
	* Fixes a bug where %%currentyear%% shortcode wasn't parsed well in the meta description.
	* Fixes an undefined index notice in the opengraph functionality.
	* Fixes a bug where variable placeholders were not always assigned the correct value, props [Andy Sozot](https://github.com/sozot) for reporting and [Juliette](https://github.com/jrfnl) for fixing.
	* Fixes a bug with SEO score on servers using international number formats.
	* Fixes broken backward compatibility / snippet preview, props [Juliette](https://github.com/jrfnl).
	* Fixes a bug where the %%page%% shortcode wasn't properly rendered in the titles and meta's.
	* Fixes a bug where custom replacement variables where not properly rendered when using them in multiple fields.
	* Fixes at least a large part of the keyword density 0% issues.
	* Corrected price on WooCommerce SEO banner.

= 1.7.1 =

* Security fix: fixed possible cross scripting issue with encoded entities in a post title. This could potentially allow an author on your site to execute JavaScript when you visit that posts edit page, allowing them to do rights expansion or otherwise. Thanks to [Joe Hoyle](http://www.joehoyle.co.uk/) for responsibly disclosing this issue.

= 1.7 =

* Features:
	* Adds Twitter inputs to the Social tab.
	* Tries to purge Facebook cache when OpenGraph settings are edited.
	* Added a new box promoting our translation site for non en_US users.
	* Added several new tools (Pinterest Rich Pins, HTML Validation, CSS Validation, Google PageSpeed), props [bhubbard](https://github.com/bhubbard)

* Enhancements:
	* Functionality change: when there's a featured image, output only that for both Twitter and FB, ignore other images in post.
	* UX change: rework logic for showing networks on Social tab, social network no longer shows on social tabs if not enabled in admin.
	* Always output a specific Twitter title and description, as otherwise we can't overwrite them from metabox.
    * Check for conflicts with other plugins doing XML sitemaps or OpenGraph.
    * Qtip library replaced with Qtip2.
    * Merged several similar translation strings, props [@ramiy](https://github.com/ramiy)
    * Several RTL improvements, props [@ramiy](https://github.com/ramiy)
    * Several Typo fixes, props [@ramiy](https://github.com/ramiy)
    * Updated Open Site Explorer Link, props [bhubbard](https://github.com/bhubbard)
    * Updated all links to use // instead of https:// and http://, props [bhubbard](https://github.com/bhubbard)
    * When importing from AIOSEO, on finding GA settings, advertise Yoast GA plugin.
    * Makes sure stopwords are only removed from slug on publication.
    * Updated translations.

* Bugfixes:
	* Fixes a bug where the wrong image was being displayed in twitter cards.
	* Fixes a bug where facebook would display the wrong image.
	* Fixes a bug where last modified in sitemap was broken.
	* Fixes a bug wher SEO-score heading made the table row jump on hover because there wasn't enough place left for the down arrow.
	* Removed a couple of languages that were not up to date.

= Earlier versions =

For the changelog of earlier versions, please refer to the separate changelog.txt file.


== Upgrade Notice ==

= 1.5.0 =
* Major overhaul of the way the plugin deals with option. Upgrade highly recommended. Please do verify your settings after the upgrade.
