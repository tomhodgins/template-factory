/*

# The Mad CSScientist's Notifications
written by Tommy Hodgins

## Usage

*/

// Build Notification
function notification(text,style,duration){
  var wrapper = document.querySelector('[data-wrapper]'),
      text = text || 'Lorem ipsum dolor sit amet',
      style = style || 'default',
      duration = duration || 0,
      num = parseInt(sessionStorage.notification) || 0,
      template = '\
        <aside data-notification='+num+' data-theme='+style+'>\
          <input type=button value=&times; onclick=removeNotification('+num+')>\
          <p>'+text+'</p>\
        </aside>';
  addNotification(template,num)
  if (duration !== 0){
    removeNotification(num,duration)
  }
  num = num+1
  sessionStorage.notification = num
}
function addNotification(template,num){
  var wrapper = document.querySelector('[data-wrapper]')
  wrapper.insertAdjacentHTML('beforeEnd',template)
  setTimeout(function(){
    var aside = document.querySelectorAll('[data-notification="'+num+'"]')[0];
    aside.className += ' displayed'
  },10)
}
function removeNotification(num,duration){
  var wrapper = document.querySelector('[data-wrapper]'),
      aside = document.querySelectorAll('[data-notification="'+num+'"]')[0],
      duration = duration || 1;
  setTimeout(function(){
    aside.className += ' deleted'
  },(duration-1)*1000)
  setTimeout(function(){
    wrapper.removeChild(aside)
  },duration*1000)
}