=== ShareOpenly ===
Contributors: dartiss
Donate link: https://artiss.blog/donate
Tags: share, sharing, social media, mastodon, threads
Requires at least: 4.6
Tested up to: 6.5
Requires PHP: 8.0
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
README revision: 1.0

The official plugin for [ShareOpenly](https://shareopenly.org/) - adding modern, open social media sharing links to your website.

== Description ==

You know all those “share to Facebook” / “share to Twitter” links you see all over peoples’ websites? They’re all out of date.

Social media has evolved over the last year, yet nobody has “share to” links for Mastodon, Bluesky, Threads, etc. There have been a few attempts to create “share to Mastodon” buttons, but they haven’t taken the larger breadth of the new social media landscape into account.

This is where ShareOpenly comes in.

Activate this plugin and, at the bottom of every post and/or page on your site, you’ll see a “share to social media” button. If you click it, you’ll be taken to a page that shows a number of modern, social media sites (see the first screenshot). You can select one of the pre-set sites in the list, and you’ll be taken to share a post there. But if you, for example, have a Mastodon instance, or a Known site, or an indieweb site at a different domain, you can enter that domain in the box, and ShareOpenly will try and find a way to let you share the page with that site.

* Tested up to PHP 8.2
* Fully complies with WordPress coding standards
* Compliant with the stronger [WordPress VIP](https://wpvip.com/) coding standards, as well as compatibility with their platform
* Community plugin - visit the [Github page](https://github.com/dartiss/share-openly "Github") to get involved with the latest code development, request enhancements and report issues

== Installation ==

This plugin can be found and installed via the Plugin menu within WP Admin (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

1. Upload the entire unzipped plugin folder to your `wp-content/plugins/` directory, either from WP Admin (Plugins -> Add New), your favorite FTP client or any other file manager
2. Activate the plugin through the 'Plugins' menu in WP Admin (Plugins -> Installed Plugins)

== Screenshots ==

1. An example of the settings screen for the plugin
2. An example of how a sharing link might appear at the bottom of a post

== Frequently Asked Questions ==

= How does ShareOpenly work? =

ShareOpenly will do a few things first:

1. If it’s on a “well-known” domain — eg, facebook.com — it’ll send you to the share page there.
2. It checks to see if it can figure out if the site is on a known platform (currently Mastodon, Known, hosted WordPress, micro.blog, and a few others). If so — hooray! — it knows the share URL, and off you go.
3. It looks for a <link rel=“share-url”> header tag on the page. The href attribute should be set to the share URL for the site, with template variables {text} and (optionally) {url} present where the share text and URL should go. (If {url} is not present, the URL to share will be appended at the end of the text.) If it’s there — yay! — we forward there, replacing {text} and {url} as appropriate.

Once you’ve shared to a site, the next time you visit ShareOpenly, it will be in the quick links. 

= How can I let ShareOpenly know it can share to my social web platform? =

ShareOpenly knows about most major social networks, as well as decentralized platforms like Mastodon, Bluesky, and Known. However, if ShareOpenly is having trouble sharing to your platform, and if your platform supports a share intent, you can add the following metatag to your page headers:

`<link rel="share-url" href="https://your-site/share/intent?text={text}">`

Where `https://your-site/share/intent?text=` is the URL of your share intent.

The special keyword `{text}` will be replaced with the URL and share text.

== Changelog ==

I use semantic versioning, with the first release being 1.0

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.0 =
* Initial release.