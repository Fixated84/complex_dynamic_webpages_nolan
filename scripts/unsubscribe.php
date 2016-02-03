<?php

include('connect.php');

if (isset($_GET['email'])){
 $email = $_GET['email'];
 
$queryremove = "DELETE FROM emaillist WHERE (`email` = '$email')";	 

  
$updatedb = mysqli_query($con,$queryremove);

 mysqli_close($con);
  
 
   }
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AllStyle Homes</title>
<link href="../css/styles.css" rel="stylesheet" type="text/css">
 <link href="../css/animate.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/css3buttons.css" media="screen"> 
 <link rel="shortcut icon" href="../images/icon.ico">
</head>

<body>
<div class="wrapper">
<!--<header>-->

	 <div class="headerwrapper">
		 <div class="leftheader"><img id="effectimg"  class="displayed" src="../images/logo.png"   alt="AllStyle Homes Logo"></div>
         <div class="rightheader">
         <h2>Contact details:<br>
        255 Serenity Drive <br> 
        Ph: 07 4153 9876<br></h2> 
        </div>
    </div>
		 
<nav>
	 <ul>
	  <li><a href="../index.html">Home</a></li>
	  <li><a href="../pages/about.html">About</a></li>
	  <li><a href="../pages/design.html">Designs</a></li>
      <li><a href="../pages/ourprocess.html">Our Process</a></li>
      <li><a href="../pages/faq.html">FAQ</a></li>
      <li><a href="../pages/testimonials.html">Testimonials</a></li>  
      <li><a href="../pages/contact.html">Contact</a></li>            
     </ul>
			
</nav>
		
		
<!--</header>-->

<!--<section class="cluster cluster-1">-->


<!--content wrapper for mainbar and sidebar-->
 <div class="contentwrapper">
  <div class="mainbar"> 
 <h3>AllStyle Homes Mailing List Database </h3>   
<br>

<p class="formcentre">The email address has been removed from the data base.</p>
 <p class="formcentre">You will be redirected to <a href="../index.html">home page</a> in <span id="counter">5</span> second(s).</p>  
</div>
 
  
  <div class="sidebar"> <br>

  
 <br>


 
 <a  href="https://greatstartgrant.osr.qld.gov.au/" target="_blank" ><img  class="displayed" src="../images/grant.png" alt="New Start Grant" height="130" width="180">  </a>
     

      <a  href="../design.html" ><img class="displayed"  src="../images/340.PNG" alt="Home and Land from $340 per week" height="130" width="180">  </a>  
     
  

     <a  href="../design.html" ><img class="displayed"  src="../images/land.PNG" alt="Home and land from 270000" height="130" width="180">    </a>
    
   

        <a  href="https://greatstartgrant.osr.qld.gov.au/quick-calculate.php" target="_blank" ><img class="displayed"  src="../images/loan.PNG" alt="Loan Calculator" height="130" width="180"></a>     
    </div>
    </div>
  
 
   <div class="footer">  <a href="../pages/privacy.html" >© 2012 AllStyle Homes - Copyright and Privacy Information</a> </div>

 
<!--</section>-->
</div>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = '../index.html';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },500);
</script>
 <script>
 
var effectimg = document.getElementById("effectimg");
 

window.onload = function(){
	
 
 effectimg.addEventListener("click", function(){
 effectimg.className = "displayed animated flipInX";
 
 setTimeout(function() {
 effectimg.className = "displayed";	 
 },1500);	 
 
    }	);  
 
 
};
 </script>
 <script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
	
	
	
var btns = document.querySelectorAll('.remove'),
    phone = document.querySelector('.phone');

// looping through the nodelist and attaching eventlisteners
[].forEach.call(btns, function(btn) {
    btn.addEventListener('click', function(event) {
        // fetching the phone number
		
		 
        var selectedPhone = event.target.parentNode.previousSibling.textContent;
        phone.value = selectedPhone; //setting the value 
		//alert(selectedPhone);
    }, false);
});
}//]]>  
 
</script>

<SCRIPT type="text/javascript">
function goToPage(url)
{
var initial = "localhost/scripts/removemail";
var extension = ".php?email=";

document.something.action=initial+extension+url;
}
</SCRIPT>

 <script type="text/javascript">
// window.onload = function(){
 var day = new Date();
  var hr = day.getHours();
  if ((hr == 18) ||(hr == 19) || (hr == 20) || (hr == 21) || (hr == 22) || (hr == 23)|| (hr == 0)|| (hr == 1)|| (hr == 2)|| (hr == 3)|| (hr == 4)|| (hr == 5)|| (hr == 6)    ) {
 
 var cssnew = document.querySelector("link[href='../css/styles.css']");
 
 cssnew.setAttribute("href", "../css/stylesnew.css");
 
 
 }
  
 
 </script>
 
 

</body>
</html>