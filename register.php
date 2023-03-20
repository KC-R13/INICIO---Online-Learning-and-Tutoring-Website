<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><i class="fas fa-house"></i>INICIO</a>

         
      </section>
   </nav>


   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               
               <li><a href="teach.php">Teach as a tutor</a>
                  
               </li>
               
               
            </ul>
         </div>
         


        




         <ul>
           
            <li><a href="#">About Us<i class="fas fa-angle-down"></i></a>
                <ul>
                   <li><a href="aboutus.php">About Us</a></i></li>
                   <li><a href="contact.php">Contact Us</a></i></li>
                   <li><a href="contact.php#faq">FAQ</a></i></li>
                </ul>
             </li>
            <li><a href="#">Account<i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="index.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
                  <li><a href="logout.php">Log Out</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

 

</header>

<!-- header section ends  -->


<!-- register section starts  -->

<div class="register">

    <section class="form-container">

        <form action="" method="post">
           <h3>Create an account!</h3>
           <input type="tel" name="name" required maxlength="50" placeholder="enter your name" class="box">
           <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
           <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
           <input type="password" name="c_pass" required maxlength="20" placeholder="confirm your password" class="box">
           <p>already have an account? <a href="index.php">Log In</a></p>
           <input type="submit" value="register now" name="submit" class="btn">
        </form>
     
     </section>
 
 </div>


<!-- register section ends -->






<!-- footer -->

<footer class="footer">

    <section class="flex">
 
       <div class="box">
          <a href="tel:1234567890"><i class="fas fa-phone"></i><span>+94 032 303 2303</span></a>
          <a href="mailto:klenidychathurarya@gmail.com"><i class="fas fa-envelope"></i><span>inicio.com</span></a>
          <a href="#"><i class="fas fa-map-marker-alt"></i><span>Inicio, Colpetty, Sri Lanka</span></a>
       </div>
 
       <div class="box">
         
          <a href="aboutus.php"><span>About Us</span></a>
          <a href="contact.php"><span>Contact Us</span></a>
         
       </div>
 
       <div class="box">
          <a href="#"><span>Facebook</span><i class="fab fa-facebook-f"></i></a>
          <a href="#"><span>Twitter</span><i class="fab fa-twitter"></i></a>
          <a href="#"><span>Linkedin</span><i class="fab fa-linkedin"></i></a>
          <a href="#"><span>Instagram</span><i class="fab fa-instagram"></i></a>
 
       </div>
 
    </section>
 
    <div class="credit">&copy; copyright @ 2023 by <span>KCR-13</span> | all rights reserved!</div>
 
 </footer>
 
 <!-- footer -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>