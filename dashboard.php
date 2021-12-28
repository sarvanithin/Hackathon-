<?php

    session_start();

    if(isset($_SESSION['user_id']) =="") {
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delta</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bbeea97aa1.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f0b4d212f8.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index.css.css">
</head>
<body>
 <header id="home">
    <div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Portals</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Farming</h3>
          <a href="#">Individual Farmers</a>
          <a href="#">Farmer Groups</a>
          <a href="#">Farmer Cooperatives</a>
        </div>
        <div class="column">
          <h3>Government aid</h3>
          <a href="#">Department of agriculture & Cooperation</a>
          <a href="#">Attached Offices & Dirctorates</a>
          <a href="#">Academic Research Institutions</a>
        </div>
        <div class="column">
          <h3>Products</h3>
          <a href="#">Manufactures</a>
          <a href="#">Imports & Exports</a>
          <a href="#">Traders</a>
        </div>
      </div>
    </div>
  </div> 
</div>

    <nav class="sticky-nav">
        <img src="logo1.png" alt="Logo" class="logo">
        <ul class="main-nav ">
            
            <!--<input type="text" class="topnav" placeholder="Search..">-->
                <li><a href="#home">Home</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#about">Learn</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
                 <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="wrapper">
    <input type="text" class="input" placeholder="what are you looking for?" name=""> 
        <div class="searchbtn">
            <i class="fas "></i>
        </div>
    </div>
    

    <div class="header-box">
        <div class="header-text-box">
            <h1>Agriculture website</h1>
            <h2 style="color: peachpuff;">The one stop for all your Agriculture related solutions</h2>
        </div>
        <a href="#contact" class="btn btn-full js--scroll-to-contact">Contact-us</a>
    </div>

</header>
<section class="Map">
    <div class="row">
        <h2 class="Map-head">State Wise Agricultural Information</h2>
        <h3>Click below for state wise information</h3>
        
        <a href="agri.html" class="btn btn-full">Click here</a>
    </div>
</section>

    
  <section id="blog" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Blogs</h3>
              <h2 style=" text-align: center; ">We are a team of experienced creators who love creating content</h2>
             
              <div class="text-center text-lg-start">
                
              </div>
            </div>
          </div>
          
          
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch team" data-aos="fade-up" data-aos-delay="100">
            <div class="member" style="max-width: 95%;">
              <div class="member-img">
                <img src="bg11.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/anjali_shxrma/?hl=en" target="__blank"><i class="bi bi-instagram"></i></a>
                  
                  <a href="https://www.linkedin.com/in/ishansharma7390" target="__blank"><i class="bi bi-linkedin"></i></a>
                  </div>
              </div>
              <div class="member-info">
                <h4>Food Year</h4>
                <span></span>
                <p> In the Potato Park of Cusco, Peru, farmers celebrate their most precious crop every year on May 30, on National Potato Day. This images shows farmers making a traditional offering of chica, a fermented corn beer, and coca leaves in thanks for an abundant harvest of native potatoes (Photo: copyright Enrique Granados)
When the COVID-19 pandemic brought the world to a halt in early 2020, people around the globe were left struggling to support themselves and their families, without work or transport, and facing shortages of products from toilet paper to basic foodstuffs.
The pandemic laid bare the vulnerabilities of global food supply chains that rely on long distance transportation, and of farming systems that depend on access to markets to purchase external inputs and sell products. But it also highlighted the tremendous resilience of the self-reliant biocultural food systems of Indigenous Peoples around the world.</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch team" data-aos="fade-up" data-aos-delay="100">
            <div class="member" style="max-width: 95%;">
              <div class="member-img">
                <img src="blog22.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.linkedin.com/in/saransh-anand/" target="__blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Innovation & collaboration drive change in India’s farming communities</h4>
                <span></span>
                <p>Six years ago, smallholder farming in the state of Karnataka was hardly a viable operation. Rainfall played a significant role in whether they succeeded in growing anything or nothing, whether they made a living or struggled. With no access to irrigation, farmers were confined to growing only one crop cycle, and couldn't risk diversifying to increase their profits. Add to this their limited access to capital, technology and markets and it's no wonder the livelihood of these farming families was so vulnerable. Over 56% of the Karnataka State population depends on agriculture for their livelihood. This figure is even higher at the national level. 60% of India’s population lives off farming and 83% of all farmers are smallholders, farmers who cultivate less than 2 hectares of land. These smallholder farmers are the backbone of agricultural growth; they contribute over 40% of India's grain production, and over half of its fruits, vegetables, oilseed, and other crops.</p>
              </div>
            </div>
          </div>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch team" data-aos="fade-up" data-aos-delay="100">
            <div class="member" style="max-width: 95%;">
              <div class="member-img">
                <img src="blog3.jpg" class="img-fluid" alt="">
                <div class="social">
                
                </div>
              <div class="member-info">
                <h4>Group Farming</h4>
                <span></span>
                <p>Group farming- A system of collective agricultural practice by association of people with similar interest. Farmer groups are used as avenues for which small holder farmers can market their produce, access inputs and get extension advice and are characterized by a higher proportion of male members and those producing export crops with high income. Various government and nongovernmental organizations support these groups.

cooperative farming mainly refers to farming practices where farming operations are conducted cooperatively. These agricultural practices are conducted by individuals on their holdings jointly with certain common agencies.

·         1) Retail Cooperatives. Retail Cooperatives are a type of "consumer cooperative" which help create retail stores to benefit the consumers making the retail “our store”. ...

