<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Playfair&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> <!--bootstrap-->
    <style>
        #title{
    font-size: 40px;
    color:#EFEAD8;
    font-family: 'Dancing Script', cursive;
}

.navbar {
 background-color:#464e47 !important;
}

.navbar li{
    
    font-size: 20px;
    margin-left: 40px;
}

.navbar li a{
    color: #EFEAD8;
}


.navbar li:hover{
    font-size: 20px;
    background-color: #EFEAD8 ;
    border-radius: 20px;
}
#hum{
    background-color: #EFEAD8;
}

/* slider */
#carouselExampleCaptions {
    height: 580px !important;
}
#carouselExampleCaptions img {
    height: 580px !important;
}

.carousel-caption{
    font-size: 40px;
    background-color: rgba(222, 184, 135 , .5) ;
}
.carousel-caption h5 {
    font-size: 45px;
}






/* animation of add item */
.content h1,
.content p {
  transition: all 0.5s ease;
}

.content:hover h1 {
  color: #464e47;
}

.content:hover p {
  font-size: 1.2em;
}

/* content */
.content {
    margin: 100px 0 20px 0;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding: 20px;
    background-color: #C39F82;
    color: #fffdf6 ;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
}



/* animation of welcome */
.wel {
    color: 464e47;
    animation: myfirst 5s linear infinite alternate;
    font-size: 50px !important;
  }
  
  @keyframes myfirst {
    0%   {color:rgb(117, 47, 47); }
    30%  {color:burlywood;}
    75%  {color:green;}
    100% {color:rgb(117, 47, 47); }
  }


/* about */
.flo{
    /* border: 10px solid burlywood; */
    background-color: rgba(222, 184, 135 , .5) ;
    height: 550px;
    padding: 40px;
    text-align: center;
    color: #464e47;
    font-size: 30px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-top: 40px;
}

.text{
    margin-top: 50px;
}

#wel1 {
   float: left; 
   width: 680px;
   margin-top: 10px;

}
#wel2 {
    float: right; 
    width: 680px;
    margin-top: 10px
}

/* form */
#form {
    border-radius: 50px;
    width: 80%;
    margin: auto;
    background-color:#464e47;
    background-image: url('photos/s8.PNG');
    background-size: cover;
    background-position: center; 
    color: #fffdf6;
    padding: 30px 60px;
    font-size: 30px;
    font-weight: bold;
    font-family: monospace;
}
.form-control {
    width: 58% !important; 
}

.form-control:focus {
    border: 5px solid #464e47 !important;
    width: 60% !important; 
    height: 4.2em;
}


/* botton */
.btn{
    background-color:#464e47 !important;
    color: white !important;
    font-size: 20px !important;
    width: 200px;
    margin: auto;
}
.btn:hover{
    background-color:sienna !important;
    font-size: 20px !important;
}





/* table */
table {
    border-collapse:collapse;
    width: 80% !important;
    margin: auto;
    font-size: 20px;
    text-align: center;
    box-shadow: 2px 2px 50px #000000;

}
.td {
    border: 5px solid burlywood;
    padding: 8px;  
    background-color: burlywood;
    color:#464e47 !important;
    font-family: monospace !important;
}

/* footer */
.d-flex{
    background-color: #464e47 !important;
    margin-bottom: 0px;
}

li a  ,ul b , p b {
 text-decoration: none !important;
 color: #EFEAD8 ;
 font-size: 20px;
}
a{
 text-decoration: none !important;

}
li {
  list-style: none;  
}

#icon {
    margin: 0 20px !important;
}
p b{
    text-align: center !important;
    font-size: 25px;
    
}
.order-3 {
    text-align: center;
    font-size: 25px;
    margin-top: 20px !important;
}
.order-1 {
    margin-top: 10px !important;
}


@media screen and (min-width: 481px) and (max-width: 768px) {
    /* slider */
#carouselExampleCaptions {
    height: 480px !important;
}
#carouselExampleCaptions img {
    height: 480px !important;
}

#our{
    margin-botton: 100px !important;
}


/* about */
.wel {
    font-size: 40px !important;
}

.flo{
    height: 300px;
    padding: 5px;
}

#wel1 { 
    width: 280px;
    margin-top: 5px;
    height: 280px;
    margin-right: 20px;
}
 
#wel2 {
    width: 280px;
    margin-top: 5px;
    height: 280px;
    margin-left: 20px;
 }
 .text{
    margin-top: 0px;
    font-size: 20px;
}

/* form */
#form {
    padding: 30px;
    font-size: 20px;
}
.form-control {
    width: 58% !important; 
}


/* botton */
.btn{
    font-size: 20px !important;
    width: 150px;
    margin: auto;
    margin-top: 5px;
}
.btn:hover{
    background-color:sienna !important;
    font-size: 20px !important;
}

}


@media screen and (min-width:321px)  and (max-width:480px) {
    /* slider */
#carouselExampleCaptions {
    height: 480px !important;
}
#carouselExampleCaptions img {
    height: 480px !important;
}

/* about */
.wel {
    font-size: 30px !important;
}

.flo{
    height: 350px;
    padding: 10px;
    font-size: 20px;
    margin-top: 0px;
}
.text {
    margin-top: 10px;
}
#wel1 { 
    display: none;
}

 
#wel2 {
    display: none;
 }

.content {
    margin: 50px 0 20px 0;
}

/* form */
#form {
    padding: 15px;
    font-size: 17px;
    width: 90%;
    border-radius: 5px;
}
.form-control {
    width: 80% !important;
}


