
![alt text](https://github.com/davidstockdale13/underdavid-rcvda/blob/main/screenshot.png "Understrap Child by David Stockdale")
# RCVDA's Understrap Child Theme

Based on the Understrap Child Theme (Version 1.2.0) provided: https://github.com/understrap/understrap-child

Please note that this repository is not a priority and thus will not be well documented for some time.

Quite a bit of information on this README is out of date.

## Basic Features
+ Multiple Navbar Menus.
+ Increased Understrap Menu Depth.
+ Log In/Log Out links in footer.
+ Styled Embedded Posts.
+ Custom Image Block Sytles Added:
    + Squared (Small).
    + Squared (Medium).
    + Squared (Large).
    + Squared (Max).
    + Circle (Small).
    + Circle (Medium).
    + Circle (Large).
    + Circle (Max).
+ Added support for excerpts on pages.

### Shortcodes
#### post_date
#### wp_google_search
(requires setup)
#### parent_finder
Creates a button which links to the parent page of a child page.
#### david_streamer
Creates a hidden twitch stream which only reveals itself when the stream is live.

To display only the stream:

[david_streamer channel="YOUR CHANNEL NAME HERE"]

To display both the stream and the chat:

[david_streamer channel="YOUR CHANNEL NAME HERE" chat="true"]

#### david_pager
Gets all recent pages with a specific parent page.
If there is only 1 page it will be given the header “Current”.
If there is 2 pages they will be given the headers “Current” and “Past”.
If there is 3 pages they will be given the headers “Future”, “Current” and “Past”.

Parent page id (required): you can get ID by editing a page and copying the number in the address (e.g. “wp-admin/post.php?post=580&action=edit”).

[david_pager  parent=580]

Default orientation is horizontal!
Vertical:

[david_pager parent=580 vertical=true]

To disable the “Future” header simply add “future=false”.

[david_pager parent=580 future=false]

To disable the “Current” header simply add “current=false”.

[david_pager parent=580 current=false]

To disable the “Past” header simply add “past=false”.

[david_pager parent=580 past=false]

To disable all headers simply add “future=false current=false past=false”.

[david_pager parent=580 future=false current=false past=false]

## Includes Local Fonts:
+ FireSans
+ Market
+ Raleway
+ FontAwesome Free 5.14.0


## Supports Plugins
+ Co-Authors Plus
+ AWS for WordPress
+ WP-ShowHide
+ Jetpack

## Customising With SASS
+ First you’ll need to download Node.js before doing anything else (https://nodejs.org/en/).
+ Shift + Right Click > Open PowerShell Window Here (within your child theme file)
+ npm install
+ npx npm-check-updates -u
+ npm install
+ npm audit fix
+ npm run watch
+ Make changes to styling by changing and saving underdavid-rcvda\src\sass\theme\_child_theme_variables
+ Ctrl + c


## Credits
+ Understrap Child Starter Theme https://github.com/understrap/understrap-child
+ Table Of Contents Code https://webdeasy.de/en/wordpress-table-of-contents-without-plugin