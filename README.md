## WPMS Remove Prefix Blog

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=herewithme&url=https://github.com/herewithme/wordpress-cli-tools&title=WordPress CLI Tools&language=en_GB&tags=github&category=software) 

=========================

This project is a mu-plugins for WordPRess Multisite.
It removes the prefix /blog/ added by the WordPress CMS during an installation in subfolders

This plugin should be stored on your installation WordPresss time. It is developed to deliver the best possible performance.

## First usage

WordPress updates the permalinks options only if there was a change in format.

The first time you use this plugin to remove the prefix / blog /, you must change the format of permalinks to a temporary value, and then update them to the correct value from the settings page "permalinks".
You can do it into : Admin > Sites > Edit > Permalink

This will force WordPress to update the database option, and the plugin will remove the prefix.