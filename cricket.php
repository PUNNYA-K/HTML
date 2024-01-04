<html>
<body bgcolor="#aef5ca">
<center>
<?php
$name=["Virat kohli","Rohit sharma","Ravindra jadeja","Shikhar dhawan","Jasprit bumrah","Sachin tendulkar","Yadaw","Aswin","Imran malik","Pandey"];
echo"<h2>CRICKET TEAM PLAYERS NAME</h2>
<table border='1px'>
<tr><th>Sl.no</th>
<th>NAME</th></tr>";
for($i=0;$i<10;$i++)
{
$sl=$i+1;
echo"<tr><td>$sl</td><th>$name[$i]</th></tr>";
}
echo"</table>";
?>
</center>
</body>
</html>
