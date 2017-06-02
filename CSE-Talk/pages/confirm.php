<?php
				$title ="thank you for the intermship";
		?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thank you for the intermship</title>
		
		
	</head>
	<body>
		<h1 align="center"><?php echo $title; ?> </h1>
		<h2> This are the values you enter:</h2>
    
        <!-- please never delete the next php code or the application will CRASH -->
    <?php
      $companyError = $contactError = $jobError = $descError = $cUrlError= $companyError = "";
      $closedateError = $skillsError = $cUrl = "";
      $timeError = $gpaError = $salaryError = $comdesc = "";
      $company = $contact = $job = $desc = $comDescError = "";
      $closedate = $credit = $time = $skills = $salary = $contPhone = "";
      $opendate = $opendateerror = $dWanted = $dWantedError = $cAddress = $cAddressError = $mWanted = $mWantedError = "";
      $appInst = $appInstError = $closedateError = $contEmail = $contEmailError = $contPhoneError = $opendateError ="";
      $credit = 0;
      $validate = 0;
      $insert_count = '';
      $internID = '';
      $active = 0;
      $credit=0;
      $internID = 0;
      $edit_record='';
      
    //------------------------------------------------ 
    //PHP code that connect the database from mysql to the website
      include 'dbconnect.php';
    //---------------------------------------------
    
    // the followed code check for requested record to be modificate
      $query1 = "SELECT * FROM currentrecord WHERE RecordID = 1 ";
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
      
      foreach ($result as $record)
      {
       $edit_record = $record['workingRecord'];
      }
    
    // -------------------------------------------------
    
    /* the follow code will pull record from the database, 
    vased on the requested value and assign those values 
    to the correct variables to be displayed on the form. */
    
    $query2 = "SELECT * FROM internship2 WHERE ID = $edit_record ";
      if(empty($errorMessage))
      {
        try
        {
        $statement = $db->prepare($query2);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        }                                 
        catch(PDOException $e)
        {
          $errorMessage = $e->getMessage();
        }
      }
      
      foreach ($result as $internship)
      {
                echo "ID: ";
        echo $internship['ID'];
        echo "<br>";

        echo "Company Description: ";
        echo $internship['CompanyDescription'];
        echo "<br>";

        echo "Company Name: ";
        echo $internship['CompanyName'];
        echo "<br>";

        echo "Contact Person: ";
        echo $internship['ContactPerson'];
        echo "<br>";

        echo "Company URL: ";
        echo $internship['CompanyURL'];
        echo "<br>";

        echo "Job Title: ";
        echo $internship['JobTitle'];
        echo "<br>";

        echo "Job Description: ";
        echo $internship['JobDescription'];
        echo "<br>";

        echo "Date Expired: ";
        echo $internship['DateExpired'];
        echo "<br>";

        echo "Date Posted: ";
        echo $internship['DatePosted'];
        echo "<br>";

        echo "Credit: ";
        echo $internship['Credit'];
        echo "<br>";

        echo "Work Hours: ";
        echo $internship['WorkHours'];
        echo "<br>";

        echo "Salary: ";
        echo $internship['Salary'];
        echo "<br>";

        echo "Degree Wanted: ";
        echo $internship['DegreeWanted'];
        echo "<br>";

        echo "Major Wanted: ";
        echo $internship['MajorWanted'];
        echo "<br>";

        echo "Application Instructions: ";
        echo $internship['ApplicationInstructions'];
        echo "<br>";

        echo "Contact Email: ";
        echo $internship['ContactEmail'];
        echo "<br>";

        echo "Contact Phone: ";
        echo $internship['ContactPhone'];
        echo "<br>";

        echo "Skills Needed: ";
        echo $internship['SkillsNeeded'];
        echo "<br>";

        echo "Active: ";
        echo $internship['Active'];
        echo "<br>";
        
      }
      ?>
      
	</body>
</html>