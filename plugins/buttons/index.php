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
<pre><code class=html>&lt;a data-button href=#>link&lt;/a>
&lt;label data-button=blue>label&lt;/label>
&lt;input data-button=green type=button value=Button>
&lt;a data-button=red href=# disabled>disabled&lt;/a></code></pre>
<h3>Regular Buttons</h3>
<aside>
  <a data-button href=#>anchor tag</a>
  <input data-button type=button value="input button">
  <input data-button type=submit value="input submit">
  <label data-button>label</label>
  <button data-button>button</button>
  <button data-button disabled>disabled</button>
</aside>
<aside>
  <a data-button=green href=#>anchor tag</a>
  <input data-button=green type=button value="input button">
  <input data-button=green type=submit value="input submit">
  <label data-button=green>label</label>
  <button data-button=green>button</button>
  <button data-button=green disabled>disabled</button>
</aside>
<aside>
  <a data-button=red href=#>anchor tag</a>
  <input data-button=red type=button value="input button">
  <input data-button=red type=submit value="input submit">
  <label data-button=red>label</label>
  <button data-button=red>button</button>
  <button data-button=red disabled>disabled</button>
</aside>
<aside>
  <a data-button=blue href+#>anchor tag</a>
  <input data-button=blue type=button value="input button">
  <input data-button=blue type=submit value="input submit">
  <label data-button=blue>label</label>
  <button data-button=blue>button</button>
  <button data-button=blue disabled>disabled</button>
</aside>
<aside>
  <a data-button=grey href=#>anchor tag</a>
  <input data-button=grey type="button" value="input button">
  <input data-button=grey type="submit" value="input submit">
  <label data-button=grey>label</label>
  <button data-button=grey>button</button>
  <button data-button=grey disabled>disabled</button>
</aside>
<aside>
  <a data-button=outline href=#>anchor tag</a>
  <input data-button=outline type=button value="input button">
  <input data-button=outline type=submit value="input submit">
  <label data-button=outline>label</label>
  <button data-button=outline>button</button>
  <button data-button=outline disabled>disabled</button>
</aside>
<h3>Semi-Flat Buttons</h3>
<p>Enable this style by adding <code>semiflat</code> to the <code>data-button</code> attribute. This style is enabled as default in the <code>data-theme=book</code> and <code>data-theme=rfi</code> themes as well.</p>
<aside>
  <a data-button=semiflat href=#>anchor tag</a>
  <input data-button=semiflat type=button value="input button">
  <input data-button=semiflat type=submit value="input submit">
  <label data-button=semiflat>label</label>
  <button data-button=semiflat>button</button>
  <button data-button=semiflat disabled>disabled</button>
</aside>
<aside>
  <a data-button="green semiflat" href=#>anchor tag</a>
  <input data-button="green semiflat" type=button value="input button">
  <input data-button="green semiflat" type=submit value="input submit">
  <label data-button="green semiflat">label</label>
  <button data-button="green semiflat">button</button>
  <button data-button="green semiflat" disabled>disabled</button>
</aside>
<aside>
  <a data-button="red semiflat" href=#>anchor tag</a>
  <input data-button="red semiflat" type=button value="input button">
  <input data-button="red semiflat" type=submit value="input submit">
  <label data-button="red semiflat">label</label>
  <button data-button="red semiflat">button</button>
  <button data-button="red semiflat" disabled>disabled</button>
</aside>
<aside>
  <a data-button="blue semiflat" href+#>anchor tag</a>
  <input data-button="blue semiflat" type=button value="input button">
  <input data-button="blue semiflat" type=submit value="input submit">
  <label data-button="blue semiflat">label</label>
  <button data-button="blue semiflat">button</button>
  <button data-button="blue semiflat" disabled>disabled</button>
</aside>
<aside>
  <a data-button="grey semiflat" href=#>anchor tag</a>
  <input data-button="grey semiflat" type="button" value="input button">
  <input data-button="grey semiflat" type="submit" value="input submit">
  <label data-button="grey semiflat">label</label>
  <button data-button="grey semiflat">button</button>
  <button data-button="grey semiflat" disabled>disabled</button>
</aside>
<aside>
  <a data-button="outline semiflat" href=#>anchor tag</a>
  <input data-button="outline semiflat" type=button value="input button">
  <input data-button="outline semiflat" type=submit value="input submit">
  <label data-button="outline semiflat">label</label>
  <button data-button="outline semiflat">button</button>
  <button data-button="outline semiflat" disabled>disabled</button>
</aside>
<style>
  aside {
    text-align: center;
    margin: .5em 0;
  }
  main a,
  main label,
  main input,
  main button {
    width: auto !important;
    font-size: 12pt;
    margin: .25em !important;
  }
</style>

<link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/solarized_dark.min.css" rel=stylesheet>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad()</script>

<?php include("../../inc/footer.php"); ?>