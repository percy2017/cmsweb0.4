  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--Links-->
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" data-offset="80">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team" data-offset="80">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing" data-offset="20">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features" data-offset="80">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials" data-offset="80">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#modal-info">Info</a>
            </li>
          </ul>

          <!--Social Icons-->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-facebook-f white-text"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-twitter white-text"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-instagram white-text"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/Navbar-->

    <!--Intro Section-->
    <section id="home" class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/37.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-12 col-md-6 text-center text-md-left">
              <div class="white-text">
                <h1 class="h1-responsive font-weight-bold mt-md-5 mt-0 wow fadeInLeft" data-wow-delay="0.3s">Medical
                  landing page</h1>
                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                <p class="wow fadeInLeft mb-3" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit. Rem repellendus quasi fuga nesciunt
                  dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae
                  iste.
                </p>
                <br>
                <a class="btn btn-unique btn-rounded font-weight-bold ml-lg-0 wow fadeInLeft" data-wow-delay="0.3s">Download</a>
                <a class="btn btn-outline-white btn-rounded font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Learn
                  more
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Modal Info-->
    <div class="modal fade modal-ext" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 py-3" id="myModalLabel">Information about clinic</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body text-center">

            <!--Title-->
            <h5 class="title mb-3 font-weight-bold">Opening hours:</h5>

            <!--Opening hours table-->
            <table class="table">
              <tbody>
                <tr>
                  <td>Monday - Friday:</td>
                  <td>8 AM - 9 PM</td>
                </tr>
                <tr>
                  <td>Saturday:</td>
                  <td>9 AM - 6 PM</td>
                </tr>
                <tr>
                  <td>Sunday:</td>
                  <td>11 AM - 6 PM</td>
                </tr>
              </tbody>
            </table>

            <!--Title-->
            <h5 class="title mb-4 font-weight-bold">Addresses:</h5>

            <!--First row-->
            <div class="row">

              <!--First column-->
              <div class="col-md-6">

                <p>125 Street<br> New York, NY 10012</p>

              </div>
              <!--/First column-->

              <!--Second column-->
              <div class="col-md-5">

                <p>Allen Street 5<br> New York, NY 10012</p>

              </div>
              <!--/Second column-->

            </div>
            <!--/First row-->

          </div>
          <!--Footer-->
          <div class="modal-footer">
            <button type="button" class="btn btn-rounded btn-info waves-effect" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!--/Content-->
      </div>
    </div>
    <!--/Modal Info-->

  </header>
  <!--/Navigation & Intro-->