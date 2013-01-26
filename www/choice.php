<?php
    require("common.php");
    if(empty($_SESSION['user']))
    {
        header("Location: home.php");
        die("Redirecting to login.php");
    }
    // Everything below this point in the file is secured by the login system

//Get values from user for display
$uid=htmlentities($_SESSION['user']['id'], ENT_QUOTES, 'UTF-8');
$username=htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8');
$lesson_num=htmlentities($_SESSION['user']['lesson'], ENT_QUOTES, 'UTF-8');
?>

   <!DOCTYPE html>
<html>
<head>                
        <script src="jquery.js"> </script>
        <title> Code Learning </title>
        <link rel="stylesheet" type = "text/css" href="hackathon-style.css" />
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
                left: '25%'
            }, 500);
        },
        function(){
            $('#slidenav').animate({
                left: '-1000px'
            }, 500);
    });
        
    });
</script>
<header>
        <h1> Choose Your Project </h1>
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
                                                <li> <a href=****> About Us </a> </li>
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
                <div class= "username-display"> Welcome <?php echo $username; ?>. </div>
                <!-- Php script sends what section we are working on--> </div>
   <!--             <div class = "section-title"> <span class="blue"> Section # </span>: Name of
Section </div> -->
                <div id="move-foreward">
                        <div id="green-arrow">
                        <a href ='#'>
                                <img src="images/green-arrow.png"/>
                        <a>
                        </div>        
                </div>
                
        <!-- Project Choices -->
        <table class  = "proj_panel" align="center">
                <tr>
                <td>
                <a href="question.php">
                <div class = "proj_contain">
                        <div class = "proj_text">
                                <div class = "proj_post">
                                        <p>Black Jack and Hangman</p>
                                </div>
                        </div>
                </div>
                </a>
                </td>
                
                <td>
                <a href=*>
                <div class = "proj_contain">
                        <div class = "proj_text">
                                <div class = "proj_post">
                                        <p>Fast Fourier Transforms and the Large Hardon Collider</p>
                                </div>
                        </div>
                </div>
                </a>
                </td>
                
                <td>
                <a href=*>
                <div class = "proj_contain">
                        <div class = "proj_text">
                                <div class = "proj_post">
                                        <p>Polychromatic Music Synthesizer and Sasquatch Locator</p>
                                </div>
                        </div>
                </div>
                </a>
                </td> 
                </tr>
        </table>
</div>
                
<div class="footer"> 
        <!--Footer Stuff-->
</div>
</body>
