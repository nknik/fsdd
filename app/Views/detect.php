<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Check if Enter Key is Pressed with jQuery</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).on("keypress", function(e){
        if(e.which == 13){
            $("body").append("<p>You've pressed the enter key!</p>");
        }
    });
</script>
</head>
<body>
    <p><strong>Note:</strong> Click on the viewport and press the Enter key on the keyboard. A message will be displayed.</p>
</body>
</html>