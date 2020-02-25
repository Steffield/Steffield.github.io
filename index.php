<!DOCTYPE html>
<html>
    <head>
    <title>Stephanie Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Quicksand|Raleway&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/Style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<!-- Navbar-->
<div class="nav-top">
  <div id="navbar">
    <a id ="navLink" class="button hide-large" 
    href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="navbar-item button">HOME</a>
    <a href="#about" class="navbar-item button hide-small"><i class="fa fa-female"></i> ABOUT</a>
    <a href="#portfolio" class="navbar-item button hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="navbar-item button hide-small"><i class="fa fa-address-card"></i> CONTACT</a>
    <!-- <a id="search" href="#" class="navbar-item button hide-small">
      <i class="fa fa-search"></i>
    </a> -->
  </div>

  <!-- Navbar small-->
  <div id="navFixed" class="hide-small hide-large hide-medium">
    <a href="#about" class="navbar-item button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="navbar-item button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="navbar-item button" onclick="toggleFunction()">CONTACT</a>
    <!-- <a href="#" class="navbar-item button">SEARCH</a> -->
  </div>
</div>

<!-- Background Image with Text -->
<div class="bgImg-1" id="home">
    <div id="bgTextLeft">
        <span class="wide"><span id="nameSpan">Stephanie Lebby<br></span></span>
        <span class="wide"><span id="jobSpan">Web Developer</span></span>

      </div>
      <div id="bgTextRight">
        <span id="rightSpan" class="center wide"><!--<span class="hide-small">-->
            <div class="col-lg-6">
              <a href="https://github.com/Steffield"><i class="fa fa-github iconsTop"></i></a>
              <a href="https://www.linkedin.com/in/stephanie-lebby-684098118?trk=people-guest_profile-result-card_result-card_full-click"><i class="fa fa-linkedin iconsTop"></i></a>

               </div>
        </span><!--</span>-->
            
        </div>
      </div>
</div>

<!-- About Section -->
<div class="content section" id="about">
  <h3 class="center">ABOUT ME</h3>
  <hr>
  <p class="center"><em>Bilingual German-English Full Stack Web Developer</em></p>
  <p>I am a full stack web developer with experience in health care, education and data analysis. I discovered my love for coding when I was enrolled in a PhD program in Communication Sciences and Disorders and have since taken various online courses, created small projects in my free time and finally decided to change career paths and fully commit to coding. I am about to complete a certificate in Full Stack Web Development from the University of North Carolina. I enjoy building responsive applications using front and back end skills, such as HTML, CSS, Bootstrap, JavaScript, jQuery, restful APIs, Node.js, relational databases etc. . In my spare time I love to travel and the above background picture is from one of my favorite places, New Zealand.</p>
  <div class="row">
    <div class="col-md-12 center" id="aboutRow">
      <h5><b>Stephanie Lebby</b></h5><br>
      <img src="./assets/images/IMG_0110.jpeg" id="myPhoto" class="gradient-border" alt="Photo of Stephanie Lebby" width="300" height="200">
      <br>
      <form method="get" action="./assets/images/Resume.pdf">
        <button class="button"id="resumeBtn" type="submit"><i class="fa fa-download fa-fw"></i> Download Resume</button>
     </form>
    </div>
    <!-- <div class="col-md-3" >
      <button class="button"id="resumeBtn">
        <i class="fa fa-download"></i> Download Resume
      </button>
    </div> -->
  </div>

  <p id="experience" class="center">My Skills:</p>
  
  <p class="wide language">HTML & CSS</p>
  <div class="section skillBar">
    <p class="skillIcons"><i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  </p></div>

  <p class="wide language">Twitter Bootstrap</p>
  <div class="section skillBar">
    <p class="skillIcons"><i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  </p></div>

  <p class="wide language">JavaScript</p>
  <div class="section skillBar">
    <p class="skillIcons"><i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  </p></div>

  <p class="wide language">jQuery</p>
  <div class="section skillBar">
    <p class="skillIcons"><i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  </p></div>

  <p class="wide language">SPSS</p>
  <div class="section skillBar">
    <p class="skillIcons"><i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  </p></div>

  <p class="wide language">SAS</p>
    <div class="section skillBar">
      <p class="skillIcons"><i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i> </p></div>
  
  <p class="wide language">R</p>
    <div class="section skillBar">
      <p class="skillIcons"><i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  </p></div>
  
  <p class="wide language">Python</p>
    <div class="section skillBar">
      <p class="skillIcons"><i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  <i class="fa fa-laptop"></i>  </p></div>

