<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Me</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/education-page.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="education.html">Education</a>
                    </li>
                    <li>
                        <a href="experience.html">Experience</a>
                    </li>
                    <li>
                        <a href="leadership.html">Leadership</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="section-heading"><font color=#c84d64>Contact Me</font></h1>
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    
                    <h3 class="section-heading">Fill out the form below to contact me.</h3>                   


<style type="text/css">

p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
    margin:0 auto;
    width:400px;
    padding:14px;
}
    /* ----------- basic ----------- */
    #basic label{
        display:block;
        font-weight:bold;
        text-align:right;
        width:140px;
        float:left;
    }
    #basic .small{
        color:#666666;
        display:block;
        font-size:11px;
        font-weight:normal;
        text-align:right;
        width:140px;
    }
    #basic button{ 
        clear:both;
        margin-left:150px;
        background:#888888;
        color:#FFFFFF;
        border:solid 1px #666666;
        font-size:11px;
        font-weight:bold;
        padding:4px 6px;
    }

    /* ----------- stylized ----------- */

    #stylized label{
        display:block;
        font-weight:bold;
        text-align:right;
        width:140px;
        float:left;
    }
    #stylized .small{
        color:#666666;
        display:block;
        font-size:11px;
        font-weight:normal;
        text-align:right;
        width:140px;
    }
    #stylized input{
        float:left;
        font-size:12px;
        padding:4px 2px;
        border:solid 1px #aacfe4;
        width:200px;
        margin:2px 0 20px 10px;
    }
    #stylized button{ 
        clear:both;
        margin-left:160px;
        width:125px;
        height:31px;
        background:#444;
        text-align:center;
        line-height:31px;
        color:#FFFFFF;
        font-size:11px;
        font-weight:bold;
    }

</style>

<div id="stylized" class="myform">

<form id="form1" id="form1" method="POST">

    <label>Name
        <span class="small">Add your Name</span>
    </label>
<input type="text" name="name">
    <label>Email
        <span class="small">Enter your Email</span>
    </label>
<input type="text" name="email">

<br />
<br />

    <label>Message
        <span class="small">Type Your Message</span>
    </label>
<textarea name="message" rows="6" cols="25"></textarea><br />
    <button type="submit" value="Send" style="margin-top:15px;">Send</button>
<div class="spacer">
</div>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Message: $message";
$recipient = "cleopold@purdue.edu";
$subject = "Message from Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
?>

</form>

</div> 
-->
<!-- end of form class -->

               </div>  
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->


    <!-- /.content-section-a -->

	<!--<a  name="contact"></a>-->
   
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="education.html">Education</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="experience.html">Experience</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="leadership.html">Leadership</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">&copy; Corinne Leopold - 2015.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
