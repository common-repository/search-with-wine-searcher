=== Search with Wine-Searcher ===

Contributors: matteoenna
Donate link: https://www.paypal.me/matteoedev/2.55
License URI: http://www.gnu.org/licenses/gpl.html
Requires at least: 5.0
Requires PHP: 7.2.5
Tested up to: 6.6
Stable tag: 1.7
License: GPLv2 or later

# Search with Wine-Searcher

## Description
The Wine-Searcher Box plugin allows you to easily integrate wine search into your WordPress site using [Wine-Searcher](https://www.wine-searcher.com/).

## Installation
1. Upload the plugin folder to the `/wp-content/plugins/` directory of your WordPress site.
2. Activate the plugin through the 'Plugins' menu in WordPress.

## Configuration
1. Go to the plugin configuration page.

## Usage
You can use the "Wine-Searcher" widget or the `[wine_searcher]` shortcode to embed the wine search bar on your site.

### Widget
1. Go to your site's edit page.
2. Add the "Wine-Searcher" widget to your widget area.
3. Configure the widget options according to your preferences. The widget supports the following options:
   - `Blank Option`: If checked, it allows search results to open in a new window or tab by using the target="_blank" attribute in links.
   - `Enable Vintage`: If checked, enables the option to search for wine vintages.

### Shortcode
You can insert the `[wine_searcher]` shortcode directly into your pages or posts to display the wine search bar. The shortcode supports the following options:
- `blank_option`: (Default: 'no') If set to 'yes', adds an option for a blank value in the search dropdown.
- `enable_vintage`: (Default: 'yes') If set to 'no', disables the option to search for wine vintages.

Example usage:
[wine_searcher blank_option="yes" enable_vintage="no"]

These options allow you to customize the behavior of the wine search bar according to your needs.

## License
This plugin is released under GPL2 License.

## Contact
For any questions or suggestions, please contact Matteo Enna at [matteo.enna89@gmail.com](mailto:matteo.enna89@gmail.com).
