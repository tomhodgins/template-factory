<?php
  $template = 'single';
  $template_title = 'Notifications';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Notifications</h1>
<h2>Responsive Notifications in simple HTML, CSS, and JS</h2>
<h3>Example Notifications</h3>
<input data-button=green type=button value="Default Notification" onclick="notification()">
<input data-button=red type=button value="Error Notification" onclick="notification('','error')">
<input data-button=blue type=button value="Custom Notification" onclick="notification('This is some custom text right here!','alt')">
<input data-button=green type=button value="Temporary Notification" onclick="notification('This will disappear in 3 seconds','',3)">
<input data-button type=button value="Notification with HTML" onclick="notification('<strong>Strong</strong> and <em>emphasized</em> text','warning')">
<input data-button=grey type=button value="Notification with image" onclick="notification('Image inside notification<br><img src=//placehold.it/250x100>','option')">
<script>
  //Test Notifications
  notification()
  notification('','error')
  notification('This is some custom text right here!','alt')
  notification('This will disappear in 3 seconds','',3)
  notification('<strong>Strong</strong> and <em>emphasized</em> text','warning')
  notification('Image inside notification<br><img src=//placehold.it/250x100>','option')
</script>
<style>
  [data-button] {
    width: auto !important;
  }
</style>
<?php include("../../inc/footer.php"); ?>