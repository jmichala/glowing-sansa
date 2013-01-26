<!DOCTYPE html>
<html>
<head>		
	<script src="js/jquery.js"> </script>
	<title> Code Learning </title>
	<link rel="stylesheet" type = "text/css" href="css/hackathon-style.css" />
</head>
<body>
<script type="text/javascript">
$(document).ready(function() {
    $('#slidenav-main').animate({
        left: '-1000px'
    }, 200);
    $('#open-main a').toggle(
        function(){
            $('#slidenav-main').animate({
                left: '10%'
            }, 500);
        },
		function(){
	        $('#slidenav-main').animate({
	            left: '-1000px'
	        }, 500);
		});
	$('#submit-row a').click(
	    function(){
	        $('#slidenav-main').animate({
	            left: '-1000x'
	        }, 500);
	    });
    });
</script>
<header>
	<h1> Cool </h1>
</header>
	
<div id="main-content">
	<!-- Main Menu For the Selection of Topics -->
	<div class="main-menu">
		<span class="menuRect">
			<ul>
				<li> <a href=****> Home </a> </li>
				<li> <a href=****> Courses </a> 
					<ul>
						<li> <a href=****> Python </a> </li>
						<li> <a href=****> Ruby </a> </li>
						<li> <a href=****> Obj.C </a> </li>
					</ul>
				</li>
				<li> <a href=****> Information </a> 
					<ul>
						<li> <a href=****> about us </a> </li>
						<li> <a href=****> Cool Stuff </a> </li>
						<li> <a href=****> Hello </a> </li>
					</ul>
				</li>
					
				<li> <a href=****> Link Name </a> </li>
				<li> <a href=****> Link Name </a> </li>
			</ul>
		</span>
	</div>
	<div class = "center-content">
	<table align="center">
	<tr>
	<td>
		<div class= "center-left">
			<div class="welcome-info">
				<p class = "welcome">
				<span class="blue"> Welcome to Glowing Sansa </span> <br/>
				This site is a new approach to learning programming! So try it out kay? Cause it is super cool and awesome and deserves to be your home page
				</p>
				<a href ="#" class="read-more"> read more </a>
			</div>
			<div class = "features">
			<div class = "title"> Features </div>
				<ul class="list">
					<li> Python </li>
					<li> CSS </li>
					<li> HTML </li>
				</ul>
			</div>
			<div class = "features">
			<div class = "title"> Development News </div>
				<p> We recently added some stuff to the page to make it look good. We also worked on some of the exercises to make it look good. 
				</p>
			</div>
		</div>
	</td>
	<td>
		<div class= "center-right">
			<div class = "software-image">
				<img src='images/M.png'/>
			</div>
			<div class = "text-box">
				<div class = "title"> Clients login <span></span> </div>
				<form action="acct/register.php" method="post">
				<div class = "login-form-row">
					<label class="login-label"> Username: </label> <input type="text" name="name" class= "login_input"/>
				</div>
				<div class = "login-form-row">
					<label class="login-label"> Password: </label> <input type="password" name="pass" class="login_input"/>
				</div>
				<!--SlideBar-->
				<div id="open-main">
					<input type="submit" name="submit" value="submit">
					<a href="#"> Register </a>
				</div>	
				</form>		
			</div>
			
			<div class="testimonials">
				<div class= "text-box">
					<div class="title">Testimonials</div>
					<p class="testimonial">
						This is the best software ever made- period! -Everyone
					</p>
				</div>
			</div>
			<div id="slidenav-main">
				<div class = "register-contain">
					<div>
						<p> 
						<span class="blue"> Welcome New User! </span> </br>
						Enter some basic user information to make your free account!</p>
						<form action="acct/register.php" method="post">
						<div class = "login-form-row">
							<label class="register-label"> Username: </label> <input type="text" name="name" class= "register_input"/>
						</div>
						<div class = "login-form-row">
							<label class="register-label"> Password: </label> <input type="password" name="pass" class="register_input"/>
						</div>
						<!-- LOLZ Information-->
						<p class = "pot-pourri" marginTop = "40px">
							<div id="whiteSpace">
								 Security Information 
							</div>
							<div class = "ask-row">
								<br/>
								<br/>
								<br/>
								<br/>
								<label class="register-label"> Social Security Number: </label> <input type="text" name="name" class= "register_input"/>
							</div>
							<div class = "ask-row">
								<br/>
								<label class="register-label"> Favorite High School Memory: </label> <input type="text" name="name" class= "register_input"/>
							</div>
							<div class = "ask-row">
								<br/>
								<label class="register-label"> Flower Power?: </label> <input type="text" name="name" class= "register_input"/>
							</div>
							<div class="ask-row">
								<select>
							  		<option value="Orangutan">Orangutan</option>
							  		<option value="Coconut">Coconut</option>
								</select>
							</div>
							<div class="submit-row">
								<input type="submit" name="submit" value="submit">
							</div>
							</form>
						</p>
					<div>
				</div>
			</div>
		</div>
	</td>
	</tr>	
		<!--   End of Center Content -->
	</div>
</div>
<div class="footer"> 
	<!--Footer Stuff-->
</div>
</body>
</html>
		
	