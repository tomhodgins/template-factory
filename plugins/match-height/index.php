<?php
  $template = 'single';
  $template_title = 'Match Height';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Match Height</h1>
<h2>Matching element height in pure JS</h2>
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