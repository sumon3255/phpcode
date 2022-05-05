<?php

include "logic2.php";


if(isset($_SESSION['loggedin'])){
     header('Location:/home');
   }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
       <link rel="shortcut icon" href="https://mic-inv.mist.ac.bd/img/logo.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- added -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="stylesheet" href="style.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>MIC Inventory</title>
    <link rel="icon" type="image/x-icon" href="/img/icon.jpg" />
  </head>
  <body style="display: flex">
    <script src="script3.js"></script>

    <section class="content">
      <nav class="navbar bg-dark py-3">
        <div class="container-fluid justify-content-center">
          <a href="" class="navbar-brand align-items-center">
            <h2 class="m-0 text-white">Login</h2>
          </a>
        </div>
      </nav>

      <div class="container-fluid">
        <!-- col-md-9 col-lg-6 col-xl-5 -->
        <div class="row d-flex justify-content-center align-items-center my-5">
          <div class="col-6" data-aos="zoom-in">
            <img src="img/logo.png" class="img-fluid" alt="Sample image" />
          </div>
          <div
            class="col-md-8 col-lg-6 col-xl-4 offset-xl-1"
            data-aos="zoom-in"
          >
            <form form action="" method="post">

     
        
              <div class="align-items-center my-4">
                <img src="img/elec.png" alt="" class="center my-3" />

                <h2 class="text-center fw-bold mb-0 text-info">
                  MIC Inventory
                </h2>
              </div>

              <div class="form-outline mb-4">
                <input
                  type="text"
                  id="id"
                  name="username"
                  class="form-control form-control-lg"
                  placeholder="Enter your Username"
                />
              </div>

              <div class="form-outline mb-3">
                <input
                  type="password"
                  id="pass"
                  name="password"
                  class="form-control form-control-lg"
                  placeholder="Enter password"
                />
              </div>

              <div id="notify" style="color:red"></div>
              <?php if(isset($_REQUEST['info'])){?>

<?php if($_REQUEST['info'] == "added"){?>

               <div class="alert alert-danger" role="alert">
 The Password or User name is not correct
 </div>
<?php } ?>
<?php } ?>
              <div class="text-center mt-4 pt-2">
                <p class="small fw-bold">
                  Don't have an account?
                    <a  class="link-danger"  href="mailto:mist.innovation.club@gmail.com">Contact Us!</a>
                </p>
                <button
                  type="submit"
                  name="submitlogin"
                  class="btn btn-info btn-lg mt-2 pt-1 text-white"
                  style="padding-left: 2.5rem; padding-right: 2.5rem"
                >
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <div class="container-fluid bg-dark">
      <div class="row py-2">
        <div class="col-md-4 col-12 pt-3">
          <p class="text-white-50 text-center">
            © 2022 MIST Innovation Club. All rights reserved
          </p>
          <p></p>
        </div>

        <div class="col-md-4 col-12 pt-3">
          <p class="text-white-50 text-center">
            <i class="bi bi-link-45deg"></i
            ><a
              href="https://innovationclub.mist.ac.bd/"
              style="text-decoration: none"
              class="text-white-50 text-center ps-1"
              >VISIT MIC Website</a
            >
          </p>
        </div>
        <div class="col-md-4 col-12 pt-3">
          <p class="text-white-50 text-center">
            <i class="bi bi-envelope"></i> mist.innovation.club@gmail.com
          </p>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
