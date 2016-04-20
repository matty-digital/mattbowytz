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
            <p class="uc red-txt bold">(Subject to change)</p>
            <ul>
              <li>2.8.16 - Quiz 1</li>
              <li>2.29.16 - Exam 1</li>
              <li>3.14.16 - Project Part 1</li>
              <li>3.28.16 - Quiz 2</li>
              <ul>
                <li class="uc red-text">Exam 2 (Final Exam)</li>
                <li>This will be a written exam, similar to the midterm. If you are concerned that there will be no programming on the exam, fear not! You can show off all the programming you have learned on Project Part 2!</li>
                <li>
                  <span class="red-txt">Mon - Wed 4:30 - 5:45</span> Tuesday 4.26.16 12pm - 1:50pm
                </li>
                <li>
                  <span class="red-txt">Mon - 7:00 - 9:30</span> Monday - 4.25.16 In class
                </li>
              </ul>
              <li>4.25.16 - Project Part 2</li>
              <li class="uc red-txt bold"><u>4.30.16 last day to submit project part 2 || exercises || anything else</u></li>
              <li>I will be responsive up until the above date in case you need anything from me!</li>
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
            <a href="http://cs.pitt.edu/~jlee/teaching/cs1520" target="_blank">TA Class Site</a>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Office Hours 5501</p>
            <p>Tuesday 1:00pm - 5:00pm</p>
            <p>Friday 10:00am - 12:00pm</p>
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
              <li class="info-date">2.24.16</li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                Added some concrete details about the midterm exam                
              </li>
              <li class="info">
                Added all JS slides to date
              </li>
              <li class="info">
                Added some DB example files. There are all kinds of different ways of doing things in there, but they will serve as a good reference
              </li>
              <li>
                Also added the zip file for the template that was used to create this site, in the event you would like to use it with your project
              </li>
            </ul>
            <ul class="info-bubble last-row">
              <li class="info-date">2.8.16</li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                Detailed specifications for the Class Project Part 1 are now available on the site! Please let me know if you have any quesitons.
              </li>
            </ul>
            <ul class="info-bubble last-row">
              <li class="info-date">2.7.16</li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                You may have noticed that there are now a few In-Class Exercises. These can be completed in recitation between now and the end of the class. 
              </li>
              <li>
                EDIT: As long as the In-Class assignments are delivered to me by the end of the term they will be accepted as on time.
              </li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                All of the exercises are still a required component of the class. I just wanted to throw these out there so you can think about them ahead of time.
              </li>
            </ul>
            <ul class="info-bubble last-row">
              <li class="info-date">2.5.16</li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                Project plan will be due next week. Shouldn't be too hard, but will benefit you in the long run.
              </li>              
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                All details for the class project can be found in the projects section.
              </li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                Please, please, please see me or the TA if you need help with planning the project or anything else of that nature. It's best to nail down a solid plan before any development work should begin.
              </li>
            </ul>
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
              <li class="info-date">1.31.16</li>
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                I have added prospective dates for quizzes, exams and projects.
              </li>              
              <li class="info">
                <span class="glyphicon glyphicon-ok-circle"></span>
                I have also added In-Class Exercise 3 to the list.
              </li>
            </ul>
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
            <h1>Weekly Syllabus</h1>
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
              <li class="syl-item">
                Forms, HTTP Post, Get
              </li>
              <li class="syl-item">
                Working with files in PHP
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
            <p class="uc red-txt bold">Lecture 4</p>
            <ul class="syl-list">
              <li class="syl-title">Concept</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-education"></span>
              </li>
              <li class="syl-item">
                PHP OOP
              </li>
              <li class="syl-item">
                PHP sort() instabilities
              </li>
              <li class="syl-item">
                Intro to databases
              </li>
              <li class="syl-item">
                mySQL intro
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
                Sebesta: Ch 13
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Lecture 5</p>
            <ul class="syl-list">
              <li class="syl-title">Concept</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-education"></span>
              </li>
              <li class="syl-item">
                Quiz 1
              </li>
              <li class="syl-item">
                Databases and MySQL
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
                Sebesta: Ch 13
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Lecture 5</p>
            <ul class="syl-list">
              <li class="syl-title">Concept</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-education"></span>
              </li>
              <li class="syl-item">
                Intro to JavaScript
              </li>
            </ul>
            <ul class="syl-list last-row">
              <li class="syl-title">References</li>
              <li class="centered b-ten">
                <span class="glyphicon glyphicon-file"></span>
              </li>
              <li class="syl-item">
                Notes
              </li>
              <li class="syl-item">
                Sebesta: Ch 4
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
                Requirements: Write a script and run it using your Web Server, according to the following specifications:
              </li>
              <li>
                The initial page, "ex3.html", should have a form with an input called "name". It should ask the user to register his / her name. Upon submission, the page should request the script "ex3.php".
              </li>
              <li>
                The script "ex3.php" should extract the name, then read in the contents of a file called "names.txt". The file "names.txt" will have a single name on each line of the file. 
                If the name submitted by the user matches any of the names in the file, the script should output "[Name], you've already been registered". 
                Otherwise, the script should append the new name to the end of the "names.txt" file and output "Congratulations [Name], you've been registered!". 
                Hint:You may want to make use of the rtrim() function. Look it up to see why.
              </li>
              <li>
                Style the form and output. You don't have to go crazy, just make sure it looks presentable.
              </li>
              <li>
                Create a .zip file with your files and email them to me. The .zip file should be named [name]_exercise3.zip.
              </li>
              <li>
                Feel free to use class example files as a reference, but do not reuse any of the code in the way it appears in those files.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exercise 4</p>
            <ul class="ex-list">
              <li class="requirements">
                Requirements: Write a script and run it using your Web Server, according to the following specifications:
              </li>
              <li>
                A user logs into the site through the login.php script. This script initially checks the $_SESSION["error"] variable. If it exists, it prints out the error. It then shows a form that prompts the user for a name and password. Upon submission, the script requests the process.php script.
              </li>
              <li>
                The process.php script will extract the POST variables for name and password and compare them with entries in a file called "users.txt". The "users.txt" file will be formatted as "username:password". There will be one entry per line.
              </li>
              <li>
                If the user and password are found, the process.php script should set $_SESSION variables storing the user's name and that he/she has successfully logged in, then redirect to script home.php
              </li>
              <li>
                If the user is not found, the process.php script should set the $_SESSION["error"] variable to the string "Your id or password is incorrect. Please try again". It should then redirect to the login.php script.
              </li>
              <li>
                The home.php script should initially test a $_SESSION variable to see if the user has logged in.
              </li>
              <li>
                If the $_SESSION variable is not set, set $_SESSION["error"] to "You have not logged in. Please log in first" and then redirect to login.php.
              </li>
              <li>
                Text to be used in display is just a suggestion. You can word it however you like.
              </li>
              <li>
                If the $_SESSION variable is set, extract the user's name and simply show a page welcoming the user to your site
              </li>
              <li>
                Dont' forget to add some styling to the user facing portions of the exercise. As usual, don't go overboard, just make it look a little better.
              </li>
              <li>
                Create a .zip file with your files and email them to me. The .zip file should be named [name]_exercise4.zip.
              </li>
              <li>
                Feel free to use class example files as a reference, but do not reuse any of the code in the way it appears in those files.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exercise 5</p>
            <ul class="ex-list">
              <li class="requirements">
                Requirements: Demonstrate that your MySQL access is established on your XAMPP servers by implementing two scripts: (naming and verbiage can be customized if you like)
              </li>
              <li>
                The first script will create a new table in your DB called "People" with two columns (both text) called LName and FName
              </li>
              <li>
                The second script will do the following:
              </li>
              <li>
                Initially it shows a form that asks the user for their first and last names (separate fields)
              </li>
              <li>
                If both names match an entry already in the People table, it should tell the user that they are already entered
              </li>
              <li>
                Otherwise, it should add the user's names in a new entry in the table
              </li>
              <li>
                Regardless of whether the user was previously in the table or not, your script should show all of the entries in the table to the user, and should show the form again (so another name can be entered)
              </li>
              <li>
                Be sure to demonstrate the functionality as it should be to the instructor. Also, as always, make sure to add some CSS to the user facing portions.
              </li>
              <li>
                Create a .zip file with your files and email them to me. The .zip file should be named [name]_exercise5.zip.
              </li>
              <li>
                Feel free to use class example files as a reference, but do not reuse any of the code in the way it appears in those files.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exercise 6</p>
            <ul class="ex-list">
              <li class="requirements">
                Requirements: Write a PHP / Javascript script that does the following:
              </li>
              <li>
                NOTE: you may use jQuery if you care comfortable doing so, otherwise, 'vanilla' javascript will do just fine
              </li>
              <li>
                Shows the user a form with a single text field requesting a search for a computer science course.
              </li>
              <li>
                The course must be formatted as follows: CSXYYY
                <ul>
                  <li>
                    where C is an either upper or lower case 'C' character
                  </li>
                  <li>
                    where S is an either upper or lower case 'S' character
                  </li>
                  <li>
                    where X is either a 0, 1, 2 or 3
                  </li>
                  <li>
                    where YYY are digits between 0 and 9
                  </li>
                </ul>
              </li>
              <li>
                Before the form is submitted, a Javascript function should be called to verify the data entered in the text field. If the data is formatted correctly, the submission should go through. Otherwise, an alert showing the error should be generated, the submission should be rejected and the focus should revert back to the text field
              </li>
              <li>
                If the field is valid, the form should be submitted to the same script that generated it. This script should respond that the submission was accepted, and it should produce the same form again so that the user can try another course
              </li>
              <li>
                I will be testing by looking for both scenarios of a correct or incorrect scenario
              </li>
              <li>
                Submissions can be via zip file with the same format as the other assignments
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exercise 7</p>
            <ul class="ex-list">
              <li class="requirements">
                Requirements: toggle file data using AJAX. This should be written as a PHP script
              </li>
              <li>
                You can find the necessary files <a href="/deliverables/ajax.zip">here</a> (this zip file has the files needed for exercises 7, 8 and 9)
              </li>
              <li>
                Initially your script will display a single button, saying "Toggle Data". However, the HTML on your page will also include an empty <code>div</code> tag identified by an id
              </li>
              <li>
                A click on the button will first check to see if the data has already been downloaded from the server. If not, it will download it using an AJAX call. The response to the call will use DOM to add the result as a text node within the div. The script on the server will send the contents of a file as a single string. In your call you should specify the file name "file1.txt". See: getData.php
              </li>
              <li>
                If the data has already been downloaded then it should be stored / maintained on the client. In other words, the first click of the button should cause an AJAX call to getData.php but successive clicks will not use AJAX, since the data will already be stored in the client web tree
              </li>
              <li>
                A click on the button will first check to see if the data has already been downloaded from the server. If not, it will download it using an AJAX call. The response to the call will use DOM to add the result as a text node within the div. The script on the server will send the contents of a file as a single string. In your call you should specify the file name "file1.txt".
              </li>
              <li>
                However, successive clicks of the button will toggle the visibility of the data, making it disappear and then reappear on the screen. This can be done using DOM and the "style" value with Javascript
              </li>
              <li>
                Submissions can be via zip file with the same format as the other assignments
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exercise 8</p>
            <ul class="ex-list">
              <li class="requirements">
                Requirements: toggle file data using AJAX. This should be written as a PHP script
              </li>
              <li>
                 Initially show an .html page that has a single button that when clicked will display a quiz to the viewer
              </li>
              <li>
                When the button is clicked, your script should request via AJAX / GET, the following XML document: <a href="/deliverables/ajax.zip">(download here, files for exercises 7, 8 and 9)</a>.  This document contains a number of quiz questions in XML format.  Look at the file to see the tags and nesting so that you can parse it correctly
              </li>
              <li>
                Once returned to your script via your XMLHttpRequest object, the XML document should be parsed and displayed as a sequence of questions with answers shown as options in an html select
              </li>
              <li>
                When the user selects either the right or wrong answer, a block of text should be displayed to let them know
              </li>
              <li>
                Keep track of the users score, as it can be dynamically updated without refreshing the page
              </li>
              <li>
                NOTE: there is no server funcitonality here, if you refresh the page, it will go back to it's original state
              </li>
              <li>
                You could use Javascript to set a cookie as well, if you were so inclined
              </li>
              <li>
                Submissions can be via zip file with the same format as the other assignments
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exercise 9</p>
            <ul class="ex-list">
              <li class="requirements">
                Requirements: (read below) - The fllowing link should let you download the zip file containing resources for exercises 7, 8 and 9) - <a href="/deliverables/ajax.zip">FILES HERE</a>
              </li>
              <li class="requirements">
                You may need to do some troubleshooting to get the db part to work properly.
              </li>
              <li>
                Start with an empty table and a button on the page
              </li>
              <li>
                Each time the user clicks the button, an AJAX request for a word is made to the script "getWords.php".  This script will request and return a random word from a database in XML format.  In order for this script to work, some other files are required
                <ol>
                  <li>
                    "setWords.php" – this is a script to initialize the database    
                  </li>
                  <li>
                    "testwords.txt" – this is a file of words used by the setWords.php script             
                  </li>
                  <li>
                    "wordStyle.css" – simple style sheet to format the words (do us both a favor and make this look better)
                  </li>
                </ol>
              </li>
              <li>
                When the word is received back, its XML is parsed and processed in the following way:
                <ul>
                  <li>
                    If the word has not yet been seen, add it to an array of words / counts and also add it and its count to the table
                  </li>
                  <li>
                    If the word has already been seen, increment its count in the array and also in the table
                  </li>
                </ul>
              </li>
              <li>
                You may use plain Javascript or jQuery
              </li>
              <li>
                Continue this process indefinitely
              </li>
              <li>
                Here are some hints if you get caught up:
                <ul>
                  <li>
                    Attach a click handler to the button that will fire a function called getWord() or something like that
                  </li>
                  <li>
                    getWord() will make an ajax request to getWords.php, with a function that processes the word in the following way:
                    <ul>
                      <li>
                        It extracts the word from the XML result data
                      </li>
                      <li>
                        It checks to see if the word is already in an array of words (stored in a Javascript variable)
                      </li>
                      <li>
                        If present, it increments the count for the word in the HTML table
                      </li>
                      <li>
                        If not present, it appends the word to the HTML table and sets its count to 1
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li>
                Submissions can be via zip file with the same format as the other assignments
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
                <a href="/deliverables/slides/BowytzLect1.pdf">Lecture 1 (follow)</a> | <a href="/deliverables/slides/BowytzLect1.pdf" download>Lecture 1 (get)</a>
              </li>
              <li>
                <a href="/deliverables/slides/BowytzLect2.pdf">Lecture 2 (follow)</a> | <a href="/deliverables/slides/BowytzLect2.pdf" download>Lecture 2 (get)</a>
              </li>
              <li>
                <a href="/deliverables/slides/BowytzLect3.pdf">Lecture 3 (follow)</a> | <a href="/deliverables/slides/BowytzLect3.pdf" download>Lecture 3 (get)</a>
              </li>
              <li>
                <a href="/deliverables/slides/BowytzLect4.pdf">Lecture 4 (follow)</a> | <a href="/deliverables/slides/BowytzLect4.zip">Lecture 4 (get)</a>
              </li>
              <li>
                <a href="/deliverables/slides/BowytzLect5.pdf">Lecture 5 (follow)</a> | <a href="/deliverables/slides/BowytzLect5.zip">Lecture 5 (get)</a>
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
              <li>
                <a href="/deliverables/slides/Chapter13.pdf">Ch 13 (follow)</a>
              </li>
              <li>
                <a href="/deliverables/slides/Chapter13.zip">Ch 13 (get)</a>
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Javascript Slides</p>
            <ul>
              <li>
                Instead of the usual following and downloading of our slides, here are all te js slides, in google docs and available for you to view.
              </li>
              <ul>
                <li>
                  <a href="https://docs.google.com/presentation/d/1omUo4JHUsxadjutaYrHeYespLVIi2X04XPWaowiFz0g/edit?usp=sharing" target="_blank">AJAX</a>
                </li>
                <li>
                  <a href="https://docs.google.com/presentation/d/1fHNzATw4N-eGbE1Py6gb163T67ARRHbrDrcqXCUL2gg/edit?usp=sharing" target="_blank">DOM Events</a>
                </li>
                <li>
                  <a href="https://docs.google.com/presentation/d/16AvU2mMz0C_e4EKoNzHL3fQx-_bhKOyW2pQL6lAl_r8/edit?usp=sharing" target="_blank">APIs</a>
                </li>
                <li>
                  <a href="https://docs.google.com/presentation/d/1e0PBL-v3qPvGgPmQKMuoC3znD0WNhsAdeXERereCf4c/edit?usp=sharing" target="_blank">JSON</a>
                </li>
                <li>
                  <a href="https://docs.google.com/presentation/d/17RNaiXw2hm2QjjqhV4CuP5uKWZq-Be0KZmorBpUhqW4/edit?usp=sharing" target="_blank">Client Storage</a>
                </li>
                <li>
                  <a href="https://docs.google.com/presentation/d/1AOGsc_beLhkeedjL5-Iroi2O-KzhQz_L3LIdn53RYcY/edit?usp=sharing" target="_blank">JS Lecture 1</a>
                </li>
                <li>
                  <a href="https://docs.google.com/presentation/d/13Pgto16qVq5wFphx0pV1eSHD6krBR7e-vGrmCK_q6Gs/edit?usp=sharing" target="_blank">jQuery</a>
                </li>
              </ul>
              <li>
                <a href="/deliverables/slides/Chapter4.pdf">Text Chapter 4 - JS (follow)</a> | <a href="/deliverables/slides/Chapter4.zip">Text Chapter 4 - JS (get)</a>
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Quiz 1 Materials</p>
            <ul>
              <li>
                In order to successfully take the first quiz, I am happy to inform you, as I have in class, that as long as you have paid attention and reviewed all materials I have a feeling you are going to do just fine.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Quiz 2 Materials</p>
            <ul>
              <li>
                Expect the second quiz to touch on the basics of javascript and jQuery with a little more HTML and CSS. Everything will be taken from the notes, slides and lectures.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Exam 1 Materials</p>
            <ul>
              <li>
                After our review in class, I think everyone should know what they need to study for the midterm exam. But, if you want a reminder:
              </li>
              <li>
                Chapters 2, 3, 9 and 13 (and associated slides), Lecture slides and class notes. You will find that some questions will be taken from lectures that aren't on the slides.
              </li>
              <li>
                Look for more PHP topics (OOP, etc), databases, MySQL, HTML, CSS
              </li>
              <li>
                There will be true/false, fill in the blank, sort answer and programming. The programming parts will be smaller in scale to the one on the quiz and will be comfortably hand written or emailed. NOTE: I will not accept any email submission that is timestamped after the class period has ended.
              </li>
              <li>
                You will be well equipped if you review the above mentioned materials and have paid attention in class.
              </li>
            </ul>
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
                    <li class="info uc red-txt bold">Session</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      <a href="/deliverables/ex13/ex13.php">ex13.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex13/usesession.php">usesession.php (follow)</a>
                    </li>
                    <li>
                      <a href="/deliverables/ex13/session.zip">session.zip (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">OOP</li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                    </li>
                    <li>
                      There are a bunch of files for this topic, just get them all!
                    </li>
                    <li>
                      <a href="/deliverables/oop/oop.zip">oop.zip (get)</a>
                    </li>
                  </ul>
                  <ul class="col-list">
                    <li class="info uc red-txt bold">DB</li>
                    <li class="uc bold">these files are for example use, pay no mind to the formatting, everything should work though</li>
                    <li>
                      There are a bunch of files for this topic, just get them all!
                    </li>
                    <li>
                      <span class="glyphicon glyphicon-cloud-download"></span>
                      <a href="/deliverables/db/db.zip">db.zip (get)</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Class Site Template</p>
            <p class="uc bold">
              Some of you have expressed interest in using the same template as this class site, here it is
            </p>
            <a href="/deliverables/startbootstrap-scrolling-nav-1.0.4.zip">startbootstrap-scrolling-nav-1.0.4.zip (get)</a>
          </div>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Javascript</p>
            <ul>
              <li>
                <a href="/deliverables/javascript.zip">Javascript Sample Files</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">JQuery</p>
            <ul>
              <li>
                <a href="/deliverables/jquery.zip">jQuery Sample Files</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="projects" class="projects content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>Programming Project Part 2</h1>
            <p class="med">Class Project: PHP Website</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Project Plan Part 2 - (For the evening section, Mon 7 - 9:30) DUE ON MONDAY 4.11.16</p>
            <p class="uc red-txt bold">Project Plan Part 2 - (For the afternoon section, MonWed 4:30 - 5:45) DUE ON WEDNESDAY 4.6.16 by midnight</p>
            <ul>
              <li>
                This plan will be about the same as the plan for part 1
              </li>
              <li class="bold">This project plan must be a formal document</li>
              <ul>
                <li>By this, I mean that I will not accept one sentence, saying something like "I'm going to make the site better."</li>
                <li>The document should include the following:</li>
                <li>Contact Info (name, email, etc.)</li>
                <li>A brief summary of Part 1 that includes screnshots of the first iteration to illustrate the point</li>
                <li>A detailed description of what you plan on doing for part 2</li>
                <li class="bold">IF YOUR PART 2 PROJECT PLAN IS NOT SUBMITTED, OR DOES NOT ADHERE TO THE ABOVE REQUIREMENTS I WILL NOT ACCEPT YOUR PROJECT PART 2 UNTIL IT DOES</li>
              </ul>
              <li>Your plan should include the following:</li>
              <ul>
                <li>What new technologies will you be implementing</li>
                <li>What new content (if any) will you be adding</li>
                <li>Switching framework? Moving to MVC? Doing all on your own?</li>
                <li>Feel free to ask any questions you may have, or if you want to use this as a forum to run your idea by me</li>
              </ul>
              <li class="bold">TO SUBMIT THE PROJECT PLAN, CREATE A GITHUB GIST AND EMAIL ME THE LINK TO IT</li>
              <li>Instructions on how to create a gist can be found <a href="https://help.github.com/articles/creating-gists/">here</a></li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Requirements</p>
            <ul>
              <li class="bold">First and foremost, the changes must be significant and/or meaningful. Meaning that changing a few lines of code, or changing some variables will not be enough to count as a qualified submission</li>
              <li>JS or jQuery must be used in some way for the second part of the project</li>
              <ul>
                <li>If you do not know how to, or cannot think of a way to do this ask the TA or myself for advice</li>
                <li>This is still going to be a php project, so taking everything out of php and putting it in html files will not be acceptable</li>
                <li>You can incorporate an API, create form submissions without reloading the page, etc.</li>
              </ul>
              <li>If you, for some reason, did not have some kind of database finctionality n part 1, you must include that in part 2</li>
              <ul>
                <li>If you did not make db functionality for part 1, you must demonstrate the functionality to me on the day it is due</li>
              </ul>
              <li>The required amount of pages has not changed, however if you want to include more pages, that is fine with me, but don'g go overboard</li>
              <li>If you were lacking in actual content for part 1, take this opporunity to put meaningful site content into the project</li>
              <li>Since we've gone over more CSS and HTML and things like that, you may want to refresh your site viaually. Make things look a little better, make the layout easier on the eyes, etc.</li>
              <li>It shouldn't take you as long to do part 2, unless your first iteration was lacking</li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Submission Guidelines</p>
            <ul>
              <li>For the second part of the project, all submissions MUST be through git</li>
              <li>Create a repo for your project and send me the link to it when it is complete</li>
              <li>ZIP FILES VIA EMAIL WILL NOT BE ACCEPTED, IF YOU NEED HELP GETTING THINGS IN GITHUB PLEASE CONTACT ME</li>
              <ul>
                <li>Additionaly:</li>
                <li>Make a copy of your files from part 1</li>
                <li>Create a directory, OUTSIDE of the directory for the final submission called "Legacy"</li>
                <li>In here you will place the files from Part 1 and include a text file with the following information:</li>
                <li>What did you change/enhance from part 1?</li>
                <li>If there was a third part to the class project, what would you like to implement?</li>
                <li>What did you learn between part 1 and part 2?</li>
                <li>What did you like about this project? How could it have been better?</li>
                <li class="bold">Please put some thought into answering these questions. I do not want to see one line answers that read something like "I learned some stuff." or "I changed some code." or anything like that.</li>
                <li class="bold">If you do not include the old files or the text file, your project will not be considered to be complete and you will not receive a grade.</li>
              </ul>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Grading Rubric</p>
            <ul>
              <li>
                The grading for second part of the project will be handled the same way, but in comparison to what you did for part 1
              </li>
              <li>
                Clean, readable, sematic code, organized assets and folders, etc.: 15%
              </li>
              <li>
                Intelligent implementation of requirements: 55%
              </li>
              <li>
                Usability (navigation works, the site loads, assests aren't broken or unavilable, it's not too confusing to use, looks ok etc.): 25%
              </li>
              <li>
                Submission guidelines are adhered to: 5%
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 centered">
            <h1>Programming Project</h1>
            <p class="med">Class Project: PHP Website</p>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Project Plan</p>
            <ul>
              <li>
                Basically, this will act as a roadmap for both you and me, so we can have a clear outline of what our projects will entail. Nobody wants to program themseleves into a corner and wind up having to scrap hours of work if they can help it. You can be as verbose as you like in this, but I would like to see at least a couple sentences on each point.
              </li>
              <li>
                Your plan should include the following:
              </li>
              <li>
                What technology are you going to be using? (PHP for the most part, but it never hurts to outline everything you are going to use.)
              </li>
              <li>
                What is your site going to be about? Self promotion? Promotion of something else? Etc. The worst that can happen is that I will suggest another route.
              </li>
              <li>
                Using a frontend framework? Which one?
              </li>
              <li>
                Also, anything else you think may be important to have added to the plan. We just want to cover all our bases.
              </li>
              <li>
                A list of ANY questions you may have about your idea or the project in general. This is the best time to hammer out any of the smaller details.
              </li>
              <li>
                OPTIONAL: Do you want to use some advanced topics? Such as MVC structure, or using PHP as a backend for some other frontend framework, etc. This will not entitle you to different or better grading. You will still be accountable for all the same requirements. I am well enough equipped to review, grade and comment on most implementations.
              </li>
              <li>
                Email me this information is whatever format you like. If you would like further direction on anything, let me know. Let's have fun and demonstrate what we've learned so far!
              </li>
              <li>
                NOTE: Since the class project is split up into two milestones (part one due halfway through, part two due at the end), this is really only in relation to the first part of this project. All the requirements will be the same for part two, but just implementing features based on what we will learn during the second half of the class.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Requirements</p>
            <ul>
              <li>
                One page or multi page layout. Minimum of three sections/pages
              </li>
              <li>
                Page Examples:
              </li>
              <li>
                About, contact, resume/CV, fan page about your favorite rapper or super hero, anything is fine. Just remember though, you may want to keep it professional in the event you want to use this as your actual personal site down the road.
              </li>
              <li>
                You may use a frontend framework, such as Bootstrap or Foundation. You may also use a template, all I ask is that you do not use it as it comes. Add your own layer of style on top of what is included.
              </li>
              <li>
                All pages (views and includes, etc) should be written in PHP, at least for this first part of the project
              </li>
              <li>
                One component/page of your site should be a contact form, I would prefer this to submit to a database, but if you want to defer the database and have it email you or write to a text file, that is ok too.
              </li>
              <li>
                Programming Requirements:
              </li>
              <li>
                Intelligent use of topics covered in class so far. Such as:
              </li>
              <li>
                Use of variables, includes, arrays, functions, file reading etc.
              </li>
              <li>
                When should I use [requirement]?
              </li>
              <li>
                Ex. If you have a collection of links that have text and hrefs that need to be displayed, store them in an array and correctly loop through them where you want them to display
              </li>
              <li>
                Ex. Repeating some PHP more than once in a PHP block? Store it in a variable.
              </li>
              <li>
                Ex. Don't want to write your header and footer on each page for a multi page approach? Use an include file. Similarly, if you have a function that you will use over and over, that should also go into an include file.
              </li>
              <li>
                There are no hard requirements for what PHP to use and when. The best approach would be to use as many of the topics covered in class (appropriately) as necessary to make the site work and prove your ability
              </li>
              <li>
                If you are unsure on what to use or when/how to use it, please reach out to me or a TA
              </li>
              <li>
                PLEASE DO NOT HESITATE TO ASK IF YOU NEED CLARIFICATION OR HELP WITH ANYTHING. I CANNOT STRESS THIS ENOUGH
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Submission Guidelines</p>
            <ul>
              <li>
                TWO methods of submission will be accepted.
              </li>
              <li>
                FIRST OPTION: place everything in a GitHub repo that I can access to pull down the code. If you are not familiar with this method and would still like to submit this way, please contact me so I can help you out.
              </li>
              <li>
                SECOND OPTION: zip file of all necessary files. I do not want to see the contents of the zip file to produce just a pile of files in an unorganized manner. All assets should be intelligently located in folders.
              </li>
              <li>
                Basically there should be one parent folder that contains everything. Then one folder for each asset group. Ex. CSS, Images, Views etc. Feel free to do some research on the topic.
              </li>
            </ul>
          </div>
          <span class="glyphicon glyphicon-star-empty block centered b-ten"></span>
          <div class="col-lg-12 centered">
            <p class="uc red-txt bold">Grading Rubric</p>
            <ul>
              <li>
                I'm going to be more attentive to the way you write your code for this project. In the event that it will become public facing in the future, it is important for you to have well written, clean semantic code. Myself or the TAs will be available to help you with this as well.
              </li>
              <li>
                Clean, readable, sematic code, organized assets and folders, etc.: 15%
              </li>
              <li>
                Intelligent implementation of requirements: 55%
              </li>
              <li>
                Usability (navigation works, the site loads, assests aren't broken or unavilable, it's not too confusing to use, looks ok etc.): 25%
              </li>
              <li>
                Submission guidelines are adhered to: 5%
              </li>
            </ul>
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
