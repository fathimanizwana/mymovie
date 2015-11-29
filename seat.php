<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
 <link rel="stylesheet" href="css/style6.css">

	<title>Seats</title>
</head>

<body bgcolor="#330033">

<div id="header">
<h1>CHOOSE YOUR SEAT</h1>
</div>
<?php
$link=@mysql_connect("localhost","root","");
mysql_select_db("myuser",$link);

$sql="SELECT seats FROM tb where status=0";
$aResult=mysql_query($sql);
echo("<h3>AVAILABLE SEATS\n</h3>");
while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
{ 
$Seats        = $rows['seats'];
echo $Seats;
echo("  ,  ");
}
?>
<br><br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SCREEN</h3>
<center>
<div id="section">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

		<div class="">
	<div style="float:left;">
		<img src="images/green.png"><input type="checkbox" name="formDoor[]" value="A1" />A1&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="A2" />A2&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="A3" />A3&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="A4" />A4&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="A5" />A5&nbsp;&nbsp;&nbsp;&nbsp;</div>&nbsp;&nbsp;
		<div style="float:left;"><div class=""><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="A6" />A6<br /></div>&nbsp;&nbsp;
		<br><br>
	</div>
		<br><br>
			<br><br>
	<div class="">
	<div style="float:left;">
		<img src="images/green.png"><input type="checkbox" name="formDoor[]" value="B1" />B1&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="B2" />B2&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="B3" />B3&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="B4" />B4&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="B5" />B5&nbsp;&nbsp;&nbsp;&nbsp;</div>&nbsp;&nbsp;
		<div style="float:left;"><div class=""><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="B6" />B6<br /></div>&nbsp;&nbsp;
	</div>	
		<br><br>
			<br><br>
		<div class="">
		<div style="float:left;">
		<img src="images/green.png"><input type="checkbox" name="formDoor[]" value="A1" />C1&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="C2" />C2&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="C3" />C3&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="C4" />C4&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="C5" />C5&nbsp;&nbsp;&nbsp;&nbsp;</div>&nbsp;&nbsp;
		<div style="float:left;"><div class=""><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="C6" />C6<br /></div>&nbsp;&nbsp;
		</div>
		<br><br>
			<br><br>
		<div class="roundedOne">
		<div style="float:left;">
		<img src="images/green.png"><input type="checkbox" name="formDoor[]" value="D1" />D1&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="D2" />D2&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="D3" />D3&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="D4" />D4&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="D5" />D5&nbsp;&nbsp;&nbsp;&nbsp;</div>&nbsp;&nbsp;
		<div style="float:left;"><div class=""><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="D6" />D6<br /></div>&nbsp;&nbsp;
		
	</div>
	<br><br>
			<br><br>
		<div class="">
		<div style="float:left;">
		<img src="images/green.png"><input type="checkbox" name="formDoor[]" value="E1" />E1&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="E2" />E2&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="E3" />E3&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="E4" />E4&nbsp;&nbsp;&nbsp;&nbsp;<br /></div>&nbsp;&nbsp;
		<div style="float:left;"><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="E5" />E5&nbsp;&nbsp;&nbsp;&nbsp;</div>&nbsp;&nbsp;
		<div style="float:left;"><div class=""><img src="images/green.png"><input type="checkbox" name="formDoor[]" value="E6" />E6<br /></div>&nbsp;&nbsp;
		
	</div>
</center>
	<br>
	<center><input id="submitbutton" type="submit" class="btn btn-success" name="formSubmit" value="Submit" /> 
	</center>
</form>
</div>

<br>
<?php
// Code downloaded from html-form-guide.com
// This code may be used and distributed freely without any charge.
//
// Disclaimer
// ----------
// This file is provided "as is" with no expressed or implied warranty.
// The author accepts no liability if it causes any damage whatsoever.
//

	if(isset($_POST['formSubmit'])) 
    {
		$aDoor = $_POST['formDoor'];
		
		
		if(empty($aDoor)) 
        {
			echo("<p>You didn't select any seat.</p>\n");
		} 
        else
        {
				
			
            $N = count($aDoor);

			echo("<h3>You selected $N seats(s): ");
			for($i=0; $i < $N; $i++)
			{
				
				echo($aDoor[$i] . " ");
				$s=$aDoor[$i];

				$sql="update tb set status='1' where seats='$s'";
                $aResult=mysql_query($sql);
				
			}
				
				
			
			echo("</h3>");
			
			$choice=$_POST['formDoor'];
			$choice1=implode(',',$choice);
			//echo $choice1;

			$sql="insert into tb values('','$choice1')";
			$aResult=mysql_query($sql);


		
		}
        
        //Checking whether a particular check box is selected
        //See the IsChecked() function below
        if(IsChecked('formDoor','A'))
        {
            echo ' A is checked. ';
        }
        if(IsChecked('formDoor','B'))
        {
            echo ' B is checked. ';
        }
        //and so on
	}
    
    function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
?>
<div><center>  <a class="button" href="tu.php">Proceed to Pay</a> 
	</center>
</div>
<div><br>
<br></div>
<style>
#header {
	font: bold 200% Comic Sans MS, cursive, sans-serif;
    background-color:#660066;
    color: #CC9933;
    text-align:center;
    padding:5px;
}

#section {
    width:700px;
	padding:40px; 
}


</style>
</body>
</html>