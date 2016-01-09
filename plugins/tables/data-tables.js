/*

# The Mad CSScientist's Responsive Tables
written by Tommy Hodgins

## Usage
Add a `<script>` tag to this file in your HTML to responsify your tables.

    <script src=data-tables.js></script>

This plugin will work as long as your table is formatted properly:

    <table>
      <caption>Title</caption>
      <thead>
        <tr>
          <th>Header</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Table Cell</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>Footer</th>
        </tr>
      </tfoot>
    </table>

*/

var tables = document.getElementsByTagName('table');
for (i=0;i<tables.length;i++){
  var headers = tables[i].getElementsByTagName('th'),
      rows = tables[i].getElementsByTagName('tr'),
      header = [];
  if (tables[i].getAttribute('data-table') == undefined) {
    tables[i].setAttribute('data-table',i)
  }
  if (tables[i].getAttribute('data-table-theme') == undefined) {
    tables[i].setAttribute('data-table-theme','default')
  }
  for (h=0;h<headers.length;h++){
    header.push(headers[h].innerHTML);
  }
  for (r=0;r<rows.length;r++){
    var cells = rows[r].getElementsByTagName('td');
    for (c=0;c<cells.length;c++){
      if (cells[c].getAttribute('data-header') == undefined && header[c] !== undefined) {
        cells[c].setAttribute('data-header',header[c]);
      }
    }
  }
}