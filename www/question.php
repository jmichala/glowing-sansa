
<?php
    require("common.php");
    if(empty($_SESSION['user']))
    {
        header("Location: home.php");
        die("Redirecting to login.php");
    }
    // Everything below this point in the file is secured by the login system

//JSON file parsing
$string=file_get_contents("curriculum.json");
$json_a=json_decode($string, true);
$lesson=$json_a[$_SESSION['user']['lesson']];

echo "SESSION LESSON" . $_SESSION['user']['lesson'];

//Get values from user for display
$uid=htmlentities($_SESSION['user']['id'], ENT_QUOTES, 'UTF-8');
$username=htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8');
$lesson_num=htmlentities($_SESSION['user']['lesson'], ENT_QUOTES, 'UTF-8');

foreach ($json_a as $k => $v) {
   echo $k, ' : ', $v;
}

echo "DONE";

?>

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
    $('#slidenav').animate({
        left: '-1000px'
    }, 200);
    $('#open a').toggle(
        function(){
            $('#slidenav').animate({
                left: '23%'
            }, 500);
        },
        function(){
            $('#slidenav').animate({
                left: '-1000px'
            }, 500);
    	});
		$('.answer-link-false1').click(
			function(){
				$("#nextPage").animate({
					left: '900px'
				}, 500);	
				$(".answer-contain-false1").css({"backgroundColor": "#DD0000","opacity":"1"});
				$("#nextPage a").attr("href","nextlesson.php?id=<?php echo $lesson["nw"]; ?>");
				document.getElementById("arrow").href="nextlesson.php?id=<?php echo $lesson["nw"]; ?>";
			});
		$('.answer-link-false3').click(
			function(){
				$("#nextPage").animate({
					left: '900px'
				}, 500);	
				$(".answer-contain-false3").css({"backgroundColor": "#DD0000","opacity":"1"});
				$("#nextPage a").attr("href","nextlesson.php?id=<?php echo $lesson["nw"]; ?>");
				document.getElementById("arrow").href="nextlesson.php?id=<?php echo $lesson["nw"]; ?>";
			});	
		$('.answer-link-false2').click(
			function(){
				$("#nextPage").animate({
					left: '900px'
				}, 500);	
				$(".answer-contain-false2").css({"backgroundColor": "#DD0000","opacity":"1"});
				$("#nextPage a").attr("href","nextlesson.php?id=<?php echo $lesson["nw"]; ?>");
				document.getElementById("arrow").href="nextlesson.php?id=<?php echo $lesson["nw"]; ?>";
			});
		$('.answer-link-true').click(
			function(){
				$("#nextPage").animate({
					left: '900px'
				}, 500);
				$(".answer-contain-true").css({"backgroundColor": "#00DD00","opacity":"1"});
				$("#nextPage a").attr("href","nextlesson.php?id=<?php echo $lesson["nr"]; ?>");
				document.getElementById("arrow").href="nextlesson.php?id=<?php echo $lesson["nr"]; ?>";
			});
    });
</script>
<!-- 
-->
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
		<div class= "username-display"> Welcome, <?php echo $username; ?></div>
		<!-- Php script sends what section we are working on--> </div>
		<div class = "section-title"> <span class="blue"> Section <?php echo $lesson["sn"]; ?> </span>: <?php echo $lesson["sname"]; ?> </div>
		<div id="move-foreward">
			<div id="nextPage">
				<a id="arrow" href ='#'>
					<img src="images/green-arrow.png"/>
				</a>
			</div>	
		</div>
		
		<!-- Question Panel -->
		<table align= "center">	
		<tr>
		<td>
			<div class = "<?php echo $lesson["pt"]; ?>-panel">
				<div class = "instruction"> </div> 
				<div class = "q-container">
					<p class = "question"> <?php echo $lesson["ptext"]; ?> </p>
				</div>
			</div>
		</td>
		<tr>
		</table>


<?php


if ($lesson["qt"] == "options")
{

//GENERATE LESSON BOXES
$num=1;
if ($lesson["ans"] == 1)
{ $b1 = "true"; }
else
{ $b1 = "false" . $num; $num=$num+1; }
if ($lesson["ans"] == 2)
{ $b2 = "true"; }
else
{ $b2 = "false" . $num; $num=$num+1; }
if ($lesson["ans"] == 3)
{ $b3 = "true"; }
else
{ $b3 = "false" . $num; $num=$num+1; }
if ($lesson["ans"] == 4)
{ $b4 = "true"; }
else
{ $b4 = "false" . $num; }


$boxes[0] = '
				<td>
					<a href="#" class="answer-link-'. $b1 .'">
					<div class="'. $lesson["at"] .'-panel">
					<div class = "answer-contain-'. $b1 .'"> 
						<p><!--answer 4 text here--> '. $lesson["a1"] .'</p>
					</div>
					</div>
					</a>
				</td>
';
$boxes[1] = '
			<td>
				<a href="#" class="answer-link-'. $b2 .'">
				<div class="'. $lesson["at"] .'-panel">
				<div class = "answer-contain-'. $b2 .'"> 
					<p>'. $lesson["a2"] .'</p>
				</div>
				</div>
				</a>
			</td>
';
$boxes[2] = '
				<td>
					<a href="#" class="answer-link-'. $b3 .'">
					<div class="'. $lesson["at"] .'-panel">
					<div class = "answer-contain-'. $b3 .'"> 
						<p>'. $lesson["a3"] .' </p>
					</div>
					</div>
					</a>
				</td>
';
$boxes[3] = '
			<td>
				<a href="#" class="answer-link-'. $b4 .'">
				<div class="'. $lesson["at"] .'-panel">
				<div class = "answer-contain-'. $b4 .'"> 
					<p>'. $lesson["a4"] .'</p>
				</div>
				</div>
				</a>
			</td>
';
shuffle($boxes);

echo '
		<!--Answers-->
		<table class = "answer-panel" align="center">
			<tr>
';
echo $boxes[0], $boxes[1];
echo '
			</tr>
			<tr>
';
echo $boxes[2], $boxes[3];
echo '
			</tr>
		</table>	
';
}
else if ($lesson["qt"] == "code")
{
echo '		<table class = "answer-panel" align="center">
			<tr>
			<td>
			<div class="white-panel">
				<ul class="codeLines">
					<li> <input type="text"> </li>
					<li> <input type="text"> </li>
					<li> <input type="text"> </li>
					<li> <input type="text"> </li>
					<li> <input type="text"> </li>
				</ul>	
			</div>
			</td>
			<td>
				<div class="white-panel">
					<ul class="codeLines">
						'. $lesson["ht2"] .
						/*<li>  Hint<!--hint about code line --> </li>
						<li> Hint<!--hint about code line --> </li>
						<li> Hint<!--hint about code line --> </li>
						<li> Hint <!--hint about code line --> </li>
						<li>  Hint<!--hint about code line --> </li>*/'
					</ul>	
				</div>
			</tr>
			<tr>
			<td>
			<a href="#" id ="go-next-arrow"> Proceed </a>
			</td>
			</tr>	
		</table>';
}

?>

		



		<!-- Hint Window -->
		<div id="slidenav">
			<div class="hint-contain">
				<div class="hint-text">
					<p> <?php echo $lesson["ht"]; ?> </p>
				</div>
			</div>
		</div>
		<div id="open">
			<a href='#'> 
				<img src="images/questionMark.png" />
			</a>
		</div>
		<!--   End of Center Content -->
	</div>
</div>
<div class="footer"> 
	<!--Footer Stuff-->
</div>
</body>
</html>
		
	
