<?php
include_once 'classes/User.php';

$user = new User();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $status = 1;

    $fields = [
        'email' => $email,
        'status' => $status
    ];

    $user->insert($fields);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNAL</title>
    <link rel="stylesheet" href="css/bootstrap-css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <header class="header-container">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <span><img src="images/navbrand.svg" width="30" height="30" class="d-inline-block " alt=""></span>
                    SIGNAL
                </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav links">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Gear</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Stories</a>
                                </li>
                            </ul>
                    </div> </nav>
                    <marquee direction="right">Signal is coming!!! Get Ready, Register to receive email notification </marquee>
                <div class="container hero-section">
                    <div class="row">
                        <div class="col-sm head-cont">
                            <h4 data-aos="fade-up-right" data-aos-duration="3000">TECH FOR THE IMPAIRED</h4>
                            <h1 data-aos="zoom-in-down" data-aos-duration="3000"> Signal Helps Deaf People Listen to Music</h1>
                        </div>
                        <div class="col-md-7 header-img">
                            <img src="images/header image.svg" data-aos="fade-up-left" data-aos-delay="1000" data-aos-duration="3000" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
                 <div class="navigate container">
                        <p>Scroll down<span><a href="#about"><i class="fa fa-arrow-circle-o-down dwn-icon"></i></a></span></p>
                </div>
    </header>

<section id="about" class="about-us">
        <hr>
        <h2 class="tag">About Signal</h2>
        <div class="container">
            <div class="row">
              <div class="col-12 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-duration="3000">
                <h2>What is Signal?</h2>
               <p>  Signal is a company that makes tech to help impairment, Our app will help deaf people listen to music. It’s revolutionary and groundbreaking. We are dedicated to changing the future forever. Signal works by acessing the brain’s auditory receptors, with a special headset that allows the brain’s receptors convert the vibrations into sound. Signal is being made to bridge the gap of accessibility among the impaired. </p>
              </div>
              <div class="col-md-6 col-sm-6" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="1000">
                <img class="img-fluid" src="images/signal update.jpg" alt="" />
              </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6" data-aos="flip-left" data-aos-duration="3000">
                    <img class="img-fluid" src="images/signal update 2.jpg" alt="" />
                </div>
                <div class="col-12 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-duration="3000" data-aos-delay="1000">
                 <h2>Who needs Signal</h2>
                 <p>Around 466 million people worldwide havedisabling hearing loss, and 34 million of these are children. It is estimated that by 2050 over 900 million will have disabling hearing loss. Dispite this impairement, Signal through ground breaking tech seeks to bridge these gap and make this impairment not prevent these people from enjoying music and wonderful sounds. NOTE: Signal doesn’t cure deafness, It only makes sounds accessible through patterned vibrations</p>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-duration="3000">
                  <h2>How does Signal works</h2>
                 <p> When you wear the Signal headset it automatically synchs to the application, and all usability occurs with our app, apart from the inpaired being able to listen too music with Signal, our app has other features that aid usability and user experience for our users. Signal is in a partnership with Spotify for third party rights to play artiste’s music on our application, all for the betterment of humanity.</p>
                </div>
                <div class="col-12 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="3000" data-aos-delay="1000">
                    <img class="img-fluid" src="images/signal update 3.jpg" alt="" />
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6 col-sm-6" data-aos="zoom-in-up" data-aos-duration="3000">
                  <h2>Is Signal Safe?</h2>
                 <p>Signal might use unfamiliar tech, but we have set up compatibility specifications before users begin to use our product. Users will engage Signal at their level, be it beginner, intermidiate or expert users. Signal is safe and users need not worry about tingliness in the head or side effects, effective research has been carried out to streamline the user experience and ensure safety.</p>
                </div>
                <div class="col-12 col-md-6 col-sm-6" data-aos="flip-down" data-aos-duration="3000" data-aos-delay="1000">
                    <img class="img-fluid" src="images/signal update 4.jpg" alt="" />
                </div>
              </div>
        </div>
        <div class="spinner-grow ball1 text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="ball "></div>
        <div class="spinner-grow ball ball2" role="status"><span class="sr-only">Loading...</span></div>
        <div class="spinner-grow ball ball3" role="status"><span class="sr-only">Loading...</span></div>
        <div class="spinner-grow ball ball4" role="status"><span class="sr-only">Loading...</span></div>
        <div class="spinner-grow balls ball5" role="status"><span class="sr-only">Loading...</span></div>
        <div class="spinner-grow balls ball6" role="status"><span class="sr-only">Loading...</span></div>
        <div class="spinner-grow balls ball7" role="status"><span class="sr-only">Loading...</span></div>
        <div class="spinner-grow balls ball8" role="status"><span class="sr-only">Loading...</span></div>