</div>


<!-- Image Portfolio -->
<div class="bgImg-2" id="portfolio">
  <div class="absolute">
    <span class="sectionSpan wide">PORTFOLIO</span>
  </div>
</div>

<!-- Portfolio Section -->
<div class="content section" id="portfolioSection">
  <h3 class="center">MY PORTFOLIO</h3>
  <hr>
  <p class="center"><em>Here are some of my latest projects <br> Click on the images to be linked to the github repository</em></p><br>

  <!-- Project Grid-->
  <div class="row">
      <div class="col-md-6" id="pf1">
        <a  href="https://mvn410.github.io/Project-One/" ><img src="./assets/images/appCurrentDesign.png" onclick="onClick(this)" class="pfPic" alt="Know Your Vote"></a>
        <div class="banner1">
          <h4>Know Your Vote</h4>
          <p id="subtext">Third Party APIs, jQuery, Bulma</p>
        </div>
      </div>

      <div class="col-md-6"id="pf2">
          <a href="https://steffield.github.io/DayPlanner/"><img src="./assets/images/Planner.png" onclick="onClick(this)" class=" pfPic" alt="Day Planner"></a>
          <div class="banner2">
            <h4>Day Planner</h4>
            <p id="subtext">jQuery, Moment.js, Bootstrap</p>
          </div>
      </div>
      
  </div>

  <div class="row">
      <div class="col-md-6"id="pf3">
        <a href="https://steffield.github.io/WeatherApp/"><img src="./assets/images/weatherapp.png" onclick="onClick(this)" class="pfPic" alt="Weather Application"></a>
        <div class="banner3">
          <h4>Weather App</h4>
          <p id="subtext">Third Party API, jQuery, Moment.js</p>
        </div>
      </div>

      <div class="col-md-6"id="pf4">
        <a href="https://steffield.github.io/multipleChoiceQuiz/"><img src="./assets/images/quiz.png"  onclick="onClick(this)" class=" pfPic" alt="Quiz"></a>
        <div class="banner4">
          <h4>Multiple Choice Quiz</h4>
          <p id="subtext">JavaScript, Bootstrap</p>
        </div>
      </div>
  </div>


  <div class="row">
    <div class="col-md-6"id="pf5">
      <a href="https://steffield.github.io/EarlyLanguageBlog/"><img src="./assets/images/LangBlog-compressor.png"  onclick="onClick(this)" class="pfPic" alt="Language Blog"></a>
      <div class="banner5">
        <h4>Language Blog</h4>
        <!-- <p id="subtext">Template</p> -->
      </div>
    </div>
  </div>

    <!-- <button id="loadMoreBtn" class="button">LOAD MORE</button>  -->
  </div>
</div>

<!-- Image Contact -->
<div class="bgImg-3" id="contact">
  <div class="absolute">
     <span class="sectionSpan wide">CONTACT</span>
  </div>
</div>

<!-- Contact Section -->
<div class="content section" id="contactSection">
  <h3 class="center">Contact Me</h3>
  <hr>

    <div class="col-md-12" id="contactPanel">
      <div id="addressDetails">
        <i class="fa fa-map-marker fa-fw margin-right"></i> Cary, NC, US<br>
        <i class="fa fa-phone fa-fw margin-right"></i> Phone: 813 400 6633<br>
        <i class="fa fa-envelope fa-fw margin-right"></i> Email: steffilebby@gmail.com<br>
      </div>
      <p>Or leave me a note:</p>

      <form action="/action_page.php" method="post" target="_blank">
        <p><input class="input" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="input" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="input" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="input" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="button center padding-large" id="sendBtn" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="center">
  <a href="#home" id="toTopBtn" class="button"><i class="fa fa-arrow-up margin-right"></i>Back to the Top</a>
  <div class="sectionMargin">
    <a href="https://github.com/Steffield"><i class="fa fa-github icons"></i></a>
    <a href="https://www.linkedin.com/in/stephanie-lebby-684098118?trk=people-guest_profile-result-card_result-card_full-click"><i class="fa fa-linkedin icons"></i></a>
  </div>
  <p id="copyright">Copyright &copy; Stephanie Lebby</p>
</footer>
 
<script src="./assets/script/script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>