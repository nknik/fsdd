<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
         $('p').each(function() {
         var html = $(this).html();
         var word = html.substr(0, html.indexOf(" "));           
         var rest = html.substr(html.indexOf(" "));
         $(this).html(rest).prepend($("<span/>").html("<b>"+word+"</b>") );
  });
});
</script>
</head>
<body>
<p>Harry Potter and the Philosopher's Stone</p>
<p>Harry Potter and the Chamber of Secrets</p>
<p>Harry Potter and the Prisoner of Azkaban</p>
<p>Harry Potter and the Goblet of Fire </p>
<p>Harry Potter and the Order of the Phoenix </p>
<p>Harry Potter and the Half-Blood Prince</p>
<p>Harry Potter and the Deathly Hallows – Part 1</p>
<p>Harry Potter and the Deathly Hallows – Part 2</p>

</body>
</html>