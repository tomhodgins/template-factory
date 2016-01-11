<?php
  $site = "http://staticresource.com/template"
?>
<!DOCTYPE html>
<html data-theme=<?php echo "$template_theme"; ?>>
<head>
  <meta charset=utf-8>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title><?php echo "$template_title"; ?></title>
<link href=http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700,300italic,400italic,500italic,700italic rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800 rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,500,600,700,900 rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/buttons/data-buttons.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/notifications/notifications.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/tooltips/data-tooltips.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/video-scaling/video-scaling.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/form/form.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/tables/data-tables.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/modals/data-modals.css rel=stylesheet>
  <link href=<?php echo $site; ?>/plugins/nav/nav.css rel=stylesheet>
  <link href=<?php echo $site; ?>/css/basic.css rel=stylesheet>
  <link href=<?php echo $site; ?>/css/global.css rel=stylesheet>
  <link href=<?php echo $site; ?>/css/themes/green.css rel=stylesheet>
  <link href=<?php echo $site; ?>/css/themes/swiss.css rel=stylesheet>
  <link href=<?php echo $site; ?>/css/themes/rfi.css rel=stylesheet>
</head>
<body class=<?php echo "$template"; ?>>
  <?php include("navigation.php"); ?>
  <section data-wrapper class=fixed></section>
  <script src=<?php echo $site ?>/plugins/notifications/notifications.js></script>
  <link href=<?php echo $site; ?>/plugins/modals/data-modals.css rel=stylesheet>
  <main>