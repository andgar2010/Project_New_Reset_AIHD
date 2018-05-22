<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php include '../config/base_head.php';
        include '../config/base_script.php';?>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.ajax({url: "./listTicket.php", success: function(result){
            $("#div1").html(result);
        }});
    });
});
</script>
</head>
<body>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button>
<br>
<span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;</span>
<br>
<span class="fa fa-user" aria-hidden="true">&nbsp;</span>
<br>
<span class="fa fa-user fa-lg" aria-hidden="true">&nbsp;</span>
<br>
<span class="fa fa-user fa-2x" aria-hidden="true">&nbsp;</span>
<br>
<span class="fa fa-user fa-3x" aria-hidden="true">&nbsp;</span>
<br>
<span class="fa fa-user fa-4x" aria-hidden="true">&nbsp;</span>
</body>
</html>