=== ShareOpenly ===
Contributors: dartiss, jeherve, mediaformat
Donate link: https://artiss.blog/donate
Tags: share, openly, social media, mastodon, threads
Requires at least: 4.6
Tested up to: 7.1
Requires PHP: 8.0
Stable tag: 1.2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
README revision: 1.0

The official plugin for [ShareOpenly](https://shareopenly.org/) - adding modern, open social media sharing links to your website. Share openly.

== Description ==

You know all those "share to Facebook" / "share to Twitter" links you see all over peoples’ websites? They’re all out of date.

Social media has evolved over the last year, yet nobody has "share to" links for Mastodon, Bluesky, Threads, etc. There have been a few attempts to create "share to Mastodon" buttons, but they haven’t taken the larger breadth of the new social media landscape into account.

This is where ShareOpenly comes in.

Activate this plugin and, at the bottom of every post and/or page on your site, you’ll see a "share to social media" button. If you click it, you’ll be taken to a page that shows a number of modern, social media sites (see the first screenshot). You can select one of the pre-set sites in the list, and you’ll be taken to share a post there. But if you, for example, have a Mastodon instance, or a Known site, or an IndieWeb site at a different domain, you can enter that domain in the box, and ShareOpenly will try and find a way to let you share the page with that site.

* Tested up to PHP 8.4
* Follows WordPress coding standards
* Designed to be compatible with [WP VIP](https://wpvip.com/) coding standards, as well as compatibility with their platform
* Community plugin - visit the [GitHub page](https://github.com/dartiss/share-openly "GitHub") to get involved with the latest code development, request enhancements and report issues

== Support & Contributing ==

If you would like to contribute to the code, report issues, request features or help with translation, then please use one of the following methods to do so...

* For support queries please [use the plugin forum on WordPress.org](https://wordpress.org/support/plugin/shareopenly/)
* To contribute to the code, suggest enhancements or report bugs you can [do so on my GitHub repo](https://github.com/dartiss/shareopenly)
* For translations, please [use GlotPress](https://translate.wordpress.org/projects/wp-plugins/shareopenly/)

If you wish to disclose a security issue then I would ask that you do so responsibly. For example, you could [submit it via Wordfence](https://www.wordfence.com/r/f54ee50200cc3f52/threat-intel/vulnerabilities/submit/), which this plugin is registered with.

== Privacy ==

This plugin does not store personal data. Clicking a share link navigates the user to a third-party (or user-specified) site to complete the share.

Since v1.2, the share icon is loaded locally; no external assets or scripts are loaded by the plugin.

== Installation ==

This plugin can be found and installed via the Plugin menu within WP Admin (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

1. Upload the entire unzipped plugin folder to your `wp-content/plugins/` directory, either from WP Admin (Plugins -> Add New), your favorite FTP client or any other file manager
2. Activate the plugin through the 'Plugins' menu in WP Admin (Plugins -> Installed Plugins)

== Plugin Settings ==

By default, nothing needs to be done for the new sharing options to appear. However, a number of settings are available, allowing for you to modify the results.

In Settings -> Discussion -> ShareOpenly, you can configure:
1.	Location – where sharing links appear (Posts, Pages, or both)
2.	Share text – the text shown next to the icon
3.	Priority – the filter priority used for output ordering (default: 10)  

After changing any of the settings, make sure to press the "Save Changes" button at the bottom of the screen.

== Screenshots ==

1. An example of the settings screen for the plugin
2. An example of how a sharing link might appear at the bottom of a post

== Frequently Asked Questions ==

= How does ShareOpenly work? =

ShareOpenly will do a few things first:

1. If it’s on a "well-known" domain — eg, facebook.com — it’ll send you to the share page there.
2. It checks to see if it can figure out if the site is on a known platform (currently Mastodon, Known, hosted WordPress, micro.blog, and a few others). If so — hooray! — it knows the share URL, and off you go.
3. It looks for a `<link rel="share-url">` header tag on the page. The href attribute should be set to the share URL for the site, with template variables {text} and (optionally) {url} present where the share text and URL should go. (If {url} is not present, the URL to share will be appended at the end of the text.) If it’s there — yay! — we forward there, replacing {text} and {url} as appropriate.

Once you’ve shared to a site, the next time you visit ShareOpenly, it will be in the quick links. 

= How can I let ShareOpenly know it can share to my social web platform? =

ShareOpenly knows about most major social networks, as well as decentralized platforms like Mastodon, Bluesky, and Known. However, if ShareOpenly is having trouble sharing to your platform, and if your platform supports a share intent, you can add the following meta tag to your page headers:

`<link rel="share-url" href="https://your-site/share/intent?text={text}">`

Where `https://your-site/share/intent?text=` is the URL of your share intent.

The special keyword `{text}` will be replaced with the URL and share text.

= Do you support this plugin on forks of WordPress? =

No. It was developed for WordPress and so forks remain unsupported. I have no intention of developing and testing this on any other version.

= How do you uninstall the plugin and what does it do? =

When you uninstall the plugin via the Plugins menu in WP Admin, all saved settings will be deleted along with the plugin files, leaving no residual data behind.

= Is this plugin accessible? =

By default, the link that is displayed has an accessible name (although this can be changed by the user), the icon is decorative and focus is visible. I would love to hear from you if you experience any problems, however (please see the previous section on how to contribute).

== Changelog ==

I use semantic versioning, with the first release being 1.0

= 1.2.1 =
* Enhancement: Fixed cross-site scripting (XSS) vulnerabilities ([CVE-2026-48094](https://www.cve.org/CVERecord?id=CVE-2026-48094)), as reported by [Blacksolo](https://github.com/blacksolo1)
* Enhancement: Fixed a number of other, potential, security issues in the code too

= 1.2 =
* Enhancement: Added additional information to the README
* Enhancement: Improved accessibility, performance and security across the plugin
* Enhancement: Moved the SVG icon from an external link to locally
* Enhancement: Now making sure I'm defining the priority setting as a number and not a text field
* Enhancement: Updated the WordPress requirements script (v1.1 -> v1.2)
* Bug: Removed the smart quotes that were in the README. Thanks to [Terence Eden](https://shkspr.mobi/blog/) for identifying and reporting it

= 1.1 =
* Enhancement: Custom post types added, thanks to [MediaFormat](https://github.com/mediaformat)

= 1.0.1 =
* Enhancement: Updated the sharing icon
* Enhancement: Updated the settings link in the plugin meta so it goes straight to the ShareOpenly settings (thanks to Jeremy Herve for this change)
* Enhancement: Added a description to the ShareOpenly settings section (thanks to Jeremy Herve for this change)

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.2.1 =
* Fixed a reported security vulnerability, along with a number of other security changes