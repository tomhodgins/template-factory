<?php
  $template = 'single';
  $template_title = 'RFI Style';
  $template_theme = 'rfi';
?>
<?php include("../inc/header.php"); ?>
<?php include("../inc/dummy-content.php"); ?>
<?php include("../plugins/form/order-form.php"); ?>
<h4>RFI Button Test</h4>
<a href=# data-button="blue">blue button</a>
<a href=# data-button="grey">grey button</a>
<a href=# data-button="lightgrey">lightgrey button</a>
<br>
<a href=# data-button="blue" class="disabled">blue button</a>
<a href=# data-button="grey" class="disabled">grey button</a>
<a href=# data-button="lightgrey" class="disabled">lightgrey button</a>
<footer>&copy; <script>document.write(new Date().getFullYear())</script> Tommy Hodgins</footer>
<?php include("../inc/footer.php"); ?>
