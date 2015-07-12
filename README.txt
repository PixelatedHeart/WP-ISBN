=== Plugin Name ===
Contributors: bi0xid, pixelatedheart
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BDUEBSM9QRPDU
Tags: isbn, library
Requires at least: 2.5
Tested up to: 4.3
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

wp-isbn plugin allows you use ISBN shortcode and maintain a personal library in your WordPress..

== Description ==

The wp-isbn plugin allows you to use a ISBN shortcode with an ISBN number, like `[isbn 9788467908787]`, and it will show a thumbnail and title of the book, with a link to Amazon.

The plugin uses [ISBN Search]http://www.isbnsearch.org/isbn/ to look for titles and show them. It shows the Amazon page of the title when clicked.
ISBN Search works better with ISBN-13 codes (you can get them in the barcode of your book). 

The structure of the shortcode allows you to style it, with classes:

* `isbn-block`
* `isbn-image`
* `isbn-title`


== Installation ==

1. Upload `wp-isbn` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Does the plugin have an options page? =

Not yet

= How can I change styles? =

You can use the classes to change the styles. You have a principal block `isbn-block` and inside of him `isbn-image` and `isbn-title`. That's the only way to configure it right now – more to come. 

== Screenshots ==

1. Use of the shortcode
2. This is how the title is shown by default

== Changelog ==

= 0.1 =
* ISBN shortcode

== Upgrade Notice ==

No upgrade notice

== Roadmap ==

= 1.0 = 

* Users can choose the ISBN engine
* Users can change CSS classes
* Users can select if the thumbnail and title is linked or not
* Users can add more fields to the info, not only the title
* Users can choose the external link
