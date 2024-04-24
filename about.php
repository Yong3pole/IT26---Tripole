<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      a {
         color: blue;
         /* Default color for unvisited links */
         text-decoration: none;
         /* Remove underline */
      }
   </style>

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/EZlogo.png" alt="">
         </div>

         <div class="content">
            <h3>Developer's Message:</h3>
            <p>Hey There ! We are Kirk and Leoj, students of BS in Information Technology from CCE College in the University of Mindanao. Friends, we hope you like our website! We put a lot of effort into making it, and we enjoy exploring it ourselves. Your feedback is important to us, so please share your thoughts and suggestions. With your help, we can make this project even better. Let us know what you think!</p>

            <p>We would like to thank <a href="https://www.facebook.com/Raven.dudeIX">Prof. Jaynard Hernando</a> for guiding us through this course and helping us be able to develop projects like this. </p>            <a href="contact.php" class="btn">Contact Us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="heading">Client's Reviews</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/allen-review.jpg" alt="">
               <p>Been using their services for quite a bit and have never had an issue with the quality of their products. Online e-products working great as well. Only issue I have is they usually deliver when I'm a little caught up, though I've set a preferred delivery time. Everything else has been good.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3> <a href="https://www.facebook.com/profile.php?id=100083292714419" target="_blank">Romeo Allen De Jesus</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/mark-review.png" alt="">
               <p>It is the first online services in Davao which we can trust completely.I always unbox making a video and instantly complain if there's anything wrong. Sometimes even don't need to return the item and they process the refund. EZshoppe do heavy fine to sellers who send wrong products thats why its platform getting better day by day.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="https://www.facebook.com/profile.php?id=100075602340579" target="_blank">Mark Sadboi</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/natoi-review.png" alt="">
               <p>Sobrang suleeeeed ng website na to. Nagustuhan ng bf ko yung mga products kaya kiniss niya ako.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="https://www.facebook.com/kaushalsah135790" target="_blank">Baby ni Dodong</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/linda-review.png" alt="">
               <p>MAAYO PA ANG KILAY NITAAS! ATONG SWELDO WA GYUD. Ante Linda is back to buy products here kay daghan ko bling bling dollars kay General akong bana.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="https://www.facebook.com/fuccheekta.moh.1" target="_blank">Ante Linda</a></h3>
            </div> 

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>


   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>