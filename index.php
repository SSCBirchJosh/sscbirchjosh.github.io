<!DOCTYPE html>
<html>
    <head>
        <title>Josh Birch | Web Design & Development</title>
        <meta charset="UTF-8">
        <meta name="description" content="Providing self-employed personnel and local companies a chance to expand and build their online profile. Graphics packages and website development are both available to any valued consumer.">
        <meta name="author" content="Joshua Birch">
        <meta name="keywords" content="web design, web development, Josh Birch | Web Design & Development, graphic design, great wyrley, walsall, programming">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link type="text/css" rel="stylesheet" href="css/indexcss.css"/>
        <link type="text/css" rel="stylesheet" href="css/fontawesome.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/aos.css"/>
        <link href="https://fonts.googleapis.com/css?family=Fauna+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link rel="shortcut icon" href="assets/favicon-96x96.png" type="image/x-icon">
        <link rel="icon" href="assets/favicon-96x96.png" type="image/x-icon">
    </head>

    <body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script defer src="js/fontawesome-all.min.js"></script>
        <script type="text/javascript" src="js/aos.js"></script>
        
        <!--JS-->
        <script>
            $( document ).ready(function(){
                $(".button-collapse").sideNav();
            });
        </script>
        
        <script>
            AOS.init();
        </script>
    
        
        <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
        </script>
    
         
            
            <!--Nav-->
                <nav class="transparent z-depth-0">
                    <div class="nav-wrapper">
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="#section2">About</a></li>
                            <li><a href="#section3">Portfolio</a></li>
                            <li><a href="#section4">Services</a></li>
                            <li><a href="#section5">Contact</a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="#section2">About</a></li>
                            <li><a href="#section3">Portfolio</a></li>
                            <li><a href="#section4">Services</a></li>
                            <li><a href="#section5">Contact</a></li>
                        </ul>
                    </div>
                </nav>

        <div class="intro" id="section1"> 
    
            <div data-aos="fade-down" data-aos-duration="3000" class="intro">
                <div class="row">
                    <div class="col l6 s12">
                        <img class="logo" src="assets/logo.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col l6 s12">
                        <h1 class="title">Web Design & Development</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col l6 s12">
                        <p class="subtitle">Creating affordable business designs and websites for companies</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col l6 s12">
                         <a href="#section2" id="introbutton" class="btn-floating btn-large waves-effect waves-light pulse"><i class="material-icons icon-black">keyboard_arrow_down</i></a>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="about" id="section2">
            
            <div class="container">
                
                <div class="row">
                    
                    <div  class="col l12 m12 s12">
                        
                        <h1 class="aboutme">About</h1>
                        
                    </div>
                    
                </div>
                
                <div class="row">
                    <div data-aos="zoom-in" class="col l12 m12 s12">
                        <img class="z-depth-4 cover hide-on-med-and-down" src="assets/cover.png">
                    </div>
                </div>
                
                <div class="row">
                    
                    <div data-aos="fade-right" class="col l4 m12 s12">
                        <i class="large material-icons">all_inclusive</i>
                        <h5 class="aboutsubs">Inclusive</h5>
                        <p>When enquiring about a product or service here, you the consumer have the choice. You can choose an inclusive package, which includes a graphics package for your social media profiles and website. Or a fully responsive and cohesive website </p>
                    </div>
                    
                    <div data-aos="fade-right" class="col l4 m12 s12">
                        <i class="large material-icons">developer_board</i>
                        <h5 class="aboutsubs">Development</h5>
                        <p>When purchasing a product from me, we go through a professional and cohesive process of designing, developing and evaluating while in full communication. Using the agile module of developing, you the consumer, can add input into the design and structure of your packages at any point.</p>
                    </div>
                    
                    <div data-aos="fade-right" class="col l4 m12 s12">
                        <i class="large material-icons">school</i>
                        <h5 class="aboutsubs">Study</h5>
                        <p>While being a freelance web developer, I am also a University student studying Creative Computing Science BSc(Hons). Achieving highly in Web & Database Development, my skills in University truly represent my ability when putting them to a consumer front.</p>
                    </div>
                </div>
                
                
            </div>
            
            <div class="row">
                <div class="col l12 m12 s12">
                    <a href="#section3" id="aboutbutton" class="btn-floating btn-large waves-effect waves-light pulse"><i class="material-icons icon-white">keyboard_arrow_down</i></a>
                </div>
            </div>
            
        </div>
        
        <div class="portfolio" id="section3">
            
            <div class="container">
                
                <div class="row">
                    
                    <div class="col l12 m12 s12">
                        
                        <h1 class="aboutme">Portfolio</h1>
                        
                        <div data-aos="fade-down">
                            <p class="portfoliosub">Although small due to me being a junior developer, many projects have already been completed and are a showcase of my development through University and beyond. Take a look at some of these!</p>
                        </div>
                    </div>
                    
                
               
                
                    <div data-aos="flip-left" class="col l4 m4 s12">
                
                                
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/buzzartstudios1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator">Buzzart Studios 2016<i class="material-icons right">send</i></span>
                            </div>
                            <div id="buzzartstudios2016" class="card-reveal">
                                <span class="card-title">Buzzart Studios 2016<i class="material-icons right">close</i></span>
                                <p>A Level 3 College project in which a simple multi-page html website had to be made based on a fictional company, check it out here!</p>
                                <a target="_blank" href="https://joshuabirch.github.io/buzzartstudios/index.html" id="buzzart2016button" class="center-align btn waves-effect waves-light pulse">Go!<i class="material-icons right">send</i></a>
                            </div>
                        </div>
                                
                    </div>
                            
                            
             
                
         
                        
                    
                    <div data-aos="flip-left" class="col l4 m4 s12">
            
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/buzzartstudios2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator">Buzzart Studios 2017<i class="material-icons right">send</i></span>
                            </div>
                            <div id="buzzartstudios2017"  class="card-reveal">
                                <span class="card-title">Buzzart Studios 2017<i class="material-icons right">close</i></span>
                                <p>A University project in which I had to expand on my initial website and add PHP elements in order ot store information into a database. Check it out here!</p>
                                <a target="_blank" href="http://buzzartstudios.gwiddle.co.uk/" id="buzzart2017button" class="center-align btn waves-effect waves-light pulse">Go!<i class="material-icons right">send</i></a>
                            </div>
                        </div>
                                
                    </div>
                            
              
               
                    
                    <div data-aos="flip-left" class="col l4 m4 s12">
                                
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="assets/staffsblog.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator">Staffs Blog 2018<i class="material-icons right">send</i></span>
                            </div>
                            <div id="staffsblog" class="card-reveal">
                                <span class="card-title">Staffs Blog 2018 (Ongoing)<i class="material-icons right">close</i></span>
                                <p>A University project working with a project manager to create the managers desired website. Check it out here!</p>
                               <a target="_blank" href="https://umangrui.github.io/Project/" id="staffsblogbutton" class="center-align btn waves-effect waves-light pulse">Go!<i class="material-icons right">send</i></a>
                            </div>
                        </div>
                                
                    </div>
                </div>
                
            </div>
                            
            
            <div class="row">
            
                <div class="l12 m12 s12">
                    <a href="#section4" id="introbutton" class="btn-floating btn-large waves-effect waves-light pulse"><i class="material-icons icon-black">keyboard_arrow_down</i></a>
                </div>
            </div>
        
        </div>
        
        <div class="services" id="section4">
            
            
            
                <div class="container">


                <h1 class="aboutme">Services</h1>

                <div data-aos="fade-left">

                    <p class="servicessubs">I offer many different services towards self-employed individuals and small companies, if you're in need of a graphics package, new website or a complete re-brand at a competitive price, then look no further. The prices shown are example prices without the calculations that are usually processed when in communications with a client.</p>

                </div>

                    <div class="row">

                        <div data-aos="zoom-in-up" class="col l12 m12 s12">
                              <table class="striped">
                                <thead>
                                  <tr>
                                      <th>Product</th>
                                      <th>Example</th>
                                      <th>Example Price</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td>Logo & Covers</td>
                                    <td>Business Logo and Covers for their representative social media's</td>
                                    <td>£100</td>
                                  </tr>
                                  <tr>
                                    <td>Website</td>
                                    <td>One-page website for a local company</td>
                                    <td>£20/hr</td>
                                  </tr>
                                  <tr>
                                    <td>Graphics package and website</td>
                                    <td>Complete re-brand for a local company</td>
                                    <td>£100 + £20/hr</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
           
            
            <div class="row">
                <div class="col l12 m12 s12">
                    <a href="#section5" id="aboutbutton" class="btn-floating btn-large waves-effect waves-light pulse"><i class="material-icons icon-white">keyboard_arrow_down</i></a>
                </div>
            </div>
        </div>
        

        
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l12 s12">
                        <h5 class="pageheader">Josh Birch | Web Design & Development</h5>
                </div>
                </div>
                <div class="row">
                    <a href="https://www.facebook.com/Josh-Birch-Web-Design-Development-952530608257151/"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/Joshua_Birch_"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/in/birchjosh/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/josh_birch_/"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="row">
                    <a target="_blank" class="tc" href="tandc.html">Terms and Conditions</a>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                <p>© 2018 Joshua Birch</p>
                </div>
            </div>
        </footer>
        
    </body>
    
</html>