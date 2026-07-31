<!DOCTYPE html>
<html>
<head>
    <title>Load Ajax Text File</title>
</head>
<body>

    <button onclick="loadText()">Load Text File</button>

    <div id="output"></div>

    <script>
        function loadText() {
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("output").innerHTML = xhr.responseText;
                }
            };

            xhr.open("GET", "text.txt", true);
            xhr.send();
        }
    </script>

</body>
</html>