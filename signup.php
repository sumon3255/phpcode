<!doctype html>
<html lang="en">
  <head>
        <link rel="shortcut icon" href="https://mic-inv.mist.ac.bd/img/logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>MIC_Inventory Signup</title>
  </head>
  <style>
    .registration-form{
	padding: 50px 0;
}

.registration-form form{
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
  
}

.registration-form .form-icon{
	text-align: center;
    background-color: #cecece;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 120px;
    height: 120px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 20px;
    padding: 8px 19px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}

.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    color: #5691ff;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
.item{
  margin-bottom: 10px;
}

  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <body>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
      <div class="container">
        <button
          class="navbar-toggler mb-2 mt-1"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a
          href="/"
          class="navbar-brand d-flex align-items-center border-end px-lg-4 pe-2"
        >
          <h2 class="m-0 text-info">MIC Inventory Signup</h2>
        </a>

        <div
          class="collapse navbar-collapse mx-5 fw-bold"
          id="navbarSupportedContent"
        >
          <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a
              href="/"
              class="nav-item nav-link active mx-lg-4 text-info"
              >Home</a
            >
             <a
              href="about"
              class="nav-item nav-link active mx-lg-4 text-info"
              >About</a
            >
         

  
         
          </div>

    
     
        
   

        </div>
      </div>
    </nav>

  <div class="container">


    <div class="col my-4">
        <h2>Inventory SignUp</h2>
    
            <form method="post" action="sendmail">
          

        <input type="hidden" name="itemsJson" id="itemsJson">
            <div class="form-group">
                <input type="text" class="form-control item" id="name" name="name" placeholder="Enter your name" required>
            </div>
        
            <div class="form-group">
                <input type="text" class="form-control item" id="email" name="email" placeholder="Email(Make sure you write your email correctly)" required>
            </div>
        
        <select name="department" class="browser-default custom-select form-control item" required>
                    <option selected>Department</option>
                    <option>CE</option>
                    <option>ME</option>
                    <option>AE</option>
                    <option>CSE</option>
                    <option>EECE</option>
                        <option>BME</option></option>
                          <option>NSE</option>
                            <option>IPE</option>
                              <option>NAME</option>
                               <option>PME</option>
                                <option>EWCE</option>
                                <option>Architecture</option>
                    <option>Other</option>
                </select>

                <select name="level" class="browser-default custom-select form-control item" required>
                    <option selected>Year/Level</option>
                    <option>1st year</option>
                    <option>2nd year</option>
                    <option>3rd year</option>
                    <option>4th year</option>
                    <option>Other</option>
                </select>
                <div class="form-group">
                    <input type="number" class="form-control item"  name="studentId" id="number" placeholder="Student ID" required>
                </div>
                
                <div class="form-group">
                    <input type="number" class="form-control item"  name="Phone_num" id="number" placeholder="Phone number" required>
                </div>


                <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm" >Register</button>
            </div>
            <div id="msg"></div>
            
        </form>
    </div>
</div>



    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>



</script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>