/* botton */
.btn{
    font-size: 15px !important;
    width: 150px;
    margin: auto;
    margin-top: 5px;
}
.btn:hover{
    background-color:sienna !important;
    font-size: 20px !important;
}
}


@media screen and (max-width:320px) {
    /* slider */
#carouselExampleCaptions {
    height: 480px !important;
}
#carouselExampleCaptions img {
    height: 480px !important;
}

/* about */
.wel {
    font-size: 30px !important;
}

.flo{
    height: 380px;
    padding: 10px;
    font-size: 20px;
    margin-top: 0px;
}
.text {
    margin-top: 10px;
}
#wel1 { 
    display: none;
}

 
#wel2 {
    display: none;
 }

.content {
    margin: 50px 0 20px 0;
}

/* form */
#form {
    padding: 15px;
    font-size: 17px;
    width: 90%;
    border-radius: 5px;
}
.form-control {
    width: 80% !important;
}


/* botton */
.btn{
    font-size: 15px !important;
    width: 150px;
    margin: auto;
    margin-top: 5px;
}
.btn:hover{
    background-color:sienna !important;
    font-size: 20px !important;
}
}
    </style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light">
      <div class="container-fluid">
            <a class="navbar-brand" href="Home.php">
              <img src="../photos/logo.PNG" alt="Logo" height="80px" class="d-inline-block align-text-center">
              <span id="title">ModaRoza</span> 
            </a>
        <button id="hum" class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
       </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Home.php  #wel">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Home.php  #our">Our Aspirations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Home.php  #content">Add Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Home.php  #table">Table of Product</a>
                </li>
            </ul>
        </div>
  </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> <!--bootstrap-->

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModaRoza /Home page</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Playfair&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> <!--bootstrap-->
</head>
<body>
<span style="color: red">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </span>
<!-- Slider -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./photos/s2.PNG" class="d-block w-100" alt="photos/sdasdas.PNG">
      <div class="carousel-caption d-none d-md-block">
        <h5>With ModaRoza...</h5>
        <p>
          "Discover the latest trends and elevate your style with Modaroze Fashion."
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/s2.PNG" class="d-block w-100" alt="photos/sdasdas.PNG">
      <div class="carousel-caption d-none d-md-block">
        <h5>With ModaRoza...</h5>
        <p>"Revamp your closet with our premium quality and chic styles."       
      </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/s3.PNG" class="d-block w-100" alt="photos/sdasdas.PNG">
      <div class="carousel-caption d-none d-md-block">
        <h5>With ModaRoza...</h5>
        <p>"Unleash your inner fashionista with our exclusive collections."
        </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<!-- about -->
<div id="wel"></div><br><br>
<div class="flo">
<img id="wel1" src="photos/s17.png" class="img-fluid rounded float-start" alt="... ">
<div class= "text"><b class="wel" style="font-size:40px">Welcome to ModaRoza</b><br> your ultimate destination for fashion-forward individuals seeking the latest trends and styles. Our website is a curated haven for those who dare to be bold, expressive, and unapologetically themselves. At ModaRoza, we believe that fashion is not just about clothing; it's an art form that empowers and uplifts.
</div>
</div>



<br><br>
<div id= "our" class="flo">
  <img  id="wel2" src="photos/s18.png" class="img-fluid rounded float-end" alt="..." >
  <div class= "text"><b class="wel" style="font-size:40px">Our Aspirations</b><br> We aim to provide a seamless shopping experience, from browsing through our thoughtfully designed website to the moment your package arrives at your doorstep. Our dedicated support team is always ready to assist with any queries or concerns you may have, ensuring your satisfaction is our top priority.
</div>
</div>
<!-- <div class="content" id="content">
    <h1>You can add your product</h1>
    <p>Your ultimate destination for fashion-forward individuals seeking the latest trends and styles.</p>  
</div> -->















    </body>
    </table>
</div>




  <script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> <!--bootstrap-->
</body>

<footer>

</footer>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Playfair&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> <!--bootstrap-->

</head>
<body style="margin: 0;">


<div class="d-flex flex-wrap justify-content-around">
  <div class="order-3 p-2">
    <p><b>Contact Us</b></p>
    <a href="mailto:Email:razanmustafa8@gmail.com"><i class="fa-solid fa-square-envelope fa-2xl" style="color: #efead8;"></i></a>
    <a href="https://www.facebook.com/razan.mustafa.545?mibextid=ZbWKwL"><i id="icon" class="fa-brands fa-square-facebook fa-2xl" style="color: #efead8;"></i></a>
    <a href="https://instagram.com/razanmustafa236?igshid=MzNlNGNkZWQ4Mg=="><i class="fa-brands fa-instagram fa-2xl" style="color: #efead8;"></i></a>
  </div>
  <div class="order-1 p-2">
    <a href="Home.php">
      <img src="photos/logo.png" alt="logo" width = "150px">
      <span id="title">ModaRoza</span> 
    </a>
  </div>
  <div class="order-2 p-2">
    <ul id="flink"> <b>Links</b>
      <li><a href="Home.php  #wel"> About me </a></li>
      <li><a href="Product.php">Product </a></li>
      <li><a href="Home.php  #content">Add Item </a></li>
      <li><a href="Home.php  #wel2">Our Aspirations </a></li>
    </ul>
  </div>
</div>






<script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> <!--bootstrap-->

</body>
</html>
