<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Languages</title>

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
               <li><a href="#">Categories<i class="fas fa-angle-down"></i></a>
                  <ul>
                  <li><a href="arts.php">Arts & Creativity</a></li>
                          <li><a href="business.php">Business & Marketing</a></li>
                          <li><a href="itsoftware.php">IT & Software</a></li>
                          <li><a href="languages.php">Languages</a></li>
                          <li><a href="design.php">Design and Graphic</a></li>
                  </ul>

               </li>
               <li><a href="teach.php">Teach as a tutor</a>
                  
               </li>
               
               
            </ul>
         </div>
         


        
         <ul>
            <div class="topnav" class="box">
                <div class="search-container" >
                    <form action="search.php" method="post">
                    <div>
                      <input type="text" name="courses" required maxlength="50" placeholder="Search Courses" class="input">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    </form>
                  </div>
              </div>

         </ul>




         <ul>
            <li><a href="#">My Courses<i class="far fa-heart"></i></a></li>
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




<!-- category starts  -->


<section class="courses">

   <h1 class="heading">Languages</h1>

   <div class="box-container">



<!-- 04  -->
<div class="box">
   <div class="admin">
      <h3>M</h3>
      <div>
         <p>IELTS -  Beginner to Advanced</p>
         <span>Mark Lee Yo</span>
       </div>
   </div>
   <div class="thumb">
      <p class="type"><span>Certificate</span><span>Part-time</span></p>
      <form action="" method="post" class="save">
         <button type="submit" name="save" class="far fa-heart"></button>
      </form>
      <img src="images/english.jpg" alt="">
   </div>
       <div class="flex">
       <p><i class="fas fa-clock"></i><span>8 hours</span></p>
       <p><i class="fas fa-money-bill"></i><span>69$</span></p>
       </div>
       <a href="view_course4.php" class="btn">Preview Course</a>
</div>
</section>

<!-- category ends -->














<!-- footer -->

<footer class="footer">

    <section class="flex">
 
       <div class="box">
          <a href="tel:1234567890"><i class="fas fa-phone"></i><span>+94 032 303 2303</span></a>
          <a href="mailto:klenidychathurarya@gmail.com"><i class="fas fa-envelope"></i><span>inicio.com</span></a>
          <a href="#"><i class="fas fa-map-marker-alt"></i><span>Inicio, Colpetty, Sri Lanka</span></a>
       </div>
 
       <div class="box">
          <a href="home.php"><span>Home</span></a>
          <a href="aboutus.php"><span>About Us</span></a>
          <a href="contact.php"><span>Contact Us</span></a>
          <a href="courses.php"><span>Categories</span></a>
          <a href="#"><span>WishList</span></a>
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