<!doctype html>
<html>
    <head>
        <title>
           Planet of pets
        </title>
       <meta charset="UTF-8"
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
    </head>
    <body>

      

      <?php include 'navbar.html ' ?>
      
      <div class="main">
      <div class="screen">    
           <form>
        
                <ul class="horizontal-list text-center social-icons">
                    <li id="facebook">
                        <a href="https://www.facebook.com/sunil.seervi.5055/"target="_blank">
                            <i class="fab fa-facebook-f"></i>
                            
                        </a>
                    </li>
                    <li id="linkedin">
                        <a href="https://www.linkedin.com/in/sunil-seervi-091256/"target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
        
                    <li id="instagram">
                        <a href="https://www.instagram.com/sunil____seervi/"target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
        
                    <li id="whatsapp">
                        <a href="https://web.whatsapp.com/" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li id="twitter">
                        <a href="https://twitter.com/SabkaSunil"target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>

                    <li id="gmail">
                        <a href="https://mail.google.com/mail/u/0/#inbox"target="_blank">
                            <i class="far fa-envelope"></i>
                        </a>
                    </li>
        
        
                </ul>
     
          <span>
            <button class="button button1"  type="submit" formaction="animals.php">animals</button>
            <button class="button button2"  type="submit" formaction="birds.php">Birds</button>
            <button class="button button3"  type="submit" formaction="petproducts.php">products</button>
            <button class="button button4"  type="submit" formaction="sales.php">salesdetails</button>
            <button class="button button5"  type="submit" formaction="customer.php">customer</button>  
            </span>
           
        
        </div>
    
    </div>
     </form> 

     <section id="about">
            <h1 class="section-heading mb75px">
                <span>
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                </span>
                <span>ABOUT</span>

            </h1>
            <p class="para">
            We come from a place of great love for pets! From our founders and teammates to our expert vets and certified caregivers, everyone on our team is profoundly in love with humankind’s cutesy companions.
            Whether you're a new pet parent or an experienced one, we're here to make your pet parenting journey truly amazing with direct access to consistent, compassionate, and affordable pet care. And in doing so, we’ll also be enabling steady 
            learning and earning opportunities for the certified caregivers on our team.
            Whatever you need - from food and medicines to toys, grooming products, or a piece of friendly advice for your BFFs - we’re at your service, all paws in!
            </p>
<p>
<div class="visionImg" >  <img src="vision.jpg" alt=" "class="visionImg"></div>

</p>
        </section>
        <section id="petGallery">
            <h1 class="section-heading mb75px">
                <span>
                <i class="fa fa-magic" aria-hidden="true"></i>
                </span>
                <span>MAGIC GALLERY</span>
            </h1>

        </section>
        <section id="contact">
            <h1 class="section-heading mb75px">
                <span>
                    <i class="far fa-address-card"></i>
                </span>
                <span> Contact </span>
            </h1>

            <div id="contact-container">

                <div id="contact-form-container">
                    <form id="contact-form">
                        <input id="input-name" name="name" type="text" placeholder="Your Name">
                        <input id="input-email" name="input-email" type="text" required placeholder="Your Email">
                        <textarea id="input-message" name="input-message" rows="2" cols="40" placeholder="Message"></textarea>
                        <button class="sub-btn" type="submit">SEND MESSAGE</button>
                    </form>
                </div>
                <div id="my-details-container">
                    <h3> My Address </h3>
                    <div class="my-details-info-container">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Bangalore, India</span>
                    </div>
                    <div class="my-details-info-container">
                        <i class="fas fa-mobile-alt"></i>
                        <span>8660771074</span>
                    </div>
                    <div class="my-details-info-container">
                        <i class="far fa-envelope"></i>
                        <span>sunilseervi@outlook.in</span>
                    </div>
                </div>
            </div>

            <div class="text-center social-icons social">
                <ul class="horizontal-list ">
                    <li id="facebook">
                        <a id="f"href="https://www.facebook.com/sunil.seervi.5055/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li id="linkedin">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
        
                    <li id="instagram">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
        
                    <li id="whatsapp">
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li id="twitter">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>

                    <li id="gmail">
                        <a href="#">
                            <i class="far fa-envelope"></i>
                        </a>
                    </li>
        
        
                </ul>
        
            </div>
        
        </section>
</div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
   
</html>