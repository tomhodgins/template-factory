<?php
  $template = 'single';
  $template_title = 'The Template Factory';
  $template_theme = 'dark';
?>
<?php include("inc/header.php"); ?>
<h1>The Template Factory</h1>
<h2>Testing various themes and plugins against each other</h2>
<p>The Template Factory is a small PHP-based website template written simply in PHP, HTML, CSS and JavaScript. Powered by EQCSS for element queries, plus lightweight plugins for tooltips, modals, notifications, and more!</p>
<h2>What does it do?</h2>
<p>The Template Factory is home to a few different things that are being developed, first there are a number of basic CSS styles being developed and tested so they can be quickly applied to new sites or new content on existing sites without having to worry about creating default styles. These themes can be tested with dummy content using their theme pages below:</p>
<h3>Themes</h3>
<p>Included themes from <code>basic.css</code> are:</p>
<ul>
  <li><a href=themes/default.php data-button>Default Theme</a>
  <li><a href=themes/dark.php data-button=green>Dark Theme</a>
  <li><a href=themes/code.php data-button=blue>Code Theme</a>
  <li><a href=themes/book.php data-button=red>Book Theme</a>
</ul>
<h3>Styles</h3>
<p>And via additional stylesheets there are also:</p>
<ul>
  <li><a href=themes/green.php data-button>Green style</a>
  <li><a href=themes/swiss.php data-button=blue>Swiss style</a>
  <li><a href=themes/rfi.php data-button=green>RFI Style</a>
  <li><a href=themes/preston.php data-button=grey>Preston Style</a>
</ul>
<p>The second type of thing being developed at the Template Factory are CSS and JavaScript plugins that are intended to be used across multiple sites. What better environment to test these plugins than in a multi-themed website. These plugins are all located inside their own folders in the <code>plugins/</code> folder, often with their own documentation labelled as <code>index.php</code>.</p>
<h3>Plugins</h3>
<p>Included plugins are:</p>
<ul>
  <li><a href=plugins/form data-button>Order Form</a>
  <li><a href=plugins/video-scaling data-button>Video Scaling</a>
  <li><a href=plugins/notifications data-button>Notifications</a>
  <li><a href=plugins/tooltips data-button>Tooltips</a>
  <li><a href=plugins/tables data-button>Responsive Tables</a>
  <li><a href=plugins/modals data-button>Modals</a>
  <li><a href=plugins/buttons data-button>Buttons</a>
  <li><a href=plugins/nav data-button>Responsive Navigation</a>
  <li><a href=plugins/match-height data-button>Match-Height</a>
</ul>
<h2>Using the Template Factory</h2>
<h3>How to build a website with the Template Factory</h3>
<ul>
  <li>clone this repository from Github
  <li>change the <code>$site</code> variable at the top of <code>inc/header.php</code> to the address where you host this repository
</ul>
<h3>To create new pages</h3>
<ul>
  <li>create new <code>.php</code> files in the main folder
  <li>set the <code>$template</code>, <code>$template_title</code>, and <code>$template_theme</code> variables at the top of the page
  <li>include header and footer partials with <code>&lt;php include("inc/header.php"); ?></code> and <code>&lt;php include("inc/footer.php"); ?></code>
  <li>add your content
</ul>
<p>All in all, a new empty template file might look like:</p>
<pre>&lt;?php
  $template = 'single';
  $template_title = 'The Template Factory';
  $template_theme = 'dark';
?>
&lt;?php include("inc/header.php"); ?>
&lt;h1><?php echo $template_title; ?>&lt;/h1>
&lt;p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p>
&lt;?php include("inc/footer.php"); ?></pre>
<h3>To define a new modal</h3>
<ul>
  <li>create a new <code>.php</code> file in <code>inc/modals</code> with your desired content
  <li>set the <code>$modal</code> variable to the same name as the filename for your modal content. <code>inc/modals/example.php</code> would be <code>$modal = "example";</code>
  <li>include the modal plugin on your page with <code>&lt;?php include("plugins/modals/modal.php"); ?></code>
  <li>launch the modal by name with the JavaScript <code>spawnModal('')</code> and supply the same name as the file, e.g. <code>spawnModal('example')</code>
</ul>
<pre>&lt;input onclick=spawnModal('demo')>
&lt;?php $modal = "demo"; include("plugins/modals/modal.php") ?></pre>
<footer>&copy; <script>document.write(new Date().getFullYear())</script> &bull; <a href=https://github.com/tomhodgins/template-factory>view on Github</a></footer>
<?php include("inc/footer.php"); ?>