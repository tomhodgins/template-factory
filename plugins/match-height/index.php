<?php
  $template = 'single';
  $template_title = 'Match Height';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Match Height</h1>
<h2>Matching element height in pure JS</h2>
<p>This plugin will measure the height of a group of elements and assign each of them the highest value.</p>
<p>To group elements together, assign each element a <code>data-col</code> attribute with the same value. This way, the plugin can calculate the heights of different groups of elements on the same page.</p>
<pre>
&lt;div data-col=a>&lt;/div>&lt;div data-col=a>&lt;/div>
&lt;div data-col=b>&lt;/div>&lt;div data-col=b>&lt;/div>
</pre>
<p>In this example both <code>data-col=a</code> elements will be matched in height, and both <code>data-col=b</code> will be matched to each other as well.</p>
<h3>data-col=a group</h3>
<div>
  <aside data-col=a>
    <p>Lorem ipsum dolor sit amet, consec tetur adipi sicing elit, sed do eius mod tempor incid idunt ut labore et dolore.</p>
  </aside>
  <aside data-col=a>
    <p>Lorem ipsum dolor sit amet, consec tetur adipi sicing elit, sed do.</p>
  </aside>
  <aside data-col=a>
    <p>Lorem ipsum dolor sit amet, consec tetur adipi sicing elit, sed do eius mod tempor incid idunt ut labore et dolore magna aliqua. Ut enim.</p>
  </aside>
</div>
<h3>data-col=b group</h3>
<div>
  <aside data-col=b>
    <p>Lorem ipsum dolor sit amet, consec tetur adipi sicing elit, sed do eius mod tempor.</p>
  </aside>
  <aside data-col=b>
    <p>Lorem ipsum dolor sit amet, consec tetur.</p>
  </aside>
  <aside data-col=b>
    <p>Lorem ipsum dolor sit amet, consec tetur adipi sicing elito.</p>
  </aside>
</div>
<style>
  aside {
    color: rgba(0,0,0,.7);
    background: rgba(255,255,255,.7);
    border: rgba(255,255,255,1);
    padding: 10px;
    float: left;
    width: calc(33.33% - 10px);
  }
  aside + aside {
    margin-left: 15px;
  }
  div:after {
    content: '';
    display: block;
    clear: both;
  }
</style>
<?php include("../../inc/footer.php"); ?>