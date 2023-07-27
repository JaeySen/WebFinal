    <footer class="page-footer bg-lemon text-dark">

      <div class="bg-orange">
        <div class="container">
          <div class="row py-4 d-flex align-items-center">

            <div class="col-md-12 text-center">
                <a href="https://github.com/JaeySen/pollgenz-php"><i class="fab fa-github mr-4 text-dark grow"></i></a>
                <!-- <a href="#"><i class="fas fa-at fa-lg mr-4 text-dark grow"></i></a> -->
                <a href="www.linkedin.com/in/long-tran-ngoc-hien-a06016195"><i class="fab fa-linkedin mr-4 text-dark grow"></i></a>
            </div>
          </div>
        </div>
      </div>


      <div class="container text-center text-md-left mt-5">
        <div class="row">
          <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold ">Poll Generator Z</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width:150px;height:2px;">
            <p class="mt-2 ">A Web Dev Project from ITEC ft. Mr Spencer
            </p>
          </div>

          <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold ">About Us</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width:150px;height:2px;">
            <ul class="list-inline">
              <li class="list-inline-item">Tran Ngoc Hien Long</li>
              <li class="list-inline-item">Phone: (+84) 888-006-798</li>
              <li class="list-inline-item">Email: longhientranjjj@gmail.com</li>

              <!-- <li class="list-inline-item"><a href="www.linkedin.com/in/long-tran-ngoc-hien-a06016195">Linkedin </a></li> -->
              <!-- <li class="list-inline-item"><a href="https://github.com/JaeySen/pollgenz-php">Github </a></li> -->
              <!-- <li class="list-inline-item">Anh Thu</li>
              <li class="list-inline-item">Minh Quang</li> -->
            </ul>
          </div>
        </div>
      </div>

    </footer>


    <!-- bootstrap -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"></script>

    <!--owlcarousel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>

    <?php if ($heading == 'Home'){ echo '<script type="text/javascript" src="js/main.js"></script>'; }?>
    <?php if ($heading == 'Random'){ echo '<script type="text/javascript" src="js/random.js"></script>'; }?>
    <?php if ($heading == 'Login'){ echo '<script type="text/javascript" src="js/authentication.js"></script>'; }?>
    <?php if ($heading == 'Trending'){ echo '<script type="text/javascript" src="js/trending.js"></script>'; }?>

  </body>
</html>
