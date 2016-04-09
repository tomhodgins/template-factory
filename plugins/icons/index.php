<?php
  $template = 'single';
  $template_title = 'Canvas Icons';
  $template_theme = 'code';
?>
<?php include("../../inc/header.php"); ?>
<h1>Canvas Icons</h1>
<h2>Drawing favicon and touch icons with JavaScript</h2>
<p>Instead of producing many rasterized images at various sizes for embedding into your web page or site, you can use a small amount of JavaScript to use <code>canvas</code> to draw the icon we want and attach itself to the page.</p>
<p>This is especially useful for single-page-applications, or self-contained documents, but it does simplify the icon creation process for all sites.</p>
<p>You can check out the code in <code>icon.js</code></p>
<h2>Icon Editing Walkthrough</h2>
<h3>Creating the Icon</h3>
<pre><code class=javascript>// Create the icon
var icon = document.createElement('canvas'),
    c = icon.getContext('2d'),
    favicon = document.createElement('link'),
    mobile = document.createElement('link')</code></pre>
<p>Here we create a new <code>canvas</code> tag, as well as create two link elements that will eventually hold our rendered icons.</p>
<h3>Icon Resolution</h3>
<pre><code class=javascript>// Set Icon Resolution
icon.width = 200
icon.height = 200</code></pre>
<p>Here we set the icon to <code>200&times;200</code>. Since the values below relate to this resolution, it's best to set this before designing your icon. You <em>could</em> create variables for <code>iconWidth</code> and <code>iconHeight</code> and make your icon resolution independent - but it's much easier to set the resolution to the maximum you need and enter the values directly, especially when in development.</p>
<h3>Creating a Rounded Rectangle</h3>
<pre><code class=javascript>// Rounded-corner background
c.fillStyle = '#222'
c.beginPath()
c.moveTo(10,0)
c.lineTo(190,0)
c.quadraticCurveTo(200,0,200,10)
c.lineTo(200,190)
c.quadraticCurveTo(200,200,190,200)
c.lineTo(10,200)
c.quadraticCurveTo(0,200,0,190)
c.lineTo(0,10)
c.quadraticCurveTo(0,0,10,0)
c.closePath()
c.fill()</code></pre>
<p>If you want a rounded rectangle, you need to use code like this to draw the outline of that shape.</p>
<h3>Drawing Circles</h3>
<pre><code class=javascript>// Circle
c.beginPath()
c.arc(100,100,80,80,1,2,2*Math.PI)
c.closePath()</code></pre>
<p>There are a few ways to draw circles with <code>canvas</code>, this one creates an arc that is a perfect circle.</p>
<h3>Drawing Strokes</h3>
<pre><code class=javascript>c.lineWidth = 2
c.strokeStyle = 'rgba(0,0,0,.3)'
c.stroke()</code></pre>
<p>A <em>stroke</em> adds an outline around a shape. In this case, a <code>2px</code> wide stroke that is mostly transparent black.</p>
<h3>Using Radial Gradients</h3>
<pre><code class=javascript>// Radial Gradient
var g = c.createRadialGradient(100,100,100,100,125,0)
g.addColorStop(0,'navy')
g.addColorStop(1,'dodgerblue')
c.fillStyle = g
c.fill()</code></pre>
<p>To create a radial gradient we need to define a new gradient, add our color stopes, </p>
<h3>Drawing an Ellipse</h3>
<pre><code class=javascript>// Ellipse
c.beginPath()
c.ellipse(100, 53, 52, 30, 0, 0, Math.PI*2)
c.closePath()</code></pre>
<p>To create an ellipse you can use code like above. In this example, the ellipse serves as a non-circular highlight for our last shape.</p>
<h3>Using a Linear Gradient</h3>
<pre><code class=javascript>// Linear Gradient
var g = c.createLinearGradient(0, 0, 0, 85)
g.addColorStop(0,'rgba(255,255,255,.3)')
g.addColorStop(1,'rgba(255,255,255,0)')
c.fillStyle = g
c.fill()</code></pre>
<p>Similar to our radial gradient, we need to create a gradient, define our color stops, and then fill our shape.</p>
<h3>Drawing Lines</h3>
<pre><code class=javascript>// Line
c.lineWidth = '7'
c.strokeStyle = 'white'
c.beginPath()
c.lineTo(40,120)
c.lineTo(160,120)
c.closePath()
c.stroke()</code></pre>
<p>To draw a line, define a width, stroke, and then give the coordinates of your line.</p>
<h3>Writing Text</h3>
<pre><code class=javascript>// Text
c.fillStyle = 'white'
c.textAlign = 'center'
c.font = 'bold 50px "Courier New", Courier, monospace'
c.fillText('icon',100,110)</code></pre>
<p>Text should be avoided if possible, as fonts and spacing vary by system. If letterforms as text are required, leave extra 'wiggle room' in your design. Other things that I have found help: you can effectively kern letters by creating multiple text objects and positioning them manually, also using <code>textAlign = 'center'</code> also helps minimize cross-platform placement differences.</p>
<h3>Attach icon to Document</h3>
<pre><code class=javascript>// Export canvas image and attach to head
favicon.type = 'image/x-icon'
favicon.rel = 'shortcut icon'
mobile.rel = 'apple-touch-icon'
favicon.href = mobile.href = icon.toDataURL('image/png')
document.head.appendChild(favicon)
document.head.appendChild(mobile)</code></pre>
<p>This code exports the latest state of the canvas (with all our design applied) and exports that as a data URL. In order to attach this image to the page as favicon and touch icon, we need to add this image data to two <code>link</code> tags, and then attach those to the <code>head</code> of the document.</p>
<h3>Previewing the Icon on Page (for development)</h3>
<pre><code class=javascript>// Add preview of icon to body
var preview = document.createElement('img')
preview.src = icon.toDataURL('image/png')
document.body.appendChild(preview)</code></pre>
<p>If you want to preview the icon as you edit it, adding (or enabling) this bit of code will also append an additional image to the <code>body</code> of your HTML, allowing you to see the icon in its full resolution.</p>
<style>
  img {
    display: block;
    width: auto;
    max-width: 100%;
    margin: 0 auto 2em auto;
  }
</style>
<script src=icon.js></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/solarized_dark.min.css" rel=stylesheet>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad()</script>

<?php include("../../inc/footer.php"); ?>