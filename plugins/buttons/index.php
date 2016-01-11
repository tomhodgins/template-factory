<?php
  $template = 'single';
  $template_title = 'Buttons';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Buttons</h1>
<p>To apply button styles to an element, add the <code>data-button</code> attribute.</p>
<p>Add <code>green</code>, <code>red</code>, <code>blue</code>, <code>grey</code> and <code>outline</code> values to the <code>data-button</code> attribute for different color themes.</p>
<p>Add a class of <code>disabled</code>, or add a <code>disabled</code> or <code>hidden</code> attribute to an element to display a disabled button.</p>
<h3>Examples</h3>
<pre>&lt;a data-button href=#>link&lt;/a>
&lt;label data-button=blue>label&lt;/label>
&lt;input data-button=green type=button value=Button>
&lt;a data-button=red href=# disabled>disabled&lt;/a></pre>
<h3>Regular Buttons</h3>
<a href=# data-button>default button</a>
<a href=# data-button="blue">.blue button</a>
<a href=# data-button="green">.green button</a>
<a href=# data-button="red">.red button</a>
<a href=# data-button="grey">.grey button</a>
<a href=# data-button="outline">.outline button</a>
<h3>Disabled Buttons</h3>
<a href=# data-button disabled>default button</a>
<a href=# data-button="blue" class="disabled">.blue button</a>
<a href=# data-button="green" hidden>.green button</a>
<a href=# data-button="red" disabled>.red button</a>
<a href=# data-button="grey" class="disabled">.grey button</a>
<a href=# data-button="outline" hidden>.outline button</a>
<h3>Semi-Flat Buttons</h3>
<p>Enable this style by adding <code>flat</code> to the <code>data-button</code> attribute. This style is enabled as default in the <code>date-theme=book</code> and <code>data-theme=rfi</code> themes as well.</p>
<a href=# data-button=flat>default button</a>
<a href=# data-button="blue flat">.blue button</a>
<a href=# data-button="green flat">.green button</a>
<a href=# data-button="red flat">.red button</a>
<a href=# data-button="grey flat">.grey button</a>
<a href=# data-button="outline flat">.outline button</a>
<?php include("../../inc/footer.php"); ?>