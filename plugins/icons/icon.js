/*

# The Mad CSScientist's Canvas Icons
written by Tommy Hodgins

## Usage

Instead of producing many rasterized images at various sizes for embedding into your web page or site, you can use a small amount of JavaScript to use <code>canvas</code> to draw the icon we want and attach itself to the page.

This is especially useful for single-page-applications, or self-contained documents, but it does simplify the icon creation process for all sites.

*/

// Create the icon
var icon = document.createElement('canvas'),
    c = icon.getContext('2d'),
    favicon = document.createElement('link'),
    mobile = document.createElement('link')

// Set Icon Resolution
icon.width = 200
icon.height = 200

// Rounded-corner background
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
c.fill()

// Circle
c.beginPath()
c.arc(100,100,80,80,1,2,2*Math.PI)
c.closePath()

// Stroke
c.lineWidth = 2
c.strokeStyle = 'rgba(0,0,0,.3)'
c.stroke()

// Radial Gradient
var g = c.createRadialGradient(100,100,100,100,125,0)
g.addColorStop(0,'navy')
g.addColorStop(1,'dodgerblue')
c.fillStyle = g
c.fill()

// Ellipse
c.beginPath()
c.ellipse(100, 53, 52, 30, 0, 0, Math.PI*2)
c.closePath()

// Linear Gradient
var g = c.createLinearGradient(0, 0, 0, 85)
g.addColorStop(0,'rgba(255,255,255,.3)')
g.addColorStop(1,'rgba(255,255,255,0)')
c.fillStyle = g
c.fill();

// Line
c.lineWidth = '7'
c.strokeStyle = 'white'
c.beginPath()
c.lineTo(40,120)
c.lineTo(160,120)
c.closePath()
c.stroke()

// Text
c.fillStyle = 'white'
c.textAlign = 'center'
c.font = 'bold 50px "Courier New", Courier, monospace'
c.fillText('icon',100,110)

// Export canvas image and attach to head
favicon.type = 'image/x-icon'
favicon.rel = 'shortcut icon'
mobile.rel = 'apple-touch-icon'
favicon.href = mobile.href = icon.toDataURL('image/png')
document.head.appendChild(favicon)
document.head.appendChild(mobile)

// Add preview of icon to body
var preview = document.createElement('img')
preview.src = icon.toDataURL('image/png')
document.body.appendChild(preview)