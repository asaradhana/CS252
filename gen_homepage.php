<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Apache GUI User Session</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="dist/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jquery.metisMenu.js"></script>
    <script>
    $(function () {
    $('#menu').metisMenu({
    toggle: false // disable the auto collapse. Default: true.
    });
    });
    </script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php">Apache GUI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <!-- <li><a href="#">Profile</a></li> -->
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" id="menu">
            <li><a href="dashboard.php">Apache Server Control<span class="sr-only">(current)</span></a></li>
            <li><a href="apacheconfig.php">Apache Server Configuration</a></li>
            <!-- <li><a href="#">Apache Log Statics</a></li> -->
            <!-- <li><a href="#">Export</a></li> -->
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="phpconfig.php">PHP Server Configuration</a></li>
            <li><a href="mysqlconfig.php">Mysql Server Configuration</a></li>
            <!-- <li><a href="">Another nav item</a></li> -->
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="gen_homepage.php">Home Page</a></li>
            <!-- <li><a href="#">Manage Blog</a></li> -->
            <!-- <ul> -->
              <li><a href="gen_blog.php">Make a New Blog</a> </li>
              <li><a href="blogentry.php">Post a  New Article</a></li>
            <!-- </ul> -->
           <!--  <li><a href="">Signin/Signup site</a></li>
            <li><a href="">Static Website</a></li> -->
            <!-- <li><a href="">More navigation</a></li> -->
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         
          <!-- <form class="form-horizontal" role="form" action="gen_hompagescript.php" method="post"> -->
          <form class="form-horizontal" role="form" action="test.php" method="post">
          <div class="form-group">
              <label for="name" class="col-sm-2 control-label" >Name</label>
              <div class="col-sm-10">
                <input name="name" type="text" class="form-control" id="name" placeholder="eg: Johnson Smith" ng-model="formInfo.Name">
              </div>
            </div>
            <div class="form-group">
              <label for="aboutme" class="col-sm-2 control-label">About me</label>
              <div class="col-sm-10">
              <textarea name="aboutme" cols="100" rows="5" id="aboutme" placeholder="Write something about yourself - your interests, hobbies etc."></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input  name="email" type="email" class="form-control" id="email" placeholder="eg: johnson@gmail.com">
              </div>
            </div>
			<div class="form-group">
              <label for="name" class="col-sm-2 control-label" >Facebook link</label>
              <div class="col-sm-10">
                <input name="fb" type="text" class="form-control" id="name" placeholder="eg: https://www.facebook.com/sandip.kum" ng-model="formInfo.Name">
              </div>
            </div>
			<div class="form-group">
              <label for="name" class="col-sm-2 control-label" >Git hub</label>
              <div class="col-sm-10">
                <input name="github" type="text" class="form-control" id="name" placeholder="eg: https://github.com/amitkmr/ApacheGui" ng-model="formInfo.Name">
              </div>
            </div>
			<div class="form-group">
              <label for="name" class="col-sm-2 control-label" >Twitter</label>
              <div class="col-sm-10">
                <input name="twitter" type="text" class="form-control" id="name" placeholder="eg: https://www.twitter.com/amitkmr/" ng-model="formInfo.Name">
              </div>
            </div>
            <div class="form-group">
              <label for="phone" class="col-sm-2 control-label">Phone Number</label>
              <div class="col-sm-10">
                <input name="phone" type="text" class="form-control" id="phone" placeholder="eg: (+91) 9936416732">
              </div>
            </div>
            <div class="form-group">
              <label for="address" class="col-sm-2 control-label">Address</label>
              <div class="col-sm-10">
               <textarea name="address" cols="100" rows="5" id="address" placeholder="Please enter the house no., street, city, state and country name in separate lines"></textarea>
			       </div>
            </div>
			      <div class="form-group">
               <label for="resume" class="col-sm-2 control-label">Upload resume</label>
              <div class="col-sm-10">
               <input name="resume" type="file" id="resume">
             </div>
           </div>
           <div class="form-group">
               <label for="blogimage" class="col-sm-2 control-label">Blog Image</label>
              <div class="col-sm-10">
               <input type="file" name="fileToUpload" id="fileToUpload">
             </div>
           </div>
             <br><br><br>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button name="submit" type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
            <!-- <span>{{formInfo}}</span>				<!-- to store the form values -->
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="dist/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>