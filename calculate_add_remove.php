<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<table id="myTable" class="order-list">
    <thead>
        <tr>
            <td>Name</td>
            <td>Price</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="text" name="name" />
            </td>
            <td>
                <input type="text" name="price1" />
            </td>
            <td>
                <input type="button" class="ibtnDel"  value="Delete">
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>
                <input type="button" id="addrow" value="Add Row" />
            </td>
            <td>Grand Total: TK/=<span id="grandtotal"></span>

            </td>
        </tr>
    </tfoot>
</table>
<script>
    $(document).ready(function () {
        var counter = 0;
        $("#addrow").on("click", function () {
            counter = $('#myTable tr').length - 2;
            var newRow = $("<tr>");
            var cols = "";
            cols += '<td><input type="text" name="name' + counter + '"/></td>';
            cols += '<td><input type="text" name="price' + counter + '"/></td>';
            cols += '<td><input type="button" class="ibtnDel"  value="Delete"></td>';
            newRow.append(cols);
            if (counter == 4) $('#addrow').attr('disabled', true).prop('value', "You've reached the limit");
            $("table.order-list").append(newRow);
            counter++;
        });
        $("table.order-list").on("change", 'input[name^="price"]', function (event) {
            calculateRow($(this).closest("tr"));
            calculateGrandTotal();                
        });
        $("table.order-list").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();
            calculateGrandTotal();
            counter -= 1
            $('#addrow').attr('disabled', false).prop('value', "Add Row");
        });
    });
    function calculateRow(row) {
        var price = +row.find('input[name^="price"]').val();
    }
    function calculateGrandTotal() {
        var grandTotal = 0;
        $("table.order-list").find('input[name^="price"]').each(function () {
            grandTotal += +$(this).val();
        });
        $("#grandtotal").text(grandTotal.toFixed(2));
    }
</script>