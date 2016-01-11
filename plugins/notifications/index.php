<?php
  $template = 'single';
  $template_title = 'Notifications';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Notifications</h1>
<h2>Responsive Notifications in simple HTML, CSS, and JS</h2>
<p>You'll be able to find examples here of how to display a modal, but the basic format is this:</p>
<pre>notification(message,theme,duration)</pre>
<p>The available themes are:</p>
<ul>
  <li><code>default</code> (optional)
  <li><code>error</code>
  <li><code>alt</code>
  <li><code>warning</code>
  <li><code>option</code>
</ul>
<p>The duration is just an optional integer for the number of seconds before it fades away, otherwise it will remain until the user hits the 'X' button in the upper right of the notification.</p>
<p>If we run it with the default settings</p>
<pre>notification()</pre>
<p>We will see an <code>&lt;aside></code> output on the page with the text and it will persist until dismissed manually. If we want to supply some custom text we can simply add it as the first argument when calling the function:</p>
<pre>notification('This is custom notification text')</pre>
<p>That will display a notification with the text <q>This is custom notification text</q> inside, and also persist forever. If we want to add a self-destruct timer to the notification we can specify a duration in seconds as our second argument:</p>
<pre>notification('Custom text',10)</pre>
<p>This notification would remain on screen for 10 seconds before removing itself automatically.</p>
<p>The last and final option I added in was the ability to pass a class name to the notification for the purposes of CSS styling. We can use the same markup for different styles of notification like:</p>
<pre>notification('Settings Saved!',5,'success')
notification('A Case Number is Required',0,'error')
notification('Please resolve conflicts before proceeding',0,'warning')</pre>
<h3>Example Notifications</h3>
<input data-button=green type=button value="Default Notification" onclick="notification()">
<input data-button=red type=button value="Error Notification" onclick="notification('','error')">
<input data-button=blue type=button value="Custom Notification" onclick="notification('This is some custom text right here!','alt')">
<input data-button=green type=button value="Temporary Notification" onclick="notification('This will disappear in 3 seconds','',3)">
<input data-button type=button value="Notification with HTML" onclick="notification('<strong>Strong</strong> and <em>emphasized</em> text','warning')">
<input data-button=grey type=button value="Notification with image" onclick="notification('Image inside notification<br><img src=//placehold.it/250x100>','option')">
<style>
  [data-button] {
    width: auto !important;
  }
</style>
<?php include("../../inc/footer.php"); ?>