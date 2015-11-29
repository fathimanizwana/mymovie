<html>
<head>
	<!--link rel="stylesheet" href="css/bootstrap.css"-->
	<link rel="stylesheet" href="css/datepicker.css">
	<link rel="stylesheet" href="css/validationEngine.jquery.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption|Source+Serif+Pro' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style1.css">
</head>
<body bgcolor="#990066">
<div id="login">
  <div id="triangle"></div>
	<div class="container">
      <div class="row">
        <div class="registration_form">
        <div class="page-header">
         <center> <h1 >Register</h1></center>
        </div>
        <form class="form-horizontal" role="form" method="post" action="#" id="register-form">
           
           
          <div class="form-group">
              <label for="userName" class="col-sm-2 control-label">User Name:</label>
            <div class="col-sm-6">
              <input type="email" name="userName" class="form-control" id="userName" placeholder="Email" data-validation-engine="validate[required,custom[email]]" data-errormessage-value-missing="Your Email is required!" >
            </div>
          </div>
   
         <div class="form-group">
             <label for="passwd" class="col-sm-2 control-label">Password:</label>
           <div class="col-sm-6">
             <input type="password" name="passwd" class="form-control" id="passwd" placeholder="Password"              data-validation-engine="validate[required] text-input" data-errormessage-value-missing="Password is required!">
           </div>
         </div>
          
          
         <div class="form-group">
             <label for="confirm_passwd" class="col-sm-2 control-label">Confirm-Password:</label>
           <div class="col-sm-6">
             <input type="password" name="confirm_passwd" class="form-control" id="confirm_passwd" placeholder="Confirm Password" data-validation-engine="validate[required,equals[passwd]] text-input" data-errormessage-value-missing="Confirm Password is required!">
           </div>
         </div>
          
          
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
           <button type="submit" class="button"  id="register" name="submit">Submit</button>
			<a href="login.php">Login</a>
          </div>
       </div>
        
      
     </form>
     </div><!-- end for class "registration_form" -->
  
      
     </div><!-- end for class "row" -->
   </div><!-- end for class "container" -->

</div>

   	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
	<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="js/Save-data-using-Ajax-and-PDO-with-Bootstrap.js"></script>
	<style>


</style>

</body>
</html>