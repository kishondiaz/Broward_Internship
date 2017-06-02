var preview = document.getElementsByClassName('jobpreview');
var job_ol = document.getElementsByClassName('nav_stacked');
var job_li = document.getElementsByClassName('job_li_container');
var job_a = document.getElementsByClassName('job_stack');
var job_view = document.getElementsByClassName('job_view');
var dbid = document.getElementById('popid');
var prview_backdrop = document.getElementsByClassName('jobpreview_backdrop');
var viewClied = false,popupclicked= false;
var gethrefurl='';
/*This stores the targeted id from the selected item*/
var targeted ={'t':undefined};
/*This creates a JSON that stores the elements for use later*/
var popupelem ={
    "contEmail":getObject('#contEmail'),"job":getObject('#job'),
    "contPhone":getObject('#contPhone'),"salary":getObject('#salary'),
    "company":getObject('#company'),"time":getObject('#time'),"cUrl":getObject('#cUrl'),
    "opendate":getObject('#opendate'),"cAddress":getObject('#cAddress'),
    "skills":getObject('#skills'),
    "contact":getObject('#contact'),"closedate":getObject('#closedate'),
    "dWanted":getObject('#dWanted'),"credit":getObject('#credit'),
    "desc":getObject('#desc'),"appInst":getObject('#appInst'),"comdesc":getObject('#comdesc')
};
/*
  Because of the fact that it is illegal to use buttons within a anchor tag the next
  set of script is to prevent the bootstrap buttoni made from going to the the site
  the a tage href should go to the professor appilcation page but this page has not been created
  those who read this that part is your job
*/

/*This for loop sets the gethrefurl with the url from the 
database to the a tag that surrounds all the other items*/
for(var i = 0 ; i < job_a.length; i++){
gethrefurl = job_a[i].getAttribute('href');
/*This is for the mobile side this makes sure that the a tag url only
  runs when the popup is closed*/
  if(viewClied){
    /*This gets if the a tag is clicked and makes sure it has the url but this tag should
      go to the professors application page where they can look over the ifo that would be submitted 
      by the student
    */
    job_a[i].addEventListener('click',function(){
      if(!this.hasAttribute('href')){
        this.setAttribute('href',gethrefurl);
      }
    });
  }
}

/*This sets attributes from the moreinfo button*/
for(var i =0; i <job_view.length; i++){
  /*This is for the onclick */
  job_view[i].addEventListener('click', clicked);
  
  /*This makes sure that if the mouse is over the more info button that 
    the url is removed so the a tag cannot send the url*/
  job_view[i].addEventListener('mouseover',function(){
     var job_a = document.getElementsByClassName('job_stack');
     for(var i=0; i < job_a.length; i++)
      job_a[i].removeAttribute('href');
    
    viewClied = false;
    popupclicked = true;
  });
  
  /*This resets the href for the professors page url once the mouse if off*/
  job_view[i].addEventListener('mouseout',function(){
      for(var i=0; i < job_a.length; i++)
      job_a[i].setAttribute('href',gethrefurl);
  
    viewClied = true;
    popupclicked = false;
  });
}
 
/*This is the onclick function for the more info button
  This function opens the popup and populates the 
  fields from the database using ajax XMLHttpRequest
  the request goes to a getinfo.php this is just a php script
  that gets the info from the DB 
  This XMLHttpRequest also sends a value to the php script so it can be 
  processed
*/
function clicked(e) {
  "use strict";
  var httpsend = getXMLHttpRequest()
  var http = getXMLHttpRequest();
  
  var formdata = new FormData();
  formdata.append('value',0);
  http.open('POST','../js/getinfo.php',true);
  
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
  http.onreadystatechange = function(){
    if (http.readyState == 4) {
      var firstsplit = http.responseText.split('=')[1].toString();
      var sec = http.responseText;
      console.log(sec);
      var t = sec.match('value');
      var s,q,p,a,r,x,v;
      if(t){
        s = t.pop();
        p = sec.replace(s,'');
      }
      q = p.match('=');
      if(q){
        a = p.replace(q,''); 
      } 
      r = a.match(e.target.id);
      if(r){
        x = a.replace(r,'');
        v = x.replace('$','');
      }
      var theResponse = JSON.parse(v);
      //console.log(firstsplit.substr(2,firstsplit.length));
      popupelem.contEmail.value = theResponse.contEmail;
      popupelem.job.value =  theResponse.job;
      popupelem.contPhone.value = theResponse.contPhone;
      popupelem.salary.value = theResponse.salary;
      popupelem.company.value = theResponse.company;
      popupelem.time.value = theResponse.time;
      popupelem.cUrl.innerHTML = theResponse.cUrl;
      popupelem.opendate.value = theResponse.opendate;
      popupelem.cAddress.value = theResponse.cAddress;
      popupelem.skills.value = theResponse.skills;
      
      popupelem.contact.value = theResponse.contact;
      popupelem.closedate.value = theResponse.closedate;
      popupelem.dWanted.value = theResponse.dWanted;
      if(theResponse.credit == "0"){
        popupelem.credit.value ="No";
      }else if(theResponse.credit=="1"){
        popupelem.credit.value = "Yes";
      }
      popupelem.desc.value = theResponse.desc;
      popupelem.appInst.value = theResponse.appInst;
      popupelem.comdesc.value = theResponse.comdesc;
      
        

    };
    /*This stores the slected number id this is 
    used to get the postions of the selected item*/
    targeted.t = e.target.id;
  }
  /*This sends the php $value which is what runs the query
  it gives the DBID that is stored in the more info button id*/
  http.send("$value="+e.target.id+"");
  
  
  /*This opens the popup and sets the backdrop to the open position*/
  if(!viewClied){
    for (var i = 0 ; i < preview.length ; i++){
  
      preview[i].style.width = "85%";
      preview[i].style.height = "100%";
      preview[i].style.transform = "scale(1,1)";

    }
    for (var i = 0 ; i < prview_backdrop.length ; i++){
  
      prview_backdrop[i].style.left = "0";
      prview_backdrop[i].style.right = "0";
      prview_backdrop[i].style.top = "0";
      prview_backdrop[i].style.bottom = "0";
      

    }
  
  }
  /*This gets if the a tag is clicked and makes sure that the url is removed but this tag should
      go to the professors application page where they can look over the ifo that would be submitted 
      by the student
    */
  for(var i=0; i < job_a.length; i++){
    if(job_a[i].hasAttribute('href'))
      job_a[i].removeAttribute('href');
  }
}

