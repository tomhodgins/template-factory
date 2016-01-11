<?php
  $template = 'single';
  $template_title = 'Swiss Style';
  $template_theme = 'swiss';
?>
<?php include("../inc/header.php"); ?>
<link href=http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic rel=stylehseet>
<?php include("../inc/dummy-content.php"); ?>
<h4>Example Notifications</h4>
<style>input[data-button]{width:auto !important;}</style>
<input data-button=green type=button value="Default Notification" onclick="notification()">
<input data-button=red type=button value="Error Notification" onclick="notification('','error')">
<input data-button=blue type=button value="Custom Notification" onclick="notification('This is some custom text right here!','alt')">
<input data-button=green type=button value="Temporary Notification" onclick="notification('This will disappear in 3 seconds','',3)">
<input data-button type=button value="Notification with HTML" onclick="notification('<strong>Strong</strong> and <em>emphasized</em> text','warning')">
<input data-button=grey type=button value="Notification with image" onclick="notification('Image inside notification<br><img src=//placehold.it/250x100>','option')"></p>
<?php include("../plugins/form/order-form.php"); ?>
<footer>&copy; <script>document.write(new Date().getFullYear())</script> Tommy Hodgins</footer>
<?php include("../inc/footer.php"); ?>
