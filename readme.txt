=== News-Ticker ===

Contributors: DanielSachs
Tags: news, ticker, fading, scrolling, rss, rss2, news feed, comments feed, news ticker, featured posts, gallery, image gallery
Requires at least: 2.9
Tested up to: 3.4.1
Stable tag: 2.1.1

An animated banner, news ticker, for Posts, RSS feeds or Images.

== Description ==

**A JQuery based News Ticker Displays a sliding or fading list of post titles, rss reeds or comments and excerpts with links to post. Starting from ver.2.0 the ticker can also be used as a featured posts image gallery**

* Shows Featured Images, Excerpts, Dates and Titles of post.
* Ability to construct the output, to enable/dispable ticker item elements
* Displays Most Popular Posts over the last x days (via Wordpress.com Stats Plugin)
* Displays Most Commented Posts
* Displays Recent Posts
* Displays Recent Comments
* Displays Specific Posts (via post IDs)
* Allows to set any number of Posts to display
* Allows to add your default RSS feed, your Comments RSS or even an RSS feed from another site, like Twitter or your favorite news site.
* Option to filter Posts from selected categories
* Ticker Animation : Fade, Slide Up, Slide Down, Left, Right or Expand
* And much more...

To view this plugin in action visit [18elements homepage](http://18elements.com).


== Installation ==

1. Upload `news-ticker` directory to the `/wp-content/plugins/` directory.
2. Insert `<?php if ( function_exists('insert_newsticker') )  { insert_newsticker(); } ?>` into your template file.
3. Activate the plugin via the Plugins menu.
4. Configure options on the Options page (Settings > News Ticker menu).

*Please note: if your theme doesn't use wp_head()  function the ticker will display a simple list of items.

== Frequently Asked Questions  ==

**News-Ticker Styling**

The news ticker comes with unique classes and id's for easy css styling
1. The ticker is id="news-ticker"
2. The date is class="tickerDate"
3. The title is class="tickerLink"
4. The excerpt is class="tickerText"

Add these ids & classes to your themes CSS file for easy styling.
For more info [visit the plugin page](http://18elements.com/tools/news-ticker-for-wordpress)


== Screenshots ==

1. The Setup Page

== Changelog ==

= 2.1.1 =

* jQuery Cycle update
* Featured Image support
* Container resize ability based on ticker and content height
* Bugfix: stopped scrolling after one item
* Bugfix: removed depricated javascript init functions


= 2.1.0 =

* jQuery Cycle update

= 2.0 =

**PLEASE NOTE! It is highly recommended to deactivate the plugin and to delete the files prior to v2.0 installation

* Displays images attached to the post
* New javascript handler
* Four more transitions added
* The ticker stops on hover
* Option to show/hide the image, the date and the excerpt of the post 
* Added classes for easier ticker styling

= 1.5.0 =

* External RSS Feed option added
* Small bugfixes

= 1.0.2 =

* Better jQuery handling
* Added date display for tickers

= 1.0.1 =

* Small bug fixes

= 1.0 =

* initial release

== Road Map  ==

= 2.2 =

* Add option to create and select Featured Image sizes
* Add easy styling options
* Add pager option


= 2.3 =

* Add Custom Post Types support

= 3.0 =

* Complete rewrite 
* Drop support for WordPress < 3.2