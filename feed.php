<?php
include('db.php');

$con=mysqli_connect($hostname, $fd_user,$fd_password, $fd_database) or die ("Could not connect to mysql because ".mysqli_error());

$sql = "SELECT * FROM site_feed ORDER BY id DESC LIMIT 20"; 
$query = mysqli_query($con,$sql) or die('error');

header("Content-Type: application/rss+xml; charset=utf-8");

echo "<?xml version='1.0' encoding='UTF-8'?> 
<rss version='2.0'>
<channel>
<title>YOUR SITE TITLE</title>
<link>YOUR SITE LINK</link>
<description>YOUR SITE DESCRIPTION</description>
<language>en-us</language>"; 

while($row = mysqli_fetch_array($query))
{
$title=$row['title']; 
$link=$row['link']; 
$description=$row['description']; 

echo "<item> 
<title>$title</title>
<link>$link</link>
<description>$description</description>
</item>"; 
} 
echo "</channel></rss>"; 
?>
