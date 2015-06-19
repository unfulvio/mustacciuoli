=== Mustacciuoli ===
Contributors: nekojira
Donate link:  https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=P64V9NTEYFKDL
Tags: mustache, handlebars, theme-development, templates, template-engine
Requires at least: 3.6.0
Tested up to: 4.2.1
Stable tag: 1.1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add support to Mustache template engine in WordPress. Includes implementations of Mustache in both PHP and Javascript.

== Description ==

Brings Mustache template engine to WordPress in one of its PHP https://github.com/bobthecow/mustache.php and one of its Javascript https://github.com/janl/mustache.js implementations so you can use Mustache template files in your theme development and reuse the same template files across two languages.

Unlike other frameworks, WordPress lacks of a template engine for its themes, relying on a well-established PHP template hierarchy. A template engine could prove useful to separate logic (code) from content (text) and presentation (html), resulting in more clarity, better code readability and maintenance, and even ability to share template files across different frameworks, languages or systems.

For example, an interesting case use would be combining Mustache with WordPress JSON API http://wp-api.org/ to supply data to template files.


== Installation ==

Install the plugin as you would with any WordPress plugin in your `wp-content/plugins/` directory or equivalent.

Once installed, activate Mustacciuoli from WordPress plugins dashboard page and you're ready to go, Mustache PHP library will be instantiated already and mustache.js script enqueued.

If you don't want to use the supplied Javascript library, you can de-queue it using with `dequeue_script('mustacciuoli')` from your theme functions.php.

You need to refer to https://github.com/bobthecow/mustache.php/wiki for instructions on how instantiate and setup Mustache in your theme, once this plugin is activated.
For the Javascript version, follow instructions here https://github.com/janl/mustache.js.

== Frequently Asked Questions ==

= Is this a WordPress official plugin for Mustache? =

No, it is not really.

= How do I write a Mustache template? =

The engine language is very simple, you can find everything you need here: http://mustache.github.io/mustache.5.html
You can name your template files .mst or .mustache, but it doesn't really matter as long as they are text files html/html5 compliant.

= What the heck does it mean 'Mustacciuoli'? =

'Mustache' as a plugin name was taken; besides it felt inappropriate calling this plugin as the template engine itself, as it just implements third party libraries in WordPress. Mustacciuoli sounds like "mustache" in English, but are actually a type of Christmas cookies from Napoli http://en.wikipedia.org/wiki/Mustacciuoli - you should try them!

== Screenshots ==

Not much to show, this plugin has no real UI.
Read the Mustache manual instead: http://mustache.github.io/mustache.5.html

== Changelog ==

= 1.1.3 =
* Supports WordPress 4.2

= 1.1.2 =
* Release on wordpress.org plugins repo

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