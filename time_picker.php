<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<input type="text" placeholder="Set Time" class="timepicker"/>
<input type="text" placeholder="Set Time" id="scroll"/>
<script>

$('input.timepicker').timepicker({});

$('#scroll').timepicker({ 'scrollDefault': 'now' });
</script>