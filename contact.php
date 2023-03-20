<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<<!-- header section -->

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

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact us.jpg" alt="">
      </div>
      <form action="" method="post">
         <h3>Get In Touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>Why am I unable to access my course on the e-learning website?</span><i class="fas fa-angle-down"></i></h3>
         <p>There could be several reasons for this issue, such as a technical glitch, internet connectivity issues, 
            or an error in your login credentials. Try clearing your browser cache, checking your internet connection, 
            and double-checking your login information. 
            If the issue persists, contact the website's support team for further assistance.</p>
      </div>

      <div class="box active">
         <h3><span>Why am I unable to load a video or other multimedia content on the e-learning website?</span><i class="fas fa-angle-down"></i></h3>
         <p>This issue could be due to slow internet connectivity or outdated browser plugins. 
            Try clearing your browser cache, checking your internet connection speed, and updating your browser plugins. 
            If the issue persists, contact the website's support team for further assistance.</p>
      </div>

      <div class="box">
         <h3><span>How can I reset my password on the e-learning website?</span><i class="fas fa-angle-down"></i></h3>
         <p>We have a "forgot password" option on the login page. 
            Click on this option and follow the instructions to reset your password. 
            You may be required to provide some personal information to verify your identity.</p>
      </div>

      <div class="box">
         <h3><span>Why am I unable to submit an assignment or assessment on the e-learning website?</span><i class="fas fa-angle-down"></i></h3>
         <p>This issue could be due to technical errors or issues with the website's platform. 
            Try logging out and logging back in, clearing your browser cache, and restarting your device. 
            If the issue persists, contact the website's support team for further assistance.</p>
      </div>

      <div class="box">
         <h3><span>How can I access support for technical issues on the e-learning website?</span><i class="fas fa-angle-down"></i></h3>
         <p>Most e-learning websites have a dedicated support team that can help you troubleshoot technical issues. 
            Look for a "support" or "help" option on the website, or contact the website's customer service team via email or phone.</p>
      </div>

      <div class="box">
         <h3><span>Can I access the e-learning courses on multiple devices?</span><i class="fas fa-angle-down"></i></h3>
         <p>Yes, you have to access your courses on multiple devices. 
            You can log in to your account from any device with an internet connection and continue your course where you left off. 
            However, some courses may have specific software or hardware requirements, 
            so it's important to check the course requirements before accessing it on a new device. 
            It's also recommended to log out of your account after each session for security purposes.</p>
      </div>


   </div>

</section>

<!-- faq section ends -->






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