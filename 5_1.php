<!DOCTYPE html>
<html>
<head>
    <title>jQuery Mouse and Keyboard Event</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<button id="btn">Submit</button>
<p id="msg1"></p>

<br>

<input type="text" id="txt" placeholder="Enter Name">
<p id="msg2"></p>

<script>
$(document).ready(function(){

    $("#btn").click(function(){
        $("#msg1").text("Button Clicked");
    });

    $("#txt").keyup(function(){
        $("#msg2").text("Typing...");
    });

});
</script>

</body>
</html>