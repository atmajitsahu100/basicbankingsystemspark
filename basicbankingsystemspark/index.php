<!DOCTYPE html>
<html lang="en">
<head>
   <title>Sahoo Bank</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&family=Dancing+Script:wght@500&family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>


<body>

<!-- Navigation bar-->

<div id="navbar" style="z-index:1">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    <a class="nav-link active" aria-current="page" href="customers.php">Our Customers</a>
    <a class="nav-link active" aria-current="page" href="transactions.php">Transfer History</a>
    <a class="nav-link active" aria-current="page" href="https://www.xe.com/currencyconverter/convert/?Amount=20&From=INR&To=EUR">Currency Convertor </a>
    </div>
    

    <!--Heading-->
    <h1 class="heading mt-5 p-5 head1">Sahoo Bank</h1>

    <section class="my-5">

    <div>
  <img src="images/abty.jpg" alt="Snow" style="width:100%;">
  <div class="centered">We're just the Bank You need</div>
</div>


</section>

<!-- Caraousel-->

<div id="demo" class="carousel slide mt-5" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/5.jpg" alt="Easy Transfer" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Easy Money Transfer</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" alt="Quick Deposit" width="1100" height="500">
      <div class="carousel-caption  d-none d-md-block">
    <h3>Quick Personal Loans</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/6.jpg" alt="Low interests" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Customer Satisfaction</h3>
    </div>
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--About us-->



<section class= "my-5">
<div class="py-5">
 <h3 class="text-center" >About Us</h3>
 </div>

<div class="container-fluid">
 <div class ="row">
<div  class="col-lg-6 col-md-6 col-12">
      <img src="images/2.jpg" class="img-fluid">
      </div>
      <div  class="col-lg-6 col-md-6 col-12">
      <h1>Sahoo Bank</h1>
      <p1>SAHOO Bank is a leading private sector bank in India. The Bank’s consolidated total assets stood at Rs. 14.76 trillion at September 30, 2020.  SAHOO Bank currently has a network of 5,288 branches and 14,040 ATMs across India.           <br>
      SAHOO Bank offers a wide range of banking products and financial services to corporate and retail customers through a variety of delivery channels and through its group companies.
  <br>
 SAHOO Bank was originally promoted in 1994 by Sahoo Limited, an Indian financial institution, and was its wholly-owned subsidiary.
    </p1>
</div>
        </div>  

     
       
 
 </div>

<!--Disclaimer-->

</section>
<section class= "my-5">
<div class="py-5">
 <h3 class="text-center" >Disclaimer</h3>
 <p1>This website is the
      outcome of a intern project, and does not
      necessarily represent the views of any organisation or any other individuals referenced or
      acknowledged within the website. Anyone may reproduce, distribute, adapt, translate the content on the website, without explicit permission, provided that the content is accompanied by an acknowledgement that Sahoo Bank website is the source and that it is clearly indicated if changes were made to the original content.</p1>
 </div>



<footer class="text-center mt-2 py-5">
        <p>&copy 2021  <b>Atmajit Sahoo</b> </br>Chairman, Sahoo Foundation</p>
      </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script>window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}</script>
  
</body>

</html>