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
          <ul class="nav nav-sidebar" id="menu">
            <li><a href="dashboard.php">Apache Server Control<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="http://localhost/CS252-master/apacheconfig.php">Apache Server Configuration</a></li>
            <!-- <li><a href="#">Apache Log Statics</a></li> -->
            <!-- <li><a href="#">Export</a></li> -->
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="phpconfig.php">PHP Server Configuration</a></li>
            <li><a href="mysqlconfig.php">Mysql Server Configuration</a></li>
            <!-- <li><a href="">Another nav item</a></li> -->
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="gen_homepage.php">Home Page</a></li>
            <!-- <li><a href="gen_blog.php">Your Blog</a></li> -->
            <!-- <ul> -->
              <li><a href="gen_blog.php">Make a New Blog</a></li>
              <li><a href="blogentry.php">Post a New Article</a></li>
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
                    Document Root
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body" id="description">
                This directive sets the directory from which Apache will serve files. The server appends the path 
                from the requested URL to the document root to make the path to the document. For example:
                DocumentRoot /home/www/theos.in refers to /home/www/theos.in/index.html. It can be 
                changed by editing the default value in <br>

                <p id="para2">This directive sets the directory from which Apache will serve files. The
           server appends the path from the requested URL to the document root to make the path to the 
           document. For example, Document root /home/www/theos.in refers to /home/www/theos.in/index.html </br></br> <b>Steps to change the Directory path</b></br>
          1. Open the file 000default.conf in apache folder with the following command in terminal.</br>
            sudo gedit /etc/apache2/sites-available/000default.conf</br>
          2. Repalce '/var/www/html' with the path the user wants to give in the following line.</br>
            DocumentRoot /var/www/html </br>
          3. Restart apache server. </br>
            sudo service apache2 restart</br><b>For more ease, download the bash file</b>
          </p>
          <br><br>
                <u><mark>/etc/apache2/sites-available/default</mark></u>
                <a href="document_replace.sh"><h4>Script Here</h4></a>
                    <code>#!/usr/bin/bash
                      echo "name of document root path var\/www\/your root name"
                      read rep;
                      #rep = $1
                      echo $rep;
                      line="var\/www\/html"
                      sed -i "s/$line/$rep/" /etc/apache2/sites-available/000-default.conf
                      </code>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a id="desc_head" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Port Change 
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body" id="description">
                   When httpd starts, it binds to some port and address on the local machine and waits 
                   for incoming requests. By default, it listens to all addresses on the machine. The 
                   Listen directive tells the server to accept incoming requests only on the specified 
                   port(s) or address-and-port combinations. If only a port number is specified in the 
                   Listen directive, the server listens to the given port on all interfaces. It can be 
                	 changed by editing the default value in <br>
                	 <u><mark>/etc/apache2/ports.conf</mark></u>
                   <p id="para3">When httpd starts, it binds to some port and address on the local machine
           and waits for incoming requests. By default, it listens to all addresses on the machine. The 
           Listen directive tells the server to accept incoming requests only on the specified port(s) 
           or address-and-port combinations. If only a port number is specified in the Listen directive,
           the server listens to the given port on all interfaces. For example, Listen 80 </br></br> <b>Steps to change the Listen port   </b>1. Open /etc/apache2/ports.conf file </br> sudo gedit /etc/apache2/ports.conf </br>
          2. To make the server accept connections on both port 80 and port 8010, use:</br>Listen 80</br>Listen 8010</br>
          3. Restart apache server. </br>
            sudo service apache2 restart</br><b>for more ease, download the bash file</b>
      <p>
                   <a href="replace_perl.sh"><h4>Click here to download script</h4></a>

                   <code>#!/usr/bin/bash
                      echo "enter your listen port ";
                      read portno;
                      sed -i "s/80/$portno/" /etc/apache2/ports.conf
                      </code>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a id="desc_head" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Redirect the 404 Custom Error Page
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body" id="description">
                  A 404 error message is the standard HTTP standard response code which is returned when 
                  the visitor cannot communicate with the server. Visitor gets a standardized undesirable 
                  404 Error Page and it’s unlikely that he will make the effort to see any part of your site. 
                  Therefore it is important to create a 404 page on your site and redirect traffic from 
                  incorrect urls to it which can be done by a <u><mark>.htaccess</mark></u> file.

                  <a href="redirect404.sh"><h4>click here to download the script</h4></a>
                  <code>#!/bin/bash
                      echo "ErrorDocument 404 404.php" > /var/www/CS252-master/.htaccess
                      echo "Page not found" > /var/www/CS252-master/404.php
                      service apache2 restart</code>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                  <a id="desc_head" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Redirect the 403 Custom Error Page
                  </a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body" id="description">
                  The 403 Forbidden error is an HTTP status code that means that accessing the page or 
                  resource you were trying to reach is absolutely forbidden for some reason. Sometimes,
                  it is beneficial to create a 404 page on your site and redirect traffic from 
                  incorrect urls to it which can be done by a <u><mark>.htaccess</mark></u> file.

                  <a href="redirect403.sh"><h4>click here to download the script</h4></a>
                  <code>#!/bin/bash
                      echo "ErrorDocument 403 403.php" >> /var/www/CS252-master/.htaccess
                      echo "Sorry, you landed on a forbidden page!" > /var/www/CS252-master/403.php
                      service apache2 restart</code>
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
