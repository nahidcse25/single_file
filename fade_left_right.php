<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
<style>
	#panel, #flip,#flip_right {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: block;
}
</style>
<div id="flip">Click to slide left panel</div>
<div id="panel">Hello world!</div>
<div id="flip_right">Click to slide right panel</div>
<script>
	$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").hide("slide", { direction: "right" }, 1000);
    });
    $("#flip_right").click(function(){
        $("#panel").show("slide", { direction: "right" }, 1000);
    });
});
</script>