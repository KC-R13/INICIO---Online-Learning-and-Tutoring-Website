<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

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

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/teacher.jpeg" alt="">
      </div>
      <div class="content">
         <h3>Empower Your Mind with Knowledge <br></h3>
         <br> 
         <h2>Learn with us today!</h2>
         <br> <br>
         <p>INICIO has a wide range of educational resources and materials to help you to enhance their knowledge and skills covering
            subjects like mathematics, science, social studies, languages, literature, and more! </p>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">Key Features</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/user-friendly.png" alt="">
         <h3>User-Friendly Navigation</h3>
         <p>A clean and easy-to-navigate interface enhances your user experience.</p>
      </div>

      <div class="box">
         <img src="images/c-management.png" alt="">
         <h3>Course management</h3>
         <p>Access learning materials, track their progress, take quizzes and tests, and receive feedback.</p>
      </div>

      <div class="box">
         <img src="images/authoring.png" alt="">
         <h3>Course Authoring</h3>
         <p>You can create and publish your own courses and learning materials.</p>
      </div>

      <div class="box">
        <img src="images/certificate.png" alt="">
        <h3>Assessment Certification</h3>
        <p>Certification to reward learners who complete courses successfully.</p>
     </div>

     <div class="box">
        <img src="images/gamification.png" alt="">
        <h3>Gamification</h3>
        <p>Game-like elements such as badges, rewards, and leaderboards.</p>
     </div>

     <div class="box">
        <img src="images/analytics.png" alt="">
        <h3>Tutor Analytics</h3>
        <p>Track user engagement, course completion rates, and more metrics!</p>
     </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">User Reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/user.png" alt="">
            <div>
               <h3>Kim Hongjoong</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>I have been using this e-learning website for a few months now and I am absolutely blown away by the quality of the courses. 
            The instructors are knowledgeable and engaging, and the platform is easy to use. 
            I have already learned so much and I can't wait to continue my learning journey with this site.
            </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/user2.png" alt="">
            <div>
               <h3>Park Seonghwa</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I was hesitant to try e-learning at first, but this website has exceeded my expectations. 
            The course material is well-organized and the interactive elements keep me engaged throughout. 
            I especially appreciate the personalized learning features, which allow me to learn at my own pace.
            Overall, I would highly recommend!!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/user3.png" alt="">
            <div>
               <h3>Jeong Yunho</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  
               </div>
            </div>
         </div>
         <p>As a busy professional, I don't have a lot of spare time for learning. 
            But this e-learning website makes it easy to fit learning into my schedule. 
            The courses are flexible and accessible from anywhere, so I can learn on my own terms. 
            Plus, the progress tracking and feedback tools keep me motivated to keep going.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/user4.png" alt="">
            <div>
               <h3>Choi San</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>I have taken courses from several e-learning websites, but this one stands out for its attention to detail. 
            The courses are well-designed and the instructors are clearly experts in their fields. 
            I appreciate the thought that has gone into every aspect of the learning experience, 
            from the multimedia content to the community features.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/user5.png" alt="">
            <div>
               <h3>Kang Yeosang</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>I highly recommend this e-learning website to anyone looking to upskill or learn something new. 
            The courses are comprehensive and well-structured, and the platform itself is intuitive and easy to use. 
            Whether you're a beginner or an advanced learner, you're sure to find something here to challenge and inspire you.
            I AM SO IMPRESSED!! </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/user6.png" alt="">
            <div>
               <h3>Choi Jongho</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I recently signed up for an e-learning course on this website and I couldn't be happier with my experience. 
            The platform is easy to navigate and the course content is comprehensive and engaging. 
            The instructor was knowledgeable and supportive, and I felt like I was getting one-on-one attention 
            even though the course was online.</p>
      </div>

   </div>

</section>

<!-- review section ends -->










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