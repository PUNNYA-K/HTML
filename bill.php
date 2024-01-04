<html>
<body bgcolor="#a0c2fa">
<center>
<h1>Electricity Bill</h1>
<form method="post" action="#">
Customer ID:<input type="number" name="id"><br>
Name:<input type="text" name="name"><br>
Units consumed:<input type="number" name="units"><br>
<input type="submit">
<input type="reset">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST['id'];
$name=$_POST['name'];
$units=$_POST['units'];
echo"<h3>KSEB</h3>";
echo"Consumer ID:".$id."<br>";
echo"Consumer name:".$name."<br>";
echo"Units consumed:".$units."<br>";
if($units<100)
{
$amt=$unit*3;
}
elseif($units>100 && $units<=200)
{
$amt=$units*4;
}
else if($units>200 && $units<=300)
{
$amt=$units*5;
}
else
{
$amt=$units*5;
}
echo"<h4>Total amount:Rs.".($amt)."</h4><br>";
}
?>
</center>
</body>
</html>







