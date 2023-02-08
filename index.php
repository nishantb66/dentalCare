<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dentist Website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">

   <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
   <link rel="manifest" href="/site.webmanifest">


   <style>

      .home {
      background: url(homebg.jpg) no-repeat;
      background-size: cover;
      background-position: center;
      }

      .services .box-container .box:hover {                     
      box-shadow: 0px 10px 20px 5px rgba(0, 0, 0, 0.5);
      transform: translateY(-5px);
      }

       .process .box-container .box{
         box-shadow: 0px 10px 20px 5px rgba(0, 0, 0, 0.5);
         transform: translateY(-5px);
      }

      .reviews .box-container .box{
         box-shadow: 0px 10px 20px 5px rgba(0, 0, 0, 0.5);
         transform: translateY(-5px);
      }

      #welcome-popup {
      font-family: 'Poppins', sans-serif;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color :#e2edef;
      padding: 70px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-size: 22px;
      }

      #close-button{
         background-color: #e2edef;
         color: #333;
         border: none;
         border-radius: 25px;
         padding: 10px 20px;
         cursor: pointer;
         outline: none;
         font-size: 15px;
      }
      #welcome-popup:hover {                     
      box-shadow: 0px 10px 20px 5px rgba(0, 0, 0, 0.5);
      }
      #close-button:hover {                     
      box-shadow: 0px 10px 20px 5px rgba(0, 0, 0, 0.5);
      }
      
      #countdiv {
         background-color: #00b8b8;
        color: #fff;
        font-family: "Muli", sans-serif;
        flex-direction: column;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        margin: 0;
      }
      #count {
          font-size: 20px;
        margin: 0;
      }
      .Pcount{
         color: #333;
        letter-spacing: 2px;
        margin: 0;
      }

      html{
         scroll-behavior: smooth;
      }

      .arrow-btn{
         position: fixed;
         bottom: 40px;
         right: 40px;
         z-index: 9;
      }

      .arrow-btn a{
         height: 39px;
         width: 37px;
         text-align: center;
         background: #139292;
         display: block;
         border-radius: 3px;
         cursor: pointer;
      }
      .arrow-btn a:hover{
         background-color: var(--black);
      }

      .arrow-btn a span{
         color: #f2f2f2;
         line-height: 39px;
         font-size: 25px;
      }
  
   </style>


</head>

<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

      <div class="arrow-btn">
         <a href="#"><span class="fas fa-angle-up"></span></a>
      </div>

   <div id="welcome-popup">
      <p>Smile freely!</p>
      <p>Welcome to DentalCare</p>
      <button id="close-button">Close</button>
   </div>


   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">dental<span>Care.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
            <a href="index1.php">Admin Login</a>

         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>let us brighten your smile</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="icon-1.svg" alt="">
         <h3>Alignment specialist</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
         <img src="icon-2.svg" alt="">
         <h3>Cosmetic dentistry</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
         <img src="icon-3.svg" alt="">
         <h3>Oral hygiene experts</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="pic-1.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="pic-2.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="pic-3.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+918486910792</p>
         <p>+918879156893</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Navi Mumbai, india - 410210</p>
         <iframe src="https://maps.google.com/maps?q=your-location&t=&z=13&ie=UTF8&iwloc=&output=embed" width="190" height="80" frameborder="0" style="border:0;" allowfullscreen></iframe>

      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>10:30am to 08:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>baruahnishant2003@gmail.com</p>
         <p>nishant1234@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Nishant Baruah</span>  </div>

</section>

<!-- footer section ends -->




<!-- custom js file link  -->
<script src="script.js"></script>
<script src="script1.js"></script>


<!--script code to count the number of visitors using count API-->
<div id="countdiv">
            <p class="Pcount">This page was viewed</p>
      <h1 id="count">0</h1>
      <p class="Pcount">times</p>

      <script>
         const countEl = document.getElementById("count");
         countvisits();

         function countvisits() {
         fetch('https://api.countapi.xyz/update/google/website/?amount=1')
            .then((res) => res.json())
            .then((res) => {
               countEl.innerHTML = res.value;
            });
         }
      </script>
</div>
   
</body>
</html>