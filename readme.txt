=== ShareOpenly ===
Contributors: dartiss
Tags: share, sharing, social media, mastodon, bluesky
Requires at least: 4.6
Tested up to: 6.5
Requires PHP: 8.0
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The official plugin for [ShareOpenly](https://shareopenly.org/) - adding modern, open social media sharing links to your website.

== Description ==

You know all those “share to Facebook” / “share to Twitter” links you see all over peoples’ websites? They’re all out of date.

Social media has evolved over the last year, yet nobody has “share to” links for Mastodon, Bluesky, Threads, etc. There have been a few attempts to create “share to Mastodon” buttons, but they haven’t taken the larger breadth of the new social media landscape into account.

This is where ShareOpenly comes in.

Activate this plugin and, at the bottom of every post and/or page on your site, you’ll see a “share to social media” button. If you click it, you’ll be taken to a page that shows a number of modern, social media sites (see the first screenshot). You can select one of the pre-set sites in the list, and you’ll be taken to share a post there. But if you, for example, have a Mastodon instance, or a Known site, or an indieweb site at a different domain, you can enter that domain in the box, and ShareOpenly will try and find a way to let you share the page with that site.

ShareOpenly will do a few things first:

1. If it’s on a “well-known” domain — eg, facebook.com — it’ll send you to the share page there.
2. It checks to see if it can figure out if the site is on a known platform (currently Mastodon, Known, hosted WordPress, micro.blog, and a few others). If so — hooray! — it knows the share URL, and off you go.
3. It looks for a <link rel=“share-url”> header tag on the page. The href attribute should be set to the share URL for the site, with template variables {text} and (optionally) {url} present where the share text and URL should go. (If {url} is not present, the URL to share will be appended at the end of the text.) If it’s there — yay! — we forward there, replacing {text} and {url} as appropriate.

Once you’ve shared to a site, the next time you visit ShareOpenly, it will be in the quick links. 

**Please visit the [Github page](https://github.com/dartiss/share-openly "Github") for the latest code development, planned enhancements and known issues**

== Installation ==

ShareOpenly can be found and installed via the Plugin menu within WordPress administration (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

1. Upload the entire `share-openly` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress administration.

Voila! It's ready to go. By default it will add a link to the bottom of all posts. To change this, or the priority on the page, then head to Settings -> Discussion and look for the "ShareOpenly" heading.

== Frequently Asked Questions ==

= A question? =

An answer.

== Screenshots ==

1. Stuff

== Changelog ==

I use semantic versioning, with the first release being 1.0

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.0 =
* Initial release.