<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Course site for Pitt CS1520">
    <meta name="author" content="Matt Bowytz">

    <title>CS 1520 Class Site</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cs1520.css" rel="stylesheet">

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
                <a class="page-scroll" href="#inClass">Exercises</a>
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

    <section id="intro" class="intro-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>CS 1520</h1>
            <p class="large-strong">Programming Languages<br>for Web Applications</p>
            <p class="centered">SPRING 2016</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 centered">
            <ul>
              <li class="stars">
                <span class="glyphicon glyphicon-star-empty"></span>
                <span class="glyphicon glyphicon-star-empty lg-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 centered">
            <h3>INSTRUCTOR</h3>
            <ul>
              <li class="med">Matt Bowytz</li>
              <li class="email-item">
                <span class="glyphicon glyphicon-envelope"></span>
                <a class="email-link" href="mailto:bowytz@pitt.edu">email</a>
              </li>
              <li></li>
            </ul>
          </div>
        </div>
        <hr class="sep">
        <div class="row">
          <div class="col-lg-6 centered">
            <h3>SECTIONS</h3>
            <ul>
              <li>Section 1: MW 4:30pm - 5:45pm SENSQ 5502</li>
              <li>Section 2: M  7:00pm - 9:30pm SENSQ 6110</li>
            </ul>
          </div>
          <div class="col-lg-6 centered">
            <h3>RECITATION</h3>
            <ul>
              <li>Section 1:  T 5:00pm - 5:50pm SENSQ 5505</li>
              <li>Section 1a: W 3:00pm - 3:50pm SENSQ 6110</li>
              <li>Section 2:  W 6:00pm - 6:50pm SENSQ 6110</li>
            </ul>
          </div>
        </div>
        <div class="row last-row">
          <div class="col-lg-12 centered">
            <h3>TEXTBOOK</h3>
            <ul>
              <li>PROGRAMMING THE WORLD WIDE WEB</li>
              <li>Eighth Edition</li>
              <li>Robert W. Sebesta</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="courseInfo" class="course content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>Course Info, Policies and Dates</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 centered">
            <p class="med">Course Information</p>            
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Prerequisite:</p>
            <p class="uc">cs/coe 0445</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Text:</p>
            <p>
              Programming the World Wide Web, Eight Edition by Robert Sebesta, Pearson Education Many language references will also be needed - these can be obtained from online sites
            </p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Language/Environment:</p>
            <p>
              We will be using PHP, MySQL, JavaScript, HTML (with DOM), CSS, XML (with DOM) and possibly other systems as well. Software may be available in University or Departmental labs, or it may required as downloads from the Web. We will also explore other topics, such as code management and other relevant technologies as time permits.
            </p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Grading Requirements:</p>
            <ul>
              <li>Exam One: 20%</li>
              <li>Exam Two: 20%</li>
              <li>Project: 40%</li>
              <li>In Class Exercises: 10%</li>
              <li>Quizzes: 10%</li>
            </ul>
          </div>
        </div>
        <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
        <div class="row">
          <div class="col-lg-12 centered">
            <p class="med">Course Policies</p>
          </div>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">General</p>
            <ul>
              <li>
                Unless otherwise stated, Each student is expected to do his/her own work. For a first offense, a student caught collaborating / cheating in any way will receive a zero for the exam / homework / project in question. In the event of a second offense, the student will receive an F for the course and may be subject to stronger action. Note: Submissions that are alike in a substantive way (not due to coincidence) will be considered to be cheating by ALL involved parties. Please protect yourselves by only storing your files in private directories, and by retrieving all printouts promptly. For more information on the Academic Integrity Policies of the School of Arts and Sciences, see this <a href="http://www.as.pitt.edu/faculty/policy/integrity.html">link</a>  
              </li>
              <li>
                Students are encouraged to attend all lectures, which frequently include material that is not directly taken from the text. If a student misses a lecture, he/she is still responsible for the material covered and is advised to copy the notes from a classmate.
              </li>
              <li>
                An abundance of information, including announcements, handouts, review sheets and solutions will be posted on my web page (and possibly TA pages as well) throughout the term. Students are expected to aware of all information that is posted on our web pages, and should access them frequently.
              </li>
              <li>
                Students with Disabilities: If you have a disability for which you are or may be requesting an accommodation, you are encouraged to contact both your instructor and Disability Resources and Services, 216 William Pitt Union, 412-648-7890 or 412-383-7355 (TTY) as early as possible in the term. DRS will verify your disability and determine reasonable accommodations for this course. More info <a href="http://www.studentaffairs.pitt.edu/drswelcome">here</a>
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exams</p>
            <ul>
              <li>The dates for exams will be posted to the Important Dates section, found below.</li>
              <li>
                Students are expected to be present for both exams. Make-up exams will only be given in the event of an emergency, and only if I am informed in advance. If you cannot contact me directly, send me email or call the CS Department (624-8492) and leave me a message. Failure to notify me prior to missing an exam will result in a zero for the exam.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Project</p>
            <ul>
              <li>
                In addition to the tests and quizzes, we will create a personal website which will utilize everyhting we have learned thus far.
              </li>
              <li>
                This will be split out into 2 sections. The first section will incorporate concepts we have gone over up until about the halfway point of class. You'll never guess what the second sections is about...
              </li>
              <li>
                You are free to leverage front end frameworks for visual appearance and some functionality. Bootstrap and Foundation are two of the most popular and actively supported platforms.
              </li>
              <li>
                I will be paying attention to the quality of code you write. This can include such things as consistent spacing, php writing style, etc. It doesn't matter which style you adopt, just stick to it! Comment on code when necessary, and keep the code clean and human readable.
              </li>
              <li>
                This will be a "flat" site. This means that we will not implement any server side frameworks or MVC structures.
              </li>
              <li>
                Specific details will arrive soon!
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">In Class Exercises</p>
            <ul>
              <li>
                <span class="bold">NOTE:</span> Please do not copy and paste source code from the example files that are found on this site. All code written for in-class exercises should be written by you. Example files should only be used as a reference.
              </li>
              <li>
                As often as possible, we will have in-class exercises. You can also think of these as a type of homework assignment as well, as they won't officially be due until one week wfter they are assigned.
              </li>
              <li>
                In class exercises must be demonstrated using each student's own Web server (XAMPP), either installed and run on a personal machine or installed on a flash drive and run in a classroom machine.
              </li>
              <li>
                The actual number of exercises may vary throughout the term.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Quizzes</p>
            <ul>
              <li>
                Quizzes will be given during recitations or in class (time permitting), and will be announced at least one class or recitation before they are given. They will generally include material covered in the previous class(es) and recitation(s).
              </li>
              <li>
                Two quizzes will be given, each counting for 5% of the final grade.
              </li>
              <li>
                As with exams, quizzes can only be made up if you contact myself or the recitation instructor in advance. If you miss a quiz without informing myself or the recitation instructor, you will receive a zero for that quiz.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered last-row">
            <p class="uc red-txt bold">Important Dates</p>
            <ul>
              <li>Coming Soon!</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="instructorInfo" class="instructor content-section">
      <div class="container">
        <div class="row last-row">
          <div class="col-lg-12 centered">
            <h1>Instructor Info</h1>
            <p class="med">Matt Bowytz</p>
            <p class="quote">"Call me Matt"</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered b-ten">
            <p class="uc red-txt bold">Contact</p>
            <div class="col-lg-4 centered b-ten">
              <span class="glyphicon glyphicon-envelope"></span>
              <a href="mailto:bowytz@pitt.edu">bowytz@pitt.edu - primary</a>
            </div>
            <div class="col-lg-4 centered b-ten">
              <span class="glyphicon glyphicon-envelope"></span>
              <a href="mailto:mbowytz@gmail.com">mbowytz@gmail.com - only if necessary</a>
            </div>
            <div class="col-lg-4 centered">
              <span class="glyphicon glyphicon-earphone"></span>
              <span>Office Phone: (412) 624-8490</span>
            </div>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Office Hours</p>
            <ul>
              <li>Monday 5:55pm - 6:55pm</li>
              <li>By Appointment</li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">About</p>
            <p>Coming Soon!</p>
          </div>
        </div>
      </div>
    </section>

    <section id="taInfo" class="ta content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>TA Info</h1>
          </div>
          <div class="col-lg-12 centered">
            <p class="med">Jeongmin Lee</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered b-ten">
            <p class="uc red-txt bold">Contact</p>
            <span class="glyphicon glyphicon-envelope"></span>
            <a href="mailto:jlee@cs.pitt.edu">jlee@cs.pitt.edu</a>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Office Hours 5501</p>
            <p>Tuesday 1:00pm - 5:00pm</p>
            <p>Thursday 10:00am - 12:00pm</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 centered">
            <p class="med">Vivek Punjabi</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered b-ten">
            <p class="uc red-txt bold">Contact</p>
            <span class="glyphicon glyphicon-envelope"></span>
            <a href="mailto:vdp6@cs.pitt.edu">vdp6@cs.pitt.edu</a>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Office Hours 5501</p>
            <p>Friday 10:00am - 12:00pm</p>
          </div>
        </div>       
      </div>
    </section>

    <section id="announcements" class="announcements content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>Announcements</h1>
            <p class="med">Check back often!</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Class Announcements and Info</p>
            <ul class="info-bubble last-row">
              <li class="info-date">1.21.16</li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                One 1.20.16, I mentioned that it was ok to open a PHP tag like this: <code>&lt;? ?&gt;</code>
              </li>              
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                This may or may not work for you. That being said, from now on we should open a PHP tage like this: <code>&lt;?php  ?&gt;</code>
              </li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                I've also added more specific guidelines about the in-class assignment (which is due on 1.27.16) if you haven't finished it or are confused about anything
              </li>
            </ul>
            <ul class="info-bubble last-row">
              <li class="info-date">1.17.16</li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                Site has been updated with .zip files that should now download properly!
              </li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                Lectures 1 through 3 are now available to view and/or download.
              </li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                Recitation is in full swing!
              </li>
            </ul>
            <ul class="info-bubble last-row">
              <li class="info-date">1.9.16</li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                Hello! Welcome to CS 1520 for the Spring 2016 Term! To start things off, we are going to dive into some HTML, CSS and a little server side scripting with PHP. Please read Chapters 1, 2, 3 and 9 in the class text book. I would like for you to have a solid understanding of the basics of these languages and how closely they all work together.
              </li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                We will be developing locally by running your own XAMPP server either on your personal machine, or from a thumb drive on a class machine. In order to do this, you need to download and install XAMPP. For more information and installation options, visit: <a href="https://www.apachefriends.org/index.html">apachefriends.org</a>
                <br>
                Please install as soon as possible!
              </li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                Recitation will begin NEXT week, I will update the site with exact information, so make sure to check in often!
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="syllabus" class="syllabus content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>Daily Syllabus</h1>
            <p class="med">Class Activities and Goals</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Lecture 1</p>
            <ul class="syl-list">
              <li class="syl-title">Concept</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-education"></span>
              </li>
              <li class="syl-item">
                Intro material, Course Policies and Goals
              </li>
              <li class="syl-item">
                Brief intro to web servers, clients and XAMPP
              </li>
              <li class="syl-item">
                Brief intro to HTML and CSS
              </li>
            </ul>
            <ul class="syl-list last-row">
              <li class="syl-title">References</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-file"></span>
              </li>
              <li class="syl-item">
                Handouts
              </li>
              <li class="syl-item">
                Notes
              </li>
              <li class="syl-item">
                Sebesta: Ch 1, 2, 3 and 9
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Lecture 2</p>
            <ul class="syl-list">
              <li class="syl-title">Concept</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-education"></span>
              </li>
              <li class="syl-item">
                Starting Off with PHP
              </li>
              <li class="syl-item">
                Running PHP scripts on a web server
              </li>
              <li class="syl-item">
                More with PHP, variables and exressions
              </li>
            </ul>
            <ul class="syl-list last-row">
              <li class="syl-title">References</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-file"></span>
              </li>
              <li class="syl-item">
                Handouts
              </li>
              <li class="syl-item">
                Notes
              </li>
              <li class="syl-item">
                Sebesta: Ch 9
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Lecture 3</p>
            <ul class="syl-list">
              <li class="syl-title">Concept</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-education"></span>
              </li>
              <li class="syl-item">
                PHP expressions and control structures
              </li>
              <li class="syl-item">
                PHP arrays: idea, structure and use; iterating and sorting; nested arrays
              </li>
            </ul>
            <ul class="syl-list last-row">
              <li class="syl-title">References</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-file"></span>
              </li>
              <li class="syl-item">
                Handouts
              </li>
              <li class="syl-item">
                Notes
              </li>
              <li class="syl-item">
                Sebesta: Ch 9
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="inClass" class="inclass content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>In Class Exercises</h1>
            <p class="med">To be demonstarated in class</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exercise 1</p>
            <ul class="ex-list">
              <li class="requirements">
                Requirements:
              </li>
              <li>
                Start your XAMPP (or other) web browser on your laptop or class machine
              </li>
              <li>
                Open a copy of handout ex5.php from the CS 1520 handouts via your server
              </li>
              <li>
                Show resulting page to the instructor
              </li>
            </ul>
            <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          </div>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exercise 2</p>
            <ul class="ex-list">
              <li class="requirements">
                Requirements: Write scripts and run them using your Web Server, according to the following specifications:
              </li>
              <li>
                Create 2 php scripts. One will act as an HTML view and the other will act as an include file.
              </li>
              <li>
                The included file may contain any PHP functionality that will affect the view
              </li>
              <li>
                Use a minimum of 3 variables
              </li>
              <li>
                At least one array
              </li>
              <li>
                A simple conditional statement
              </li>
              <li>
                Use part of one of the global PHP variables we spoke about in class
              </li>
              <li>
                In the view, iterate through the array(s) and display their output via HTML
              </li>
              <li>
                Compress the two files and email them to me by 1.27.16 or 2.1.16, depending on what section you are in
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exercise 3</p>
            <ul class="ex-list">
              <li class="requirements">
                Requirements:
              </li>
              <li>
                Install the PHPMailer class onto your Webserver so that you can send mail from your server utilizing either your Pitt Email account or another valid mail server.
              </li>
              <li>
                The PHPMailer files can be found <a href="https://github.com/Synchro/PHPMailer">here</a>
              </li>
              <li>
                You may have to change some settings on your server and update your include path in order to utilize these files. See the <b>mail.php</b> and <b>sendmail.php</b> handouts from lecture for help.
              </li>
              <li>
                One particular issue that you may have is a security error obtaining the certificate for smtp.pitt.edu. This may be because your server does not have the CA Bundle (Certificate Authority Bundle) installed. You can get the file from the internet or <a href="/deliverables/ca-bundle.crt">here</a>. You will need to put this file into a directory accessible to your server and then set the value of the <b>openssl.cafile</b> configuration variable within the <b>php.ini</b> file in your server. On my server, the <b>php.ini</b> file was located at <b>HOME/xamppfiles/etc/</b> , where <b>HOME</b> is the root directory of my XAMPP installation.
              </li>
              <li>
                Demonstrate your site by using the <b>mail.php</b> and <b>sendmail.php</b> scripts to send yourself an email in front of your instructor. You must have some mail client open (either on a computer or phone or tablet) to show that the mail has been delivered.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="materials" class="materials content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>Online Materials</h1>
            <p class="med">Slides and Exam/Quiz Materials</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Lecture Slides</p>
            <ul>
              <li>
                <a href="/deliverables/slides/BowytzLect1.pdf">Lecture 1 (follow)</a> | <a href="/deliverables/slides/BowytzLect1.zip">Lecture 1 (get)</a>
              </li>
              <li>
                <a href="/deliverables/slides/BowytzLect2.pdf">Lecture 2 (follow)</a> | <a href="/deliverables/slides/BowytzLect2.zip">Lecture 2 (get)</a>
              </li>
              <li>
                <a href="/deliverables/slides/BowytzLect3.pdf">Lecture 3 (follow)</a> | <a href="/deliverables/slides/BowytzLect3.zip">Lecture 3 (get)</a>
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">PHP/HTML Slides</p>
            <ul>
              <li>
                <a href="/deliverables/slides/Chapter1.pdf">Ch 1 (follow)</a>
              </li>
              <li>
                <a href="/deliverables/slides/Chapter2.pdf">Ch 2 (follow)</a>
              </li>
              <li>
                <a href="/deliverables/slides/Chapter3.pdf">Ch 3 (follow)</a>
              </li>
              <li>
                <a href="/deliverables/slides/Chapter9.pdf">Ch 9 (follow)</a>
              </li>
              <li>
                <a href="/deliverables/slides/book.zip">Text Slides (Ch. 1, 2, 3, 9) (get)</a>
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Javascript Slides</p>
            <p>Coming Soon!</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">JQuery Slides</p>
            <p>Coming Soon!</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Quiz 1 Materials</p>
            <p>Coming Soon!</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Quiz 2 Materials</p>
            <p>Coming Soon!</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exam 1 Materials</p>
            <p>Coming Soon!</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered last-row">
            <p class="uc red-txt bold">Exam 2 Materials</p>
            <p>Coming Soon!</p>
          </div>
        </div>
      </div>
    </section>

    <section id="handouts" class="handouts content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>Handouts</h1>
            <p class="med">Necessary Files</p>
          </div>
          <div class="col-lg-12 centered">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" class="block" href="#collapse1">PHP/HTML Handouts</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">
                    If you click on the links for the .php handouts, the server will attempt to run them. This may or may not cause an error (depending on the server you are using for access) but it will definitely not show you the .php source code.
                    To run these handouts I recommend copying them to your local XAMMP server directories and running them there. For information on XAMPP, go <a href="https://www.apachefriends.org/index.html">here</a>.
                  </div>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX1 File Type Examples</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex1/ex1.txt">ex1.txt (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex1/ex1.html">ex1.html (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex1/ex1.php">ex1.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex1/ex1.zip">ex1.zip (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX2 Simple PHP example</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex2/ex2.php">ex2.php (follow)</a> | <a href="/deliverables/ex2/ex2.zip">ex2.php (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX3 Another simple example; Demo files</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex3/ex3.php">ex3.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex3/ex3b.php">ex3b.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex3/ex3c.html">ex3c.html (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex3/ex3wrong.php">ex3wrong.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex3/ex3.zip">ex3.zip (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX4 Demo of simple types and dynamic typing</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex4/ex4.php">ex4.php (follow)</a> | <a href="/deliverables/ex4/ex4.php.zip">ex4.php (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX5 Showing PHP configuration</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex5/ex5.php">ex5.php (follow)</a> | <a href="/deliverables/ex5/ex5.php.zip">ex5.php (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX6 Boolean expressions and control structures</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex6/ex6.php">ex6.php (follow)</a> | <a href="/deliverables/ex6/ex6.php.zip">ex6.php (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX7 Arrays and accessing them</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex7/ex7.php">ex7.php (follow)</a> | <a href="/deliverables/ex7/ex7.zip">ex7.php (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX8 More on arrays and accessing them</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex8/ex8.php">ex8.php (follow)</a> | <a href="/deliverables/ex8/ex8.php.zip">ex8.php (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX9 Even more on arrays</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex9/ex9.php">ex9.php (follow)</a> | <a href="/deliverables/ex9/ex9.zip">ex9.php (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX10 Functions</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex10/ex10.php">ex10.php (follow)</a> | <a href="/deliverables/ex10/ex10.zip">ex10.php (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX11 More Functions</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex11/ex11.php">ex11.php (follow)</a> | <a href="/deliverables/ex11/ex11.php.zip">ex11.php (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">EX12 Forms And Files</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex12/ex12.php">ex12.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex12/ex12b.php">ex12b.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex12/ex12.zip">ex12.zip (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">GetPost</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/getpost/getpost.php">getpost.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/getpost/getpost.html">getpost.html (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/getpost/getpost.zip">getpost.zip (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">Read/Write</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/readwrite/readwrite.php">readwrite.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/readwrite/filedemo.txt">filedemo.txt (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/readwrite/readwrite.zip">readwrite.zip (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">Flock</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/flock/flock.php">flock.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/flock/flockdemo.txt">flockdemo.txt (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/flock/flock.zip">flock.zip (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">Simple mail using PHP</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/mail/mail.php">mail.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/mail/sendmail.php">sendmail.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/mail/mail.zip">mail.zip (get)</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">CSS</p>
            <p>Coming Soon!</p>
          </div>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Javascript</p>
            <p>Coming Soon!</p>
          </div>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">JQuery</p>
            <p>Coming Soon!</p>
          </div>
          <div class="col-lg-12 centered last-row">
            <p class="uc red-txt bold">XML</p>
            <p>Coming Soon!</p>
          </div>
        </div>
      </div>
    </section>

    <section id="projects" class="projects content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>Programming Projects</h1>
            <p class="med">In Depth Project Info</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Assignments</p>
            <p>TBA</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Submission Guidelines</p>
            <p>TBA</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Grading Rubric</p>
            <p>TBA</p>
          </div>
        </div>
      </div>
    </section>

    <section id="links" class="links content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>Useful Links</h1>
            <p class="med">Suggestions Welcome!</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered last-row">
            <p class="uc red-txt bold">Links</p>
            <ul>
              <li class="b-ten">
                <a href="http://www.apachefriends.org/index.html">XAMPP Installation</a>
              </li>
              <li class="b-ten">
                <a href="https://wiki.archlinux.org/index.php/Xampp">XAMPP Wiki for Linux</a>
              </li>
              <li class="b-ten">
                <a href="http://www.php.net">PHP Site</a>
              </li>
              <li class="b-ten">
                <a href="http://www.mysql.com">MySQL Site</a>
              </li>
              <li class="b-ten">
                <a href="http://www.codecademy.com">codecademy</a>
              </li>
              <li class="b-ten">
                <a href="http://www.stackoverflow.com">StackOverflow</a>
              </li>
              <li class="b-ten">
                <a href="http://www.cs.pitt.edu/undergrads/crc">CS Peer Tutoring Schedule</a>
              </li>
              <li class="b-ten">
                <a href="http://www.provost.pitt.edu/information-on/calendar.html">Academic Calendar</a>
              </li>
              <li class="b-ten">
                <a href="http://www.studentaffairs.pitt.edu/cchome">Student Counseling Center</a>
              </li>
              <li class="b-ten">
                <a href="http://www.studentaffairs.pitt.edu/drswelcome">Disability Resources</a>
              </li>
              <li class="b-ten">
                <a href="http://www.pitt.edu/students">General Student Info</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="nav-spacing"></div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/site.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

  </body>
</html>
