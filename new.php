create a webpage using html and php that initialises 2 integer values (a and b) and displays the value of the base to the power of b 
execute the same program for different values :
a=2, b=5
a=3, b=10
a=5, b=3

<html>
<head>
    <title>Power Calculator</title>
</head>
<body>

<?php

 $a=2
 $b=5
 $pow= pow($a,$b)
echo $pow
?>
</body>
</html>