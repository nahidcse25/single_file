<style>
    table.scroll {
    width: 100%;
    border-spacing: 0;
    border: 2px solid black;
}

table.scroll th,
table.scroll td,
table.scroll tr,
table.scroll thead,
table.scroll tbody { display: block; }

table.scroll thead tr {
    /* fallback */
    width: 97%;
    /* minus scroll bar width */
    width: -webkit-calc(100% - 16px);
    width:    -moz-calc(100% - 16px);
    width:         calc(100% - 16px);
}

table.scroll tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

table.scroll tbody {
    height: 100px;
    overflow-y: auto;
    overflow-x: hidden;
}

table.scroll tbody td,
table.scroll thead th {
    width: 19%;
    float: left;
    border-right: 1px solid black;
}

thead tr th { 
    height: 30px;
    line-height: 30px;
    /*text-align: left;*/
}

tbody { border-top: 2px solid black; }

tbody td:last-child, thead th:last-child {
    border-right: none !important;
}
</style><table class="scroll">
    <thead>
        <tr>
            <th>Head 1</th>
            <th>Head 2</th>
            <th>Head 3</th>
            <th>Head 4</th>
            <th>Head 5</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Lorem ipsum</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
        </tr>
        <tr>
            <td>Content 1</td>
            <td>Content 2</td>
            <td>Content 3</td>
            <td>Content 4</td>
            <td>Content 5</td>
        </tr>
    </tbody>
</table>