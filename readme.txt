=== Plugin Name ===
Contributors: johnjamesjacoby, wpmuguru
Tags: buddypress, wordpress, multisite, multinetwork, network
Requires at least: 3.0
Tested up to: 3.0.1
Stable tag: 1.0

== Description ==

Fixes permalinks when using 'switch_to_blog' on multi-site/multi-network installation of WordPress.

== Installation ==

Download into /wp-content/plugins/ and activate on the site that will be calling the 'switch_to_blog' function, or drop into /wp-content/mu-plugins/ to enable for all blogs (not recommended but will function just fine.)

== Frequently Asked Questions ==

= Do I need this plugin? =
Only if you're running a multisite or multinetwork powered installation of WordPress, and want to show blog posts/pages/attachments/categories/tags directly from any blog in your network.

= Will this work on standard WordPress? =
There's no reason to, because you have no other blogs/sites to switch to. :)

= Will this slow down my website? =
Probably. 

This was originally in WordPresMU in the 2.8 days, but was removed because of the additional overhead that came with reloading the entire permalink structure two additional times (once for your existing site, once for the switched site, and again when you switch back) for a total of three loads of the permalink rewrite process.

So... Use this plugin at your own risk. 

If you receive out-of-memory errors or white-screens after turning this on, delete it or rename it to disable it and regain control of your site.

== Changelog ==

1.0 Initial release