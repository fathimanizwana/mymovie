<?php
$link=@mysql_connect("localhost","root","");
mysql_select_db("myuser",$link);
$sql="SELECT * FROM movie";
$aResult=mysql_query($sql);


?>
 
<html>
<head>
</head>
<body bgcolor="#990066">
<center>

 <h2 class="m_3"><font color='Red'>Movie List</font></h1>
      	    <br><br>
<form name="frmForm" id="frmForm" >
<table border="1" width="30%" height="30%"> 
<tr>
<th><font color='Red'>Movie Name</font></th>
<th><font color='Red'>Genre</font></th>
<th><font color='Red'>Language</font></th>

</tr> 

<?php

while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
{ 
$MovieName         = $rows['MovieName'];
$Genre          = $rows['Genre'];
$Language         = $rows['Language'];

?>
<tr>
 
<td><b><font color='#C8C8C8'><?php echo $MovieName;?></font></b></td>
<td><b><font color='	#C8C8C8'><?php echo $Genre;?></font></b></td>
<td><b><font color='	#C8C8C8'><?php echo $Language;?></font></b></td>

 
</td>
</tr>
 
<?php } ?>
</table>
</form>
</center>
</body>
</html>


   <script>
			$(document).ready(function(){
				$("#searchmore").click(function(){
					$('#searchpanel').show();
					$("#srchresult").html(response).close();
					$("#srchresult").hide();
					$("#searchmore").hide();
				});
			});
		</script>
   <script type="text/javascript">
      jQuery(document).ready(function($) {
		  
        $('.btnSearch').click(function(){
          makeAjaxRequest();
        });

            $('form').submit(function(e){
                e.preventDefault();
                makeAjaxRequest();
                return false;
            });


	  
    </script>
	<div class="container-fluid">
    		<div id="searchpanel">
			<div class="page-header">
        <h2 align="center">Search for a Job</h2>
    </div>

	
    			<form class="form-horizontal" role="form" method="get">
       <form class="form-horizontal" role="form"> <center>
        <div class="form-group">
            <label class="control-label col-sm-3" for="jobTitle">Language:</label>
            <div class="col-sm-8">          
              <input type="text" id="jobTitle" name="jobTitle" class="form-control" placeholder="Job Title" />
            </div>
        </div>
               
      <br>

      <div class="form-group last">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default btnSearch">
                      <span class="glyphicon glyphicon-search">Search</span>
                    </button>
                </span>
      </div>                     
  </div>
  
    			</form>
				</div>
                

		
    <br>