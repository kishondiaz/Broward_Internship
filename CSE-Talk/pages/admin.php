<!doctype html>
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

    <link type="text/css" rel="stylesheet" href="../css/internshipmanegmentstyle.css"> 
    <script src="../js/intershipjobslib.js"></script>
   
      
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
            <form action="./add.php">
              <span class="hello_professor">Hello <span class="admin_name">Professor</span></span> <input type="submit" value="Create" class="createBtn btn btn-default">
            </form>
          </div>
        </nav>
        <div class="container-fluid">

          <div class="row main_row">

            <div  class="col-xs-offset-0 col-sm-offset-0 col-sm-12 col-md-offset-2 col-md-9 col-lg-offset-2 col-lg-9">
              <div class="row wrapper_row"> 
                <div class="jobpreview">
                  <div class="jobpreview_inner">
                    This will Contain a preview of what is inside of jobitem
                    <form class="jobpreview_form col-sm-12 col-md-10" action="./intershipmanagement_edit.html">
                      <label class="jobp_label">ID <input class="jobp_input" type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Contact Email <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Job Title <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Contact Phone <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Job Description <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Salary <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Company Name <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Work Hours <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Company URL <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Credit <input type="checkbox" value="" disabled checked></label>
                      <label class="jobp_label">Company Description <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Date Posted <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Address <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Date Expired <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Degree Wanted <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Skills Needed <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Major Wanted <input type="text" value="" placeholder="Name" disabled></label>
                      <label class="jobp_label">Application Instructions <input type="text" value="" placeholder="Name" disabled ></label>
                      <label  class="jobp_label">Contact Person <input class="jobp_input" type="text" value="" placeholder="Name" disabled></label>
<!--                      <label></label><textarea class="textarea" placeholder="This will hold something" disabled></textarea>-->        <div class="button_container">
                        <input class="editbutton" type="submit" value="Edit" onclick="closepreview()" >
                        <input class="closebutton" type="button" value="Close" onclick="closepreview()" >
                      </div>
                    </form>
                  </div>
                </div>
                <div class="jobpreview_backdrop"></div>
                   <div class="col-xs-9 col-sm-10 col-md-12 col-lg-12 jobs_container">
                      <!-- <span class="row pull-left people_box">Jobs</span> -->
                    
                      <div class="row jobs_rowcontainer">
                        <div class="col-sm-6 col-md-12 col-lg-12">
                          <ol class="nav nav-pills nav-stacked nav_stacked">                        
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
        
        if ($active == 1)
        {
        echo "<script type='text/javascript'>
       
                    /*                Image                  */
                    /*file location    v      alt,width,height, url, title, division, location, DbID, Index*/
       jobarry.push(new JobItem('../assets/heliumcreate.png','other',164,162,'$cUrl','$job','$company','$cAddress', $internID, $count));
        
                           
      

      </script>";
        }
      $count++;
        
      }
      
    
    ?>
    <script type="text/javascript">
        console.log(jobarry[4].getdbid());
        
    </script>
    <script src="../js/internshipmanagement.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


  </body>
</html>