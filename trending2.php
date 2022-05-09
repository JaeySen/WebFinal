<?php
include "includes/header.php";

 ?>
  <body>
    <div id="banner">
      <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="card">
                  <div class="card-body text-center">
                    <h1 class="display-2 text-center">
                      <a href="slideshow.html" class="ttt" onClick="exec()"></a>
                    </h1>
                    </div>
                  </div>
                </div>
              </div>
            <div class="carousel-item">
              <div class="container">
                <div class="card">
                  <div class="card-body text-center">
                    <h1 class="display-2 text-center">
                      <a href="slideshow.html" class="ttt" onClick="exec()"></a>
                    </h1>
                    </div>
                  </div>
                </div>
              </div>
            <div class="carousel-item">
              <div class="container">
                <div class="card">
                  <div class="card-body text-center">
                    <h1 class="display-2 text-center">
                      <a href="slideshow.html" class="ttt" onClick="exec()"></a>
                    </h1>
                    </div>
                  </div>
                </div>
              </div>

              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

    <div class="container mt-5 mb-5" id="poll-container">
      <!-- each row has 3 polls -->
      <div class="card-columns">
        <div class="card border border-secondary">
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </div>
        <div class="card border border-secondary p-3">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
        <div class="card border border-secondary">
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
        </div>
        <div class="card bg-orange p-3 text-center border border-secondary">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
        <div class="card bg-orange p-3 text-center border border-secondary">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
        <div class="card border border-secondary">
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>

          </div>
        </div>

      </div>
    </div>

        <!-- <div class="container text-center pb-5" id="spinner">
          <div class="spinner-border text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div> -->

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


    <!--owlcarousel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="trending2.js"></script>


<?php
include "includes/footer.php";
 ?>