·         2) Worker Cooperatives. ...

·         3) Producer Cooperatives. ...

·         4) Service Cooperatives. ...

·         5) Housing Cooperatives.</p>
              </div>
            </div>
          </div>
        
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch team" data-aos="fade-up" data-aos-delay="100">
            <div class="member" style="max-width: 95%;">
              <div class="member-img">
                <img src="blog4.jpg" class="img-fluid" alt="">
                <div class="social">
                  </div>
              </div>
              <div class="member-info">
                <h4>Can Humanity Gamble on the Weather?</h4>
                <span></span>
                <p> For all of us who may have forgotten, our food chain starts with photosynthesis. Yes, the process we learned about in elementary school. Everything alive on planet earth depends on the miraculous ability of plants to turn carbon dioxide (CO2), sunlight, and water into carbohydrates (sugar). CO2 comes from the atmosphere, actually, we have too much of it. Light is courtesy of the sun, but water needs to reach the plant's roots either naturally by rain, or artificially by irrigation. Without the constant availability of water, the food-producing machine called a plant works in a suboptimal way or stops working completely. The bottom line, if our crops don’t get a consistent supply of water we will have less food to go around.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

  </section>
  <section style="margin: 0px;
  padding: 0px;">
  <div class="wrapper">
  <h2 style="text-align: center;">
Services</h2>
<div class="line">
</div>
<div class="single-service">
      <div class="social">
<i class="fa fa-diamond"></i></div>
<span></span>
       <h3>
View Tenders</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et delectus, in veritatis veniam non praesentium corporis dolorum necessitatibus. Culpa odio enim amet praesentium illo voluptates ab quidem, nam consequuntur. Natus.</p>
</div>
<div class="single-service">
      <div class="social">
<i class="fa fa-diamond"></i></div>
<span></span>
       <h3>
Procurement of Pulses</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et delectus, in veritatis veniam non praesentium corporis dolorum necessitatibus. Culpa odio enim amet praesentium illo voluptates ab quidem, nam consequuntur. Natus.</p>
</div>
<div class="single-service">
      <div class="social">
<i class="fa fa-diamond"></i></div>
<span></span>
       <h3>
Surveyors</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et delectus, in veritatis veniam non praesentium corporis dolorum necessitatibus. Culpa odio enim amet praesentium illo voluptates ab quidem, nam consequuntur. Natus.</p>
</div>
</div>




<section class="contact-section js--contact" id="contact">
    <div class="row">
        <h2 class="contact-heading">We're happy to hear from you</h2>
    </div>
    <div class="row">
        <form method="post" action="#" class="contact-form">
            <div class="row">
                <div class="col span_1_of_3 contact-label">
                    <label for="name">Name</label>
                </div>
                <div class="col span_2_of_3">
                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col span_1_of_3 contact-label">
                    <label for="email">Email</label>
                </div>
                <div class="col span_2_of_3">
                    <input type="email" name="email" id="email" placeholder="Your email" required>
                </div>
            </div>
            <div class="row">
                <div class="col span_1_of_3 contact-label">
                    <label for="newsletter">Newsletter?</label>
                </div>
                <div class="col span_2_of_3">
                    <input type="checkbox" name="newsletter" id="newsletter" checked>&nbsp;Yes, Please
                </div>
            </div>
            <div class="row">
                <div class="col span_1_of_3 contact-label">
                    <label for="message">Drop us a line</label>
                </div>
                <div class="col span_2_of_3">
                    <textarea name="message" id="message" placeholder="Your message"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col span_1_of_3">
                    &nbsp;
                </div>
                <div class="col span_2_of_3">
                    <input type="submit" value="Send it!">
                </div>
            </div>

        </form>
    </div>
</section>
<section class="about" id="about"
style="margin: 0px;
padding: 0px;">

    <h1 style="text-align: center;">About-us</h1>
    <p class="about-text">
        This website is user-friendly for all farmers,government and private sector people and it will clear all the queries related to agriculture and it is one stop for all your agriculture queries.this website friendly for all literates and illiterates and me and my team will be update the website on daily basis so you won't be late for reciving geniune data.This website has been created for educational and information purpose and created by Nithin,Akhil,Sruthi and Niharika. 
        And the main moto of the website is to deliver geniune and legit information for the users.
    </p>

</section>
<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Name :- <?php echo $_SESSION['user_name']?></h5>
                    <p class="card-text">Email :- <?php echo $_SESSION['user_email']?></p>
                    <p class="card-text">Mobile :- <?php echo $_SESSION['user_mobile']?></p>
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                  </div>
                </div>
            </div>
        </div>       
    </div>
<footer id="contact">
    <div class="row">
        <div class="col span_1_of_2">
            <ul class="footer-nav">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Help & Support</a></li>
                <li><a href="#">iOS App</a></li>
                <li><a href="#">Android App</a></li>
            </ul>
        </div>
        <br>
        <br>
        <h2>Toll-free no:1234567890</h2>
        <h2>Mail-id:123@gmail.com</h2>
        <div class="col span_1_of_2">
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <p><br>
             </p>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script >$(document).ready(function() {

   
    $(".Map").waypoint(function(direction) {
        if(direction=="down") {
            $("nav").addClass('sticky-nav');
        }
        else {
            $("nav").removeClass('sticky-nav');
        }
    }); 

     
});</script>

</body>
</html>
