<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time() ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 
    <title>in loops</title>
    <!--======style switcher=======-->
    <link rel="stylesheet" href="css/style-switcher.css">
    <link rel="stylesheet" href="css/color-1.css" class="alternate-style" title="color-1"  >
    <link rel="stylesheet" href="css/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="css/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="css/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="css/color-5.css" class="alternate-style" title="color-5" disabled>
    
</head>
<?php
include "function/info.php";


?>

<body>
    <!--main conteiner start-->
    <div class="main-container">
        <!--ASIDE start-->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>iN</span>loops</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li ><a href="#home" class="active"><i class="fa fa-home"></i>home</a></li>
                <li><a href="#about" ><i class="fa fa-user"></i>about</a></li>
                <li><a href="#services"><i class="fa fa-list"></i>servies</a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase"></i>projects</a></li>
                <li><a href="#team"><i class="fa-solid fa-users-viewfinder"></i>team</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>contact</a></li>
                <li><a href="#admin"><i class='fas fa-user-cog'></i>admin</a></li>
                

            </ul>
            



        </div>
        <!--ASIDE end-->

        <!--main content start-->
        <div class="main-content">
            <!--home section start-->
            <section class="home active section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">hello,we are <span class="name"><?php echo $nom_equipe ?></span></h3>
                            <h3 class="my-professiion">we are <span class="typing">programmers</span></h3>
                            <p>A simple way to explain the coding concept fullstack && mobile developers && designers && creations && code . </p>
                             <a href="#contact" class="btn hire-me">galery</a>

                        </div>
                        <div class="home-img padd-15">
                            <img src="images/logo.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!--home section end-->
            <!--about section start-->

<section class="about section" id="about">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>About we</h2>
            </div>
        </div>
        <div class="row">
            <div class="about-content padd-15">
            <div class="row">
                <div class="about-text padd-15">
                    <h3>we are <span><?php echo $nom_equipe ?></span></h3>
                    <p><?php echo $description ?></p>
                </div>
            </div>
            <div class="row">
                <div class="personal-info padd-15">
                    <div class="row">
                        <div class="info-item padd-15">
                            <p>date fondation: <span><?php echo $date_fondation ?></span></p>
                        </div>
                        <div class="info-item padd-15">
                            <p>lieu fondation: <span><?php echo $lieu_fondation ?></span></p>
                        </div>
                        <div class="info-item padd-15">
                            <p>membres: <span><?php echo $membres ?></span></p>
                        </div>
                        <div class="info-item padd-15">
                            <p>experience: <span><?php echo $experience ?></span></p>
                        </div>
                        <div class="info-item padd-15">
                            <p>email: <span><?php echo $email ?></span></p>
                        </div>
                        <div class="info-item padd-15">
                            <p>phone: <span><?php echo $phone ?></span></p>
                        </div>
                        <div class="info-item padd-15">
                            <p>facebook: <span><?php echo $name_facebook ?></span></p>
                        </div>
                        <div class="info-item padd-15">
                            <p>instagramme: <span><?php echo $name_instagramme ?></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="buttons padd-15">
                            <a href="#" class="btn">download cv</a>
                            <a href="#contact" class="btn hire-me">Hire me</a>
                        </div>
                    </div>
                </div>
                <div class="skills padd-15">
                    <div class="row">
                        <div class="skill-item padd-15">
                            <h5>front-side</h5>
                            <div class="progress">
                                <div class="progress-in" style="width:90%;"></div>
                                <div class="skill-percent">90%</div>
                            </div>
                        </div>



                        <div class="skill-item padd-15">
                            <h5>server-side</h5>
                            <div class="progress">
                                <div class="progress-in" style="width:90%;"></div>
                                <div class="skill-percent">90%</div>
                            </div>
                        </div>





                        <div class="skill-item padd-15">
                            <h5>application-mobiles</h5>
                            <div class="progress">
                                <div class="progress-in" style="width:80%;"></div>
                                <div class="skill-percent">80%</div>
                            </div>
                        </div>





                        <div class="skill-item padd-15">
                            <h5>interface ui uix</h5>
                            <div class="progress">
                                <div class="progress-in" style="width:86%;"></div>
                                <div class="skill-percent">86%</div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
          <!---  <div class="row">
                <div class="education padd-15">
                    <h3 class="title">Education</h3>
                    <div class="row">
                        <div class="timline-box padd-15">
                            <div class="timline">
                                timline
                            </div>
                        </div>
                    </div>
                </div>
                <div class="experience padd-15>
                    <h3 class="title">experience</h3>
                </div>
            </div>--> 
            </div>
        </div>
        
    </div>
