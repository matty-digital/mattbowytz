<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Course site for Pitt CS1520">
    <meta name="author" content="Matt Bowytz">

    <title>CS 1520 Class Site</title>

    <link href="css/classes.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">CS 1520</a>
        </div>
        <h1>HI THERE!!!<h1>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
              <li class="hidden">
                <a class="page-scroll" href="#page-top"></a>
              </li>
              <li>
                <a class="page-scroll" href="#courseInfo">Course Info</a>
              </li>
              <li>
                <a class="page-scroll" href="#instructorInfo">Instructor Info</a>
              </li>
              <li>
                <a class="page-scroll" href="#taInfo">TA Info</a>
              </li>
              <li>
                <a class="page-scroll" href="#announcements">Announcements</a>
              </li>
              <li>
                <a class="page-scroll" href="#syllabus">Syllabus</a>
              </li>
              <li>
                <a class="page-scroll" href="#inClass">Assignments</a>
              </li>
              <li>
                <a class="page-scroll" href="#materials">Materials</a>
              </li>
              <li>
                <a class="page-scroll" href="#handouts">Handouts</a>
              </li>
              <li>
                <a class="page-scroll" href="#projects">Projects</a>
              </li>
              <li>
                <a class="page-scroll" href="#links">Links</a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php include_once "./includes/1520/1520intro.php"; ?>

    <?php include_once "./includes/1520/1520course_info.php"; ?>

    <?php include_once "./includes/instructor_info.php"; ?>
    
    <?php include_once "./includes/1520/1520ta_info.php"; ?>

    <?php include_once "./includes/1520/1520announcements.php"; ?>

    <?php include_once "./includes/1520/1520syllabus.php"; ?>

    <?php include_once "./includes/1520/1520in_class.php"; ?>

    <?php include_once "./includes/1520/1520materials.php"; ?>

    <?php include_once "./includes/1520/1520handouts.php"; ?>

    <?php include_once "./includes/1520/1520projects.php"; ?>

    <?php include_once "./includes/1520/1520links.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/site.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

  </body>
</html>
