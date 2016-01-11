# The Template Factory

The Template Factory is a small PHP-based website template written simply in PHP, HTML, CSS and JavaScript. Powered by EQCSS for element queries, plus lightweight plugins for tooltips, modals, notifications, and more!

## What does it do?

The Template Factory is home to a few different things that are being developed, first there are a number of basic CSS styles being developed and tested so they can be quickly applied to new sites or new content on existing sites without having to worry about creating default styles. These themes can be tested with dummy content using their theme pages below:

### Themes

Included themes from `basic.css` are:

- [default](http://staticresource.com/template/default.php)
- [`data-theme=dark`](http://staticresource.com/template/dark.php)
- [`data-theme=code`](http://staticresource.com/template/code.php)
- [`data-theme=book`](http://staticresource.com/template/book.php)

And via additional stylesheets there are also:

- [`data-theme=green`](http://staticresource.com/template/green.php)
- [`data-theme=swiss`](http://staticresource.com/template/swiss.php)
- [`data-theme=rfi`](http://staticresource.com/template/rfi.php)

The second type of thing being developed at the Template Factory are CSS and JavaScript plugins that are intended to be used across multiple sites. What better environment to test these plugins than in a multi-themed website. These plugins are all located inside their own folders in the `plugins/` folder, often with their own documentation labelled as `index.php`.

### Plugins

Included plugins are:

- **[EQCSS.js](http://elementqueries.com)** for Element Queries and scoped CSS
- [responsive video scaling](http://staticresource.com/template/plugins/video-scaling)
- [tooltips](http://staticresource.com/template/plugins/tooltips)
- [modals](http://staticresource.com/template/plugins/modals)
- [notifications](http://staticresource.com/template/plugins/notifications)
- [responsive order form](http://staticresource.com/template/plugins/form)
- [responsive tables](http://staticresource.com/template/plugins/tables)
- [CSS buttons](http://staticresource.com/template/plugins/buttons)

## How to use

- Clone this repository
- change the `$site` URL at the top of `inc/header.php` to the address where you host this repository

## To create new pages

- create new `.php` files in the main folder