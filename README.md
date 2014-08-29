odesk-job-feed-parser
=====================

Parses xml junk from rss url query for given category and subcategory.

No database needed - no big data.
Uses xml as storage.

*rss-query.php*
- scans the most common categories
- pulls the rss into xml file specific for category
- to set cron on

*spitout.php*
- needs query in $_GET
- finds the right xml file
- simple xml parser

Seems to work within Wordpress.


