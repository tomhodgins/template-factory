/*

# The Mad CSScientist's Tooltips
written by Tommy Hodgins

## Usage
Pure CSS and JavaScript tooltips for any site using the following formatting:

    data-tooltip
    data-title=""
    data-caption=""

    <span data-tooltip data-title="This is a Title" data-caption="This is the text below"></span>

*/
var tooltip = document.body.querySelectorAll('[data-tooltip]')
for (i=0;i<tooltip.length;i++){
  tooltip[i].setAttribute('data-tooltip',i)
  tooltip[i].addEventListener('mouseenter',popTip)
  tooltip[i].addEventListener('touchenter',popTip)
  tooltip[i].addEventListener('mouseleave',fadeTip)
  tooltip[i].addEventListener('touchleave',fadeTip)
}
function popTip(e){
  var tip = document.createElement('aside')
      nub = document.createElement('i'),
      title = this.getAttribute('data-title') || '',
      caption = this.getAttribute('data-caption') || ''
  tip.setAttribute('data-tip',this.getAttribute('data-tooltip'))
  tip.style.top = measureTop(e.target)+e.target.offsetHeight+7+'px'
  if (window.innerWidth > 500){
    if (measureLeft(e.target)>window.innerWidth-300){
      tip.style.left = nub.style.left = 'auto'
      tip.style.right = window.innerWidth-(measureLeft(e.target)+e.target.offsetWidth)+'px'
      nub.style.right = 20+'px'
    } else {
      tip.style.left = measureLeft(e.target)+'px'
    }
  } else {
    nub.style.left = measureLeft(e.target)-5+(e.target.offsetWidth/2-10)+'px'
    tip.style.left = 0
  }
  if (title) {
    tip.innerHTML += '<h1>'+title+'</h1>'
  }
  if (caption) {
    tip.innerHTML += '<p>'+caption+'</p>'
  }
  tip.addEventListener('click',function(){})
  document.body.appendChild(tip).appendChild(nub)
  setTimeout(function(){
    tip.style.opacity = 1
    tip.style.pointerEvents = 'none'
  },200)
}
function fadeTip(e){
  var attr = this.getAttribute('data-tooltip')
      tip = document.querySelectorAll('[data-tip="'+attr+'"]')[0]
  tip.style.opacity = 0
  tip.style.pointerEvents = 'none'
  setTimeout(function(){
    var tip = document.querySelectorAll('[data-tip="'+attr+'"]')[0]
    document.body.removeChild(tip)
  },200)
}
function measureTop(el){
  var top = 0
  while (el) {
    top += el.offsetTop
    el = el.offsetParent
  }
  return top
}
function measureLeft(el){
  var left = 0
  while (el) {
    left += el.offsetLeft
    el = el.offsetParent
  }
  return left
}