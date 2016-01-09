/*
  Data modals
*/
function spawnModal(modal){
  var active = document.querySelector('[data-modal='+modal+']')
  active.style.pointerEvents = 'all'
  active.style.opacity = 1
}
function destroyModal(modal,follow){
  var active = document.querySelector('[data-modal='+modal+']')
  active.style.pointerEvents = 'none'
  active.style.opacity = 0
  if (follow !== undefined) {
    spawnModal(follow)
  }

}