</section>


            <!--about section end-->
            <!--services section start-->
            <section class="service section padd-15" id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!--====== service item start-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                <i class="fa-solid fa-file-code icoo"></i>
                                </div>
                                <h4>front end</h4>
                                <p>we can make for you an awesome design for your template using new technologies</p>
                            </div>
                        </div>
                        <!--====== service item end-->
                                                <!--====== service item start-->
                                                <div class="service-item padd-15">
                                                    <div class="service-item-inner">
                                                        <div class="icon">
                                                        <i class="fa-solid fa-server icoo"></i>
                                                        </div>
                                                        <h4>back-end</h4>
                                                        <p>we can also work for code server in your website with any function you want </p>
                                                    </div>
                                                </div>
                                                <!--====== service item end-->
                                                                        <!--====== service item start-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                <i class="fa-brands fa-sketch icoo"></i>
                                </div>
                                <h4>DESIGN UI UIX </h4>
                                <p>We can make for you awesome design for your applications and for you brands </p>
                            </div>
                        </div>
                        <!--====== service item end-->
                                                <!--====== service item start-->
                                                <div class="service-item padd-15">
                                                    <div class="service-item-inner">
                                                        <div class="icon">
                                                        <i class="fa-solid fa-mobile icoo"></i>
                                                        </div>
                                                        <h4>Apps Mobiles</h4>
                                                        <p>we have experts in mobile apps devolopement ; create your own application mobile or make a reskin </p>
                                                    </div>
                                                </div>
                                                <!--====== service item end-->
                                                                        <!--====== service item start-->
                        <div class="service-item padd-15">
                            <div class="service-item-inner">
                                <div class="icon">
                                <i class="fa-solid fa-desktop icoo"></i>
                                </div>
                                <h4>Apps desktop management</h4>
                                <p>make application desktop to manage your societe or makes es requests to facilite your work </p>
                            </div>
                        </div>
                        <!--====== service item end-->
                                                <!--====== service item start-->
                                                <div class="service-item padd-15">
                                                    <div class="service-item-inner">
                                                        <div class="icon">
                                                        <i class="fa-solid fa-screwdriver-wrench icoo"></i>
                                                        </div>
                                                        <h4>reparition apps </h4>
                                                        <p>we can repare our application in different time if you have some problemes technique in your app</p>
                                                    </div>
                                                </div>
                                                <!--====== service item end-->


                    </div>
                </div>
            </section>
            <!--services section End-->

                           <!--=========portfolio section start=======-->
                           <section class="portfolio section padd-15" id="portfolio">
                            <div class="container">
                                <div class="row">
                                    <div class="section-title padd-15">
                                        <h2>projects</h2>
                                    </div>
                                </div>
                                <div class="row">
          
        </div>
        <div class="row" id="projects">
            
            

        </div>

    </div>
</section>

                            <!--=========portfolio section send=======-->

                    <!--=========team section start=======-->
    















                    <section class="team section padd-15" id="team">
                        <div class="container">
                            <div class="row">
                                <div class="section-title padd-15">
                                    <h2>team</h2>
                                </div>
                            </div>
                            <div class="row" id="teams">
                                
                                         
                        
                        
                            </div>
                        </div>
                        </section>






















                    <!--=========team section end=======-->






      
                             <!--=========contact section start=======-->

<section class="contact section" id="contact">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>contact me</h2>
            </div>
        </div>
        <h3 class="contact-title padd-15">have you any Question!</h3>
        <h4 class="contact-sub-title padd-15">we are  at your services</h4>
        <div class="row">
 
              <!--=========contact info item start=======-->

              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa-solid fa-envelope icoo2"></i></div>
                <h4>EMAIL </h4>
                <p><?php echo $email ?></p>
            </div>
                 <!--=========contact info item end=======-->
                          <!--=========contact info item start=======-->

                          <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>phone</h4>
                            <p><?php echo $phone ?></p>
                        </div>
                             <!--=========contact info item end=======-->
              <!--=========contact info item start=======-->

              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa-brands fa-facebook-f icoo2"></i></div>
                <h4>faceobook</h4>
                <p><?php echo $name_facebook ?></p>
            </div>
                 <!--=========contact info item end=======-->

                               <!--=========contact info item start=======-->

              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa-brands fa-instagram icoo2"></i></div>
                <h4>instagramme</h4>
                <p><?php echo $name_instagramme ?></p>
            </div>
                 <!--=========contact info item end=======-->





        </div>
        <h3 class="contact-title padd-15">send me an email</h3>
        <h4 class="contact-sub-title padd-15">to contact us </h4>
        <!-- contact form-->
        <div class="row">
            <div class="contact-form padd-15">
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="subject">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                           <textarea name="" id=""  class="form-control"placeholder="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <button type="submit" class="btn">send Message</button>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
</section>


                             <!--=========contact section end=======-->





                             <!--=========contact section start=======-->

