<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

$(function () {
    $('#btnInput').prop('disabled', true);

    $('#txtInput').keyup(function () {
        if ($(this).val() != '') {
            $('#btnInput').prop('disabled',false);
         }
    });
})

</script>
</head>
<body>

<form id="form1" runat="server"> 
<input type="text" id="txtInput"  /> 
<input type="submit" id="btnInput" value="Submit" />
</form>

</body>
</html>