<!doctype html>
<!--Version 6-->
<html>
	<head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Internship Management</title>
    <script src="../js/jquery-1.12.0.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="../css/slidercss.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link type="text/css" rel="stylesheet" href="../css/stylesheet.css">
    <link type="text/css" rel="stylesheet" href="../css/adjust.css"> -->

    <link type="text/css" rel="stylesheet" href="../css/internshipmanegment_editstyle.css"> 
    <!--    <script src="../js/joblib.js"></script>-->
    
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
        $mWanted =  $internship['MajorWanted'];
        $appInst =   $internship['ApplicationInstructions'];
        $contEmail =  $internship['ContactEmail'];
        $contPhone = $internship['ContactPhone'];
        $skills = $internship['SkillsNeeded'];
        $active = $internship['Active'];
       
      }
    
    

    
    
    //--------------------------------
		function resetErrors()
		{
		  $companyError = $contactError = $jobError = $descError = $cUrlError= $companyError = "";
		  $closedateError = $skillsError = $cUrl = "";
		  $timeError = $gpaError = $salaryError = $comdesc = "";
		  $company = $contact = $job = $desc = $comDescError = "";
		  $closedate = $time = $skills = $salary = $contPhone = "";
		  $opendate = $opendateerror = $dWanted = $dWantedError = $cAddress = $cAddressError = $mWanted = $mWantedError = '';
		  $appInst = $appInstError = $closedateError = $contEmail = $contEmailError = $contPhoneError = $opendateError ='';
		  $credit = 1;
		  $validate = 0;
		  $insert_count = '';
		  $internID = '';
		  $active ='';
      $credit='';
      $edit_record='';
		}	
		
      //if summit click validate
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
                  
          $validate = 0;
          $edit_record = htmlspecialchars(stripslashes(trim($_POST['ID'])));
          $comdesc = htmlspecialchars(stripslashes(trim($_POST['comdesc'])));
          $company = htmlspecialchars(stripslashes(trim($_POST['company']))); 
          $contact = htmlspecialchars(stripslashes(trim($_POST['contact']))); 
          $cUrl = htmlspecialchars(stripslashes(trim($_POST['cUrl'])));
          $job = htmlspecialchars(stripslashes(trim($_POST['job']))); 
          $desc = htmlspecialchars(stripslashes(trim($_POST['desc']))); 
          $closedate = htmlspecialchars(stripslashes(trim($_POST['closedate'])));
          $opendate = htmlspecialchars(stripslashes(trim($_POST['opendate'])));  
          $credit = isset($_POST['credit']);                                     
          $time = htmlspecialchars(stripslashes(trim($_POST['time']))); 
          $salary = htmlspecialchars(stripslashes(trim($_POST['salary'])));
          $dWanted = htmlspecialchars(stripslashes(trim($_POST['dWanted']))); 
          $cAddress = htmlspecialchars(stripslashes(trim($_POST['cAddress']))); 
          $mWanted = htmlspecialchars(stripslashes(trim($_POST['mWanted']))); 
          $appInst = htmlspecialchars(stripslashes(trim($_POST['appInst'])));  
          $contEmail = htmlspecialchars(stripslashes(trim($_POST['contEmail']))); 
          $contPhone = htmlspecialchars(stripslashes(trim($_POST['contPhone'])));
          $skills = htmlspecialchars(stripslashes(trim($_POST['skills'])));
          $active = isset($_POST['activeBox']);
          // check form errors DONT TOUCH
          
           if(isset($_POST["resetbtn"]))
           {
            header("Location:admin.php");
           }
           
          
          if(empty($_POST["job"]))
          {
          $jobError = "A job title is required";
          $validate = 1;
          }

          if(empty($_POST["desc"]))
          {	
          $descError = "A description is required";
          $validate = 1;
          }

          if(empty($_POST["company"] ))
          {
          $companyError = "Must select a company.";
          $validate = 1;
          
          }

          if(empty($_POST["cUrl"]))
          {	
          $cUrlError = "A URL is required";
          $validate = 1; 
          }

          if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["cUrl"]))
          {
          $cUrlError = "URL not in correct format";
          $validate = 1;
          }

          if(empty($_POST["comdesc"]))
          {
          $comDescError = "A company description is Requiered";
          $validate = 1;
          }

          if(empty($_POST["cAddress"]))
          {
          $cAddressError = "An address is required";
          $validate = 1;
          }

          if(empty($_POST["dWanted"]))
          {
          $dWantedError = "A degree must be entered";
          $validate = 1;
          }

          if(empty($_POST["mWanted"] ))
          {
          $mWantedError = "A major must be selected";
          $validate = 1;
          }

          if(empty($_POST["contact"]))
          {
          $contactError = "A contact must be selected";
          $validate = 1;
          }

          if(empty($_POST["contEmail"]))
          {
          $contEmailError = "An Email must be entered";
          $validate = 1;
          }

          if (!filter_var($contEmail, FILTER_VALIDATE_EMAIL)) 
          {
          $contEmailError = "Invalid email format"; 
          $validate = 1;
          }

          if(empty($_POST["contPhone"]))
          {
          $contPhoneError = "A phone number must be entered";
          $validate = 1;
          }

          if (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $contPhone)) 
          {
          $contPhoneError = "Invalid phone number or format";
          $validate = 1;
          }

          if(empty($_POST["salary"]))
          {
          $salaryError = "A salary must be entered";
          $validate = 1;
          }

          if(!is_numeric($_POST["salary"]))
          {
          $salaryError = "Invalid input, a number must be enter";
          $validate = 1;
          }	

          else if($_POST["salary"] < 0)
          {
          $salaryError = "0 is the minimun amount acepted";
          $validate = 1;
          }

          if(empty($_POST["time"]))
          {
          $timeError = "A time  commitment must be entered";
          $validate = 1;
          }

          if(!is_numeric($_POST["time"]))
          {
          $timeError = "Invalid input, a number must be enter";
          $validate = 1;
          }

          else if($_POST["time"] < 1)
          {
          $timeError = "Minimun 1 hour";
          $validate = 1;
          }

           if(empty($_POST["closedate"]))
          {
          $closedateError = "An expire date must be entered";
          $validate = 1;
          }
          else if(!empty($_POST["closedate"]) && !empty($_POST["opendate"]))
          {
            if($closedate<$opendate)
            {
              $closedateError = "Expire date has to be after post date.";
              $validate =1;
            }
          }
          
          if(empty($_POST["opendate"]))
          {
          $opendateError = "A post date must be entered";
          $validate = 1;
          }
          

          if(empty($_POST["skills"]))
          {
          $skillsError = "Skills must be entered";
          $validate = 1;
          }

          if(empty($_POST["appInst"]))
          {
          $appInstError = "Instructions must be entered";
          $validate = 1;
          }
          
          if ($validate == 1)
          {
            echo "form with invalid values, ";
          }
          
          if ($validate == 0)
          {
           if(!empty($errorMessage))
           {
             display_db_error($errorMessage);
           }
           else
           { 
             $query = "UPDATE `internship2` SET `JobTitle` = '$job', `JobDescription` = '$desc', `CompanyURL` = '$cUrl', `DatePosted` = '$opendate', `DateExpired` = '$closedate', `SkillsNeeded` = '$skills', `ApplicationInstructions` = '$appInst', `ContactPerson` = '$contact', `ContactEmail` = '$contEmail', `ContactPhone` = '$contPhone', `Salary` = '$salary', `WorkHours` = '$time', `Credit` = '$credit', `CompanyDescription` = '$comdesc', `CompanyName` = '$company', `Address` = '$cAddress', `DegreeWanted` = '$dWanted', `MajorWanted` = '$mWanted', `Active` = '$active' WHERE `internship2`.`ID` = $edit_record;";
          
          $insert_count = $db->exec($query);
          if ($insert_count < 1) {
              $errorMessage = 'Error inserting Category.';
            } 
            else 
              {
                // Redirect to Category listing page
                header('Location: update_done.php');
              }
            }
          }
            
          
        }
    ?>
    
  </head>
  <body>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript">
            $(document).bind('mobileinit',function(){
						$.mobile.changePage.defaults.changeHash = false;
						$.mobile.hashListeningEnabled = false;
						$.mobile.pushStateEnabled = false;
						$.mobile.keepNative = "select,input";
					});
    </script> 
