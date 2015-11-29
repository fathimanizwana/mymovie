<?php
 
if(isset($_POST["form_values"]))
{
     $form_data = urldecode($_POST["form_values"]);
      
     preg_match_all('#(\w+)=([^&=]*)(?:&|$)#', $form_data, $matches, PREG_SET_ORDER); 
     $result = array();
       $i = 0;    
          foreach ($matches as $m) {
             list(, $key, $value) = $m;
          if (!strlen($value)) { 
             $i = (int)$key;
          } else {
           $result[$i][$key] = $value;
         }
}
 
        require_once("db.php");
      
      
        $userName = ($result[0]["userName"]);
        $password = ($result[0]["passwd"]);
      
      
        $sql_insert = "INSERT INTO log (User_name,Password) VALUES (
                :userName,
                :password
            )"; 
      
    try
        {
           
          $query_insert = $db->prepare( $sql_insert );
          $result_insert = $query_insert -> execute(array(
                                      
                                      ':userName'=>$userName, 
                                      ':password'=>$password));
      
        }
      
    catch(PDOException $ex)
        {
            // Note: On a production website, you should not output $ex->getMessage().
            // It may provide an attacker with helpful information about your code.
            die("Failed to run query: " . $ex->getMessage());
        } 
    if($result_insert) {
              
            $last_insert_id = $db->lastInsertId();
             
            $sql_select = "SELECT
                            
                            User_name,
                            Password,
                            
                       FROM log
                       WHERE
                       User_name = :userName";
             
             
            try
            {
             
              $query_select = $db->prepare( $sql_select );
              $query_select->execute(array(':id'=>$last_insert_id));
              $results=$query_select->fetchAll(PDO::FETCH_ASSOC);
              $json=json_encode($results);
              echo $json;
              
            }
             
            catch(PDOException $ex)
            {
                 // Note: On a production website, you should not output $ex->getMessage().
                 // It may provide an attacker with helpful information about your code.
                 die("Failed to run query: " . $ex->getMessage());
             } 
             
              //echo "You are successfully registered.";
      }  else {
            echo "error occured";
     }
}
 
?>