<?php 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

<title>CHYRKA</title>
<link href="main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="m.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

<script type="text/javascript"> 
function proverka(input) { 
    var value = input.value; 
    var rep = /[-\?><,!@#$%^&*()_+=;":'a-zA-Z�-��-�-��]/; 
    if (rep.test(value)) { 
        value = value.replace(rep, ''); 
        input.value = value; 
    } 
} 
</script> 

 </head>

<body>


</body>
</html>
