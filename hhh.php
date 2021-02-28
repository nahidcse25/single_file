 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
 <script src="/floatThead/dist/jquery.floatThead.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/1.2.11/jquery.floatThead.js"></script>
<style type='text/css'>
    table.collapse {
        border-collapse:collapse;
    }
    body {
        padding-top: 81px;
    }
     
    .wrap {
        height: 250px;
        overflow-y:scroll;
    }
</style>
 <table class="table demo0 large template table-bordered table-striped">
                        <thead>
                        <tr>
                            <th rowspan="2"><a href="#" id='demoHeader1'>Header 1</a></th>
                            <th><a href="#" id='demoHeader2'>Header 2</a></th>
                            <th><a href="#" id='demoHeader3'>Header...3</a></th>
                        </tr>
                        </thead>
                        <tbody> <tr> <td>Cell Content 1</td> <td>Cell Content 2</td> <td>Cell Content 3</td> </tr> <tr> <td>More Cell Content 1</td> <td>More Cell Content 2</td> <td>More Cell Content 3</td> </tr> <tr> <td>Even More Cell Content 1</td> <td>Even More Cell Content 2</td> <td>Even More Cell Content 3</td> </tr> <tr> <td>And Repeat 1</td> <td>And Repeat 2</td> <td>And Repeat 3</td> </tr> <tr> <td>Cell Content 1</td> <td>Cell Content 2</td> <td>Cell Content 3</td> </tr> <tr> <td>More Cell Content 1</td> <td>More Cell Content 2</td> <td>More Cell Content 3</td> </tr> <tr> <td>Even More Cell Content 1</td> <td>Even More Cell Content 2</td> <td>Even More Cell Content 3</td> </tr> <tr> <td>And Repeat 1</td> <td>And Repeat 2</td> <td>And Repeat 3</td> </tr> <tr> <td>Cell Content 1</td> <td>Cell Content 2</td> <td>Cell Content 3</td> </tr> <tr> <td>More Cell Content 1</td> <td>More Cell Content 2</td> <td>More Cell Content 3</td> </tr> <tr> <td>Even More Cell Content 1</td> <td>Even More Cell Content 2</td> <td>Even More Cell Content 3</td> </tr> <tr> <td>And Repeat 1</td> <td>And Repeat 2</td> <td>And Repeat 3</td> </tr> <tr> <td>Cell Content 1</td> <td>Cell Content 2</td> <td>Cell Content 3</td> </tr> <tr> <td>More Cell Content 1</td> <td>More Cell Content 2</td> <td>More Cell Content 3</td> </tr> <tr> <td>Even More Cell Content 1</td> <td>Even More Cell Content 2</td> <td>Even More Cell Content 3</td> </tr> <tr> <td>And Repeat 1</td> <td>And Repeat 2</td> <td>And Repeat 3</td> </tr> <tr> <td>Cell Content 1</td> <td>Cell Content 2</td> <td>Cell Content 3</td> </tr> <tr> <td>More Cell Content 1</td> <td>More Cell Content 2</td> <td>More Cell Content 3</td> </tr> <tr> <td>Even More Cell Content 1</td> <td>Even More Cell Content 2</td> <td>Even More Cell Content 3</td> </tr></tbody>
                    </table>

                    <script type="text/javascript">
    $(function(){

        $('table').floatThead({
            top: pageTop, //this is a global fn defined on the demo site, you dont need it!
            position: 'absolute',
            scrollContainer: true
        });
        //  alignmentDebugger($('table'))
        var useAbs = true;
        $("#makeFixed").on("click", function(e){
            e.preventDefault();
            useAbs = !useAbs;
            $('table').floatThead('destroy').floatThead({
                top: pageTop, //this is a global fn defined on the demo site, you dont need it!
                position: useAbs ? 'absolute': 'fixed',
                scrollContainer: true
            });
            $(this).text("Re-initialize plugin with "+(useAbs ? "fixed" : "absolute") +" positioning");
            $("#posType").text("position: "+(useAbs ? "absolute" : "fixed"))
        })
    });

</script>