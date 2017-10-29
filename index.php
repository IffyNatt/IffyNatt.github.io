<!DOCTYPE HTML>

<html ng-app="hrNetwork">
    <head lang="en">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible", content="ie=edge">
        <title>hrNetworks</title>
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">        
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> 
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <script src="vendors/javaScript/angular.min.js"></script>

    </head>
    <body ng-controller="myCtrl">
        <header id="home">
                <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #e3f2fd">
                    <a class="navbar-brand" href="#">                    
                        <img src="resources/image/small.hr.logo.png" height="50px" width="auto"alt="hrLogo" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hrNav-bar" aria-controls="hrNav-bar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="hrNav-bar">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active link-btn-1" href="#home">HOME<span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link link-btn-1" href="#about_us">ABOUT US</a>
                            <a class="nav-item nav-link link-btn-1" href="#our-products">SERVICES</a>
                            <a class="nav-item nav-link link-btn-1" href="#get-in-touch">CONTACT US</a>
                            <a class="nav-item nav-link link-btn-1" ng-click="open()" href="#">LOGIN</a>
                        </div>
                    </div>
                </nav> 
                <div class="header-text col col-sm-12">
                    <h1>We are the right fit for your organisation </h1>
                    <h3 class="header-text-h3"><span>putting the human back in human resources  <i class="ion-alert"></i></span></h3>
                    <a class="btn btn-success com-btn" href="#go-to-complaince-section">Take our Complaince Test</a>
                    <button type="button" class="btn btn-success"  ng-click="open()">Client Login</button>
                </div>                    
        </header> 
        
        <!--Sign in Modal starts here -->
        <div class="modal" id='id01' tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/action_page.php">
                  <div class="imgcontainer">
                    <img src="resources/image/image_1.jpg" alt="Avatar" class="avatar">
                  </div>
                  <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit" ng-click="login()">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
                  </div>

                  <div class="container"style="background-color:#f1f1f1">
                    <button type="button" class="btn btn-danger cancelbtn" ng-click="closeLogin()">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                  </div>

                </form>
            </div>
          </div>
        </div>

        <!-- Ends Here -->
        
        <section class="aboutUs" id="about_us">
            <div class="container">
                    <div class="col col-12">
                        <h2>About Us</h2>
                        <p>HR NETwork was developed in response to the growing needs of small and medium-sized companies that require quality, affordable Human Resources services,
    Realizing that there must be a better way than carrying expensive overhead and staff, HR NETwork developed a new industry model. Our attention to the details of your Human Resources issues allows you to stay focused on the strategic growth of your business, with the peace of mind that your business is in compliance and your employees are satisfied and productive.
    ... with HR NETwork on your side, we will increase the effectiveness of your company's employee resources while minimizing your risk and exposure
                        </p>
                        <hr>
                    </div>
            </div>
        </section>      
        <section id="services">
                <div>
                    <h2>Let us help You</h2>
                    <div class="row services">
                        <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                            <i class="ion-ios-gear-outline services-icon"></i>
                            <h3>HR Solutions</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 
                                <a class="click1" data-toggle="collapse" href="#additional_service" aria-expanded="false" aria-controls="collapseExample">...click for more</a></p>                           
                        </div>
                        <div class="col col-12 col-sm-12 col-md-4 col-lg-4">
                            <i class="ion-monitor services-icon"></i>
                            <h3>Training Solutions</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                             <a class="click2" data-toggle="collapse" href="#additional_service" aria-expanded="false" aria-controls="collapseExample">...click for more</a></p>                           
                        </div>
                        <div class="col col-12 col-sm-12 col-md-4 col-lg-4">
                            <i class="ion-medkit services-icon"></i>
                            <h3>Worker Comp &amp; Safety Solutions</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                             <a class="click3" data-toggle="collapse" href="#additional_service" aria-expanded="false" aria-controls="collapseExample">...click for more</a></p>                           
                        </div>
                        <div class="container">
                            <div class="collapse" id="additional_service">
                              <div class="card card-body service-more-info">
                                 <p>{{services_content}}</p>
                              </div>
                            </div>
                            </div>
                      </div>
                 </div>
        </section>     
        <section class="testimonial">  
                <div class="testimonial-width">
                        <h2>We Continue to partner with businesses like Yours</h2>
                        <div class="row quote">
                            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                                <blockquote>I'm so grateful to have HR NETwork here. It's really taken away from my HR headaches. 
                                    <cite><br>
                                        <i class="ion-android-person testimonia-icon"></i>Modified Plastics
                                    </cite>
                                </blockquote>                   
                            </div>
                            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                                <blockquote>
                                HR Network Inc helped us to identify our risks in the office. They worked with us to streamline our Hr respoonsibilities, managing our training, Hr policies. They took the weight of allowing us to concentrate on building up the business. 
                                    <cite><br>
                                        <i class="ion-android-person testimonia-icon"></i>Iffy Edward
                                    </cite>
                                </blockquote>                   
                            </div>
                            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                                <blockquote>
                                HR Network Inc helped us to identify our risks in the office. They worked with us to streamline our Hr respoonsibilities, managing our training, Hr policies. They took the weight of allowing us to concentrate on building up the business. 
                                    <cite><br>
                                        <i class="ion-android-person testimonia-icon"></i>Iffy Edward
                                    </cite>
                                </blockquote>                   
                            </div>
                        </div>
                    </div>
            </section>                  
            <section class="complaince-section" id="go-to-complaince-section" >
                <div class="container">
                        <h2>Take our Free Compliance Test</h2>
                        <h3 class="count">Question {{count}} of 10 </h3>
                    <div class="row complaince-questions">
                        <div class="col-sm-6 col-med-6 col-lg-6">
                            <div class="row">
                                <div class="col col-sm-9">
                                    <p>{{text}}</p>
                                </div>
                                <div class="col col-sm-3">
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="exampleRadios" id='chck1' ng-click="getValue()">Yes
                                      </label>
                                    </div>
                                </div>
                              </div>
                         </div>
                        <div class="col-sm-6 col-med-6 col-lg-6 complaince_value">
                        <form>
                            Your estimated Liabilities = <i class="ion-social-usd"></i>
                            {{sumTotal}}.00
                            <a href=''><span>
                            <i class="ion-ios-loop-strong refresh" ng-click="refresh()" ></i>
                            </span></a>
                        </form>
                        </div>                       
                    </div>
                    <div class="row complaince-buttons">
                        <div class="container">
                            <div class="col col-sm-12 ">
                                <form>
                                    <button type="button " class="btn btn-outline-dark" id="btn1" ng-click="previous()">Previous</button>
                                    <button type="button" class="btn btn-outline-dark" id='btn2' ng-click="next()">Next</button>
                                </form>
                            </div> 
                        </div>
                    </div>
                 </div>


            </section>
            <section class="our-products" id="our-products">
                <div class="container">
                        <h2>Our Services</h2>            
                        <div class="card-deck card-product">
                          <div class="card">
                            <img class="card-img-top" src="resources/css/images/testimonial_background.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title">Recruiting</h4>
                              <p class="card-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                              <p class="card-text"><small class="text-muted">Lorem Ipsum</small></p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="resources/css/images/testimonial_background.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title">Vendor Services/Partners</h4>
                              <p class="card-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                              <p class="card-text"><small class="text-muted">Lorem Ipsum</small></p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="resources/css/images/testimonial_background.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title">Resorces</h4>
                              <p class="card-text">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                              <p class="card-text"><small class="text-muted">Lorem Ipsum </small></p>
                            </div>
                          </div>
                        </div>
                </div>
             </section>      
             <section class="contact" id="get-in-touch">
                 <h2>Contact Us</h2>
                 <div class="contact-us">                     
                        <div class="map"></div>
                        <div class="col col-sm-6 contact-form-map">
                            <h3 class="contact-header">We want to Hear From You</h3>
                            <div class="container">
                                    <form class="contact_form" method="post" action="mailer.php">
                                        <div class="row">
                                            <?php
                                                if($_GET['success']==1)
                                                    {
                                                        echo "<div class=\"messages successSend\">Thank you for your email. We will get in touch soon!</div>";
                                                    }

                                                if($_GET['success']== -1)
                                                    {
                                                        echo "<div class=\"messages failureSend\">Ooops! somethign went wrong, please try again</div>";
                                                    }
                                            ?>
                                        </div>
                                    
                                        <div class="form-group row">
                                          <label for="name" class="col-sm-4 col-form-label">Name</label>
                                          <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" name='name' placeholder="Name" required>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="email" class="col-sm-4 col-form-label">Email</label>
                                          <div class="col-sm-8">
                                            <input type="email" class="form-control" id="email" name = 'email' placeholder="Email" required>
                                          </div>
                                        </div>
                                        <fieldset class="form-group">
                                          <div class="row">
                                            <legend class="col-form-legend col-sm-4">Organisation Size</legend>
                                            <div class="col-sm-8">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="size" id="organisation_size1" value="option1" checked>
                                                  0 &#45;50
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="size" id="organisation_size2" value="option2">
                                                  50&#45;150
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="size" id="organisation_size3" value="option3">
                                                  150&#45;500
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="size" id="organisation_size4" value="option4">
                                                  500 &amp; above
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                        </fieldset>
                                          <div class="row">
                                            <div class=" col col-sm-12">I would like more information on the following</div>
                                          </div>
                                        <div class="form-group row">
                                          <div class="col-sm-6">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="interest1"> Workers Comp and Safety
                                              </label>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="interest2"> General HR Services
                                              </label>
                                            </div>
                                            </div>

                                          </div>
                                        <div class="form-group row">
                                           <div class="col-sm-6">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="interest3"> HR Audit
                                              </label>
                                            </div>
                                          </div>
                                           <div class="col-sm-6">
                                            <div class="form-check">
                                              <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="interest4"> Worker Performance Appriasal
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Email</button>
                                          </div>
                                        </div>
                                  </form>
                                </div>
                            </div>
                        </div>           
                     </section>             
        
                     <footer class="text-center footer">
                            <div class="container">
                                <div class="row">
                                    <div class="footer-col col-md-6">
                                        <h3>Location</h3>
                                        <p>7077 Orangewood Avenue, Suite 112
                                        <br>Garden Grove, CA 92841</p>
                                    </div>
                                    <div class="footer-col col-md-6 footer-icons">
                                        <h3>Around the Web</h3>
                                        <ul>
                                            <li>
                                                <a href="#"><span class="sr-only">Facebook</span><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="sr-only">Google Plus</span><i class="ion-social-googleplus"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="sr-only">Twitter</span><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="sr-only">Linked In</span><i class="ion-social-linkedin"></i></a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        <div class="footer-below">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        Copyright &copy; HRNetwork Inc. 2017
                                    </div>
                                </div>
                            </div>
                        </div>
                     </footer>         

        <script src="vendors/javaScript/jquery-3.2.1.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
        <script src="vendors/javaScript/bootstrap.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
         <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfKMVQsQn8i5j50CSx3v8quSdjDQhI_pg"></script> 
         <script src="vendors/javaScript/gmaps.js"></script>
         <script src="resources/javaScript/script.js"></script>
        <script src="resources/javaScript/angularJavascript.js"></script>

    </body>
</html>
                    