/*This sets the visit button to the url 
  of the website but maybe should go to the professor application pages 
  this is your call whom ever inherits this script*/
function applypreview(e){

  for (var i = 0 ; i < preview.length ; i++){
    preview[i].style.transform = "scale(0,0)";
  }
  for (var i = 0 ; i < prview_backdrop.length ; i++){
      prview_backdrop[i].style.left = "inherit";
      prview_backdrop[i].style.right = "inherit";
      prview_backdrop[i].style.top = "inherit";
      prview_backdrop[i].style.bottom = "inherit";
  }
  
  if(targeted.t !== undefined){
    job_a[parseInt(targeted.t)].click();
  }
  
}

/*This is the function for the close button 
in the popup this closes the popup and sets the feilds to empty*/
function closepreview(){
  for (var i = 0 ; i < preview.length ; i++){

    preview[i].style.transform = "scale(0,0)";
  }
  for (var i = 0 ; i < prview_backdrop.length ; i++){

      prview_backdrop[i].style.left = "inherit";
      prview_backdrop[i].style.right = "inherit";
      prview_backdrop[i].style.top = "inherit";
      prview_backdrop[i].style.bottom = "inherit";
      

    }
    popupelem.contEmail.value = '';
    popupelem.job.value =  '';
    popupelem.contPhone.value = '';
    popupelem.salary.value = '';
    popupelem.company.value = '';
    popupelem.time.value = '';
    popupelem.cUrl.innerHTML = '';
    popupelem.opendate.value = '';
    popupelem.cAddress.value = '';
    popupelem.skills.value = '';

    popupelem.contact.value = '';
    popupelem.closedate.value = '';
    popupelem.dWanted.value = '';
    
    popupelem.credit.value ='';
   
    popupelem.desc.value = '';
    popupelem.appInst.value = '';
    popupelem.comdesc.value = '';
  
    /*This sets the scroll to the top of the popup when closed*/
    
    document.querySelector('.jobpreview_form').scrollTop = 0;
  
}

/*This was the submit button function it is used in the internshipmanagement.js and its page 
  i leave it here incase
*/

/*function submitFunc(){
  for (var i = 0 ; i < preview.length ; i++){
//    preview[i].style.transition = "all 2s";
    preview[i].style.transform = "scale(0,0)";
  }
  for (var i = 0 ; i < prview_backdrop.length ; i++){
  //    preview[i].style.transition = "all 2s";
      prview_backdrop[i].style.left = "inherit";
      prview_backdrop[i].style.right = "inherit";
      prview_backdrop[i].style.top = "inherit";
      prview_backdrop[i].style.bottom = "inherit";
      

    }
}*/

/*This is the delete function it was used to delete li elemts from the list 
  i leave it incase
*/
/*function deleteFunc(j){
  for (var i = 0 ; i < preview.length ; i++){
//    preview[i].style.transition = "all 2s";
    preview[i].style.width = "0";
    preview[i].style.height = "0";
    preview[i].style.transform = "scale(0,0)";
  }
  for(var i = 0 ; i < job_a.length; i++){
    viewClied = false;
  }
  for (var i = 0 ; i < prview_backdrop.length ; i++){
  //    preview[i].style.transition = "all 2s";
      prview_backdrop[i].style.left = "inherit";
      prview_backdrop[i].style.right = "inherit";
      prview_backdrop[i].style.top = "inherit";
      prview_backdrop[i].style.bottom = "inherit";
      

    }
  
    for(var i = 0 ; i < job_li.length; i++){

        job_li[i].addEventListener('click', function(e){
            var parentI = e.target.parentNode.parentNode.parentNode.parentNode;
            console.log(i);
          if(!popupclicked){
            //this.remove();
            location.reload();
          }


        });

      }
  
//if(e !== undefined)
//  console.log(e);
//  for(var i=0; i < job_li.length; i++)
//    job_li[i].parentNode.removeChild(job_li[0]);
}*/