</section>

<div class="appscreen">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/app.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/mockup1.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/mockup 2.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/mockup 3.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/mock 4.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/mockup 2.svg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<section class="Signal-does">
    <div class="container">
        <hr>
        <div class="tags">BENEFIT OF SIGNAL</div>
        <div class="row ben">
            <div class="col-12 col-md-6">
                <div class="pt-3 row">
                    <div class="col-1">
                        <img class="icons2" src="images/brain.svg" alt=""/>
                    </div>
                    <div class="col-11">
                        <h3>INCREASED BRAIN PERFOMANCE</h3>
                        <p> Signal’s programming and performance procsess, ensure the user;s brain is timulated for performance and activity, constantly using Signal is good and healthy for the human brain and body.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <img class="icons2" src="images/music.svg" alt=""/>
                    </div>
                    <div class="col-11">
                        <h3>IMPROVED MUSIC EXPERIENCE</h3>
                        <p>Equipped with the most modern music enhancers, music performance on our app is a big part of the usability, we ensure it’s an experience thatyou would constantly enjoy when playing music on your favorite app.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <img class="icons2" src="images/headphone.svg" alt=""/>
                    </div>
                    <div class="col-11">
                        <h3>REVOLUTIONARY TECH</h3>
                        <p>Signal is the first groundbraking technology that will solve an actual problem of human impairment, we aren’t promising to cure your deafness but rather give you an opportunity to enjoy music and be a pioneer despite impairment.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 pb-sm-none pb-5">
                <img class="img-fluid" src="images/Rectangle 21.png" alt="" />
            </div>
        </div>
    </div>
</section>

<div class="newsletter text-center pt-5">
    <h3>Get Notified</h3> 
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-border text-secondary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-border text-success" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <h3>Stay updated about our app launch and other products</h3>
    <p>Stay updated about our app launch and products </p>

    <form class="form-inline justify-content-center pt-3" method="post">
        <div class="form-group mx-sm-3 mb-2">
          <input type="email" class="form-control format"name="email" placeholder="Enter your email address">
        </div>
            <button type="submit" class="btn" name="submit">Subscribe</button>        
      </form>
</div>

<!--<div class="publicate pt-3">
    <h3 class="text-center">SEE WHAT PUBLICATION ARE TALKING ABOUT US</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="images/wired_logo.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div> 
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="images/financial times.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div> 
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="images/The_Economist_logo.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div> 
            </div>
        </div>
    </div>
</div>--->

     
<footer class="footer">
    <div class="container custom-container">
        <div class="row top justify-content-between">
            <div class="col-md-4">
                    <div>
                        <a href="#">
                            <img src="images/Group 2.svg" width="30" height="30" class="d-inline-block " alt="">
                            SIGNAL
                          </a>
                    </div>
            </div>
            <div class="col-6 col-md-2">
                <ul class="pl-0">
                    <li><a href="#">Newsroom</a></li>
                    <li class="py-1"><a href="#">Signal Jobs</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-2">
                <ul class="pl-0">
                    <li><a href="">Instagram</a></li>
                    <li class="py-1"><a href="">Twitter</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-2">
                <ul class="pl-0">
                    <li><a href="">Contact info</a></li>
                </ul>
            </div>
        </div>
        <nav class="nav py-5">
            <a class="nav-link" href="#">&copy 2020 Signal</a>
            <a class="nav-link" href="#">Legal</a>
            <a class="nav-link" href="#">Privacy</a>
        </nav>
        <div class="navigate container">
                        <p>Scroll down<span><a href="#about"><i class="fa fa-arrow-circle-o-up dwn-icon"></i></a></span></p>
        </div>
    </div>
 </footer>

    <script src="bootstrap-js/popper.js"></script>
    <script src="bootstrap-js/jquery.js"></script>
    <script src="bootstrap-js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>

