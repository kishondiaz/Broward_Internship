<!doctype html>
<html>
	<head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Jobs</title>
    <script src="../js/jquery-1.12.0.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


    <link type="text/css" rel="stylesheet" href="../css/jstyle.css"> 
<!-- This script contains the object that creates the list objects -->
    <script src="../js/joblib.js"></script>
<!-- This sets up the ajax request   -->
    <script src="../js/getXMLHttpRequest.js"></script>
      
  </head>
  <body>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../js/jquery-1.12.0.min.js"></script>

        <nav class="navbar navbar-default">
        	<div class="container-fluid .nav_container">
          	<div class="navbar-header">
            	<ul class="nav navbar-nav navbar_li">
              	<li><img src="../assets/talk_logo.png" alt="image" class="navbar_icon_img"/></li>
              	<li class="navbar_right"><a href="#">News</a></li>
                <li class="navbar_right"><a href="#">Library</a></li>
                <li class="navbar_right"><a href="#">Jobs</a></li>
                <li class="navbar_right"><a href="#">People</a></li>
                <li class="navbar_right"><a href="login.php">Login</a></li>
                  
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
        </nav>
        <div class="container-fluid">

          <div class="row main_row">

            <div  class="col-xs-offset-0 col-sm-offset-0 col-sm-12 col-md-offset-2 col-md-9 col-lg-offset-2 col-lg-9">
              <div class="row wrapper_row"> 
                <div class="jobpreview">
                  <div class="jobpreview_inner">
<!--                    This will Contain a preview of what is inside of jobitem-->
                    <form class="jobpreview_form col-sm-12 col-md-12 col-lg-12"  onsubmit="javascript: return false;" >
                      
                      <!--Tabindex 11 contact Email-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 rightside">
                        <label for="contEmail" class="col-sm-12 col-md-6 col-lg-5 form_label">Contact Email</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" type="text" name="contEmail" id="contEmail" disabled>
                      </fieldset>
                      <!--Tabindex 2 job title Email-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 leftside">
                        <label for="job" class="col-sm-12 col-md-5 col-lg-5 form_label">Job Title</label>
                        <input class=" col-sm-12 col-md-5 col-lg-6 form_input" type="text" name="job" id="job" disabled>
                      </fieldset>
                      <!--Tabindex 12 contact phone-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 rightiside">
                        <label for="contPhone" class="col-sm-12 col-md-5 col-lg-5 form_label">Contact Phone</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" type="text" name="contPhone" id="contPhone" disabled>
                      </fieldset>

                      <!--Tabindex 13 salary-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 rightside">  
                        <label for="salary" class="col-sm-12 col-md-5 col-lg-5 form_label">Salary</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" type="text" name="salary" id="salary" disabled>
                      </fieldset>
                      <!--Tabindex 4 company name-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 leftside">
                        <label for="company" class="col-sm-12 col-md-5 col-lg-5 form_label">Company Name</label>
                        <input name="company" id="company" class="col-sm-12 col-md-5 col-lg-6 form_input" type="text" disabled>
                      </fieldset>
                      <!--Tabindex 14 work hours-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 rightside">
                        <label for="time" class="col-sm-12 col-md-5 col-lg-5 form_label">Work Hours</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" type="text" name="time" id="time" disabled>
                      </fieldset>
                      <!--Tabindex 5 company url-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 leftside">
                        <label for="cUrl" class="col-sm-12 col-md-5 col-lg-5 form_label">Company URL</label>
                        <a class="col-sm-12 col-md-5 col-lg-6 form_input" type="text" name="cUrl" id="cUrl" disabled></a>
                      </fieldset>

                      <div class="clearfix clear"></div>

                      <!--Tabindex 16 date posted-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 rightside">
                        <label for="opendate" class="col-sm-12 col-md-5 col-lg-5 form_label">Date Posted</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" id="opendate" type="date" name="opendate" disabled>
                      </fieldset>
                      <!--Tabindex 7 address-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 leftside">
                        <label for="cAddress" class="col-sm-12 col-md-5 col-lg-5 form_label">Address</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" type="text" name="cAddress" id="cAddress" disabled>
                      </fieldset>

                      <!--Tabindex 18 skills needed-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 righttside">
                        <label for="skills" class="col-sm-12 col-md-5 col-lg-5 form_label">Skills Needed</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" type="text" name="skills" id="skills" disabled>
                      </fieldset>
                      <!--Tabindex 9 major wanted-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 leftside">
                        <label for="mWanted" class="col-sm-12 col-md-5 col-lg-5 form_label">Major Wanted</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" name="mWanted" id="mWanted" disabled>
                      </fieldset>
                      <!--Tabindex 10 contact person-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 leftside">
                        <label for="contact"  class="col-sm-12 col-md-5 col-lg-5 form_label">Contact Person</label>
                        <input type="text" class="col-sm-12 col-md-5 col-lg-6 form_input" name="contact" id="contact" disabled> 
                      </fieldset>
                      <!--Tabindex 17 date expired-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 rightside">
                        <label for="closedate" class="col-sm-12 col-md-5 col-lg-5 form_label">Date Expired</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" id="closedate" type="date" name="closedate" disabled>
                      </fieldset>
                      <!--Tabindex 8 degree wanted-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 leftside">
                        <label for="dWanted" class="col-sm-12 col-md-5 col-lg-5 form_label">Degree Wanted</label>
                        <input class="col-sm-12 col-md-5 col-lg-6 form_input" type="text" name="dWanted" id="dWanted" disabled>
                      </fieldset>
                      <!--Tabindex 15 credit-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-6 rightside">
                        <label for="credit" class="col-sm-12 col-md-5 col-lg-5 form_label">Credit</label>
                        <input id="credit" name="credit" class="col-sm-12 col-md-5 col-lg-3 form_input credit checkboxes" type="text" disabled>
                      </fieldset>

                      <fieldset class=" col-sm-12 col-md-12 col-lg-12 leftside">
                        <label for="desc" class="col-sm-12 col-md-5 col-lg-3 form_label">Job Description</label>
                        <textarea class="col-sm-12 col-md-12 col-lg-12 form_input" name="desc" id="desc" disabled></textarea>
                      </fieldset>

                      <!--Tabindex 19 application instructions-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-12 rightside">
                        <label for="appInst" class="col-sm-12 col-md-5 col-lg-3 form_label">Application Instructions</label>
                        <textarea class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form_input" name="appInst" id="appInst" disabled></textarea>
                      </fieldset>

                         <!--Tabindex 6 company description-->
                      <fieldset class="col-sm-12 col-md-12 col-lg-12 leftside">
                        <label for="comdesc" class="col-sm-12 col-md-5 col-lg-3 form_label">Company Description</label>
                        <textarea class="col-sm-12 col-md-12 col-lg-12 form_input" name="comdesc" id="comdesc" disabled></textarea>
                      </fieldset>



