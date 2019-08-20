<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
</head>
<h1>PLACEMENT RECORDS</h1>
<body></body>
<?php
include("connection.php");
echo "<br><br>";
$sql=mysqli_query($conn,"select * from placement");
while($results=mysqli_fetch_assoc($sql))
{
echo $results['name']."<br>";
echo $results['company']."<br>";
echo $results['salary']."<br>";

echo "<br><br>";
}
?>
<br><br>
<a href="index.php">Back</a>
</body>
</html>