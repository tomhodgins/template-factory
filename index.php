<?php
  $template = 'single';
  $template_title = 'The Template Factory';
  $template_theme = 'dark';
?>
<?php include("inc/header.php"); ?>
<h1>The Template Factory</h1>
<h2>Testing various themes and plugins against each other</h2>
<p>The goal of this site is to provide a simple way to build and test new code, and improve existing code.</p>
<h3>Themes for <a href=>basic.css</a></h3>
<ul>
  <li><a href=default.php data-button>Default Theme</a>
  <li><a href=dark.php data-button=green>Dark Theme</a>
  <li><a href=code.php data-button=blue>Code Theme</a>
  <li><a href=book.php data-button=red>Book Theme</a>
  <li><a href=green.php data-button>Green style</a>
  <li><a href=swiss.php data-button=blue>Swiss style</a>
  <li><a href=rfi.php data-button=green>RFI Style</a>
</ul>
<h3>Plugin Tests</h3>
<ul>
  <li><a href=plugins/form data-button>Order Form</a>
  <li><a href=plugins/video-scaling data-button>Video Scaling</a>
  <li><a href=plugins/notifications data-button>Notifications</a>
  <li><a href=plugins/tooltips data-button>Tooltips</a>
  <li><a href=plugins/tables data-button>Responsive Tables</a>
  <li><a href=plugins/modals data-button>Modals</a>
  <li><a href=plugins/buttons data-button>Buttons</a>
</ul>
<footer>&copy; <script>document.write(new Date().getFullYear())</script> Tommy Hodgins</footer>
<?php include("inc/footer.php"); ?>