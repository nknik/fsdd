<!DOCTYPE html>
<html>
<head>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
  alert("connected")
  $(document).ready(function() {
     $(':input[type="submit"]').prop('disabled', true);
     $('input[type="text"]').keyup(function() {
        if($(this).val() != '') {
           $(':input[type="submit"]').prop('disabled', false);
        }
     });
 });
 function nk() {
   alert("chal chal aave !!")
 }
</script>
  <meta charset="utf-8">
  <title>Disable/enable the form submit button</title>
</head>
<body><center>
  <h1>Promice me !!</h1>
  <p>After lockdown you are going to give me treat</p> <br>
  <input type="text" name="textField" /><br> <br>
<input type="submit" onclick="nk()" value="I do Promice " />

</center></body>
</html>