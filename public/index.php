<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Waves</title>
    <link rel="stylesheet" href="CSS/navbar.css" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="CSS/mainstyle.css" />
    <style>
        .caro2  {
            width: 500px;
            margin: 400px auto;
            text-align: center;
            left: -90px;
            margin-top: -900px;
            
            
        }

        figure {
            margin: 0;
            
        }

        .container {
            width: 500px;
            height: 300px;
            text-align: left;
            margin: 60px auto;
            -webkit-perspective: 1000px;
            -webkit-perspective-origin: 50% -25%;
            
        }

        .carousel {
            -webkit-transform-style: preserve-3d;
            -webkit-transform: translateZ(-540px);
            position: relative;
            margin: 0;
            width: 500px;
            height: 300px;
            -webkit-transition: 1s;
            
            
        }

        .carousel img {
            position: absolute;
            border: 15px solid #d2ff3a;
            opacity: .5;
            -webkit-transition: 1s;
            width: 500px;
            height: 300px;
            background:#ccc;
        }

        .carousel img:nth-child(1) { -webkit-transform: translateZ(540px) scale(.8); }
        .carousel img:nth-child(2) { -webkit-transform: rotateY(45deg) translateZ(540px) scale(.8); }
        .carousel img:nth-child(3) { -webkit-transform: rotateY(90deg) translateZ(540px) scale(.8); }
        .carousel img:nth-child(4) { -webkit-transform: rotateY(135deg) translateZ(540px) scale(.8); }
        .carousel img:nth-child(5) { -webkit-transform: rotateY(180deg) translateZ(540px) scale(.8); }
        .carousel img:nth-child(6) { -webkit-transform: rotateY(225deg) translateZ(540px) scale(.8); }
        .carousel img:nth-child(7) { -webkit-transform: rotateY(270deg) translateZ(540px) scale(.8); }
        .carousel img:nth-child(8) { -webkit-transform: rotateY(315deg) translateZ(540px) scale(.8); }

        label {
            cursor: pointer;
            background: #eee;
            display: inline-block;
            border-radius: 50%;
            width: 30px;
            padding-top: 7px;
            height: 23px;
            font: .9em Arial;
            
        }

        label:hover {
            background: #ddd;
        }

        input {
            position: absolute;
            left: -9999px;
        }

        input:checked + label {
            font-weight: bold;
            background: #ddd;
        }

        input[value="1"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px); }
        input[value="2"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-45deg); }
        input[value="3"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-90deg); }
        input[value="4"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-135deg); }
        input[value="5"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-180deg); }
        input[value="6"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-225deg); }
        input[value="7"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-270deg); }
        input[value="8"]:checked ~ .container .carousel { -webkit-transform: translateZ(-540px) rotateY(-315deg); }

        input[value="1"]:checked ~ .container .carousel img:nth-child(1) { -webkit-transform: translateZ(540px) scale(1); opacity: 1; }
        input[value="2"]:checked ~ .container .carousel img:nth-child(2) { -webkit-transform: rotateY(45deg) translateZ(540px) scale(1); opacity: 1; }
        input[value="3"]:checked ~ .container .carousel img:nth-child(3) { -webkit-transform: rotateY(90deg) translateZ(540px) scale(1); opacity: 1; }
        input[value="4"]:checked ~ .container .carousel img:nth-child(4) { -webkit-transform: rotateY(135deg) translateZ(540px) scale(1); opacity: 1; }
        input[value="5"]:checked ~ .container .carousel img:nth-child(5) { -webkit-transform: rotateY(180deg) translateZ(540px) scale(1); opacity: 1; }
        input[value="6"]:checked ~ .container .carousel img:nth-child(6) { -webkit-transform: rotateY(225deg) translateZ(540px) scale(1); opacity: 1; }
        input[value="7"]:checked ~ .container .carousel img:nth-child(7) { -webkit-transform: rotateY(270deg) translateZ(540px) scale(1); opacity: 1; }
        input[value="8"]:checked ~ .container .carousel img:nth-child(8) { -webkit-transform: rotateY(315deg) translateZ(540px) scale(1); opacity: 1; }
    </style>
</head>
<body>
    <div class="ellipse-32"></div>
    <div class="navbar">
        <a href="registeruser.php">Sign up/Login</a>
        <a href="explore.php">Explore</a>
        <a href="createpage.php">Create</a>
        <div class="dropdown">
                <button class="dropbtn">More 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    
                    <a href="aboutus.html">About Us</a>
                    <a href="contact.html">Contact</a>
                    <a href="privacyPolicy.php">Privacy Policy</a>
                    <a href="Terms&Services.php">Terms of Service</a>
                    <a href="Help.html">Help/FAQ</a>
                </div>
            </div>
        <a href="index.php">Home</a>
</div>
        <img src="Images/logo.png" alt="Mood Waves" class="logo" />
    </div>

    <div class="discover-your-emotions-with-mood-waves-visualise-connect-express">
        Discover Your Emotions <br> with Mood Waves:<br> Visualise, Connect, <br> Express.
    </div>
    <div class="experience-a-unique-platform-where-emotions-become-art-mood-waves-empowers-you-to-express-your-deepest-feelings-through-captivating-visualizations-and-curated-music-fostering-genuine-connections-and-personal-growth">
        Experience a unique platform where <br>emotions become art. Mood Waves <br> empowers
        you to express your <br>deepest feelings through captivating <br> visualizations and
        curated music,<br> fostering genuine connections and <br> personal growth.
    </div>

    <img class="subtract" src="Images/Subtract.png" />

    <div class="rectangle-131">
        <div class="_300-projects">
            300+
            <br />
            Projects
        </div>
    </div>

    <div class="rectangle-129">
        <div class="group">
            <img class="Group Group1" src="Images/Group.png" />
            <img class="Group Group2" src="Images/Group2.png" />
            <img class="Group Group3" src="Images/Group3.png" />
            <img class="Group Group4" src="Images/Group4.png" />
        </div>
        <div class="try-free-button">
            <a href="#" class="try-free">Try Free <img class="arrow" src="Images/Arrow 1.png" /></a>
        </div>
    </div>
    
    <div class="rectangle-130">
        <div class="we-have-the-best-ai-image-generator">
            We have the best AI image generator
        </div>
    </div>
   
    <div
  class="crafted-by-nsbm-computing-undergraduates-powered-by-ai-to-elevate-your-exploration"
