# The Template Factory

The Template Factory is a small PHP-based website template written simply in PHP, HTML, CSS and JavaScript. Powered by EQCSS for element queries, plus lightweight plugins for tooltips, modals, notifications, and more!

## What does it do?

The Template Factory is home to a few different things that are being developed, first there are a number of basic CSS styles being developed and tested so they can be quickly applied to new sites or new content on existing sites without having to worry about creating default styles. These themes can be tested with dummy content using their theme pages below:

### Themes

Included themes from `basic.css` are:

- [default](http://staticresource.com/template/themes/default.php)
- [`data-theme=dark`](http://staticresource.com/template/themes/dark.php)
- [`data-theme=code`](http://staticresource.com/template/themes/code.php)
- [`data-theme=book`](http://staticresource.com/template/themes/book.php)

And via additional stylesheets there are also:

- [`data-theme=green`](http://staticresource.com/template/themes/green.php)
- [`data-theme=swiss`](http://staticresource.com/template/themes/swiss.php)
- [`data-theme=rfi`](http://staticresource.com/template/themes/rfi.php)

The second type of thing being developed at the Template Factory are CSS and JavaScript plugins that are intended to be used across multiple sites. What better environment to test these plugins than in a multi-themed website. These plugins are all located inside their own folders in the `plugins/` folder, often with their own documentation labelled as `index.php`.

### Plugins

Included plugins are:

- **[EQCSS.js](http://elementqueries.com)** for Element Queries and scoped CSS
- [responsive order form](http://staticresource.com/template/plugins/form)
- [responsive video scaling](http://staticresource.com/template/plugins/video-scaling)
- [notifications](http://staticresource.com/template/plugins/notifications)
- [tooltips](http://staticresource.com/template/plugins/tooltips)
- [responsive tables](http://staticresource.com/template/plugins/tables)
- [modals](http://staticresource.com/template/plugins/modals)
- [CSS buttons](http://staticresource.com/template/plugins/buttons)

## How to build a website with the Template Factory

- Clone this repository
- change the `$site` URL at the top of `inc/header.php` to the address where you host this repository

## To create new pages

- create new `.php` files in the main folder
- set the `$template`, `$template_title`, and `$template_theme` variables at the top of the page
- include header and footer partials
- add your content.

All in all, a new empty template file might look like:

```
<?php
  $template = 'single';
  $template_title = 'The Template Factory';
  $template_theme = 'dark';
?>
<?php include("inc/header.php"); ?>
<h1><?php echo $template_title; ?></h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
<?php include("inc/footer.php"); ?>
```

## To define a new modal

- Create a new `.php` file in `inc/modals` with your desired content
- set the `$modal` variable to the same name as the filename for your modal content. `inc/modals/example.php` would be `$modal = "example";`
- include the modal plugin on your page with `<?php include("plugins/modals/modal.php"); ?>`
- launch the modal by name with the JavaScript `spawnModal('')` and supply the same name as the file, e.g. `spawnModal('example')`

```
<input onclick=spawnModal('demo')>
<?php $modal = "demo"; include("plugins/modals/modal.php"); ?>
```