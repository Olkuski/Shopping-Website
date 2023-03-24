function myFunction(x) {
    x.classList.toggle("change");
}

function toggleSlideMenu(x){
   if(x.classList.contains('change')){
      document.getElementById('mySidebar').style.width = '500px';
      document.getElementById("openbtn").style.right = "500px";
      document.getElementById('mySidebar').style.height = '870px';
       document.getElementById('checkout').style.width = '500px';
       document.getElementById('checkout').style.opacity = "1";
       document.getElementById('checkout').style.transition = "3s";
   }
   else{
      document.getElementById('mySidebar').style.width = '0px';
      document.getElementById("openbtn").style.right = "0px"; 
      document.getElementById('checkout').style.opacity = "0";
      document.getElementById('checkout').style.transition = "0.1s";
   }
}



function mouseOver1(){
    document.getElementById('shoe1Buy').style.width = '100%';
    document.getElementById('shoe1Buy').style.height = '100%';  
}
function mouseOut1(){
    document.getElementById('shoe1Buy').style.width = '0';
    document.getElementById('shoe1Buy').style.height = '0';
}

function mouseOver2(){
    document.getElementById('shoe2Buy').style.width = '100%';
    document.getElementById('shoe2Buy').style.height = '100%';
}
function mouseOut2(){
    document.getElementById('shoe2Buy').style.width = '0';
    document.getElementById('shoe2Buy').style.height = '0';
}
function mouseOver3(){
    document.getElementById('shoe3Buy').style.width = '100%';
    document.getElementById('shoe3Buy').style.height = '100%';
}
function mouseOut3(){
    document.getElementById('shoe3Buy').style.width = '0';
    document.getElementById('shoe3Buy').style.height = '0';
}
function mouseOver4(){
    document.getElementById('shoe4Buy').style.width = '100%';
    document.getElementById('shoe4Buy').style.height = '100%';
}
function mouseOut4(){
    document.getElementById('shoe4Buy').style.width = '0';
    document.getElementById('shoe4Buy').style.height = '0';
}