<!--
                      <label></label><textarea class="textarea" placeholder="This will hold something" disabled></textarea>
                      
-->
                      
                    </form>
                    <div class="clearfix clear"></div>
                      <div class="button_container">
                        <input class="closebutton" type="button" value="Visit" onclick="applypreview(this)" >
                        <input class="closebutton" type="button" value="Close" onclick="closepreview()" >
                      </div>
                    
                  </div>
                  <div class="clearfix clear"></div>
                      <div class="button_container">
                        
                        <input class="closebutton" type="button" value="X" onclick="closepreview()" >
                      </div>
                </div>
                <div class="jobpreview_backdrop"></div>
                   <div class="col-md-12 col-lg-12 jobs_container">
                      <!-- <span class="row pull-left people_box">Jobs</span> -->
                      <div class="row">
                        <div class="col-sm-10 col-md-12 col-lg-12">
                          <ol class="nav nav-pills nav-stacked nav_stacked">
                          
<!--
                              This is the object structure
                            <li class="container job_li_container " >
                              
                              <a class="col-xs-12  col-lg-12 job_stack">

                                <img src="../assets/heliumcreate.png" alt="heliumcreate"
                                 class="col-xs-12 col-sm-12 col-md-6 col-lg-6 job_imgs">
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-6 job_title">
                                  
                                  <div class="col-lg-7 job_title_loc">this is the title area</div>
                                  <div class="clearfix"></div>
                                  <span class="col-xs-2 col-sm-2 col-md-2 col-lg-2 job_div">division</span>
                                  
                                </div>

                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 job_loc"> this is the location
                                  <div class="col-xs-2 col-md-2 col-lg-2 job_view">view</div>
                                </div>

                              </a>

                            </li>
                            
                            
-->
                          </ol>
                        </div>
                      </div>
                    </div>

                
                </div>
              </div>
            </div> 
        </div> 

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
<!--   This script creates an array to store jobobjects -->
    <script type="text/javascript">
      var jobarry = [];
    </script>
    <?php
            //- please never delete the next php code or the application will CRASH 
    
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
    $count = 1;
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
        $contact =  $internship['ApplicationContact'];
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
        $contEmail =  $internship['ApplicationEmail'];
        $contPhone = $internship['ContactPhone'];
        $skills = $internship['SkillsNeeded'];
        $active = $internship['Active'];
        
        
        echo "<script type='text/javascript'>
       
                    /*                Image                  */
                    /*file location    v      alt,width,height, url, title, division, location, DbID, Index*/
       jobarry.push(new JobItem('../assets/heliumcreate.png','other',164,162,'$cUrl','$job','$company','$cAddress', $internID, $count,[$internID]));
        
        
                    
      

      </script>";

      $count++;

      }
      
    
    ?>
    <script type="text/javascript">
      var arr = jobarry[4].getdbinfo();  
//      console.log(arr[0][0]);
        
    </script>

<!-- this runs the button clicks and pop and the gets the data from Database using ajax in here   -->
    <script src="../js/jobjs.js"></script>
<!--    <script src="../js/internshipmanagement.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


  </body>
</html>