<?php
session_start();
if(!isset($_SESSION['email'])){
  header("location: login.php");
  exit;
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tahreem's restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Momo+Signature&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=restaurant" />
    <style>
.momo-signature-regular {
  font-family: "Momo Signature", cursive;
}

        *{
            box-sizing: border-box;
          
        }
        .fa-brands{
            color: rgb(197, 157, 95);
            animation: zoom infinite 4s;
        }
        @keyframes zoom{
            0%{transform: scale(1);}
            50%{transform: scale(1.3);}
            100%{transform: scale(1);}
        }
        .fa-brands:hover{
            color: black;
        }
        .nav-height{
    background: linear-gradient(90deg,rgb(221, 182, 122) 0%, #ffffff 90%);
   
   
        }
        .login{
            color: black!important;
            text-decoration: none;
           display: flex;
           align-items: center;
           justify-content: center;
           padding-right: 30px;
           padding-left: 30px;
           padding-top: 10px;
           font-weight: 700;
          
        }
        
        .login:hover{
            color: black !important;
       
        }
       
        .color{
            color: black !important;
            font-weight: 700;
            
        }
        .color:hover{
           
            border-left: 1px solid;
            transition: border-bottom ease-in-out;
        }
     
        .dropdown-menu{
           color: rgb(197, 157, 95);
        }
        .dropdown-item:hover{
            background-color: rgb(228, 202, 164);
        }
        .navbar-expand-lg .navbar-nav .nav-link{
            padding-left: 25px;
            padding-right: 25px;
        }
        .food-bg{
            background-image: url(burger.png);
            background-size: cover;
            background-position: center;
            height: 500px;
          
        }
        .h22{
            font-size: 34px;
        }
        .smoke{
            background-image: url(clouds_2.png);
            height: 500px;
            background-position: 0 0;
            background-size: cover;
            background-repeat: repeat-x;
            animation: smoke linear infinite 15s;
        }
        @keyframes smoke{
            to{
                background-position-x: -500px;
            }
        }
        .color1 h2{
            color: rgb(197, 157, 95) !important;
            text-shadow: 4px 5px 4px rgba(0,0,0,0.52);
            font-weight: 700;
        }
        .color1 p{
            color: black !important;
            font-size: 14px;
            font-weight: 600;
        }
        .logo{
        animation: logo linear infinite 13s;
         transform-origin: center center; 
          display: inline-block; 
        max-width: 86%;
        height: 120px;
     margin-bottom: 30px;
        }
        @keyframes logo {
         to{
            transform: rotate(360deg);
         }
        }
        @media screen and (max-width:425px){
            .logo{
                height: 120px;
            }
        }
         @media screen and (max-width:768px){
            .logo{
            max-width: 90%;
            height: 84px;
            }
        }
        .btn1{
            color: black!important;
            margin-top: 20px;
             font-weight: 700;
            background: linear-gradient(90deg,rgb(221, 182, 122) 0%, #ffffff 90%);
            border-radius: 30px;
            padding-left: 20px !important;
            padding-right: 20px !important;
        } 
        .shape{
           display: flex;
           justify-content: flex-start;
           align-items: flex-start;
           border-radius: 100% 100% 0 0;
           height: 550px;
           
        }
        .circle{
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 100%;
            height:350px ;
        }
        .increase {
  overflow: hidden; 
}

.increase img {
  width: 100%;
  transition: transform 0.5s linear; 
  transform-origin: center center; 
 
}

.increase img:hover {
  transform: scale(1.4);
}
.fork{
    font-size: 50px;
    padding-bottom: 30px;
    color: black;
    text-shadow: 4px 5px 4px rgba(0,0,0,0.12);
 
}
.btn1:hover{
    transform: scale(1.1);
    transition: transform ease-in-out 0.5s;

}
.font{
    color: rgb(197, 157, 95);
     text-shadow: 4px 5px 4px rgba(0,0,0,0.22);
}
.video-background-wrapper {
  position: relative;
  width: 100%;
  height: 100vh; 
  overflow: hidden;
}

.bg-video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  transform: translate(-50%, -50%);
  object-fit: cover;
  z-index: 0;
   filter: blur(3px); 
}

.foreground-content {
  position: relative;
  z-index: 1;
  color: white;
  h1{
    padding-bottom: 10px;
    font-size: 50px;
  }
  .hh{
    padding-bottom: 50px;
  }
  h6{
    font-size: 20px;
  }
  h3 a{
    color: #ffffff !important;
  }
}
.nav-pills{
    display: flex;
    gap: 15px;
}
.nav-pills .nav-link{
    color: black !important;
    font-size: 20px;
   font-weight: 500;
   display: flex;
    border: 1px solid rgb(197, 157, 95);
}
.nav-pills .nav-link.active{
    background-color: rgb(197, 157, 95) !important;
}
.card .btn{
background-color: rgb(197, 157, 95);
color: black;
font-weight: 500;
border: 2px solid rgb(197, 157, 95);
}

.bb{
    background-image: url(pizza.png);
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    height: 400px;
    background-color: rgba(0,0,0,0.72);
    background-blend-mode: multiply;
    margin-top: 80px;
}
.gallery h2{
    color: #ffffff;
    font-size: 50px;
    padding-bottom: 4px;
}
  .carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: rgb(197, 157, 95); 
 
}
  .kk{
    font-style: italic;
   font-weight: 500;
   color: #ffffff;
  h6{
    color: rgb(197, 157, 95);
  }
  }  
  .form{
    display: flex;
    flex-direction: column;
   
  } 
  .form input[type="text"],
  input[type="email"],input[type="date"],input[type="time"], #people
  {
  height: 40px;
  } 
 [type="submit"]{
    background-color: rgb(197, 157, 95);
    
    height: 40px;
    border: none;
  }
  .footer{
    padding-top: 50px;
  border-bottom: 2px solid rgb(197, 157, 95);
 
background: linear-gradient(90deg,rgb(221, 182, 122) 0%, #ffffff 90%);;
  background-blend-mode: multiply;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
 
  height: 400px;
  h5{
    font-weight: 700;
    
  }
  p{
    font-size: 12px;
  }
  }
  .footer1{
    padding-top: 205px;
  }
  .mm{
    border-radius: 290px;
  }
.glass-shine {
  position: relative;
  overflow: hidden;
  border-radius: 1rem;
}

/* Light sweep shimmer */
.glass-shine::after {
  content: "";
  position: absolute;
  top: 0;
  left: -150%;
  width: 200%;
  height: 100%;
  background: linear-gradient(
    120deg,
    transparent 45%,
    rgba(255, 255, 255, 0.3) 50%,
    transparent 55%
  );
  animation: glassShine 3s linear infinite;
  pointer-events: none;
  z-index: 2;
  border-radius: inherit;
}

@keyframes glassShine {
  0% { transform: translateX(-100%); }
  100% { transform: translateX(100%); }
}
@media screen and (max-width:1024px) {
  .footer1{
    padding-top: 190px;
  }
  .dd{
    font-size: 13px;
  }
}
@media screen and (max-width:768px) {
  .footer1{
    padding-top: 180px;
  }
  .gallery h2{
    font-size: 35px;
  }
  .foreground-content h1{
font-size: 40px;
  }
  .dd{
    font-size: 10px !important;
  }
}
@media screen and (max-width:425px) {
.shape{
  height: 250px;
}
.circle{
  display: none;
}
.footer1{
 padding-top: 42px;
}
.mm{
  display: none;
}
.gg{
  font-size: 20px;
  i{
    font-size: 11px;
  }
}
.gg h4{
  font-size: 15px;
}
.fork{
  font-size: 32px;
  padding-top: 20px;
}
.dd{
  font-size: 12px;
}
}
@media screen and (max-width:320px){
  .bb h2{
    font-size: 30px;
  }
  .footer1{
    padding-top: 25px;
  }
  .foreground-content h1{
    font-size: 30px;
  }

}
.dd{
  font-size: 13px;
}
    </style>
  </head>
  <body>
   <ul class="nav justify-content-end nav-height">
  <li class="nav-item">
    <a class="nav-link" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://pk.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://x.com/"><i class="fa-brands fa-x-twitter"></i></a>
  </li>
</ul>
<nav class="navbar navbar-expand-lg nav-height sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h5 class="momo-signature-regular h22">Tahreem's</h5></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center align-self-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Home
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#C2">About Us</a></li>
            <li><a class="dropdown-item" href="#C5">Gallery</a></li>
            <li><a class="dropdown-item" href="#C7">Testimonials</a></li>
          </ul>
        </li>
              <li class="nav-item">
          <a class="nav-link color" href="#C4" role="button" aria-expanded="false">
            Menu
          </a>
        </li>
              <li class="nav-item">
          <a class="nav-link color" href="#C9" role="button"  aria-expanded="false">
            Reservation
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Contact
          </a>
        </li>
      </ul>
    </div>
  </div>
  <p><a href="login.php" class="link-secondary login">LogIn</a></p>
  <p><a href="logout.php" class="link-secondary login">Logout</a></p>
</nav>
<div class="container-fluid food-bg">
    <div class="row smoke">
        <div class="col-md-5 color1 d-flex flex-column justify-content-center">
           <span class="pb-4 pt-2">
             <h2>DELICIOUS</h2>
            <h2> HOME MADE</h2>
            <h2> CUISINE</h2>
           </span>
                <h5 class="text-light"><?php echo $_SESSION['email']; ?></h5>
            <p>At Tahreem's, we invite you to experience a modern,  yet elegant culinary journey,  where every dish is crafted with the finest ingredients and presented with artistic flair. Our menu strikes a perfect balance between comforting classics and contemporary flavors, ensuring a delightful surprise with every bite</p>

<p><a href="#C4"><button type="button" class="btn btn-outline-dark btn1">Order Now</button></a>  &nbsp;<a href="#C9"><button type="button" class="btn btn-outline-dark btn1">Reserve a Table</button></a></p>
        </div>
        <div class="col-md-5">
            
        </div>
        <div class="col-md-2 align-self-end">
            <img src="cropped.png" class="img-fluid logo" alt="...">
           
        </div>
    </div>
</div>
<div class="container text-center pt-5"  id="C2">
    <div class="row">
        <div class="col-md-4"> 
            <div class="increase">
                 <img src="burger1.jpg" class="img-fluid  shape" alt="...">
            </div>
           
        </div>
        <div class="col-md-4 gg">
            <span class="material-symbols-outlined fork">restaurant</span>
       <h6>WELCOME TO <span class="momo-signature-regular font"><strong>Tahreem's</strong></span></h6>
       <h4>RESTAURENT WITH THE MOST SPECIAL TASTE</h4>
       <p><i>Our restaurant has been open for more than 10 years and is visited by hundreds of customers every day!</i></p>
       <p class="dd">At <span><strong>Tahreem's</strong></span>, we invite you to experience a modern, yet elegant culinary journey, where every dish is crafted with the finest ingredients and presented with artistic flair. Our menu strikes a perfect balance between comforting classics and contemporary global flavors, ensuring a delightful surprise with every bite. Join us for a truly unforgettable dining experience defined by exceptional service and a refined, welcoming ambiance.</p>
       <p><a href="#C9"><button type="button" class="btn btn-outline-dark btn1">Book Now</button></a></p> 
        </div>
        <div class="col-md-4">
           <div class="increase">
             <img src="plate.jpg" class="img-fluid circle" alt="...">
           </div>
        </div>
    </div>
</div>
<div class="video-background-wrapper">
  <video autoplay muted loop playsinline class="bg-video">
    <source src="restvid.mp4" type="video/mp4">
  </video>

  <div class="foreground-content container-fluid px-0 pt-5 d-flex justify-content-center align-items-center h-100">
    <div class="row text-center">
        <h1>Opening Hours</h1>
        <h6 class="momo-signature-regular hh">Call For Reservations</h6>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <h6>Sunday to Tuesday</h6>
            <h4>09:00</h4>
            <h4>22:00</h4>
        </div>
        <div class="col-md-3">
            <h6>Friday to Saturday</h6>
            <h4>11:00</h4>
            <h4>19:00</h4>
        </div>
        <div class="col-md-3"></div>
         <h3><a href="">+92 111 2222 333</a></h3>
    </div>
  </div>
</div>
<div class="container">
    <div class="row text-center" id="C4">
        <span class="material-symbols-outlined fork fs-2 pt-5">restaurant</span>
        <h6 class="momo-signature-regular hh font fs-4">Food Menu </h6>
        <h2 class="fs-1 pb-5">Our Specials Menu</h2>
<ul class="nav nav-pills justify-content-center" id="foodTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab">All</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#breakfast" type="button" role="tab">Breakfast</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#lunch" type="button" role="tab">Lunch</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#dinner" type="button" role="tab">Dinner</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#snacks" type="button" role="tab">Snacks</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#desserts" type="button" role="tab">Desserts</button>
  </li>
</ul>
<div class="tab-content pt-4" id="foodTabContent">
  <div class="tab-pane fade show active" id="all" role="tabpanel">
    <div class="cd d-flex flex-wrap gap-3 justify-content-center align-items-center">
    <div class="card" style="width: 18rem; height: 410px;">
  <img src="eggs.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">American Style Breakfast</h5>
    <p class="card-text">A hearty start to your day with eggs, toast, crispy bacon, and golden pancakes — classic comfort on a plate.</p>
    <a href="#" class="btn btn-dark">Order Now</a>
  </div>
</div>
   <div class="card" style="width: 18rem; height: 410px;">
  <img src="halwa.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pakistani Style Halwa Puri</h5>
    <p class="card-text">A festive morning favorite featuring golden crispy puris, sweet semolina halwa, and tangy chickpea curry — a beloved taste of tradition.</p>
    <a href="#" class="btn btn-dark">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="french.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">French Style Breakfast</h5>
    <p class="card-text">Golden slices of brioche soaked in vanilla custard, pan-seared to perfection, and topped with powdered sugar and fresh fruit.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
 <div class="card" style="width: 18rem; height: 410px;">
  <img src="steakk.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Juicy Steamy Steak</h5>
    <p class="card-text">Juicy, flame-grilled steak seasoned to perfection, served with your choice of sides for a bold midday indulgence.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>

   <div class="card" style="width: 18rem; height: 410px;">
  <img src="pasta.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Comforting Pasta Bowl</h5>
    <p class="card-text">A comforting bowl of al dente pasta tossed in rich, house-made sauce — creamy, cheesy, or classic tomato.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>

<div class="card" style="width: 18rem; height: 410px;">
  <img src="salad.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Enriching Salad Bowl</h5>
    <p class="card-text">A fresh medley of crisp greens, vibrant veggies, and house-made dressing — light, wholesome, and satisfying.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="crab.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Steamy Crab</h5>
    <p class="card-text">Succulent crab cooked to perfection, infused with aromatic spices and served with buttery sides for a rich coastal experience.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
   <div class="card" style="width: 18rem; height: 410px;">
  <img src="suchi.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fresh Sushi</h5>
    <p class="card-text">Delicate rolls of vinegared rice paired with fresh seafood, crisp vegetables, and umami-rich flavors — a refined bite of Japan.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="soup.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Creamy Soap</h5>
    <p class="card-text">A warm, flavorful bowl crafted with fresh ingredients — perfect for comfort, nourishment, and cozy moments.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="burr.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Doube Decker Burger</h5>
    <p class="card-text">A juicy grilled patty layered with fresh lettuce, tomato, cheese, and signature sauce — served in a toasted bun.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
   <div class="card" style="width: 18rem; height: 410px;">
  <img src="pizza.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cheesy Pizza</h5>
    <p class="card-text">Hand-tossed crust topped with rich tomato sauce, melted cheese, and your choice of fresh, flavorful toppings.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="fries.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frech Fries</h5>
    <p class="card-text">Crispy golden fries, lightly salted and served hot — the perfect sidekick to any meal. Rich in flavours and goodness</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="cake.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dreamy Lava Cake</h5>
    <p class="card-text">A rich, decadent chocolate cake with a warm, gooey center — indulgence that melts in every bite. Yummy!</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
   <div class="card" style="width: 18rem; height: 410px;">
  <img src="past.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chocolate Brownie</h5>
    <p class="card-text">Fudgy, rich chocolate brownie with a crackly top — served warm for melt-in-your-mouth indulgence. Yummy!</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="cup.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frosted Cupcake</h5>
    <p class="card-text">Soft, fluffy cake topped with creamy frosting — a delightful bite-sized treat for any sweet craving. Soo Yummy!</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
</div>
  </div>
  <div class="tab-pane fade" id="breakfast" role="tabpanel">
   <div class="cd d-flex flex-wrap gap-3 justify-content-center align-items-center">
    <div class="card" style="width: 18rem; height: 410px;">
  <img src="eggs.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">American Style Breakfast</h5>
    <p class="card-text">A hearty start to your day with eggs, toast, crispy bacon, and golden pancakes — classic comfort on a plate.</p>
    <a href="#" class="btn btn-dark">Order Now</a>
  </div>
</div>
   <div class="card" style="width: 18rem; height: 410px;">
  <img src="halwa.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pakistani Style Halwa Puri</h5>
    <p class="card-text">A festive morning favorite featuring golden crispy puris, sweet semolina halwa, and tangy chickpea curry — a beloved taste of tradition.</p>
    <a href="#" class="btn btn-dark">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="french.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">French Style Breakfast</h5>
    <p class="card-text">Golden slices of brioche soaked in vanilla custard, pan-seared to perfection, and topped with powdered sugar and fresh fruit.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
</div>
  </div>
  <div class="tab-pane fade" id="lunch" role="tabpanel">
       <div class="cd d-flex flex-wrap gap-3 justify-content-center align-items-center">
 <div class="card" style="width: 18rem; height: 410px;">
  <img src="steakk.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Juicy Steamy Steak</h5>
    <p class="card-text">Juicy, flame-grilled steak seasoned to perfection, served with your choice of sides for a bold midday indulgence.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>

   <div class="card" style="width: 18rem; height: 410px;">
  <img src="pasta.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Comforting Pasta Bowl</h5>
    <p class="card-text">A comforting bowl of al dente pasta tossed in rich, house-made sauce — creamy, cheesy, or classic tomato.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>

<div class="card" style="width: 18rem; height: 410px;">
  <img src="salad.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Enriching Salad Bowl</h5>
    <p class="card-text">A fresh medley of crisp greens, vibrant veggies, and house-made dressing — light, wholesome, and satisfying.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>

</div>
  </div>
  <div class="tab-pane fade" id="dinner" role="tabpanel">
       <div class="cd d-flex flex-wrap gap-3 justify-content-center align-items-center">
    <div class="card" style="width: 18rem; height: 410px;">
  <img src="crab.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Steamy Crab</h5>
    <p class="card-text">Succulent crab cooked to perfection, infused with aromatic spices and served with buttery sides for a rich coastal experience.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
   <div class="card" style="width: 18rem; height: 410px;">
  <img src="suchi.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fresh Sushi</h5>
    <p class="card-text">Delicate rolls of vinegared rice paired with fresh seafood, crisp vegetables, and umami-rich flavors — a refined bite of Japan.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="soup.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Creamy Soap</h5>
    <p class="card-text">A warm, flavorful bowl crafted with fresh ingredients — perfect for comfort, nourishment, and cozy moments.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
</div>
  </div>
  <div class="tab-pane fade" id="snacks" role="tabpanel">
       <div class="cd d-flex flex-wrap gap-3 justify-content-center align-items-center">
    <div class="card" style="width: 18rem; height: 410px;">
  <img src="burr.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Doube Decker Burger</h5>
    <p class="card-text">A juicy grilled patty layered with fresh lettuce, tomato, cheese, and signature sauce — served in a toasted bun.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
   <div class="card" style="width: 18rem; height: 410px;">
  <img src="pizza.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cheesy Pizza</h5>
    <p class="card-text">Hand-tossed crust topped with rich tomato sauce, melted cheese, and your choice of fresh, flavorful toppings.</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="fries.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frech Fries</h5>
    <p class="card-text">Crispy golden fries, lightly salted and served hot — the perfect sidekick to any meal. Rich in flavours and goodness</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
</div>
  </div>
  <div class="tab-pane fade" id="desserts" role="tabpanel">
       <div class="cd d-flex flex-wrap gap-3 justify-content-center align-items-center">
    <div class="card" style="width: 18rem; height: 410px;">
  <img src="cake.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dreamy Lava Cake</h5>
    <p class="card-text">A rich, decadent chocolate cake with a warm, gooey center — indulgence that melts in every bite. Yummy!</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
   <div class="card" style="width: 18rem; height: 410px;">
  <img src="past.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chocolate Brownie</h5>
    <p class="card-text">Fudgy, rich chocolate brownie with a crackly top — served warm for melt-in-your-mouth indulgence. Yummy!</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
<div class="card" style="width: 18rem; height: 410px;">
  <img src="cup.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Frosted Cupcake</h5>
    <p class="card-text">Soft, fluffy cake topped with creamy frosting — a delightful bite-sized treat for any sweet craving. Soo Yummy!</p>
    <a href="#" class="btn btn-primary">Order Now</a>
  </div>
</div>
</div>
  </div>
</div>

    </div>
</div>
<div class="container-fluid pt-5 bb" id="C5">
    <div class="row h-100 d-flex flex-column justify-content-center align-items-center">
        <div class="gallery text-center">
            <span class="material-symbols-outlined fs-3 font">restaurant</span>
            <h2 >Our gallery</h2>
            <p class="momo-signature-regular font fs-4">Booking a table online is easy</p>
        </div>
    </div>
</div>

<div class="container-fluid mt-5 mb-5">
    <div class="row text-center" id="C9">
        <div class="col-md-4 d-flex flex-fill glass-shine">
            <img src="vc.jpeg" class="img-fluid mm" alt="...">
        </div>
        <div class="col-md-4 text-center">
            <h4>Book a Table</h4>
             <p class="font momo-signature-regular pt-2 pb-2">Reservation</p>
            <form action="" class="form">
                <input type="text" name="" id="" placeholder="Your Name"><br>
                <input type="email" name="" id="" placeholder="Your Email"><br>
                <input type="date" name="" id="" style="width: 100%;" placeholder="Date"><br>
                <input type="time" name="" id="" style="width: 100%;" placeholder="Time"><br>
                <select name="" id="people">
                    <option value="1 person">1 Person</option>
                    <option value="">2 People</option>
                    <option value="">3 People</option>
                    <option value="">6 People</option>
                    <option value="">12 People</option>
                    <option value="">15 People</option>
                </select><br>
                <button type="submit">Find The Table</button>
            </form>
        </div>
        <div class="col-md-4 d-flex flex-fill glass-shine">
            <img src="vcc.jpeg" class="img-fluid mm" alt="...">
        </div>
    </div>
</div>
<div class="container-fluid bb" id="C7">
    <div class="row text-center pt-5 pb-5">
        <div class="col-md-12">
             <span class="material-symbols-outlined fs-3 font">restaurant</span>
            <h2 class="text-white">Testimonials</h2>
            <p class="font momo-signature-regular">What is said about us</p>
            <div id="carouselExampleAutoplaying" class="carousel slide play" data-bs-ride="carousel">
  
  <div class="carousel-inner">
  </div>
  </div>
    <div class="carousel-item active">
   <div class="kk">
     <span class="fs-4 ">★★★★★</span>
<p class="p-2">" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
<h6><i>John Doe</i></h6>
   </div>
    </div>
    <div class="carousel-item">
    <div class="kk">
          <span class="fs-4 ">★★★★★</span>
<p class="p-2">" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
<h6><i>John Doe</i></h6>
    </div>
    </div>
    <div class="carousel-item">
      <div class="kk">
         <span class="fs-4 ">★★★★★</span>
<p class="p-2">" Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword "</p>
<h6><i>John Doe</i></h6>
      </div>
    </div>
</div>

</div>



</div>
    </div>
</div>
<div class="container-fluid footer pb-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 text-center">
            <h5>About Us</h5>
            <p class="pt-3"><i>“Many guests fondly recall the restaurant owner's charming habit of greeting visitors in regal attire, adding a theatrical touch to the dining experience.”</i></p>
        </div>
        <div class="col-md-4 text-center">
            <h5><i>Find us</i></h5>
            <p class="d-flex gap-3 justify-content-center pt-3"> <a class="nav-link" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>  
             <a class="nav-link" href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>  
             <a class="nav-link" href="https://pk.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>  
             <a class="nav-link" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a> 
             <a class="nav-link" href="https://x.com/"><i class="fa-brands fa-x-twitter"></i></a></p>
        </div>
        <div class="col-md-4 text-center">
            <h5>Newsletter</h5>
            <input type="email" name="" id="" placeholder="Your email address..">
            <button type="submit" style="font-weight: 600;">Send</button>
        </div>
   <div class="footer1">
     <p class="text-center">©All Rights Reserved. Designed and Created by Tahreem</p>
</div>
    </div>
</div>

<script>
    const dropdowns = document.querySelectorAll('.dropdown');
dropdowns.forEach(dropdown => {
  dropdown.addEventListener('mouseenter', () => {
    const menu = dropdown.querySelector('.dropdown-menu');
    menu.classList.add('show');
  });
  dropdown.addEventListener('mouseleave', () => {
    const menu = dropdown.querySelector('.dropdown-menu');
    menu.classList.remove('show');
  });
});

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>