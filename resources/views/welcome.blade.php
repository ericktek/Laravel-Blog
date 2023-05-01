<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/icon.png') }}"/>
    <title>{{ config('app.name', 'LemaTech') }}</title>

     <!-- Some Font from Google -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <style>
      body {
      /* font-family: 'Open Sans', sans-serif; */
    }
    hr {
        margin-top: 0;
        margin-bottom: 0;
      }
      .nav-item .active{
        font-size: 17px;
        font-weight: 100;
      }
      .nav-item .dropdown-menu {
       z-index: 9999;
       }
       #line {
        border-right: 1px solid #000; 
        padding-right: 2rem ;
        margin-right: 1rem;
       }
       @media (max-width: 999px) {
        #line {
          display:none;
        }
    }
    form {
        align-items: center;
        margin-top: 50px;
        font-size: 1.2em;
      }
      input[type="number"] {
        padding: 10px;
        margin: 10px;
        width: 200px;
        border-radius: 10px;
        border: none;
        box-shadow: 2px 2px 10px #ccc;
        font-size: 1em;
      }
      button[type="submit"] {
        padding: 5px;
        margin-left: 100px;
        width: 200px;
        border-radius: 3px;
        border: none;
        box-shadow: 2px 2px 10px #ccc;
        cursor: pointer;
      }

      /* Style for result */
      .result {
        font-size: 1em;
        margin-top: 30px;
        font-family: Andalé Mono, monospace;
      }
      .result h5 {
        margin-bottom: 20px;
      }
      .result p {
        margin-top: 2px;
      }
      .result .suggestion {
        margin-top: 2px;
      }
      #comment-button {
        padding: 5px;
        margin: 5px;
        width: 100px;
        border-radius: 1px;
        border: none;
        box-shadow: 2px 2px 10px #ccc;
      }
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
      @import url("https://use.fontawesome.com/releases/v5.13.0/css/all.css");
      :root {
          --font3: 'Roboto', sans-serif;
      }

      .h1,
      h1 {
          font-size: 1.5rem;
      }

      .container-fluid {
          max-width: 1400px;
      }

      .card {
          background: #fff;
          box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
          border: 1;
          border-radius: 1rem;
      }

      .img-hover-zoom--colorize img {
          border-radius: 50%;
          width: 150px;
          height: auto;
          margin-top: 20px;
          padding: 1px;
          transition: transform .5s;
          filter: grayscale(100%);
      }

      .img-hover-zoom--colorize:hover img {
          filter: grayscale(0);
          transform: scale(1.05);
      }

      .card h5 {
          overflow: hidden;
          height: 80px;
          font-weight: 300;
          font-size: 1rem;
      }

      .card h5 a {
          color: black;
          text-decoration: none;
      }

      .role {
          color: #7a7a7a;
      }

      .box {
          display: flex;
          align-items: center;
          justify-content: center;
      }

      .fab {
          font-size: 1.5rem;
          color: darkgray;
          transition: transform .5s;
      }

      .fab:hover {
          color: black;
          transform: scale(1.1);
      }

      .card h2 {
          font-size: 1rem;
      }


      /* MEDIA */

      @media only screen and (min-width: 1200px) {
          .img-hover-zoom--colorize img {
              width: 200px;
          }
      }

      @media only screen and (min-width: 1200px) {
          .h1,
          h1 {
              font-size: 2rem;
          }
        
      }
      .mt-60{
    margin-top:60px;
}

.section-block-grey {
    padding: 90px 0px 90px 0px;
    background-color: #f9f9f9;
}

.serv-section-2 {
    position: relative;
    border: 1px solid #eee;
    background: #fff;
    box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);
    border-radius: 5px;
    overflow: hidden;
    padding: 30px;
}

.serv-section-2:before {
    position: absolute;
    top: 0;
    right: 0px;
    z-index: 0;
    content: " ";
    width: 120px;
    height: 120px;
    background: #f5f5f5;
    border-bottom-left-radius: 136px;
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
}

.serv-section-2-icon {
    position: absolute;
    top: 18px;
    right: 22px;
    max-width: 100px;
    z-index: 1;
    text-align: center;
}

