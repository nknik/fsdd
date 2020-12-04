<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript Ajax GET Demo</title>
<script>
function displayFullName() {
    // Creating the XMLHttpRequest object
    var request = new XMLHttpRequest();

    // Instantiating the request object
    request.open("GET", "ajax_info.txt");

    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is complete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    // Sending the request to the server
    request.send();
}
</script>
</head>
<body>
    <div id="result">
        <p>p tag contents</p>
    </div>
    <button type="button" onclick="displayFullName()">Display</button>
</body>
</html>