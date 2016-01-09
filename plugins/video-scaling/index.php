<?php
  $template = 'single';
  $template_title = 'Video Scaling';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Video Scaling</h1>
<h2>Calculating height based on <code>scrollWidth</code></h2>
<p>The following code is stored in <code>css/video-scaling.css</code> and uses Element Queries via the EQCSS plugin to automatically calculate the correct width/height based on the <code>scrollWidth</code> of the <code>&lt;iframe></code></p>
<pre style=white-space:pre>@element 'iframe' {
  $this {
    margin: 0 auto;
    width: 100%;
    height: eval("scrollWidth/(width/height)")px;
  }
}</pre>
<h3>Examples</h3>
<iframe width="420" height="315" src="https://www.youtube.com/embed/eGl6OlSczdU" frameborder="0" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/LS-ErOKpO4E" frameborder="0" allowfullscreen></iframe>
<?php include("../../inc/footer.php"); ?>