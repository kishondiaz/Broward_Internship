<?php
      //connection to the database
      $dsn = 'mysql:host=localhost;dbname=talk_cse';
      $username = 'test';
      $password = '1234';
      $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
      
      try
      {
        $db = new PDO($dsn,$username,$password,$options);
        $errorMessage = "";
        
      }
      catch(PDOException $e)
      {
        $errorMessage = $e->getMessage();
      }
      
      function display_db_error($errorMessage)
      {
        echo "<section>";
        echo "<h2>Error</h2>";
        echo "<p>$errorMessage</p>";
        echo "</section>";
        exit;
      }
?>