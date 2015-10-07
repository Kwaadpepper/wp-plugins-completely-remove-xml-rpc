**=== Plugin Name ===**

Contributors: Kwaadpepper
Tags: xmlrpc
Requires at least: 3.5
Tested up to: 4.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin disables XML-RPC API and traces in http HEADER, meta, rel,and URImeta in WordPress 3.5+, which is by default enabled.

**== Description ==**

This plugin completely disable the XML-RPC API on a WordPress site running 3.5 and beyond.
It also remove any traces of this on pages and HTTP headers.

From 3.5, XML-RPC is enabled by default.
The option to disable it was also removed, this plugin provides and easy way to
disable it once for all.

**== Installation ==**

1. Upload completely disable-xml-rpc directory to the `/wp-content/plugins/` directory in your WordPress installation
1. Activate the plugin through the 'Plugins' menu in WordPress
1. XML-RPC is now disabled and hidden!

To re-enable XML-RPC, just deactivate the plugin through the 'Plugins' menu.

**== Frequently Asked Questions ==**

**= Is there an admin interface for this plugin? =**

There is no need as if you wan't to renable XMP-RPC, you just have to disable the plugin.

**= How to check this is working ? =**

You can use :
HTTP HEADERS : curl -I yourwebsiteadresse
Inspect the source code of your web site.
You Chrome plugin or Firefox:
https://chrome.google.com/webstore/detail/xml-rpc-client/mbelaappiaalhoceejaopcghdlnhhain

You can find your web pingback url with curl -I
be default it should be https://yourwebsite/xmlrpc.php

The use the plugin to test it.

**== Screenshots ==**

**== Changelog ==**

**= 1.0 =**
* Initial release

**== Upgrade Notice ==**

**= 1.0 =**
* Initial release
