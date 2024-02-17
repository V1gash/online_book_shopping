<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/About-img1.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We are a team of book enthusiasts dedicated to providing you with a wide range of books from various genres and authors. Our goal is to create a platform that not only offers the latest bestsellers but also features hidden gems and classics.</p>
         <p>We believe that books have the power to change lives and inspire creativity, and our mission is to make it easier for you to access and enjoy them.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/img-1.png" alt="">
         <p>My first time in this great atmospheric bookshop and nice to have a chance to dwell a bit longer in the café. It got busy at lunchtime, with lawyers dropping in for a quick lunch and/or coffee.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rajax</h3>
      </div>

      <div class="box">
         <img src="images/img-2.png" alt="">
         <p>Anyone who loves books will be welcomed by the smell of all the books... Not just can you buy a book but you can read and the best being the option to read your purchase over a drink.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bashim</h3>
      </div>

      <div class="box">
         <img src="images/img-3.png" alt="">
         <p>One of the best bookstores I have come across. Good collection of books n cafe just adds to the entire ambience. Also it's a good landmark for meeting in park street.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rolex</h3>
      </div>

      <div class="box">
         <img src="images/img-4.png" alt="">
         <p>I ordered a student math textbook from them on Wed 08/04/15, through Book Hub. Received it on Mon 08/10/15. The packaging was extremely secure. Book was in "New" condition.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Wick</h3>
      </div>

      <div class="box">
         <img src="images/img-5.png" alt="">
         <p>I love Indian Book.They have a great selection of books, both in English and in Tamil. I can always find the book I'm looking for, no matter what genre it is or how obscure it is.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Thomas</h3>
      </div>

      <div class="box">
         <img src="images/img-6.png" alt="">
         <p>Books arrived within two days of placing my order. Will definitely purchase all my books via this website in the future.
The website is very user friendly and titles are easy to find. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Walter White</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J K Rowling</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Stan Lee</h3>
      </div>

      <div class="box">
         <img src="images/author-3.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Christopher Nolan</h3>
      </div>

      <div class="box">
         <img src="images/Author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>James Cameron</h3>
      </div>

      <div class="box">
         <img src="images/Author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Stanley Kubrick</h3>
      </div>

      <div class="box">
         <img src="images/Author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Martin Scorsese</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>