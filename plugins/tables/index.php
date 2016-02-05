<?php
  $template = 'single';
  $template_title = 'Responsive Tables';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<style>
 table {
    margin: 0 auto 2em auto;
  }
</style>
<h1>Responsive Tables</h1>
<p>This plugin adds support for responsive tables using in JavaScript.</p>
<p>The plugin applies to regular <code>&lt;table></code> elements in HTML as long as the following assumptions are true:</p>
<ul>
  <li>your <code>&lt;th&gt;</code> and <code>&lt;td&gt;</code> elements should be inside a <code>&lt;tr&gt;</code>
  <li>your <code>&lt;tr&gt;</code> elements are inside a <code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, or <code>&lt;tfoot&gt;</code>
</ul>
<p>When the plugin loads it will add responsive support to any <code>&lt;table></code> it finds that meets the previous criteria. Here is a list of options you can include in your HTML that will change how the plugin handles your <code>&lt;table></code>:</p>
<ul>
  <li><strong><code>data-table-theme=""</code></strong> attribute can supply theme options. Try values of <code>default</code>, <code>default zebra</code>, <code>dark</code>, or <code>dark zebra</code>
  <li><strong><code>data-header=""</code></strong> attribute can supply a specific header name to override the default header name of a table cell. If the content of the corresponding <code>&lt;th&gt;</code> was <em>&lsquo;Canadian&rsquo;</em> you could override that text to
  <em>&lsquo;Cdn&rsquo;</em> using the data attribute <code>data-header="Cdn"</code>
</ul>
<p>This plugin will only work if your <code>&lt;table></code> is formatted properly.</p>
<pre><code class=html>&lt;table>
  &lt;caption>Title&lt;/caption>
  &lt;thead>
    &lt;tr>
      &lt;th>Header&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>
    &lt;tr>
      &lt;td>Table Cell&lt;/td>
    &lt;/tr>
  &lt;/tbody>
  &lt;tfoot>
    &lt;tr>
      &lt;th>Footer&lt;/th>
    &lt;/tr>
  &lt;/tfoot>
&lt;/table></code></pre>
<table>
  <caption>Default Table</caption>
  <thead>
    <tr>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
      <th>Column 4</th>
      <th>Column 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
    </tr>
    <tr>
      <td>Cell 6</td>
      <td>Cell 7</td>
      <td>Cell 8</td>
      <td>Cell 9</td>
      <td>Cell 10</td>
    </tr>
    <tr>
      <td>Cell 11</td>
      <td>Cell 12</td>
      <td>Cell 13</td>
      <td>Cell 14</td>
      <td>Cell 15</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
      <th>Column 4</th>
      <th>Column 5</th>
    </tr>
  </tfoot>
</table>
<!-- Zebra Striping -->
<table data-table-theme="default zebra">
  <caption>Default + Zebra</caption>
  <thead>
    <tr>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
      <th>Column 4</th>
      <th>Column 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
    </tr>
    <tr>
      <td>Cell 6</td>
      <td>Cell 7</td>
      <td>Cell 8</td>
      <td>Cell 9</td>
      <td>Cell 10</td>
    </tr>
    <tr>
      <td>Cell 11</td>
      <td>Cell 12</td>
      <td>Cell 13</td>
      <td>Cell 14</td>
      <td>Cell 15</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
      <th>Column 4</th>
      <th>Column 5</th>
    </tr>
  </tfoot>
</table>
<!-- Dark Theme -->
<table data-table-theme="dark zebra">
  <caption>Dark</caption>
  <thead>
    <tr>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
      <th>Column 4</th>
      <th>Column 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
    </tr>
    <tr>
      <td>Cell 6</td>
      <td>Cell 7</td>
      <td>Cell 8</td>
      <td>Cell 9</td>
      <td>Cell 10</td>
    </tr>
    <tr>
      <td>Cell 11</td>
      <td>Cell 12</td>
      <td>Cell 13</td>
      <td>Cell 14</td>
      <td>Cell 15</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
      <th>Column 4</th>
      <th>Column 5</th>
    </tr>
  </tfoot>
</table>

<link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/solarized_dark.min.css" rel=stylesheet>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad()</script>

<?php include("../../inc/footer.php"); ?>