<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <header class="header">

      <section class="flex">

         <a href="home.php" class="logo">E-learning PHP | DMSU</a>

         <form action="search.html" method="post" class="search-form">
            <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
            <button type="submit" class="fas fa-search"></button>
         </form>

         <!-- <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
         </div> -->
      </section>

   </header>

   <div class="side-bar">

      <div id="close-btn">
         <i class="fas fa-times"></i>
      </div>

      <div class="profile">
         <!-- <img src="images/ajteen.jpg" class="image" alt=""> -->
         <h3 class="name">Chinnawat Boonlok</h3>
         <p class="role">AJ FIFTEEN</p>
      </div>

      <nav class="navbar">
         <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
         <!-- <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a> -->
         <a href="contact.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
      </nav>

   </div>

   <section class="courses">

      <h1 class="heading">Online Courses</h1>

      <div class="box-container">

      <div class="box">
            <div class="tutor">
               <img src="images/thumb-7.png" alt="">
               <div class="info">
                  <h3>PHP Basic</h3>
                  <span>รายวิชา การจัดการฐานข้อมูล ม.5</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/ปก.png" alt="">
               <span>7 videos</span>
            </div>
            <h3 class="title">บทเรียน PHP สำหรับนักเรียนชั้น ม.5</h3>
            <p class="para">ให้นักเรียนเข้าไปเรียนหลังจากได้ทำแบบทดสอบก่อนเรียนเสร็จ</p>
            <a href="playlist.php" class="inline-btn">start</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/thumb-7.png" alt="">
               <div class="info">
                  <h3>PHP Basic</h3>
                  <span>รายวิชา การจัดการฐานข้อมูล ม.5</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/สอบ.png" alt="">
               <span>7 videos</span>
            </div>
            <h3 class="title">แบบทดสอบก่อนเรียน</h3>
            <p class="para">ให้นักเรียนเข้าไปทำแบบทดสอบก่อนเรียนบทเรียน PHP</p>
            <a href="#" class="inline-btn">start</a>
         </div>

         <div class="box">
            <div class="tutor">
               <img src="images/thumb-7.png" alt="">
               <div class="info">
                  <h3>PHP Basic</h3>
                  <span>รายวิชา การจัดการฐานข้อมูล ม.5</span>
               </div>
            </div>
            <div class="thumb">
               <img src="images/สอบหลัง.png" alt="">
               <span>7 videos</span>
            </div>
            <h3 class="title">แบบทดสอบหลังเรียน</h3>
            <p class="para">ให้นักเรียนเข้าไปทำแบบทดสอบหลังเรียนบทเรียน PHP เสร็จแล้ว</p>
            <a href="#" class="inline-btn">start</a>
         </div>

   </section>

   <footer class="footer">

      &copy; copyright @ 2024 by <span>AJ Chinnawat Boonlok</span> | all rights reserved!

   </footer>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>


</body>

</html>