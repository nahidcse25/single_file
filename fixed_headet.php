<style>@header_background_color: #333;
@header_text_color: #FDFDFD;
@alternate_row_background_color: #DDD;

@table_width: 750px;
@table_body_height: 300px;
@column_one_width: 200px;
@column_two_width: 200px;
@column_three_width: 350px;

.fixed_headers {
  width: @table_width;
  table-layout: fixed;
  border-collapse: collapse;
  
  th { text-decoration: underline; }
  th, td {
    padding: 5px;
    text-align: left;
  }
  
  td:nth-child(1), th:nth-child(1) { min-width: @column_one_width; }
  td:nth-child(2), th:nth-child(2) { min-width: @column_two_width; }
  td:nth-child(3), th:nth-child(3) { width: @column_three_width; }

  thead {
    background-color: @header_background_color;
    color: @header_text_color;
    tr {
      display: block;
      position: relative;
    }
  }
  tbody {
    display: block;
    overflow: auto;
    width: 100%;
    height: @table_body_height;
    tr:nth-child(even) {
      background-color: @alternate_row_background_color;
    }
  }
}

.old_ie_wrapper {
  height: @table_body_height;
  width: @table_width;
  overflow-x: hidden;
  overflow-y: auto;
  tbody { height: auto; }
}
</style>
<!-- IE < 10 does not like giving a tbody a height.  The workaround here applies the scrolling to a wrapped <div>. -->
<!--[if lte IE 9]>
<div class="old_ie_wrapper">
<!--<![endif]-->

<table class="fixed_headers">
  <thead>
    <tr>
      <th>Name</th>
      <th>Color</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Apple</td>
      <td>Red</td>
      <td>These are red.</td>
    </tr>
    <tr>
      <td>Pear</td>
      <td>Green</td>
      <td>These are green.</td>
    </tr>
    <tr>
      <td>Grape</td>
      <td>Purple / Green</td>
      <td>These are purple and green.</td>
    </tr>
    <tr>
      <td>Orange</td>
      <td>Orange</td>
      <td>These are orange.</td>
    </tr>
    <tr>
      <td>Banana</td>
      <td>Yellow</td>
      <td>These are yellow.</td>
    </tr>
    <tr>
      <td>Kiwi</td>
      <td>Green</td>
      <td>These are green.</td>
    </tr>
    <tr>
      <td>Plum</td>
      <td>Purple</td>
      <td>These are Purple</td>
    </tr>
    <tr>
      <td>Watermelon</td>
      <td>Red</td>
      <td>These are red.</td>
    </tr>
    <tr>
      <td>Tomato</td>
      <td>Red</td>
      <td>These are red.</td>
    </tr>
    <tr>
      <td>Cherry</td>
      <td>Red</td>
      <td>These are red.</td>
    </tr>
    <tr>
      <td>Cantelope</td>
      <td>Orange</td>
      <td>These are orange inside.</td>
    </tr>
    <tr>
      <td>Honeydew</td>
      <td>Green</td>
      <td>These are green inside.</td>
    </tr>
    <tr>
      <td>Papaya</td>
      <td>Green</td>
      <td>These are green.</td>
    </tr>
    <tr>
      <td>Raspberry</td>
      <td>Red</td>
      <td>These are red.</td>
    </tr>
    <tr>
      <td>Blueberry</td>
      <td>Blue</td>
      <td>These are blue.</td>
    </tr>
    <tr>
      <td>Mango</td>
      <td>Orange</td>
      <td>These are orange.</td>
    </tr>
    <tr>
      <td>Passion Fruit</td>
      <td>Green</td>
      <td>These are green.</td>
    </tr>
  </tbody>
</table>

<!--[if lte IE 9]>
</div>
<!--<![endif]-->