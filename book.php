<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content=IE="edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"href="style.css">
</head>
<body>
    <section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
</section>


<div class="heading" style="background:url() no-repeat">
<h1>book now</h1>
</div>
<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
<div class="flex">
    <div class="inputBox">
<span>name :</span>
<input type="text" placeholder="enter your name" name="name">
    </div>
    <div class="inputBox">
<span>email :</span>
<input type="email" placeholder="enter your email" name="email">
    </div>
    <div class="inputBox">
<span>phone :</span>
<input type="number" placeholder="enter your phone" name="phone">
    </div>
    <div class="inputBox">
<span>address :</span>
<input type="text" placeholder="enter your address" name="address">
    </div>
    <div class="inputBox">
<span>where to :</span>
<input type="text" placeholder="place you want to visit" name="location">
    </div>
    <div class="inputBox">
<span>name :</span>
<input type="text" placeholder="enter your name" name="name">
    </div>
    <div class="inputBox">
<span>how many :</span>
<input type="number" placeholder="number ofguests" name="guests">
    </div>
    <div class="inputBox">
<span>arrivals :</span>
<input type="date"  name="arrivals">
    </div>
    <div class="inputBox">
<span>leaving :</span>
<input type="date"  name="leaving">
    </div>
</div>


<input type="submit" value="submit" class="btn" name="send">

    </form>
</section>























<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> ask question</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
        <a href="home.php"><i class="fas fa-phone"></i> +25197610334</a>
        <a href="about.php"><i class="fas fa-phone"></i>+25195656258</a>
        <a href="package.php"><i class="fas fa-envelope"></i>package</a>
        <a href="book.php"><i class="fas fa-map"></i>JIMMA,ETHIOPIA</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
        <a href="home.php"><i class="fas fa-facecook"></i>facebook</a>
        <a href="about.php"><i class="fas fa-twitter"></i>twitter</a>
        <a href="package.php"><i class="fas fa-instagram"></i>instagram</a>
        <a href="book.php"><i class="fas fa-linkedin"></i>linkedin</a>
        </div>
    </div>
    <div class="credit">
        created by <span>group 3 software engineers</span>|all rights reserved!
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>