<?php 
session_start();

if(!isset($_SESSION['user_id'])){

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DORMQUEST</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->

    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--bootstrap import-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS only -->
<!-- CSS only -->

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

   <div class="image"><img src="image/logo.png" style="height: 150px; width:200px; margin-top:0px; margin-left: 0px;"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">hostels</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
    </nav>

 <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-hotel" id="hotels-btn"></div>
<!--dropdown-->
    <div class="dropdown">
        <button class="dropbtn"> <i class="fas fa-user" ></i></button>
      <div class="dropdown-content">
        <a href="userPanel2.php">profile</a>
     </div>
 </div>
</div>
<!--dropdown ends-->
    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

   

</header>

<!-- header section ends -->

<!-- home section starts  -->




<section class="home" id="home">

    <div class="content">
        <h3>FIND THE  <span>BEST HOSTEL </span> FOR YOU.</h3>
        <p style="font-weight:bold; font-size:20px; color:#e3a77e; ">Student's Paradise</p>
    </div>

</section>
<div style="margin-top:-50px ;">.</div>

<div style="margin-top:30px" class="imgslider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./image/hostel1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./image/hostel3.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./image/hostel4.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">
    
    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/feature-img-1.png" alt="">
            <h3>Fast and Reliable Hostel Finder</h3>
            <p>Search your hostel in fast and reliable way</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>Book Hostel</h3>
            <p> Book the hostel for your upcoming journey of life</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">
    
    <h1 class="heading"> our <span>Hostel</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-1.png" alt="">
                <h3>Subhatara Hostel</h3>
                <div class="price"> Rs7500 - Rs9000 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Bookmark this</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-2.png" alt="">
                <h3>Rameshwor Hostel</h3>
                <div class="price"> Rs 8000 - Rs 12000 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Bookmark this</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-3.png" alt="">
                <h3>Chandragiri Hostel</h3>
                <div class="price">Rs 9000- Rs 11000 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Bookmark this</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-4.png" alt="">
                <h3>Shivapuri Hostel and Dorm</h3>
                <div class="price"> Rs6500 - Rs 9000 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Bookmark this</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-5.png" alt="">
                <h3>Chabahil Hostel</h3>
                <div class="price"> Rs7500 - Rs9200 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Bookmark this</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-6.png" alt="">
                <h3>Jungey boys hostel</h3>
                <div class="price"> Rs8500 - Rs12500 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Bookmark this</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-7.png" alt="">
                <h3>Sunita Hostel</h3>
                <div class="price"> Rs6300 - Rs8800</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Bookmark this</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-8.png" alt="">
                <h3>Garden Hostel</h3>
                <div class="price"> Rs5500 - Rs8800 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Bookmark this</a>
            </div>

        </div>

    </div>


</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading">Hostels <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/cat-1.png" alt="">
            <h3>Boy's Hostel</h3>
            <p></p>
            <a href="#" class="btn">visit now</a>
        </div>

        <div class="box">
            <img src="image/cat-2.png" alt="">
            <h3>Girl's Hostel</h3>
            <p></p>
            <a href="#" class="btn">visit now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/logo.png" alt="">
                <p>It have shown me a lot of hostels for choosing the best.</p>
                <h3>Shiva Hari Bista</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/logo.png" alt="">
                <p>It was amazing to find the subhatara hostel from dormquest.It really made my time easy and it was reliable too.</p>
                <h3>John Bahadur Khadka</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/logo/png" alt="">
                <p>This has helped me a lot in searching the best hostel near my University. </p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <div class="image"><img src="image/logo.png" style="height: 150px; width:200px; margin-top:0px; margin-left: 0px;"></div>
            <p> Student's Paradise</p>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +9779817911272</a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +9779869065975 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> dormquest@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i>Mid-Baneshwor,Kathmandu </a>
        </div>

     

        <div class="box">
            <input type="email" placeholder="your email" class="email">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="popup" onclick="window.open('https://mail.google.com/mail/u/0/#inbox?compose=new','name','width=1200,height=800')">
            <input type="submit" value="Email us" class="btn">
            </a>
        </div>

    </div>
</section>

<!-- footer section ends -->














<script src="./script.js"></script>

</body>
</html>