.serv-section-2-icon i {
    color: #5f27cd;
    font-size: 48px;
    line-height: 65px;
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
}

.serv-section-desc {
    position: relative;
}

.serv-section-2 h4 {
    color: #333;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.5;
}

.serv-section-2 h5 {
    color: #333;
    font-size: 17px;
    font-weight: 400;
    line-height: 1;
    margin-top: 5px;
}

.section-heading-line-left {
    content: '';
    display: block;
    width: 100px;
    height: 3px;
    background: #5f27cd;
    border-radius: 25%;
    margin-top: 15px;
    margin-bottom: 5px;
}

.serv-section-2 p {
    margin-top: 25px;
    padding-right: 50px;
}

.serv-section-2:hover .serv-section-2-icon i {
    color: #fff;
}

.serv-section-2:hover:before {
    background: #5f27cd;
}

  /*/ start about /*/
  
  #about-me {
    margin-top: 20px;
  }
  
  #about-me h2 {
    font-weight: 700;
    margin-top: 22px;
    padding-bottom: 10px;
    text-align: center;
  }
  
  .about-intro-text p {
    float: right;
  }
  
  .about-intro-text span {
    color: #40E0D0;
    font-weight: 700;
  }
  
  .about-intro-text .fa-beer {
    color: #40E0D0;
    font-size: 20px;
  }
  
  .button-group {
    cursor: pointer;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
  }
  
  .text {
    background: #008080;
    color: #fff;
    font-size: 18px;
    height: 50px;
    padding: 0 25px;
    line-height: 50px;
  }
  
  .icon-cv {
    font-size: 30px;
    width: 50px;
    height: 50px;
    line-height: 40px;
    box-sizing: border-box;
    border: 4px solid #008080;
    border-left: none;
    -webkit-transition: 600ms -webkit-transform ease-in-out;
    transition: 600ms -webkit-transform ease-in-out;
    transition: 600ms transform ease-in-out;
    transition: 600ms transform ease-in-out, 600ms -webkit-transform ease-in-out;
    -webkit-transform: rotateY(90deg);
    transform: rotateY(90deg);
    -webkit-transform-origin: left;
    transform-origin: left;
    color: #008080;
    background: #fff;
    text-align: center;
  }
  
  a .fa-arrow-circle-down {
    color: #008080;
  }
  
  .button-group:hover .icon-cv {
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }
  
  .button-group {
    -webkit-perspective: 200px;
    perspective: 200px;
    -webkit-perspective-origin: calc(100% - 50px);
    perspective-origin: calc(100% - 50px);
    margin-top: 5%;
  }
  
  .about-inner {
    position: relative;
    padding: 0;
    overflow: hidden;
  }
  
  .about-inner>img {
    display: block;
    min-width: 100%;
    height: auto;
  }
  
  .about-ct .textbox-about {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  
  .about-ct:hover .textbox-about {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  
  .textbox-about {
    -webkit-transition: all 0.7s ease;
    transition: all 0.7s ease;
  }
  
  div.button-social {
    border: 2px solid #fff;
    padding: 12px 18px;
    -webkit-transition: all .35s;
    transition: all .35s;
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    margin-top: 25px;
    font-size: 18px;
    color: #fff;
    margin: 5% 5%;
  }
  
  div.button-social a {
    color: #fff;
    font-size: 18px;
    margin: 15px;
  }
  
  div.button-social a:hover {
    color: #40E0D0;
  }
  
  .button-group:focus,
  .icon-cv:focus,
  .text:focus {
    outline: 0;
  }
  
  
  /*/ start count stats /*/
  
  #counter-stats {
    margin-top: 50px;
    width: 100%;
    height: auto;
  }
  
  .stats {
    text-align: center;
    font-size: 35px;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    text-transform: lowercase;
  }
  
  .stats .fa {
    color: #008080;
    font-size: 60px;
  }
  
  #about {
    padding-top: 2em;
  }
  .skill-bar {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 0px;
    margin-top: 2em;
    font-family: Andalé Mono, monospace;
  } 

  .skill-title {
    font-weight: bold;
    margin-right: 10px;
  }

  .skill-level {
    background-color: #f2f2f2;
    border-radius: 2px;
    height: 10px;
    width: 100%;
    position: relative;
  }

  .skill-level-bar {
    height: 10px;
    border-radius: 2px;
    position: absolute;
    top: 0;
    left: 0;
    transition: width 1s;
  }
 
  /*/ end about /*/

    </style>
  </head>
  <body>
    <nav style="background-color: #fdfcfc;" class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Promotion</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Take Tour</a>
            </li>
            
            <li class="nav-item dropdown">
              <a style="font-family: Andalé Mono, monospace" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                  <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                </svg> lg
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a style="font-family: Andalé Mono, monospace" class="dropdown-item" href="#">English</a></li>
                <li><a style="font-family: Andalé Mono, monospace" class="dropdown-item" href="#">Kiswahili</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a style="font-family: Andalé Mono, monospace;" class="dropdown-item" href="#">Return to Default</a></li>
              </ul>
            </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Discount</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/staff">Administration</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
 <hr style="margin-top: 0; margin-bottom: 0;">
    <nav style="background-color: #f8f6f6c1;" class="navbar navbar-expand-lg navbar-light sticky-top">
      <div  class="container-fluid">
          <a style="margin-left: 70px;"; class="navbar-brand me-auto mb-2 mb-lg-0" href="#"><img style="height: 70px; width:70px;" src="{{ asset('storage/images/bg-logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="height: 100px;" class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a  id="line" style="margin-right: 40px; font-weight: 400; font-size: 20px;" class="nav-link active" href="#">Techwithlema</a>
          </li>
            <li class="nav-item">
              <a style="margin-left: 40px; font-weight: 400;" class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item" >
              <a style="margin-left: 40px; font-weight: 400;" class="nav-link active" aria-current="page" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a style="margin-left: 40px; font-weight: 400;" class="nav-link active" aria-current="page" href="#service">Service</a>
            </li>
           
              <a  style="font-family: Andalé Mono, monospace; margin-left: 40px; font-weight: 400; font-size: 20px;" id="clock" class="nav-link active"> </a>
 
          </ul>

        </div>
      </div>
    </nav>

 <!----slideshow Section-->
 <div id="home" class="container my-3 my-sm-5">
  <div class="row">
      <div class="col-12 col-md-6 col-lg-8">
          <!----->
          <div class="card" style="height: 30rem;">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="1500">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @if($posts)
                 @foreach ($posts as $post)
                <div class="carousel-item @if($loop->first) active @endif">
                    <img class="d-block w-100" style="height: 30rem; background-size: cover; object-fit: cover;" src="/storage/uploads/{{ $post->photo }}" alt="Slide Show">
                </div>
                @endforeach
                @endif
            </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
          </div>
        </header>
        <div class="skill-bar">
            <div class="skill-title">HTML & CSS&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <div class="skill-level">
              <div class="skill-level-bar" style="width: 70%; background-color:rgb(100%, 64.7%, 0%)"></div>
            </div>
          </div>
          <div class="skill-bar">
            <div class="skill-title">Python&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <div class="skill-level">
              <div class="skill-level-bar" style="width: 90%; background-color:  #2196f3;"></div>
            </div>
          </div>
        <div class="skill-bar">
            <div class="skill-title">JavaScript&nbsp;&nbsp;</div>
            <div class="skill-level">
              <div class="skill-level-bar" style="width: 65%; background-color:  #f44336;"></div>
            </div>
          </div>

        <div class="skill-bar">
            <div class="skill-title">Design&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <div class="skill-level">
              <div class="skill-level-bar" style="width: 95%; background-color: #808080;"></div>
            </div>
          </div>
    <!------>
      </div>
      <!-----End of the main body-->
      <!--Asides Section-->
