<?php
  $template = 'single';
  $template_title = 'Responsive Tooltips';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Responsive Tooltips</h1>
<h2>Responsive Notifications in simple HTML, CSS, and JS</h2>
<h3>Usage</h3>
<p>Pure CSS and JavaScript tooltips for any site using the following formatting:</p>
<pre><code class=html>data-tooltip
data-title=""
data-caption=""</code></pre>
<p>The title and the caption can both include HTML, and only the title is required. Here's an example <code>&lt;span></code> with a tooltip on it. Live demos below!</p>
<pre><code class=html>&lt;span data-tooltip data-title="This is a Title" data-caption="This is a caption">&lt;/span></code></pre>
<blockquote>
  <p style=font-size:200%>If your HTML includes quotes, make sure to escape them properly so they don't break the attribute they are being contained within!</p>
</blockquote>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <a href="#" data-tooltip data-title="This is a Title" data-caption="This is a caption">exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Donec fermentum <a href="#" data-tooltip data-title="This is <em>another</em> title" data-caption="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">tortor tellus aliquet</a> augue sem. Sed eleifend, erat a venenatis euismod, felis arcu tempus quam, imperdiet vestibulum ipsum orci eget dui. Praesent semper commodo urna, vitae sodales tellus aliquet a. Suspendisse varius condimentum enim id ornare. Mauris porttitor interdum sem et convallis. Cras dictum, diam ut feugiat bibendum, <a href="#" data-tooltip data-title="This is <u>another</u> title">tortor tellus aliquet</a> massa, pulvinar posuere tortor enim vitae turpis. Sed ultrices augue turpis, et pellentesque est <a href="#" data-tooltip data-title="This is another title" data-caption="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">tortor tellus aliquet</a> in. Aliquam ac quam nibh. Quisque et fringilla dolor. Nullam massa ipsum, semper convallis purus sit amet, mollis interdum leo. Vivamus ut tempor nunc.</p>
<p>Nunc finibus lacus eget orci pellentesque lacinia. Nullam vitae dui facilisis, venenatis velit vehicula, fringilla eros. Vestibulum interdum nulla eu nunc convallis <a href="#" data-tooltip data-title="This is a <span style=color:blue>blue</span> title" data-caption="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">tortor tellus aliquet</a>. Sed eget sapien magna. Nam quis finibus velit, eu dictum mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam et libero quis velit consectetur lobortis. Donec a libero vel mauris faucibus porta.</p>
<p><img src="http://staticresource.com/prestonIcon.jpg" data-tooltip data-title="Preston Ely" data-caption="The Man. The Legend.<br><img src=http://staticresource.com/prestonIcon.jpg style=width:75px;height:auto;>" class="float-none"></p>
<p>Vestibulum malesuada pulvinar dolor vitae eleifend. Nunc maximus quam et tempus tempus. Cras tempus nibh quam, vitae sodales nisi egestas laoreet. Aenean sed tincidunt ex. Pellentesque blandit pharetra arcu, non volutpat nunc dapibus ut. Suspendisse convallis at nunc sit amet euismod. Suspendisse non sem elit. Ut pharetra enim in purus porttitor facilisis mollis ut nisl. Sed varius semper sollicitudin. Nullam aliquam sodales pulvinar. Nam tellus sapien, hendrerit ac mollis eget, rhoncus a diam.</p>
<p>Nunc eu lorem vitae nisl laoreet imperdiet. Etiam nunc velit, auctor ut felis id, vestibulum efficitur quam. Pellentesque commodo sit amet velit ut accumsan. Ut malesuada lacinia arcu, volutpat accumsan lorem rutrum ac. Integer tincidunt dui a neque accumsan, ut hendrerit leo cursus. Nulla sed mollis tortor, vitae luctus odio. Praesent gravida sed mauris ac laoreet. Pellentesque a lorem purus. Ut tincidunt ante ac nibh maximus, et suscipit risus sagittis. Nullam rhoncus augue eu semper ultrices. Quisque nec mollis ex. Suspendisse potenti.</p>

<link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/solarized_dark.min.css" rel=stylesheet>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad()</script>

<?php include("../../inc/footer.php"); ?>