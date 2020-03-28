@extends('layouts.master')

@section('content')

<div class="front px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">


  <h1 class="display">Explore Features</h1>
  <p class="leads">Our web application helps you to save time and be more productive in AI implementation.</p>
  <a class="btn btn-transparent" href="http://localhost:8000/register"> Join Now </a>
  <a class="btn btn-light" href="http://localhost:8000/questions"> Browse </a>

    <h1 class="display">Explore Features</h1>
    <p class="leads">Our web application helps you to save time and be more productive in AI implementation.</p>
    <a class="btn btn-transparent" href="http://localhost:8000/register"> Join Now </a>
    <a class="btn btn-light" href="http://localhost:8000/questions"> Browse </a>

 
</div>

<div class="main-content-area">
        <!-- =-=-=-=-=-=-= How It Work  =-=-=-=-=-=-= -->
  <section class="custom-padding" id="how-it-work">
    <div class="container" id="mid">
            
                <!-- title-section -->
      <div class="main-heading text-center">
                

        <h2>How  It Works </h2>
        <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
        </div>
        <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi
        <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
      </div>

      <!-- End title-section -->
      <div class="row">
        <div class="col-sm-4 col-md-4 col-xs-12  center-responsive"> 
          <img src="css/step1.png" class="img-responsive" alt="">
          <h4><a href="http://localhost:8000/register">Create An Account</a></h4>
        </div>
        <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> 
          <img src="css/step2.png" class="img-responsive" alt="">
          <h4><a href="http://localhost:8000/login">Post Your Question</a></h4>
        </div>
        <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> 
          <img src="css/step3.png" class="img-responsive" alt="">
          <h4><a href="http://localhost:8000/questions"> Find Your Solution</a></h4>
        </div>

        <div class="clearfix"></div>
      </div>
    </div>

                    <h2>How  It Works </h2>
                    <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
                    </div>
                    <p>Cras varius purus in tempus porttitor ut dapibus efficitur sagittis cras vitae lacus metus nunc vulputate facilisis nisi
                        <br> eu lobortis erat consequat ut. Aliquam et justo ante. Nam a cursus velit</p>
                </div>

                <!-- End title-section -->
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-xs-12  center-responsive"> <img src="css/step1.png" class="img-responsive" alt="">
                        <h4><a href="http://localhost:8000/register">Create An Account</a></h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> <img src="css/step2.png" class="img-responsive" alt="">
                        <h4><a href="http://localhost:8000/login">Post Your Question</a></h4>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> <img src="css/step3.png" class="img-responsive" alt="">
                        <h4><a href="http://localhost:8000/questions"> Find Your Solution</a></h4>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- end container -->
  </section>
</div>
<section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="about-name" id="about-name">
    <div class="review" id="review">
      <a class="review-a" href="/review/create">
        <img class="review-png" id="review-png" title="User Report" src="\css\review.png">
      </a>
    </div>
          
  </div>
  <script>
   
    document.getElementById("review-png").onmouseenter = function() {mouseEnter()};
    document.getElementById("review-png").onmouseleave = function() {mouseLeave()};

    function mouseEnter() {
      document.getElementById("review-png").style.width = "90px";
      document.getElementById("review-png").style.height = "90px";
      document.getElementById("about-name").style.height = "150px";
      
    }

    function mouseLeave() {
      document.getElementById("review-png").style.width = "80px";
      document.getElementById("review-png").style.height = "80px";
      document.getElementById("about-name").style.height = "130px";
     
    }

  </script>

  <div class="container" id="container">
  
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div id="about">
          <h3 class=" about text-center" id="id">
            What People Say
            <span class="text-primary"> 
              About Us
            </span>
          </h3>
        </div>

        <div class="carousel-inner r-description">
          <div class="carousel-item active">
            <p>I was impressed by the quality of what your specialists did. They quickly found out what was 
            the main problem of my company and helped me form a correct strategy, which worked perfectly and 
            set my business on the right path.</p>
          </div>
        <div class="carousel-item">
          <p>I was impressed by the quality of what your specialists did. They quickly found out what was 
          the main problem of my company and helped me form a correct strategy, which worked perfectly and 
          set my business on the right path.</p>
        </div>
        <div class="carousel-item">
          <p>I was impressed by the quality of what your specialists did. They quickly found out what was 
          the main problem of my company and helped me form a correct strategy, which worked perfectly and 
          set my business on the right path.</p>
        </div>
      </div>
   
      <ol class="carousel-indicators review-ol">
        <li class="dot" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li class="dot" data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
        <li class="dot" data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
      </ol>

    </div>
  </div>
  
      
</section>



@endsection