>
  <span>
    <span
      class="crafted-by-nsbm-computing-undergraduates-powered-by-ai-to-elevate-your-exploration-span"
    >
      Crafted by
    </span>
    <span
      class="crafted-by-nsbm-computing-undergraduates-powered-by-ai-to-elevate-your-exploration-span2"
    >
      NSBM
    </span>
    <span
      class="crafted-by-nsbm-computing-undergraduates-powered-by-ai-to-elevate-your-exploration-span3"
    >
      Computing undergraduates | powered by ai to elevate your exploration
    </span>
  </span>
</div>

<div class="explore">EXPLORE</div>

  

<div class="frame1">
    <div class="rectangle"></div>
    <div class="frame-105">
        <div class="frame-104">
            <div class="create-stunning-visual-in-seconds">
                Create stunning visual in seconds
            </div>
            <div
                class="generating-innovative-ideas-is-a-crucial-aspect-of-any-creative-endeavor-ai-tools-can-help-spark-inspiration-by-analyzing-vast-amounts-of-data"
            >
                Generating innovative ideas is a crucial aspect of any creative
                endeavor. AI tools can help spark inspiration by analyzing vast amounts
                of data
            </div>
        </div>
    </div>
    <div class="rectangle2"></div>
    <a href="#" class="generate">Generate</a>
</div>
<div class="frame2">
    <div class="rectangle"></div>
    <div class="frame-106">
        <div class="frame-104">
            <div class="discover-your-sound-track-instantly">
                Discover your sound track instantly
            </div>
            <div
                class="finding-the-perfect-music-to-match-your-mood-is-an-art-in-itself-let-our-ai-driven-platform-curate-personalized-musics-based-on-your-preferences"
            >
                Finding the perfect music to match your mood is an art in itself. Let
                our AI driven platform curate personalized musics based on your
                preferences.
            </div>
        </div>
    </div>
    <div class="rectangle2"></div>
    <a href="#" class="discover">Discover</a>
</div>

<img class="image" src="Images/IMAGE.png" />

<div class="framenew">
    <div class="frame9">
        <div class="frame10">
            <div class="frame11">
                <div class="rectanglenew"></div>
                <div class="_20">20 +</div>
            </div>
            <div class="active-accounts">Active accounts</div>
        </div>
        <div class="frame5">
            <div class="frame11">
                <div class="rectanglenew"></div>
                <div class="_300">300+</div>
            </div>
            <div class="projects">projects</div>
        </div>
        <div class="frame6">
            <div class="frame11">
                <div class="rectanglenew"></div>
                <div class="_1000">1000+</div>
            </div>
            <div class="topics">topics</div>
        </div>
    </div>
    <div class="frame-109">
        <div class="join-a-community">Join a community</div>
        <div class="of-individuals">of individuals.</div>
    </div>
</div>

<div class="journey-through-art-of-community">
    Journey Through Art of community
</div>

<div class="caro2">
    <input checked id="one" name="multiples" type="radio" value="1">
    <label for="one">1</label>

    <input id="two" name="multiples" type="radio" value="2">
    <label for="two">2</label>

    <input id="three" name="multiples" type="radio" value="3">
    <label for="three">3</label>

    <input id="four" name="multiples" type="radio" value="4">
    <label for="four">4</label>

    <input id="five" name="multiples" type="radio" value="5">
    <label for="five">5</label>

    <input id="six" name="multiples" type="radio" value="6">
    <label for="six">6</label>

    <input id="seven" name="multiples" type="radio" value="7">
    <label for="seven">7</label>

    <input id="eight" name="multiples" type="radio" value="8">
    <label for="eight">8</label>

    <div class="container">
        <div class="carousel">
            <img src="Images/carousel 1.jpeg" alt="Landscape 1">
            <img src="Images/carousel2.jpeg" alt="Landscape 2">
            <img src="images/3.jpg" alt="Landscape 3">
            <img src="images/4.jpg" alt="Landscape 4">
            <img src="images/5.jpg" alt="Landscape 5">
            <img src="images/6.jpg" alt="Landscape 6">
            <img src="images/7.jpg" alt="Landscape 7">
            <img src="images/8.jpg" alt="Landscape 8">
        </div>
    </div>
</div>

<div class="footer">
    <img src="Images/logo.png" alt="Mood Waves" class="mood-waves" />
    <div class="copyright-2024-by-mood-waves-all-rights-reserved">
        Copyright © 2024 by Mood Waves | All Rights Reserved
    </div>
    <div class="social-links">
        <a href="https://github.com/yourgithubusername" target="_blank" class="icon-link">
            <i class="fab fa-github"></i> GitHub
        </a>
        <a href="mailto:youremail@example.com" class="icon-link">
            <i class="far fa-envelope"></i> Email
        </a>
    </div>
</div>





 <!-- Preloader HTML -->
 <div class="preloader">
    <div class="spinner"></div>
</div>
<script src="JS/script.js"></script>
</body>
</html>