<!--        <script src="../js/jquery.mobile-1.4.5.min.js"></script>-->
        
        <nav class="navbar navbar-default">
        	<div class="container-fluid nav_container">
          	<div class="navbar-header">
            	<ul class="nav navbar-nav navbar_li">
              	<li><img src="../assets/talk_logo.png" alt="image" class="navbar_icon_img"/></li>
              	<li class="navbar_right"><a href="#">News</a></li>
                <li class="navbar_right"><a href="#">Library</a></li>
                <li class="navbar_right"><a href="#">Jobs</a></li>
                <li class="navbar_right"><a href="#">People</a></li>
                <li class="navbar_right"><a href="#">Login</a></li>
                  
              	<li>
                	<ul class="login_nav">
                      <li class="search_li">

                          <form class="navbar-form navbar-static-top" role="search">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default btn_search"><i class="fa fa-search"></i></button>
                          </form>
                      </li>
                    
                   </ul>
              	</li>
                <li><button class="btn btn-default dropdown-toggle menu_button"><i class="fa fa-bars"></i></button></li>
              </ul>
            </div>
          </div>  
          <div class="createblock col-md-8 col-lg-10">
            <form>
              <span class="hello_professor">Hello <span class="admin_name">Professor</span></span> 
<!--              <input type="submit" value="Create" class="createBtn btn btn-default">-->
            </form>
          </div>
        </nav>
        <div class="container-fluid">
          <div class="row main_row">
            <!--*IMPORTANT FIX 
                First Nested bootstrap contains the main content please get the 
                   "col" and offsets please classes and its class to master-->
            <div  class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-12 col-md-offset-1 col-md-9 col-lg-offset-1 col-lg-10">
              <div class="row wrapper_row"> 
                  <!-- *IMPORTANT FIX 
                  Second Nested bootstrap contains the main content please get the "col" classes and its class to master to master *IMPORTANT FIX-->
                   <div class="col-xs-11  col-sm-10 col-md-12 col-lg-12 form_container">
                      <div class="row form_rowcontainer">
                        <!--*IMPORTANT FIX
                        Thrid Nested bootstrap contains the main content please get the "col" classes and its class to master to master *IMPORTANT FIX-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<!--  FORM START HERE   -->

                          <form class="col-xs-12 col-sm-12 col-sm-offset-1 col-md-12 col-lg-12 formpreview_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" name="internCreate" novalidate>
                          <!--*IMPORTANT FIX 
                          Please get all the tabindexing in there prosective order to master 
                          this fixex TABING in the Correct order   
                           -->
                
                            <!--Tabindex 1 ID-->
                            
                            <fieldset class="col-sm-8 col-md-10 col-lg-12 leftside">
                            <label for="ID" class="col-sm-12 col-md-3 col-lg-3 form_label">ID </label>
                            <input tabindex="1" id="ID" name="ID" class=" col-sm-12 col-md-5 col-lg-5 form_input" type="text" value="<?php echo $internID; ?>" placeholder="">
                            </fieldset>
                            <!--Tabindex 11 contact Email-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 rightside">
                            <label for="contEmail" class=" col-sm-12 col-md-5 col-lg-3 form_label">Contact Email</label>
                            <input placeholder="address@mail.com" tabindex="11" class="col-sm-12 col-md-5 col-lg-5 form_input" type="text" name="contEmail" id="contEmail" value = "<?php echo $contEmail; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $contEmailError?></span>
                            </fieldset>
                            <!--Tabindex 2 job title Email-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 leftside">
                            <label for="job" class="col-sm-12 col-md-5 col-lg-3 form_label">Job Title</label>
                            <input tabindex="2" class=" col-sm-12 col-md-5 col-lg-5 form_input" type="text" name="job" id="job" value = "<?php echo $job; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $jobError;?></span>
                            </fieldset>
                            <!--Tabindex 12 contact phone-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 rightiside">
                            <label for="contPhone" class="col-sm-12 col-md-5 col-lg-3 form_label">Contact Phone</label>
                            <input placeholder="###-###-####" tabindex="12" class="col-sm-12 col-md-5 col-lg-5 form_input" type="text" name="contPhone" id="contPhone" value = "<?php echo $contPhone; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $contPhoneError?></span>
                            </fieldset>
                            <!--Tabindex 3 job description-->
                            <fieldset class=" col-sm-12 col-md-5 col-lg-12 leftside">
                            <label for="desc" class="col-sm-12 col-md-5 col-lg-3 form_label">Job Description</label>
                            <textarea tabindex="3" class="col-sm-12 col-md-5 col-lg-5 form_input" rows="5" cols="22" name="desc" id="desc"><?php echo $desc; ?></textarea><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $descError?></span>
                            </fieldset>
                            <!--Tabindex 13 salary-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 rightside">  
                            <label for="salary" class="col-sm-12 col-md-5 col-lg-3 form_label">Salary</label>
                            <input tabindex="13" class="col-sm-12 col-md-5 col-lg-5 form_input" type="text" name="salary" id="salary" value = "<?php echo $salary; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $salaryError?></span>
                            </fieldset>
                            <!--Tabindex 4 company name-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 leftside">
                            <label for="company" class="col-sm-12 col-md-5 col-lg-3 form_label">Company Name</label>
                            <input tabindex="4" name="company" id="company" class="col-sm-12 col-md-5 col-lg-5 form_input" type="text" value = "<?php echo $company; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $companyError;?></span> 
                            </fieldset>
                            <!--Tabindex 14 work hours-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 rightside">
                            <label for="time" class="col-sm-12 col-md-5 col-lg-3 form_label">Work Hours</label>
                            <input tabindex="14" class="col-sm-12 col-md-5 col-lg-5 form_input" type="text" name="time" id="time" value = "<?php echo $time; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $timeError?></span>
                            </fieldset>
                            <!--Tabindex 5 company url-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 leftside">
                            <label for="cUrl" class="col-sm-12 col-md-5 col-lg-3 form_label">Company URL</label>
                            <input placeholder="broward.edu" tabindex="5" class="col-sm-12 col-md-5 col-lg-5 form_input" type="text" name="cUrl" id="cUrl" value = "<?php echo $cUrl; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $cUrlError?></span>
                            </fieldset>
                            <!--Tabindex 15 credit-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 rightside">
                            <label for="credit" class="col-sm-12 col-md-5 col-lg-3 form_label">Credit</label>
                            <input tabindex="15" id="credit" name="credit" class="col-sm-12 col-md-5 col-lg-3 form_input credit" type="checkbox" value="<?php echo $credit; ?>" >
                            </fieldset>
                            
                            <div class="clearfix clear"></div>
                            <!--Tabindex 6 company description-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 leftside">
                            <label for="comdesc" class="col-sm-12 col-md-5 col-lg-3 form_label">Company Description</label>
                            <textarea tabindex="6" class="col-sm-12 col-md-5 col-lg-5 form_input" rows="5" cols="22" name="comdesc" id="comdesc" ><?php echo $comdesc; ?></textarea><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $comDescError?></span>
                            </fieldset>
                            <!--Tabindex 16 date posted-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 rightside">
                            <label for="opendate" class="col-sm-12 col-md-5 col-lg-3 form_label">Date Posted</label>
                            <input tabindex="16" class="col-sm-12 col-md-5 col-lg-5 form_input" id="opendate" type="date" name="opendate" value = "<?php echo $opendate; ?>" ><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $opendateError?></span>
                            </fieldset>
                            <!--Tabindex 7 address-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 leftside">
                            <label for="cAddress" class="col-sm-12 col-md-5 col-lg-3 form_label">Address</label>
                            <input tabindex="7" class="col-sm-12 col-md-5 col-lg-5 form_input" type="text" name="cAddress" id="cAddress" value = "<?php echo $cAddress; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $cAddressError?></span>
                            </fieldset>
                            <!--Tabindex 17 date expired-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 rightside">
                            <label for="closedate" class="col-sm-12 col-md-5 col-lg-3 form_label">Date Expired</label>
                            <input tabindex="17" class="col-sm-12 col-md-5 col-lg-5 form_input" id="closedate" type="date" name="closedate" value = "<?php echo $closedate; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $closedateError?></span>
                            </fieldset>
                            <!--Tabindex 8 degree wanted-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 leftside">
                            <label for="dWanted" class="col-sm-12 col-md-5 col-lg-3 form_label">Degree Wanted</label>
                            <input tabindex="8" class="col-sm-12 col-md-5 col-lg-5 form_input" type="text" name="dWanted" id="dWanted" value = "<?php echo $dWanted; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $dWantedError?></span> 
                            </fieldset>
                            <!--Tabindex 18 skills needed-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 righttside">
                            <label for="skills" class="col-sm-12 col-md-5 col-lg-3 form_label">Skills Needed</label>
                            <input tabindex="18" class="col-sm-12 col-md-5 col-lg-5 form_input" type="text" name="skills" id="skills" value = "<?php echo $skills; ?>"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $skillsError?></span>
                            </fieldset>
                            <!--Tabindex 9 major wanted-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 leftside">
                            <label for="mWanted" class="col-sm-12 col-md-5 col-lg-3 form_label">Major Wanted</label>
                            <select tabindex="9"  name="mWanted" id="mWanted" value = "<?php echo $mWanted; ?>" multiple>
                              
                                <?php
                                    $query = "SELECT * FROM major ORDER BY name";
                                    if(empty($errorMessage))
                                    {
                                      try
                                      {
                                      $statement = $db->prepare($query);
                                      $statement->execute();
                                      $result = $statement->fetchAll();
                                      $statement->closeCursor();
                                      }                                 
                                      catch(PDOException $e)
                                      {
                                        $errorMessage = $e->getMessage();
                                      }
                                    }
                                    
                                    foreach ($result as $major)
                                    {
                                      echo '<option  value =" ' . $major['name'] . '"> '. $major['name'] . ' </option>';
                                    }
                                  ?>
                            </select>
                            <span style="color:red" class="col-sm-12 col-md-5 col-lg-5 error"><?php echo $mWantedError;?></span>
                            </fieldset>
                            <!--Tabindex 19 application instructions-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 rightside">
                            <label for="appInst" class="col-sm-12 col-md-5 col-lg-3 form_label">Application Instructions</label>
                            <textarea tabindex="19" class="col-sm-12 col-md-5 col-lg-3 form_input" rows="5" cols="22" name="appInst" id="appInst" ><?php echo $appInst; ?></textarea><span style="color:red" class="error"><?php echo $appInstError?></span>
                            </fieldset>
                            <!--Tabindex 10 contact person-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 leftside">
                            <label for="contact"  class="col-sm-12 col-md-5 col-lg-3 form_label">Contact Person</label>
                            <input type="text" tabindex="10" class="col-sm-12 col-md-5 col-lg-5 form_input" name="contact" id="contact" value = "<?php echo $contact; ?>" list="person_contact_list"><span style="color:red" class="col-sm-12 col-md-5 col-lg-3 error"><?php echo $contactError;?></span> 
                              </fieldset>
                            
                            <!--Tabindex 20 active-->
                            <fieldset class="col-sm-12 col-md-5 col-lg-12 rightside">
                              <label for="activeBox" class="col-sm-12 col-md-5 col-lg-3 form_label">Active</label>
                              <input tabindex="20" id="activeBox" name="activeBox" class="col-sm-12 col-md-5 col-lg-3 form_input checkboxes" type="checkbox" value="<?php echo $active; ?>">
                            </fieldset>

      <!--                      <label></label><textarea class="textarea" placeholder="This will hold something" disabled></textarea>-->
                            <div class="btncontainer">
                                <input tabindex="21" id="submitbtn" class=" formbutton btn btn-default" type="Submit" value="Submit">
    
                                <input tabindex="22" id="resetbtn" name="resetbtn" class="formbutton btn btn-default" type="Submit" value="Cancel">
                            </div>
                          </form>
                        </div>
                      </div>
                  
                    </div>

                
                </div>
              </div>
            </div> 
        </div> 
<!--
    <div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
      
    </div>
-->
    <footer class="navbar navbar-default navbar-static-bottom">
          <div class="container-fluid .nav_container footer_container">
          <div class="navbar-footer">
              <ul class="nav navbar-nav navbar_li footer_ul_adjustment ">
                <li class="footer_right"><a href="#">News</a></li>
                <li class="footer_right"><a href="#">Library</a></li>
                <li class="footer_right"><a href="#">Jobs</a></li>
                <li class="footer_right"><a href="#">People</a></li>

              </ul>
          </div>
        </div>  
    </footer>

<!--    <script src="../js/jobsJs.js"></script>-->
    <script src="../js/internshipmanagement.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- the next code get the values from the form and put it on the variables for later use.
      DO NOT DELETE  and run the validation function-->
  <?php
    // asign form values to variables 
    
  ?>
  
  </body>
</html>