<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show</title>
  </head>
  <body>
    <?php
    
      foreach ($_POST as $name => $value) {
         echo $name; // email, for example
         echo " = ";
         echo $value; // the same as echo $_POST['email'], in this case
      }
      
      
    
  
    //------------------------------------------------ 
    //PHP code that connect the database from mysql to the website
      include 'dbconnect.php';
    //---------------------------------------------
    
    // the followed code check for requested record to be modificate
      $query1 = "UPDATE `currentrecord` SET `workingRecord`= $value WHERE RecordID =1  ";
      if(empty($errorMessage))
      {
        try
        {
        $statement = $db->prepare($query1);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        }                                 
        catch(PDOException $e)
        {
          $errorMessage = $e->getMessage();
        }
      }
      
    // call the edit form
    
    header ("Location: edit.php");
    
    // -------------------------------------------------
    ?>
  </body>
</html>


