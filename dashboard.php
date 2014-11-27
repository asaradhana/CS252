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
           $('#menu').metisMenu();
       });
   </script>



    <style type="text/css"> 
    #description{
      font-size: 20px;
    }
    #desc_head{
      font-size: 25px;
    }
    </style>
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
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php">Apache Server Control<span class="sr-only">(current)</span></a></li>
            <li><a href="apacheconfig.php">Apache Server Configuration</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="phpconfig.php">PHP Server Configuration</a></li>
            <li><a href="mysqlconfig.php">Mysql Server Configuration</a></li>
            <!-- <li><a href="">Another nav item</a></li> -->
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="gen_homepage.php">Home Page</a></li>
            <!-- <li id="menu"><a href="gen_blog.php">Manage Blog</a></li> -->
            <!-- <ul> -->
              <li><a href="gen_blog.php">Make a New BLog</a></li>
              <li><a href=" blogentry.php">Post a New Article</a></li>
            <!-- </ul> -->
            <!-- <li><a href="">Signin/Signup site</a></li> -->
            <!-- <li><a href="">Static Website</a></li> -->
            <!-- <li><a href="">More navigation</a></li> -->
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Basic Settings</h1>

          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a id="desc_head" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Introduction
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body" id="description">
                The Apache HTTP Server, colloquially called Apache, is the world's most widely-used Web
                 server software. Apache supports a variety of features, many implemented as compiled 
                 modules which extend the core functionality. These can range from server-side
                  programming language support to authentication schemes. It also features configurable 
                  error messages.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a id="desc_head" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Starting the Apache Server
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body" id="description">
                   Apache can be started by the following command:<br>
                    <code>/etc/init.d/apache2 restart</code>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a id="desc_head" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Stopping the Apache Server
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body" id="description">
                  Apache can be stopped by the following command:<br>
                    <code>/etc/init.d/apache2 stop</code>

                </div>
              </div>
            </div>
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
