=== Mustacciuoli ===
Contributors: nekojira
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=GSTFUY3LMCA5W
Tags: mustache, theme-development, templates, template-engine
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add support to Mustache template engine in WordPress. Includes implementations of Mustache in both PHP and Javascript.

== Description ==

Brings Mustache template engine to WordPress in one of its PHP and one of its Javascript implementations so you can use Mustache template files in your theme development and reuse the same template files across two languages.

An interesting case use would be combining Mustache with WordPress JSON API to supply data to template files for example.


== Installation ==

Install the plugin as you would with any WordPress plugin in your `wp-content/plugins/` directory or equivalent.

Once installed, activate Mustacciuoli from WordPress plugins dashboard page and you're ready to go, Mustache PHP library will be instantiated already and mustache.js script enqueued.

If you don't want to use the supplied Javascript library, you can de-queue it using with `dequeue_script('mustacciuoli')` from your theme functions.php.

== Frequently Asked Questions ==

= Is this a WordPress official plugin for Mustache? =

No, it is not.

== Screenshots ==

Not much to show, this plugin has no UI.

== Changelog ==

= 1.1.1 =
* Bugfixes

= 1.1.0 =
* Replaced Hogan.js with mustache.js
* Updated dependencies

= 1.0.0 =
* First public release.

== Upgrade Notice ==

= 1.1.0 =
Hogan.js was dropped in favor of mustache.js

= 1.0.0 =
First public release.