<div class="col-12 col-md-6 col-lg-4">
<aside>
<h4 style="padding-top: 0.1em;" class="mb-3">New products</h4>
<div style="padding-left: 6em; margin-left:2em; height: 1.2px; background-color:rgb(52, 53, 53);" class="section-heading-line-left"></div>
<div class="container">
<div class="card" style="width: 22rem; padding:15px 15px 15px 15px; margin-top: 25px;">
    @foreach ($posts as $post)
    <a class="list-group-item list-group-item-action">
        <div style="background-color:#211c1c; color:#fff;" class="badge badge-pill badge-cate float-right">Category</div>
        <img src="/storage/uploads/{{ $post->photo }}" width="100px">
        <h4 style="font-family: Andalé Mono, monospace;" class="card-title">{{ $post->title }}</h4>
            <p class="card-text">{{ $post->description }}</p>
    </a>
    @endforeach
    {!! $posts->links('pagination::bootstrap-5', ['class' => 'pagination-lg', 'previous' => '&laquo; Prev', 'next' => 'Next &raquo;']) !!}
    <!----->
</div>
</div>
</aside>
</div>
</div>
 
      <!-- start about me -->
    <section id="about" id="about-me">
      <div class="container">
        <div class="row">
          <h3>Our Mission and Vission</h3><br><br><br>
          <div class="col-lg-6 about-intro">
            <div class="about-inner">
              <div class="about-ct">
                <img style="object-fit: cover; height:20em;" src="{{ asset('storage/staff-images/about-1.jpg') }}" alt="Marina Marques" class="img-responsive">
                <div class="textbox-about hidden-xs">
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 about-intro-text">
            <p>I'm a <span>Back-end developer</span> and a <span>Graphic designer </span><br> My first experience with coding was at the time when my Brother and his friends had a computer programming skills and were able to successfully print "Hello World". I remember struggling with finding the way to install text editor with less computer skills use.
              <br><span>Mission and Vission</span> is to organize the world's information, ease of use technology with maximum safety and to empower every person and every organization on this earth to achive more.</p>
          </div>
        </div>
        <!-- end row about -->
      </div>
      <!-- end container about -->
      <!-- start count stats -->
      <section id="counter-stats">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 stats">
              <span class="fa fa-code" aria-hidden="true"></span>
              <div class="counter" data-count="900000">900</div>
              <h5>Lines of code</h5>
            </div>
            <div class="col-lg-3 stats">
              <span class="fa fa-check" aria-hidden="true"></span>
              <div class="counter" data-count="280">280</div>
              <h5>Projects done</h5>
            </div>
            <div class="col-lg-3 stats">
              <span class="fa fa-user" aria-hidden="true"></span>
              <div class="counter" data-count="75">75%</div>
              <h5>Happy clients</h5>
            </div>
            <div class="col-lg-3 stats">
              <span class="fa fa-coffee" aria-hidden="true"></span>
              <div class="counter" data-count="999">999</div>
              <h5>Cups of coffee</h5>
            </div>
          </div>
          <!-- end row counter stats -->
        </div>
        <!-- end container counter stats -->
      </section><br><br>
      <!-- end cont stats -->
    </section>
    <!-- end about me -->
 
