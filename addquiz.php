<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Quiz </title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="Venjan Tutorials, jammu, J&K">
 <meta name="author" content="Venjan Tutorials">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="javascript/js.js"></script>
<script src="javascript/validatename.js"></script>

</head>
<body class="body">
<?php
		require_once('nav.php');
	?>
<html> 
	<head> 
		<script> 
			function register() { 
				var link = 
					document.forms["RegForm"]["link"]; 

				
				var subject = 
					document.forms["RegForm"]["subject"]; 
					

				if (subject.value == "") { 
					window.alert("Please enter the subject name"); 
					subject.focus(); 
					return false; 
				}

				if (link.value == "") { 
					window.alert("Please enter the Quiz link for students!"); 
					subject.focus(); 
					return false; 
				}				

				return true; 
			} 
		</script> 


	</head> 

	<body> 
	<div id="formstyle">
		<h1 style="text-align: center;">Fill this form to add test quizzes</h1> 
		<form id="rform" name="RegForm" action="addnotes_process.php"
			onsubmit="return register()" method="post">
			
			
			<br>
			<a href="https://docs.google.com/forms/u/0/?tgif=d" target="_blank"><input class="pbtn" type="button" style="width:150px;" value="Generate quiz"></a>
			<br>
			<br>
			<p>Class: <select name="class" required>
					  <option value="Choose..." selected disabled> Choose...</option>		
					  <option value="9">9</option>
					  <option value="10">10</option>
					  </select>
			<br /> 
			<p>Subject: <input type="text" placeholder="Subject Name"
							size="65" name="subject" /> 
		</p> 
			<br /> 
			<p>The quiz link for students: <input type="text"
							size="65" name="link" placeholder="Paste the Link here" /></p> 
			<br /> 
			
			<p id="fbuttons"> 
				<input id="rsubmit" type="submit"
					value="Submit" name="Submit" /> 
				<input id="rreset" type="reset"
					value="Reset" name="Reset" /> 
			</p> 
		</form>
	
	
</div>
<script>
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
</script>		
	</body> 
</html> 
<footer class="mainFooter">

		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/aaryan.raina.7"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/aaryan_raina/"><i class="fa fa-instagram"></i></a>
				<a href="https://www.linkedin.com/in/hemkesh-raina-90a37a146/?originalSubdomain=in"><i class="fa fa-linkedin"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
				<a href="JobOppurtunities.php"> Job Opportunities</a>
				</p>

				<p id="cpy">Venjan Tutorials&copy; 2020<br><br>I am very passionate about sharing my knowledge to the students for free!</p>
			</div>

		</footer>
</footer>

</body>

</html>