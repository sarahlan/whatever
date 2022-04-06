<?php
     include'header.php';
?>

<section>
          <div class = "someMainContent">
              <h1>Hi there!</h1>
</div>
</section>



<?php

/*
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/

$x = 5;
function something() {
    $y = 10;
    echo $GLOBALS['x'];
}

something();

echo $_GET['name'];
?>

<form method="GET">
    <input type="hidden" name="name" value="Sarah">
    <button type="submit"> PRESS ME! </button>
</form>




<form method = "GET">
    <input type = "text" name = "person">
    <button>SUBMIT </button>
</form>
 

<?php
    $name = $_GET ['person'];
    echo $name. " is a handsome fellow!";
?>

<?php

/* 
$_COOKIE
$_SESSION
*/

setcookie("name", "Daniel", time() + 172800);

$_SESSION['name'] = "12";

?>













<!---LOGIN SYSTEM--->
<?php
require "header.php";
?>

<main>
    <p>You are logged out!</p>
    <p>You are logged in!</p>
</main>

<?php
require "footer.php";
?>

























    <!--Slider-->
    <section id="main">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0"class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
             <div class="carousel-item carousel-image-1 active">
                 <div class="container">
                     <div class="carousel-caption d-none d-sm-block mb-5">
                         <h1 class="display-3 title-color"> Baby Package </h1>
                         <p class="lead"> Recieve weekly warm up videos and tips
                              from the artist of your choice!</p>
                            <a href="#" class="btn btn-color slide-btn btn-lg">
                                Sign Up Now
                            </a>
                    </div>
                 </div>
             </div>
             <div class="carousel-item carousel-image-2">
                 <div class="container">
                     <div class="carousel-caption d-none d-sm-block mb-5">
                         <h1 class="display-3 title-color"> PenPal Package </h1>
                         <p class="lead"> Work together with the artist in
                              a weekly virtual session along with warm up 
                              videos and tips! </p>
                         <a href="#" class="btn btn-color slide-btn btn-lg">
                             Sign Up Now
                         </a>
                     </div>
                 </div>
             </div>
         <div class="carousel-item carousel-image-3">
            <div class="container">
                <div class="carousel-caption d-none d-sm-block mb-5">
                    <h1 class="display-3 title-color "> Bestfriend Package</h1>
                    <p class="lead">Enjoy the virtual session, warm up videos 
                        and tips, and backstage passes to each gig!</p>
                    <a href="#" class="btn btn-color slide-btn btn-lg">
                        Sign Up Now
                    </a>
                    </div>
                </div>
            </div>
            <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#Carousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        </div>  
     </section>
    <!--End of Slider-->


</div>


     <!--Service Section-->
     <section class="service py-5 text-center">
            <div class="container">
                <div class="row">

                    <!--Single Service -->
                    <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                        <span class="service-icon">
                            <i class="fas fa-medal fa-2x"></i>
                        </span>
                        <h5 class="font-weight-bold text-uppercase">
                            Guaranteed Success
                        </h5>
                        <p class="text-capitalize"> 100% of students say they
                            feel much more confident in their abilities after
                            just a few sessions!
                        </p>
                    </div>
                    <!--End of Single Service-->
                     

                    <!--Single Service -->
                    <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                        <span class="service-icon">
                            <i class="fas fa-thumbs-up fa-2x"></i>
                        </span>
                        <h5 class="font-weight-bold text-uppercase">
                            Professional and Trustworthy
                        </h5>
                        <p class="text-capitalize"> Each member has had years of 
                            training so... they know what they're talking about!
                        </p>
                    </div>
                    <!--End of Single Service-->


                     <!--Single Service -->
                    <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                        <span class="service-icon">
                            <i class="fas fa-check fa-2x"></i>
                        </span>
                        <h5 class="font-weight-bold text-uppercase">
                            Innovative Teaching Styles
                        </h5>
                        <p class="text-capitalize"> With new and unique warm ups
                            curated specifically for your needs, you are sure
                            to be a pro in no time!
                        </p>
                    </div>
                    <!--End of Single Service-->
                    


                </div>
            </div>
     </section>
 <!--End of Service Section-->



<!--Featured Products-->
<section id="products" class="products py-5">
    <div class="container">
        
        <!--Section Title-->
        <div class="row">
            <div class="col-10 mx-auto col-sm-6 text-center">
                <h1 class="text-capitalize product-title">
                    Lessons
                </h1>
            </div>
        </div>
        <!--End of Section Title-->



        <!--Product Items-->
        <div class="row product-items" id="product-items">


            <!--Single Item 1-->
            <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="Images/izzyvoice1.1.jpg" alt=""
                        class="card-img-top product-img">
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5 id="item-name"> Voice </h5>
                            <span> <i class="fas fa-dollar-sign"></i> 45-125 </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Single Item 1-->



             <!--Single Item 2-->
             <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="Images/codybass1.1.jpg" alt=""
                        class="card-img-top product-img">
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5 id="item-name"> Bass </h5>
                            <span> <i class="fas fa-dollar-sign"></i> 40-130 </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Single Item 2-->



             <!--Single Item 3-->
             <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="Images/trippiano1.1.jpg" alt=""
                        class="card-img-top product-img">
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5 id="item-name"> Piano </h5>
                            <span> <i class="fas fa-dollar-sign"></i> 40-125 </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Single Item 3-->
            

             <!--Single Item 4-->
             <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="Images/cadewig.jpg" alt=""
                        class="card-img-top product-img">
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5 id="item-name"> Sax </h5>
                            <span> <i class="fas fa-dollar-sign"></i> 35-115 </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Single Item 4-->


             <!--Single Item 5-->
             <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="Images/masonwig.jpg" alt=""
                        class="card-img-top product-img">
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5 id="item-name"> Guitar </h5>
                            <span> <i class="fas fa-dollar-sign"></i> 45-145 </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Single Item 5-->



             <!--Single Item 6-->
             <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="Images/aidanwig.jpg" alt=""
                        class="card-img-top product-img">
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5 id="item-name"> Drums </h5>
                            <span> <i class="fas fa-dollar-sign"></i> 40-130 </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Single Item 6-->
    


        </div>
        <!--End of Product Items-->
    </div>
</section>
<!--End of Featured Products-->


<!--About Section-->
<section id="about-sec">
    <div class="container">
        <div class="row align-item-center">
            <div class="col-lg-5 text-center">
                <img src="images/aboutpic1.1.jpg" width="450" height="150"
                class="img-fluid watch-img">
            </div>
            <div class="col-lg-7 text-lg-right text-center text-color about-text">
                <h1> Who is Highwater? </h1>
                <p class="text"> Highwater is a band created
                    by highschool students that love jazz. They have been
                    jamming together since their sophomore year in 2019! 
                    They are a cover band and have performed at many different
                    kinds of events like parties, proms, and just normal gigs.
                </p>
            </div>
        </div>
    </div>
</section>
<!--End of About Section-->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