<section class="contact section" id="contact">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>contact me</h2>
            </div>
        </div>
        <h3 class="contact-title padd-15">have you any Question!</h3>
        <h4 class="contact-sub-title padd-15">I'm at your services</h4>
        <div class="row">
 
              <!--=========contact info item start=======-->

              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <h4>call us on</h4>
                <p>0678750531</p>
            </div>
                 <!--=========contact info item end=======-->
                          <!--=========contact info item start=======-->

                          <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>call us on</h4>
                            <p>0678750531</p>
                        </div>
                             <!--=========contact info item end=======-->
              <!--=========contact info item start=======-->

              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <h4>call us on</h4>
                <p>0678750531</p>
            </div>
                 <!--=========contact info item end=======-->

                               <!--=========contact info item start=======-->

              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <h4>call us on</h4>
                <p>0678750531</p>
            </div>
                 <!--=========contact info item end=======-->





        </div>
        <h3 class="contact-title padd-15">send me an email</h3>
        <h4 class="contact-sub-title padd-15">I'm very resposive to messages</h4>
        <!-- contact form-->
        <div class="row">
            <div class="contact-form padd-15">
                <div class="row">
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="subject">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                           <textarea name="" id=""  class="form-control"placeholder="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-item col-12 padd-15">
                        <button type="submit" class="btn">send Message</button>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
</section>


                             <!--=========contact section end=======-->

                             <!--=========admin section start=======-->
                             <?php

session_start();


?>

                             <section class="contact section" id="admin">
                                <div class="container">
                                    <div class="row">
                                        <div class="section-title padd-15">
                                            <h2>login</h2>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                             
                                          
                                             
                            
                            
                            
                            
                            
                                    </div>
                                    <h3 class="contact-title padd-15">enter your informations</h3>
                                    <h4 class="contact-sub-title padd-15">
                                        <?php if(isset($_SESSION['error'])){
                                        echo $_SESSION['error'];} ?>
                                    </h4>
                                    <!-- contact form-->
                                    <form class="row" method="POST" action="function/auth/sign_in.php">
                                        <div class="contact-form padd-15">
                                            <div class="row">
                                                <div class="form-item col-12 padd-15">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="email" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-item col-12 ">
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="password"  name="password" >
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form-item col-12 padd-15">
                                                    <button type="submit" class="btn">send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                               
                                </div>
                            </section>
                            
                            
                                                         <!--=========contact section end=======-->


        </div>
        <!--main content end-->



    </div>
    <!--main conteiner end-->

<!--=======style switch strat======-->

<div class="style-switcher">
    <div class="style-switcher-toggler s-icon">
        <i class="fas fa-cog fa-spin"></i>
    </div>
    <div class="day-night s-icon">
        <i class="fas "></i>
    </div>
    <h4>theme colors</h4>
    <div class="colors">
        <span class="color-1" onclick="setActiveStyle('color-1')"></span>
        <span class="color-2" onclick="setActiveStyle('color-2')"></span>
        <span class="color-3" onclick="setActiveStyle('color-3')"></span>
        <span class="color-4" onclick="setActiveStyle('color-4')"></span>
        <span class="color-5" onclick="setActiveStyle('color-5')"></span>
    </div>
</div>


<!--=======style switch end======-->




<!--js file -->    
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

<script src="js/ss.js"></script>
<script src="js/style-switcher.js"></script>
<script src="js/jquery.min.js"></script>



<script>
    $(document).ready(function(){
            fetsh_projects();   
            fetsh_teams()         
            

            function fetsh_projects(){
      $.ajax({
                url:"function/fetch_projects.php",
                method:"POST",
                success:function(data){
                    $('#projects').html(data)
                    
                }

            })
    }
    function fetsh_teams(){
      $.ajax({
                url:"function/fetch_teams.php",
                method:"POST",
                success:function(data){
                    $('#teams').html(data)
                    
                }

            })
    }
})
</script>
</body>
</html>