
<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:index.php");
        exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>


<!-- font awesome link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<!-- css file link  -->
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



<div class="home">

    <section class="center">
 
       <form>
          <h3>Inspire  Your Inner Self <br> To Strive For The Best In You</h3>
          <h2>More than 100K learners and contributed by 10K tutors from all the around the world</h2>
        
        
       </form>
 
    </section>
 
 </div>
 
 <!-- home section ends -->

<!-- top categories starts  -->

<section class="categories">

    <h1 class="heading">Top Categories</h1>
 
    <div class="box-container">
 
       <div class="box">
          <img src="images/mark.jpg" alt="">
          <h3>Marketing</h3>
          <p>Enhance your marketing skills, career opportunities and entrepreneurial success.</p>
       </div>
 
       <div class="box">
          <img src="images/lan.jpg" alt="">
          <h3>Languages</h3>
          <p>Enhance your communication, cultural understanding and career opportunities.</p>
       </div>
 
       <div class="box">
          <img src="images/bio.jpg" alt="">
          <h3>Biology</h3>
          <p>Everything about biology that'll lead to breakthrough discoveries.</p>
       </div>
 
       <div class="box">
          <img src="images/geo.jpg" alt="">
          <h3>Geography</h3>
          <p>All about understanding of global cultures, environments, and interconnections.</p>
       </div>
 
       <div class="box">
          <img src="images/machl.jpg" alt="">
          <h3>Machine Learning</h3>
          <p>Best courses that'll lead to lucrative careers and innovative solutions.</p>
       </div>
 
       <div class="box">
          <img src="images/chem.jpg" alt="">
          <h3>Chemistry</h3>
          <p>chemical study of technological, environmental & industrial processes.</p>
       </div>
 
    </div>
 
 </section>
 
 <!-- top categories section ends -->

<!-- courses section starts  -->

<section class="courses">

    <h1 class="heading">Popular Courses Among Our Learners</h1>
 
    <div class="box-container">
 
       <div class="box">
          <div class="admin">
             <h3>M</h3>
             <div>
                <p>Wonderland Music Workshop</p>
                <span>Master Amaradewa Music Class</span>
             </div>
          </div>
          <div class="thumb">
             <p class="type"><span>Certificate</span><span>Part-time</span></p>
             <form action="" method="post" class="save">
                <button type="submit" name="save" class="far fa-heart"></button>
             </form>
             <img src="images/music.jpg" alt="">
          </div>
          <div class="flex">
             <p><i class="fas fa-clock"></i><span>8 hours</span></p>
             <p><i class="fas fa-money-bill"></i><span>69$</span></p>
          </div>
          <a href="view_course.php" class="btn">Preview Course</a>
       </div>

       <div class="box">
        <div class="admin">
           <h3>V</h3>
           <div>
              <p>Web Development Pro Masterclass 2023</p>
              <span>VirtualPensar Academy</span>
           </div>
        </div>
        <div class="thumb">
           <p class="type"><span>Certificate</span><span>Free-time</span></p>
           <form action="" method="post" class="save">
              <button type="submit" name="save" class="far fa-heart"></button>
           </form>
           <img src="images/web.jpg" alt="">
        </div>
        <div class="flex">
           <p><i class="fas fa-clock"></i><span>11 hours</span></p>
           <p><i class="fas fa-money-bill"></i><span>83$</span></p>
        </div>
        <a href="view_course2.php" class="btn">Preview Course</a>
     </div>

     <div class="box">
        <div class="admin">
           <h3>V</h3>
           <div>
              <p>Marketing 101 - Basics to Pro Advanced</p>
              <span>Mark doing Marketing</span>
           </div>
        </div>
        <div class="thumb">
           <p class="type"><span>Certificate</span><span>Ongoing</span></p>
           <form action="" method="post" class="save">
              <button type="submit" name="save" class="far fa-heart"></button>
           </form>
           <img src="images/market.jpg" alt="">
        </div>
        <div class="flex">
           <p><i class="fas fa-clock"></i><span>Ongoing</span></p>
           <p><i class="fas fa-money-bill"></i><span>12$</span></p>
        </div>
        <a href="view_course3.php" class="btn">Preview Course</a>
     </div>
       
 
    </div>
 
    <div style="margin-top: 2rem; text-align:center;">
       <a href="courses.php" class="inline-btn">view all</a>
    </div>
 
 </section>
 
 <!-- courses ends -->
 
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
 
 



<!-- js file link  -->
<script src="js/script.js"></script>
 
</body>
</html>