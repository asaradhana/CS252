<?php
// Start the buffering //
ob_start();
?>
<?php
$output = shell_exec('mkdir blog');
$target_dir = "blog/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico"<>

    <title><?php $blogtitle = $_POST['blogname']; echo $blogtitle; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="dist/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<!--     <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>
 -->
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php $blogtitle = $_POST['blogname']; echo $blogtitle; ?></h1>
       <!--  <p class="lead blog-description">This is the example how your blog will look like</p> -->
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title"><?php $posttitle = $_POST['blog_post_title']; echo $posttitle; ?></h2>
            <p class="blog-post-meta"><?php $today = date("F j, Y"); echo $today; ?> By <a href="#"><?php $author = $_POST['author']; echo $author; ?></a></p>
            <p><?php echo '<img src="'.basename($_FILES["fileToUpload"]["name"]).'" width="600" >'; ?></p>
            <p><?php $postcontent = $_POST['postcontent']; echo $postcontent; ?></p>
          </div><!-- /.blog-post -->

          <!-- <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav> -->

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p id="aboutblog"><?php $aboutblog = $_POST['aboutblog']; echo $aboutblog; ?></p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
             <!--  <li><a href="#"></a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li> -->

              <?php
              $pattern ='/h2/';
              foreach (glob("blog/*.html") as $filename) {
                  // echo "$filename size " . filesize($filename) . "\n";
                // preg_match ($pattern ,$filename [,&$matches [, int $flags = 0 [, int $offset = 0 ]]] )
                $subject = file_get_contents($filename);
                                // echo $subject;
                // $regexp='/(<h2.*>)(\w.*)(<\/h2>)/';
                // echo $regexp;
                $h1tags = preg_match_all('/<h2 class\="blog-post-title">(.*)<\/h2>/',$subject,$patterns);
                // echo $h1tags;

                //print_r($string1);
                //echo "<hr />\n\n";
                // preg_match($pattern, $subject, $matches);
                // echo $matches[0];

                  echo '<li><a href="'.$filename.'">'.$patterns[1][0].'</a></li>';

                //   foreach (glob("blog/*post.html") as $search) {
                //   $contents = file_get_contents($search);
                //   if (!strpos($contents, "<h2>*<h2>")) continue;
                // $matches[] = $search;
              }
              ?>


            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <!-- <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p> -->
      <p>
        <!-- <a href="blog/index.html">click here to go to generated page</a> -->
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<?php
echo '1';

// Get the content that is in the buffer and put it in your file //
// file_put_contents('bloghome.html', ob_get_contents());
file_put_contents('blog/index.html', ob_get_contents());
$output = shell_exec('cp -r dist blog/dist');
$output = shell_exec('cp  blog.css blog/blog.css');

?>
