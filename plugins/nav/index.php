<?php
  $template = 'single';
  $template_title = 'Nav';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Nav Plugin</h1>
<h2>Responsive Navigation</h2>
<p>The nav markup lives in <code>inc/navigation.php</code> and is a CSS-only menu that makes use of HTML <code>&lt;input></code> elements to function. The Mobile menu uses <code>&lt;input type=checkbox></code> to toggle whether it&rsquo;s open or closed, and the dropdowns make use of <code>&lt;input type=radio></code> elements to remember which dropdown to display.</p>
<p>An hidden <code>&lt;label for=reset></code> resets the dropdown if the user clicks off the menu.</p>
<pre style=white-space:pre>&lt;!-- Nav -->
&lt;nav data-nav>
  &lt;a href=# class=brand>Brand&lt;/a>
  &lt;input type=checkbox id=menu>
  &lt;label for=menu>&lt;span>≡&lt;/span>&lt;/label>
  &lt;!-- Menu Loop -->
  &lt;input type=radio name=topNav id=one>
  &lt;label for=one>
    &lt;span>Item 1&lt;/span>
    &lt;div>
      &lt;a href=#>Page 1&lt;/a>
      &lt;a href=#>Page 2&lt;/a>
      &lt;a href=#>Page 3&lt;/a>
    &lt;/div>
  &lt;/label>
  &lt;input type=radio name=topNav id=two>
  &lt;label for=two>
    &lt;span>Item 2&lt;/span>
    &lt;div>
      &lt;a href=#>Page 1&lt;/a>
      &lt;a href=#>Page 2&lt;/a>
      &lt;a href=#>Page 3&lt;/a>
    &lt;/div>
  &lt;/label>
  &lt;!-- /Menu Loop -->
  &lt;input type=radio name=topNav id=reset>
  &lt;label for=reset>&lt;/label>
&lt;/nav></pre>
<?php include("../../inc/footer.php"); ?>