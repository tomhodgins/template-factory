<?php
  $template = 'single';
  $template_title = 'Modals';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Modals</h1>
<nav style=text-align:center>
  <button data-button onclick=spawnModal('demo')>Launch Text Modal</button>
  <button data-button=blue onclick=spawnModal('video')>Launch Video Modal</button>
  <button data-button=green onclick=spawnModal('form')>Launch Form Modal</button>
  <button data-button onclick=spawnModal('dummy')>Launch Dummy Content</button>
</nav>
<?php $modal = "demo"; include("modal.php"); ?>
<?php $modal = "video"; include("modal.php"); ?>
<?php $modal = "form"; include("modal.php"); ?>
<?php $modal = "dummy"; include("modal.php"); ?>
<?php include("../../inc/footer.php"); ?>
