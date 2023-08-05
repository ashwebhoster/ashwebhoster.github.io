<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Portfolio</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">

        <?php include 'contactForm.php'; ?>

    </head>

<script src="java1.js"></script>

<body>

    <!--top navigation-->
    <div class="topnav" id="my Topnav">

        <img src="logo.jpg" width="80px" height="80px" id=logo alt="Logo image" style="margin-right: 10px;" />

        <a href="#" class="logoname"> <span> V CREATIONS</span></a>
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>


        <script>function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
        </script>
    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()">open</span>


    <div class="main-image">
        <div class="main-text">
            <span>Hello, I am </span>
            <h1>Ashara Yapa</h1>
            <h3>And I'm a Writer</h3>
            <button>Hire me</button>
        </div>
    </div>
</a>
</div>

 <!--side bar-->

  <div id="mySidenav" class="sidenav">

    <div class="shome-img">
    <div class="glowing-circle">
        <span></span>
        <span></span>

        <div class="image">
            <img src="woman2.jpg" alt="">
        </div>
    </div>
 </div>


    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#services">Services</a>
    <a href="#skills">Skills</a>
  </div>




<div id="main">

<script>/* Set the width of the side navigation to 250px */

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>



    <!--about section-->
    <div class="about-section" id="about">
      <h1>Who am I?</h1>
      <p>Welcome to my web portfolio.I am a skilled and creative writer with a passion for creating attractive,responsive and eye catching contents. I have worked on a variety of projects. I  am a writer who convert your various thoughts to a poem, quoto, essay , book etc. I have years of experience and many clients are happy with the projects carried out. </p>
    </div>


      <!--contact section-->
      <div class="container" id="contact">
          <div style="text-align:center">
            <h2>Contact Us</h2>
            <p>Leave us a message:</p>
          </div>
          <div class="row">
            <div class="column">
              <img src="quoto.jpg" style="width:100%">
            </div>
            <div class="column">

      <form name="my form" onsubmit="return validateForm()" method="POST">
        

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

        <label for="country">Country</label>

        <select id="country" name="country">
          <option value="sri lanka">Sri Lanka</option>
          <option value="japan">Japan</option>
          <option value="usa">USA</option>
        </select>
        
        <label for="subject">Message</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>

        <input type="submit" value="Submit">
      </form>

    </div>
  </div>
</div>




<!--services section-->

    <div class="services-section" id="services">

    <h2 style="text-align:center">Our Services</h2>
        <div class="row">
          <div class="column">
            <div class="card">
              <img src="woman.jpg" alt="ashara" style="width:100%">
              <div class="container">
                <h2>Ashara Yapa</h2>
                <p class="title">Writer(Author)</p>
                <p>I am a writer who convert your various thoughts to a poem, quoto, essay , book etc. I have years of experience and many clients are happy with the projects carried out.</p>
                <p>ashi@gmail.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>

        <div class="column">
        <div class="card">
          <img src="man.jpg" alt="Dayan" style="width:100%">
          <div class="container">
            <h2>Dayan Yapa</h2>
            <p class="title">Art Director & Designer</p>
            <p>I am the designer who design creative writings into an attractive manner.I have years of experience and many clients are happy with the projects carried out.</p>
            <p>dayan@gmail.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
    </div>



<!--skills section-->

    <div class="skills-section" id="skills">
        <h1>My Skill</h1>
        <li><h3>Writing</h3>
            <span class="bar"><span class="writing"></span></span></li>

        <li><h3>Creating</h3>
            <span class="bar"><span class="creating"></span></span></li>

        <li><h3>Designing</h3>
            <span class="bar"><span class="designing"></span></span></li>
    </div>

</div>

<!--Building a portfolio webpage - Part 02-  (6)1)-->

<div id="myDIV">
    <a href="creation.html">
  <button class="button" onclick="myFunction()">CREATIONS</button></a>
</div>


<!-- image slider-->

        <div class="row">
          <div class="column">
            <div class="card">
              <img src="image1.jpg" alt="" class="slide" align="left" style="width:100%">
              <img src="image2.jpg" alt="" class="slide" align="left" style="width:100%">
            <img src="image3.jpg" alt="" class="slide" align="left" style="width:100%">

              <div class="container">
                <h2>Upcoming</h2>
                <p class="title"> events</p>
                
                <p><button class="button">Read Me</button></p>
              </div>

            </div>
          </div>
        

          <div class="column">
            <div class="card">
              <img src="image4.jpeg" alt="" class="slide" align="right" style="width:100%">
              <img src="image6.jpeg" alt="" class="slide" align="right" style="width:100%">
            <img src="image7.jpg" alt="" class="slide" align="right" style="width:100%">

              <div class="container">
                <h2>Upcoming</h2>
                <p class="title"> events</p>
                
                <p><button class="button">Read More</button></p>
              </div>
            </div>
          </div>
        </div>
</div>

<script>
  // JavaScript code
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  let currentSlide = 0;

  function showSlide(slideIndex) {
    // Hide all slides
    slides.forEach((slide) => {
      slide.style.display = 'none';
    });

    // Show the current slide
    slides[slideIndex].style.display = 'block';
  }

  function nextSlide() {
    currentSlide++;
    if (currentSlide >= slides.length) {
      currentSlide = 0;
    }
    showSlide(currentSlide);
  }

  // Automatically switch to the next slide every 4 seconds
  setInterval(nextSlide, 4000);

  // Display the first slide initially
  showSlide(currentSlide);
</script>





    <!-- Footer -->

            <footer class="footer-distributed">

            <div class="footer-left">

                <h3>V<span>creations</span></h3>

                <p class="footer-links">
                    <a href="#home" class="link-1">Home</a>
                                    
                    <a href="#contact">Contact</a>
                
                    <a href="#about">About</a>  
                </p>

            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>No 7</span> Mihintale, Sri lanka</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+9477 550 444 5</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">ashi@gmail.com</a></p>
                </div>







            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About V Creations</span>
                    V Creations are who convert your various thoughts to a poem, quoto, essay , book etc. We have years of experience and many clients are happy with the projects carried out.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>

            </div>

        </footer>



</body>
</html>