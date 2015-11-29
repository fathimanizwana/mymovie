

<?php
$link=@mysql_connect("localhost","root","");
mysql_select_db("myuser",$link);
$sql="SELECT * FROM movie WHERE Language='Tamil'";
$aResult=mysql_query($sql);


?>
 
<html>
   <link rel="stylesheet" href="css/style5.css">
   

    
        <head>
		<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>
<body bgcolor="#990066">
<center>
<br>
 <h1>MOVIE LIST</h1>
      	    <br><br>
<form name="frmForm" id="frmForm" >
<table class="table-fill"> 
<tr>
<th class="text-left">Movie Name</th>
<th class="text-left">Genre</th>
<th class="text-left">Language</th>
<th class="text-left"></th>

</tr> 

<?php

while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
{ 
$MovieName         = $rows['MovieName'];
$Genre          = $rows['Genre'];
$Language         = $rows['Language'];

?>
<tr>
 
<td class="text-left"><b><?php echo $MovieName;?></font></b></td>
<td class="text-left"><b><?php echo $Genre;?></font></b></td>
<td class="text-left"><b><?php echo $Language;?></font></b></td>
<td class="text-left"><b><a href="movie.php?"><font size="4" color="	#FFD700">View</font></a></b></td>

 
</td>
</tr>
 
<?php } ?>
</table>
</form>
<a href="book.php?"><font size="4" color="	#FFD700">Back</font></a>
</center>
</body>
</html>
