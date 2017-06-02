<?php
            //- please never delete the next php code or the application will CRASH 
      foreach ($_POST as $name => $value) {
         echo $name; // email, for example
         echo " = ";
         echo $value; // the same as echo $_POST['email'], in this case
      }
    
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
      $result='';
    
      
    //------------------------------------------------ 
    //PHP code that connect the database from mysql to the website
      include '../pages/dbconnect.php';
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

    $query2 = "SELECT * FROM internship2 ORDER BY ID ";
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
        $internID = $internship['ID'];
        $comdesc = $internship['CompanyDescription']; 
        $company =  $internship['CompanyName'];
        $contact =  $internship['ContactPerson'];
        $cUrl = $internship['CompanyURL'];
        $job =  $internship['JobTitle'];
        $desc =  $internship['JobDescription'];
        $closedate = $internship['DateExpired'];
        $opendate =   $internship['DatePosted'];
        $credit = $internship['Credit'];
        $time =  $internship['WorkHours'];
        $salary = $internship['Salary'];
        $dWanted =  $internship['DegreeWanted'];
        $cAddress =  $internship['Address'];
        $appInst =   $internship['ApplicationInstructions'];
        $contEmail =  $internship['ContactEmail'];
        $contPhone = $internship['ContactPhone'];
        $skills = $internship['SkillsNeeded'];
        $active = $internship['Active'];
        $ApplicationContact= $internship['ApplicationContact'];
        $ApplicationEmail= $internship['ApplicationEmail'];
        
        if($value == $internID){
          //echo $internID;
          break;
        }
        
        
      }
      $jarr = array('id' => $internID,'comdesc' => $comdesc,
                    'company' => $company, 'contact' => $ApplicationContact,
                    'cUrl' =>  $cUrl,'job' => $job,
                    'desc' => $desc,'closedate' => $closedate,
                    'opendate' => $opendate,'credit' => $credit,'time' =>$time,
                    'salary' => $salary,'dWanted' => $dWanted,'cAddress' => $cAddress,
                    'appInst' => $appInst,'contEmail' => $ApplicationEmail,
                    'contPhone' => $contPhone,'skills' => $skills,'active' => $active, );
      echo json_encode($jarr);
      
      
      
  ?>

