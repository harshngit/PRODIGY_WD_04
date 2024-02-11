<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- heder section start -->
<header class="header">
	<div id="menu-btn" class="fas fa-bars"></div>
	<a href="#home" class="logo">Portfolio</a>
	<nav class="navbar">
   <a href="index.php" class="active">home</a>
		<a href="about.php" >about</a>
		<a href="service.php">sevices</a>
		<a href="contact.php">contact</a>
	</nav>
	<div class="follow">
	   <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
	</div>
</header>
<!-- heeader section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/myimg.jpeg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am harsh nikharge</h3>
      <span data-aos="fade-up">WEB DEVELOPER & DATA MANGER</span>
      <p data-aos="fade-up">I'm a web developer with extensive experience for over 3 year.
      Expertise is to create and website ,Frontend & Backend developer</p>
      <a data-aos="fade-up" href="about.php" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->



<!-- footer section start -->

<footer>
   <h1>Designed and developed ny @codewitharsh</h1>
<img src="images/logoweb.png">

</footer>




<!-- footer section start -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
</body>
</html>