<!------ Service section ---------->
 
 <div id="service" class="section-block-grey">
    <div class="container">
        <div class="section-heading center-holder">
            <h3 >What I Do</h3>
            <div class="section-heading-line"></div>
            <p>We're a trusted provider of innovative solutions for businesses of all size
                <br>with a strong focus on quality and delivery.</p>
        </div>
        <div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-gem"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Planning</h4>
                        <h5>Data-driven Planning</h5> </div>
                    <div class="section-heading-line-left"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fas fa-cogs"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Management</h4>
                        <h5>Project Planning</h5> </div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Accumulation</h4>
                        <h5>Support and Sell</h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>
		<div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-shield-alt"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Security </h4>
                        <h5>Secure Business</h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="far fa-clock"></i> </div>
                    <div class="serv-section-desc">
                        <h4>24/7 Available </h4>
                        <h5>All time available </h5> </div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                    <div class="serv-section-desc">
                        <h4> Customer Support </h4>
                        <h5>Technical Support </h5> </div>
                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!------ End Service section ---------->
 <div  class="container p-5">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
      <div class="col">
          <div class="card h-100 shadow-sm">
              <div class="text-center">
     

                  <div class="img-hover-zoom img-hover-zoom--colorize">
                    <img style="object-fit: cover;" class="shadow" src="{{ asset('storage/staff-images/st-1.jpg') }}" 
                    alt="Staff profile image">
                  </div>

              </div>
     
              <div class="card-body">
                  <div class="clearfix mb-3">
                  </div>


                  <div class="my-2 text-center">

                      <h1>Mr. Lema</h1>

                  </div>
                  <div class="mb-3">

                      <h2 class="text-uppercase text-center role">Data Analyst</h2>

                  </div>
                  <div class="box">
                      <div>
                        <ul class="list-inline">
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                          </svg></i ></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                          </svg></i></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg></i></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg></i></li>
                      </ul>

                      </div>
                  </div>

  
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card h-100 shadow-sm">
              <div class="text-center">
         

                  <div class="img-hover-zoom img-hover-zoom--colorize">
                    <img style="object-fit: cover;" class="shadow" src="{{ asset('storage/staff-images/st-3.jpg') }}" 
                    alt="Staff profile image">
                  </div>

              </div>
         
              <div class="card-body">
                  <div class="clearfix mb-3">


        

                  </div>


                  <div class="my-2 text-center">

                      <h1>Erick B.</h1>

                  </div>
                  <div class="mb-3">

                      <h2 class="text-uppercase text-center role">senior developer</h2>

                  </div>
                  <div class="box">
                      <div>
                        <ul class="list-inline">
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                          </svg></i ></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                          </svg></i></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg></i></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg></i></li>
                      </ul>

                      </div>
                  </div>

               
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card h-100 shadow-sm">
              <div class="text-center">
           

                  <div class="img-hover-zoom img-hover-zoom--colorize">
                    <img style="object-fit: cover;" class="shadow" src="{{ asset('storage/staff-images/st-2.jpg') }}" 
                    alt="Staff profile image">
                  </div>

              </div>
         
              <div class="card-body">
                  <div class="clearfix mb-3">



                  </div>


                  <div class="my-2 text-center">

                      <h1>Ms. Gloria</h1>

                  </div>
                  <div class="mb-3">

                      <h2 class="text-uppercase text-center role">DIGITAL MARKETING SPECIALIST</h2>

                  </div>
                  <div class="box">
                      <div>
                        <ul class="list-inline">
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                          </svg></i ></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                          </svg></i></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg></i></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg></i></li>
                      </ul>

                      </div>
                  </div>

        
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card h-100 shadow-sm">
              <div class="text-center">
             

                  <div class="img-hover-zoom img-hover-zoom--colorize">
                      <img style="object-fit: cover;" class="shadow" src="{{ asset('storage/staff-images/st-2.jpg') }}" 
                          alt="Staff profile image">
                  </div>

              </div>
           
              <div class="card-body">
                  <div class="clearfix mb-3">


                  </div>


                  <div class="my-2 text-center">

                      <h1>Mr. Keem</h1>

                  </div>
                  <div class="mb-3">

                      <h2 class="text-uppercase text-center role">Digital Printing manager</h2>

                  </div>
                  <div class="box">
                      <div>
                        <ul class="list-inline">
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                          </svg></i ></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                          </svg></i></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg></i></li>
                          <li class="list-inline-item"><i style="color: rgb(81, 79, 79);"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg></i></li>
                      </ul>

                      </div>
                  </div>

              
              </div>
          </div>
      </div>
  </div>
