<?php
  $template = 'single';
  $template_title = 'Preston Style';
  $template_theme = 'preston';
?>
<?php include("../inc/header.php"); ?>
<?php include("../inc/dummy-content.php"); ?>
<?php include("../plugins/form/order-form.php"); ?>
<link href=http://fonts.googleapis.com/css?family=Raleway:400,700,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700italic,800,800italic,900,900italic rel=stylesheet type=text/css>
<link href=https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic rel=stylesheet type=text/css>
<footer>&copy; <script>document.write(new Date().getFullYear())</script> &bull; <a href=https://github.com/tomhodgins/template-factory>view on Github</a></footer>
<?php include("../inc/footer.php"); ?>

<!-- Random Select Color -->
<script>
  var pick=~~(Math.random()*359),
      tag=document.createElement('style'),
      style='::-moz-selection {color:white;text-shadow:rgba(0,0,0,.1)1px 2px 2px;background-color:hsl($pick,75%,50%)!important}::-webkit-selection{color:white;text-shadow:rgba(0,0,0,.1)1px 2px 2px;background-color:hsl($pick,75%,50%)!important}::selection{color:white;text-shadow:rgba(0,0,0,.1)1px 2px 2px;background-color:hsl($pick,75%,50%)!important}';
    tag.innerHTML=style.replace(/\$pick/g,pick);
    document.body.appendChild(tag);
</script>