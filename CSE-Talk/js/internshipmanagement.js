var preview = document.getElementsByClassName('jobpreview');
var job_ol = document.getElementsByClassName('nav_stacked');
var job_li = document.getElementsByClassName('job_li_container');
var job_a = document.getElementsByClassName('job_stack');
var job_view = document.getElementsByClassName('job_view');
var prview_backdrop = document.getElementsByClassName('jobpreview_backdrop');
var viewClied = false,popupclicked= false;

//This addess the pop_up when job item is clicked
/* for(var i = 0 ; i < job_a.length; i++){
      
      //job_a[i].addEventListener('click', clicked);

    } */
for(var i =0; i <job_view.length; i++){
  job_view[i].addEventListener('click',function(){
  
    viewClied = true;
    popupclicked = false;
  });
  job_view[i].addEventListener('mouseover',function(){
   
    viewClied = true;
    popupclicked = false;
  });
  job_view[i].addEventListener('mouseout',function(){
    
    viewClied = false;
    popupclicked = true;
  });
}
                       
function clicked() {
  "use strict";
  if(!viewClied){
    for (var i = 0 ; i < preview.length ; i++){
  //    preview[i].style.transition = "all 2s";
      preview[i].style.width = "65%";
      preview[i].style.height = "50%";
      preview[i].style.transform = "scale(1,1)";

    }
    for (var i = 0 ; i < prview_backdrop.length ; i++){
  //    preview[i].style.transition = "all 2s";
      prview_backdrop[i].style.left = "0";
      prview_backdrop[i].style.right = "0";
      prview_backdrop[i].style.top = "0";
      prview_backdrop[i].style.bottom = "0";
      

    }
  }
}

function closepreview(){
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
}

function submitFunc(){
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
}

function deleteFunc(j){
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
}