</div>
</div>

<div >
  <footer class="text-black text-center text-lg-start" style="background-color:  #f8f6f6c1; width:100%">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h4 class="text-uppercase mb-4">About company</h4>

        <ul class="list-unstyled medium text-muted">
                    <li style="font-family: Andalé Mono, monospace;" class="mb-2">Designed and built with Techwithlema team with the help of <a >our contributors</a></li>
                    <li style="font-family: Andalé Mono, monospace;" class="mb-2">Designer <a style="font-size: 17px; font-family: Andalé Mono, monospace;">MTIZII</a>, <a>Designwithlema</a></li>
                    <li style="font-family: Andalé Mono, monospace;" class="mb-2">Currently v1.0.0</li>
                    <li style="font-family: Andalé Mono, monospace;" class="mb-2">Analytics by <a  rel="noopener">StatTech</a></li>
          </ul>

          <div class="mt-4">
            <!-- Facebook -->
            <a href="#" style="text-decoration: none; color:#000;"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg> </a>          
             <!-- Dribbble -->
            <a href="#" style="margin-left: 10px; text-decoration: none; color:#000;"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>   </a>         
             <!-- Twitter -->
             <a href="#" style="margin-left: 10px; text-decoration: none; color:#000;"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>    </a>  
            <a href="#" style="margin-left: 10px; text-decoration: none; color:#000;"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg> </a>            <!-- Instagram -->       
             <!-- Google + -->
             <a href="#" style="margin-left: 10px; text-decoration: none; color:#000;"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>  </a>            <!-- Linkedin -->
             
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
           <h4 class="text-uppercase mb-4 pb-1">contacts</h4>
          <form style="margin-left: 1.65em; margin-top: 0; padding-top: 0;" action="#">
            <div class="mb-3 mt-3">
              <label for="comment">Tell about us: 
              </label>
              <textarea name="text" id="comment" cols="20" rows="3" class="form-control">                
              </textarea>
            </div>
            <button id="comment-button" type="subumit" class="btb btn-dark">Comment</button>
          </form>

          <ul class="fa-ul">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Dar es salaam-Tanzania, TZ</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">erickbale360@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 255&nbsp; 769 &nbsp; 500 &nbsp; 360</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 255&nbsp; 689 &nbsp; 038 &nbsp; 539</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h4 class="text-uppercase mb-4">BMI Check your Health</h4>

          <table class="table text-center text-white">
            <tbody class=" font-weight-normal">
              <form onsubmit="calculateBMI(event)">
                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" placeholder="Enter your weight" required><br>
                <label for="height">Height (cm):</label>
                <input type="number" id="height" name="height" placeholder="Enter your height" required><br>
                <button class="btn btn-secondary" type="submit">Calculate Health Status</button>
              </form>
          
              <div class="result" id="result" style="display:none;">
                 <h5>Your BMI: </h5>
                 <p id="bmi"></p>
                <p id="category"></p>
                <p style="color: #f00;" id="suggestion"></p>
              </div>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <hr>
    <div class="text-center p-3">
      © 2023 Copyright:
      <a  class="text-dark" href="/"> Techwithlema.com </a>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>
