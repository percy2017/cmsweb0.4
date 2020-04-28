<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ $page->name }}</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('resources/landingpage/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('resources/landingpage/css/mdb.min.css') }}" rel="stylesheet">
  <style>
    html,
    body,
    header,
    .jarallax {
      height: 100%;
    }

    @media (min-width: 560px) and (max-width: 740px) {

      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2A48 !important;
      }

      .navbar {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12) !important;
      }
    }

  </style>
  @laravelPWA
</head>

<body class="university-lp">

  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong>Navbar</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--Links-->
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" data-offset="100">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#info" data-offset="100">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#courses" data-offset="100">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#events" data-offset="100">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials" data-offset="100">Opinions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#modal-contact">Contact</a>
            </li>
          </ul>

          <!--Social Icons-->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Navbar-->

    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'
      style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/67.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-strong">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row smooth-scroll">
            <div class="col-md-12 white-text text-center">
              <div class="wow fadeInDown" data-wow-delay="0.2s">
                <h2 class="display-3 font-weight-bold mb-2">University</h2>
                <hr class="hr-light">
                <h3 class="subtext-header mt-4 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit deleniti
                  consequuntur.</h3>
              </div>
              <a href="#events" data-offset="100" class="btn btn-info wow fadeInLeft" data-wow-delay="0.2s">Events</a>
              <a href="#courses" data-offset="100" class="btn btn-warning wow fadeInRight"
                data-wow-delay="0.2s">Courses</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </header>
  <!--Navigation & Intro-->

  <!--Main content-->
  <main>

    <div class="container">

      <!--Section: About-->
      <section id="about" class="mt-4 mb-2">

        <!--Secion heading-->
        <h2 class="text-center my-5 font-weight-bold wow fadeIn" data-wow-delay="0.2s">About University</h2>

        <!--First row-->
        <div class="row">

          <!--First column-->
          <div class="col-lg-5 col-md-12 mb-5 pb-4 wow fadeIn" data-wow-delay="0.4s">

            <!--Image-->
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%289%29.jpg"
              class="img-fluid z-depth-1 rounded" alt="My photo">

          </div>
          <!--First column-->

          <!--Second column-->
          <div class="col-lg-6 dark-grey-text ml-lg-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

            <!--Description-->
            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione
              quisquam, dicta
              ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque animi maxime.
            </p>

            <p align="justify">Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus
              voluptatum, magni
              impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi rem magnam ad perferendis
              iusto.</p>

            <ul>
              <li>Nemo animi soluta ratione</li>
              <li>Beatae maxime temporibus</li>
              <li>Consectetur adipisicing elit</li>
              <li>Repellendus voluptatum, impedit</li>
            </ul>

          </div>
          <!--Second column-->

        </div>
        <!--First row-->

      </section>
      <!--Section: About-->

      <hr>

      <!--Projects section v.3-->
      <section id="info" class="mt-4 mb-5 pb-4">

        <!--Section heading-->
        <h2 class="text-center mb-5 font-weight-bold pt-5 pb-4 my-5 wow fadeIn" data-wow-delay="0.2s">Organizational
          issues</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto my-5 grey-text wow fadeIn" data-wow-delay="0.2s">Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <!--First row-->
        <div class="row wow fadeIn" data-wow-delay="0.4s">

          <!--First column-->
          <div class="col-md-12">

            <div class="mb-2">

              <!--Nav tabs-->
              <ul class="nav md-pills pills-primary d-flex justify-content-center" role="tablist">

                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel31" role="tab">
                    <i class="fas fa-graduation-cap fa-2x"></i>
                    <br> Students</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel32" role="tab">
                    <i class="fas fa-users fa-2x"></i>
                    <br> Candidates</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel33" role="tab">
                    <i class="fas fa-university fa-2x"></i>
                    <br> Financial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel34" role="tab">
                    <i class="fas fa-home fa-2x"></i>
                    <br> Housing</a>
                </li>
              </ul>

            </div>

            <!--Tab panels-->
            <div class="tab-content">

              <!--Panel 1-->
              <div class="tab-pane fade in show active" id="panel31" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Others/images/54.jpg" class="rounded img-fluid"
                        alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                    <!--Title-->
                    <h4 class="mb-5">Academics Students</h4>

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 1-->

              <!--Panel 2-->
              <div class="tab-pane fade" id="panel32" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2840%29.jpg"
                        class="rounded img-fluid" alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                    <!--Title-->
                    <h4 class="mb-5">Information for Candidates</h4>

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 2-->

              <!--Panel 3-->
              <div class="tab-pane fade" id="panel33" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2841%29.jpg"
                        class="rounded img-fluid" alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                    <!--Title-->
                    <h4 class="mb-5">Financial Aid</h4>

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 3-->

              <!--Panel 4-->
              <div class="tab-pane fade" id="panel34" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2842%29.jpg"
                        class="rounded img-fluid" alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                    <!--Title-->
                    <h4 class="mb-5">Residential Life</h4>

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 4-->

            </div>
            <!--Tab panels-->

          </div>
          <!--First column-->

        </div>
        <!--First row-->

      </section>
      <!--Projects section v.3-->

    </div>

    <!--Streak-->
    <div class="streak streak-photo streak-md"
      style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full%20page/img%20%287%29.jpg');">
      <div class="flex-center mask rgba-indigo-strong">
        <div class="text-center white-text">
          <h2 class="h2-responsive mb-5">
            <i class="fas fa-quote-left" aria-hidden="true"></i> Creativity requires the courage to let go of
            certainties
            <i class="fas fa-quote-right" aria-hidden="true"></i>
          </h2>
          <h5 class="text-center font-italic " data-wow-delay="0.2s">~ Erich Fromm</h5>
        </div>
      </div>
    </div>
    <!--Streak-->


    <div class="container-fluid background-r">
      <div class="container py-3">

        <!--Section: Blog v.2-->
        <section class="extra-margins text-center">

          <h2 class="text-center mb-5 my-5 pt-4 pb-4 font-weight-bold"> Top courses</h2>

          <!--Grid row-->
          <div class="row mb-5 pb-3">

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card">
                <!--Card image-->
                <div class="view overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/51.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>Economy</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Read more
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card">
                <!--Card image-->
                <div class="view overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/40.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>Chemistry</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Read more
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card">
                <!--Card image-->
                <div class="view overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/56.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>Journalism</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Read more
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card">
                <!--Card image-->
                <div class="view overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/57.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>Computer science</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Read more
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->

          </div>
          <!--First row-->

        </section>
        <!--Section: Blog v.2-->

      </div>
    </div>

    <div class="container">

      <section id="testimonials" class="mb-5">

        <!--Section heading-->
        <h2 class="text-center mb-5 my-5 pt-5 pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">What Students
          said:</h2>

        <div class="row">

          <!--Carousel Wrapper-->
          <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn"
            data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
              <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
              </a>
              <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="next">
                <i class="fas fa-chevron-right"></i>
              </a>
            </div>
            <!--Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#multi-item-example" data-slide-to="0" class="active light-blue darken-4"></li>
              <li data-target="#multi-item-example" data-slide-to="1" class="light-blue darken-4"></li>
              <li data-target="#multi-item-example" data-slide-to="2" class="light-blue darken-4"></li>
            </ol>
            <!--Indicators-->

            <!--Slides-->
            <div class="carousel-inner text-center" role="listbox">

              <!--First slide-->
              <div class="carousel-item active">
                <!--Grid column-->
                <div class="col-md-4">

                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                        class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Anna Deynah</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                      eos id officiis
                      hic tenetur.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star-half-alt"> </i>
                    </div>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
                        class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">John Doe</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam
                      corporis suscipit
                      laboriosam.
                    </p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                        class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Abbey Clark</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                      esse quam
                      nihil molestiae.</p>

                    <!--Review-->
                    <div class="grey-text mb-3s">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="far fa-star"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--First slide-->

              <!--Second slide-->
              <div class="carousel-item">
                <!--Grid column-->
                <div class="col-md-4">

                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg"
                        class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Blake Dabney</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam
                      corporis laboriosam.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star-half-alt"> </i>
                    </div>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(6).jpg"
                        class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Andrea Clay</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                      eos id officiis
                      hic tenetur quae.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg"
                        class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Cami Gosse</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                      blanditiis
                      praesentium.
                    </p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="far fa-star"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--Second slide-->

              <!--Third slide-->
              <div class="carousel-item">
                <!--Grid column-->
                <div class="col-md-4">

                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg"
                        class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Bobby Haley</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                      eos id officiis
                      hic tenetur quae.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
                        class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Elisa Janson</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                      blanditiis
                      praesentium.
                    </p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star-half-alt"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                        class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Robert Jacobs</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam
                      corporis laboriosam.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="far fa-star"> </i>
                    </div>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Third slide-->

            </div>
            <!--Slides-->

          </div>
          <!--Carousel Wrapper-->

        </div>

      </section>

    </div>

  </main>
  <!--Main content-->

  <!--Footer-->
  <footer class="page-footer text-center text-md-left mdb-color darken-3">

    <!--Footer Links-->
    <div class="container-fluid">

      <!--First row-->
      <div class="row " data-wow-delay="0.2s">

        <!--First column-->
        <div class="col-md-12 text-center mb-3 mt-3">

          <!--Icon-->
          <i class="fas fa-graduation-cap fa-4x orange-text"></i>
          <!--Title-->
          <h2 class="mt-3 mb-3">Join Us</h2>
          <!--Description-->
          <p class="white-text mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et
            dolore magna aliqua.</p>
          <!--Reservation button-->
          <a href="#!" class="btn btn-warning">Appliction</a>
          <a href="#!" class="btn btn-info">Contact</a>

        </div>
        <!--First column-->

        <hr class="w-100 mt-4 mb-5">

      </div>
      <!--First row-->

      <div class="container mb-1">

        <!--Second row-->
        <div class="row">

          <!--First column-->
          <div class="col-xl-4 col-lg-4 pt-1 pb-1">
            <!--About-->
            <h5 class="text-uppercase mb-3 font-weight-bold">ABOUT MATERIAL DESIGN</h5>

            <p>Material Design (codenamed Quantum Paper) is a design language developed by Google.</p>

            <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
              and JS framework - Bootstrap.</p>
            <!--About-->

            <div class="footer-socials mt-4">

              <!--Facebook-->
              <a type="button" class="btn-floating btn-blue-2 ">
                <i class="fab fa-facebook-f"></i>
              </a>
              <!--Dribbble-->
              <a type="button" class="btn-floating btn-blue-2 ">
                <i class="fab fa-dribbble"></i>
              </a>
              <!--Twitter-->
              <a type="button" class="btn-floating btn-blue-2 ">
                <i class="fab fa-twitter"></i>
              </a>
              <!--Google +-->
              <a type="button" class="btn-floating btn-blue-2 ">
                <i class="fab fa-google-plus-g"></i>
              </a>

            </div>
          </div>
          <!--First column-->

          <hr class="w-100 clearfix d-lg-none">

          <!--Second column-->
          <div class="col-xl-3 ml-lg-auto col-lg-4 col-md-6 mt-1 mb-1">
            <!--Search-->
            <h5 class="text-uppercase mb-3 font-weight-bold">Search something</h5>

            <ul class="footer-search list-unstyled">
              <li>
                <form class="search-form" role="search">
                  <div class="md-form">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                </form>
              </li>
            </ul>

            <!--Info-->
            <p>
              <i class="fas fa-home pr-1"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope pr-1"></i> info@example.com</p>
            <p>
              <i class="fas fa-phone pr-1"></i> + 01 234 567 88</p>
            <p>
              <i class="fas fa-print pr-1"></i> + 01 234 567 89</p>

          </div>
          <!--Second column-->

          <hr class="w-100 clearfix d-md-none">

          <!--Third column-->
          <div class="col-xl-3 ml-lg-auto col-lg-4 col-md-6 mt-1 mb-1">
            <!--Contact-->
            <h5 class="text-uppercase mb-3 font-weight-bold">Recent news</h5>

            <ul class="footer-posts list-unstyled">
              <li>
                <a>Ut enim ad minim veniam nostrud.</a>
                <span>
                  <p class="grey-text">28 july 2016</p>
                </span>
              </li>
              <li>
                <a>Duis aute dolor in reprehenderit.</a>
                <span>
                  <p class="grey-text">27 july 2016</p>
                </span>
              </li>
              <li>
                <a>Excepteur sint occaecat cupidatat.</a>
                <span>
                  <p class="grey-text">26 july 2016</p>
                </span>
              </li>
              <li>
                <a>Sed perspiciatis unde omnis iste.</a>
                <span>
                  <p class="grey-text">25 july 2016</p>
                </span>
              </li>
            </ul>

          </div>
          <!--Third column-->

        </div>
        <!--Second row-->

      </div>

    </div>
    <!--Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
      </div>
    </div>
    <!--Copyright-->

  </footer>
  <!--Footer-->

  <!--SCRIPTS-->

  <!--JQuery-->
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/jquery-3.4.1.min.js') }}"></script>

  <!--Bootstrap tooltips-->
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/popper.min.js') }}"></script>

  <!--Bootstrap core JavaScript-->
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/bootstrap.min.js') }}"></script>

  <!--MDB core JavaScript-->
  <script type="text/javascript" src="{{ asset('resources/landingpage/js/mdb.min.js') }}"></script>

  <script>
    //Animation init
    new WOW().init();

    //Modal
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

  </script>

</body>

</html>
