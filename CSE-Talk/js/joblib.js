function JobItem(imgPath,imgalt,imgwidth,imgheight,url,titlestr,divisionstr,locationstr,dbId,index,dbinfo){

  this.imgPath = imgPath;
  this.imgalt = imgalt;
  this.imgWidth = imgwidth;
  this.imgHeight = imgheight;
  this.url = url;
  this.titlestr = titlestr;
  this.divisionstr = divisionstr;
  this.locationstr = locationstr;
  this.dbId = dbId;
  this.dbinfo = dbinfo;
  this.index = index;
  
  this.jobol = document.getElementsByClassName('nav_stacked')[0];
  this.jobcontainer_li = createObject('li');
  this.jobstsack_a = createObject('a');
  this.image = createObject('img');
  this.bootstrapCol = createObject('div');
  this.jobtitle = createObject('div');
  this.jobtitleitem = createObject('div');
  this.bootstrapClearfix = createObject('div');
  this.jobdivision = createObject('div');
  this.jobLocation = createObject('div');
  this.jobView = createObject('div');
  this.jobitemform = createObject('form');
  this.idinputfield = createObject('input');

  
  this.jobcontainer_li.className = "container job_li_container";
  this.jobstsack_a.className = "col-xs-12  col-lg-12 job_stack";
  this.image.className = "col-xs-12 col-sm-12 col-md-6 col-lg-6 job_imgs";
  this.jobtitle.className = "col-xs-2 col-sm-2 col-md-2 col-lg-6 job_title";
  this.jobtitleitem.className = "col-lg-7 job_title_loc";
  this.bootstrapClearfix.className = "clearfix";
  this.jobdivision.className = "col-xs-2 col-sm-2 col-md-2 col-lg-2 job_div";
  this.jobLocation.className = "col-xs-2 col-sm-2 col-md-2 col-lg-2 job_loc";
  this.jobView.className = "btn btn-default col-xs-2 col-md-2 col-lg-12 job_view";
  this.jobView.innerHTML = 'More Info';
  this.jobView.style.width = "75%";
  this.jobView.style.color = "white";
  
  
  this.jobstsack_a.setAttribute('href','http://'+this.url);
  this.jobstsack_a.setAttribute('target','_blank');
  
  this.jobView.setAttribute('id',this.dbId);
  
  this.jobitemform.className = "jobitem_form";


  this.image.src= this.imgPath;
  this.image.width = this.imgWidth;
  this.image.height = this.imgHeight;
  this.image.alt = this.imgalt;
  
  this.jobtitleitem.innerHTML = this.titlestr;
  this.jobdivision.innerHTML = this.divisionstr;
  this.jobLocation.innerHTML = this.locationstr;
  
  
  this.jobtitle.appendChild(this.jobtitleitem);
  this.jobtitle.appendChild(this.bootstrapClearfix);
  this.jobtitle.appendChild(this.jobdivision);
  
    
  this.jobstsack_a.appendChild(this.image);
  this.jobstsack_a.appendChild(this.jobtitle);
  this.jobstsack_a.appendChild(this.jobLocation);
  
  this.jobitemform.appendChild(this.jobView);
  
  
  this.jobLocation.appendChild(this.jobitemform);
  

  
  this.jobcontainer_li.appendChild(this.jobstsack_a);
  this.jobol.appendChild(this.jobcontainer_li);
  
  this.getdbid = getdbid;
  this.addClick = addClick;
  this.getdbinfo = getdbinfo;
  
}

function createObject(obj){
  return document.createElement(obj);
}
function getObject(attr){
  return document.querySelector(attr);
}

function getdbinfo(){
  return this.dbinfo;
}
function getdbid(){
  return this.dbid;
}

function addClick(val){
  for(var key in val)
    this.edit_btn.setAttribute('onclick',val[key]);
}