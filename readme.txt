=== Categorize Pages ===
Contributors: BjornW
Tags: categories, pages, categorize pages, category, page
Requires at least: 3.0
Tested up to: 6.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Categorize Pages, just as you would do with Posts 

== Description ==
Categorize a Page just as you would do with a Post. 

This plugin adds the 'categories' taxonomy to the Page post type. 
This enables the tags metabox in the New or Edit Page interface. To show tagged 
Pages on a category archive page or in a feed, it uses the 'pre_get_posts' hook
to change the post_type query parameter to 'post' AND 'page'. 

The plugin has no settings, does not alter the database and only uses hooks to 
achieve it's goal. It also should work perfectly fine with Multisite installations.

If this plugin meets your expectations and you use it commercially
please consider a donation to one of these organisations or your country's equivalents: 

  - <a href='https://www.msf.org/'>Medicines Sans Frontiers</a> 
  - <a href='https://fsfe.org'>Free Software Foundation Europe</a>
  - <a href='https://https://www.bitsoffreedom.nl/english/'>Bits of Freedom</a>
  - <a href='https://edri.org/'>European Digital Rights (EDRi)</a> 
  - <a href='https://fsf.org'>Free Software Foundation</a>
  - <a href='https://eff.org'>Electronic Frontier Foundation</a>


== Screenshots ==

1. A screenshot of the WordPress backend Pages section with the added Categories marked red (arrow).
2. A screenshot of the WordPress backend. A Page with the added categories attributes marked red (arrow).

== Installation ==
1. Upload the `categorize-pages` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!

== Frequently Asked Questions ==

= Is this plugin actively being developed? =
Yes and no. Let me explain: 
I consider this plugin to be feature complete and unless bugs are found there will be no development on this plugin. In other words this plugin is in maintenance mode and will be maintained for the foreseeable future. 
Due to other obligations I'm not always able to keep up with WordPress version's and updating this readme's 'Tested up to' version number. 
However, unless WordPress significantly changes the way taxonomies work (and breaking backwards compatibility in the process) this plugin should continue to work fine even though the 'Tested up to' might be of a lower version number. 
As always, when in doubt, test it :) (and when it does give you issues, feel free to leave a comment). 


== Notes == 

Credits: 

To collect icon used in the WordPress plugin repository and found in /assets/icon*
From the series ['Open'](http://www.toicon.com/series/open) By [Ariane Garoff](http://www.toicon.com/authors/ariane)

licensed under a Creative Commons Attribution 4.0 International License.
This means you are free to use these icons as you would like, but must provide attribution and, at minimum, a link to http://www.toicon.com/. 
Please review the legal code reachable at http://creativecommons.org/licenses/by/4.0/ if you have any questions.
Permissions beyond the scope of this license may be available. Contact The Artificial at info@theartificial.nl to request details.

Thanks Ariane Garoff and to[icon] for sharing your work!

WordPress repository header image found in /assets:
Cut out from ['Collecting books for readers in the reserve stacks, 1964'](https://www.flickr.com/photos/lselibrary/3925726691/)
Photograph during the making of a BBC documentary. 
Repository: LSE Library

Thanks LSE Library& Flickr Commons - flickr.com/commons

== Changelog ==

#### 1.0.0 - june 23, 2022 
- First public release
