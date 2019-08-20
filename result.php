<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<center>
<h1>RESULT </h1>
</head>
<body>
<center>
<form action="" method="GET">
<center>
ENTER YOUR ROLL :<input type="text" name="roll" value=""><br><br>
<input type="submit" name="submit" value="Submit"><br><br> 
</form>
<?php
$roll=$_GET[roll];
$fetch="select * from academic where roll=$roll";
$q=mysqli_query($conn,$fetch);
$result=mysqli_fetch_assoc($q);
echo "ROLL  : ".$result[roll];
echo "<br><br>";
echo "NAME  : ".$result[name];
echo "<br><br>";
echo "TOTAL MARKS IN %: ".$result[marks];
echo "<br><br>";
if ($result[marks]>40)
{
    echo "STATUS :PASS";
}
else if($roll="")
{
    echo "";
}
else
{
    echo "STATUS :FAIL";
}
?>
<br><br>
<a href="index.php">Back</a>
</body>
</html>