<!-- End of .container -->

  <script>
  <!--clock script-->

      function updateTime() {
        var now = new Date();
        var date = now.toDateString();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        var timeString = hours + ':' + minutes + ':' + seconds;
        document.querySelector('#clock').textContent = date + ' ' + timeString;
      }
      setInterval(updateTime, 1000);

    // BMI Javascripts Calculation

      function calculateBMI(event) {
        event.preventDefault();
        var weight = parseFloat(document.getElementById("weight").value);
        var height = parseFloat(document.getElementById("height").value) / 100;
        var bmi = weight / (height * height);
        document.getElementById("bmi").textContent = bmi.toFixed(2);

        var category, suggestion;
        if (bmi < 16) {
          category = "Severe Thinness";
          suggestion = "You should try to gain weight to improve your health.";
        } else if (bmi < 17) {
          category = "Moderate Thinness";
          suggestion = "You should try to gain weight to improve your health.";
        } else if (bmi < 18.5) {
          category = "Mild Thinness";
          suggestion = "You should try to gain weight to improve your health.";
        } else if (bmi < 25) {
          category = "Normal weight";
          suggestion = "Maintain your weight and continue to exercise regularly for good health.";
        } else if (bmi < 30) {
          category = "Overweight";
          suggestion = "You should try to lose some weight to improve your health.";
        } else if (bmi < 35) {  
          category = "Obese Class I";
          suggestion = "You should try to lose weight to improve your health.";
        } else if (bmi < 40) {
          category = "Obese Class II";
          suggestion = "You should try to lose weight to improve your health.";
        } else {
          category = "Obese Class III";
          suggestion = "You should consult a doctor immediately to improve your health.";
        }
        document.getElementById("category").textContent = "Category: " + category;
        document.getElementById("suggestion").textContent = suggestion;
        document.getElementById("result").style.display = "block";
      }     
  </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     --}}
  </body>
</html>