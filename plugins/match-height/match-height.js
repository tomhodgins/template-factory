/*

# The Mad CSScientist's Matching Height Plugin
written by Tommy Hodgins: https://gist.github.com/tomhodgins/98c557786a250c81cc05

## Usage
This plugin will measure the height of a group of elements and assign each of them the highest value.

To group elements together, assign each element a `data-col` attribute with the same value. This way, the plugin can calculate the heights of different groups of elements on the same page.

    <div data-col=example1></div><div data-col=example1></div>
    <div data-col=example2></div><div data-col=example2></div>

In this example both `data-col=example1` elements will be matched in height, and both `data-col-example2` will be matched to each other as well.

*/

onload = onresize = function(){
  var cols = document.querySelectorAll('[data-col]'),
      encountered = []
  for (i=0;i<cols.length;i++){
    var attr = cols[i].getAttribute('data-col')
    if (encountered.indexOf(attr) == -1){
      encountered.push(attr)
    }
  }
  for (set=0;set<encountered.length;set++){
    var col = document.querySelectorAll('[data-col="'+encountered[set]+'"]'),
        group = []
    for (i=0;i<col.length;i++){
      col[i].style.height = 'auto'
      group.push(col[i].scrollHeight)
    }
    for (i=0;i<col.length;i++){
      col[i].style.height = Math.max.apply(Math,group)+'px'
    }
  }
}