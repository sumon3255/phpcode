<?php 
  
  
  
  
  include('smtp/PHPMailerAutoload.php');

    $servername = "localhost";
    $username = "micinvmi_inv";
    $password = "mic2022";
    $database = "micinvmi_database2022";

 $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Sorry:". mysqli_connect_error());
    }












  



    $subject = "Welcome To MIC Inventory";
    
  
    $name = $_POST["name"];    
    $email = $_POST["email"];
    $department = $_POST["department"];
    $level = $_POST["level"];
    $studentId =  $_POST["studentId"];
    $phone = $_POST["Phone_num"];
    $username = $_POST["studentId"];
    $password =  $_POST["studentId"];
    
     $sql = "INSERT INTO `accounts` ( `username`, `password`, `name`, `email`, `dep`, `level`, `student_id`, `phone`) VALUES  ('$username ','$password  ','  $name ',    '$email', '$department', ' $level',' $studentId', ' $phone')";
       
    $result = $conn->query($sql);
      
     
   
    $html = "<!doctype html>
    <html lang='en'>
      <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
      </head>
      <style>
         body{
            background-color: white;
         }
      </style>
      <body>
        <div class='container my-5'>
        <div class='card'>
          <div class='card-body' style='background-color:white;'>
            <div class='container'>
           <h1  style='background-color:#0d6efd; padding:10px; color:aliceblue;'>Welcome To MIC Inventory</h1>
           <br>
           <br>
           <p>Hi {$name}, </p>
           <br>
        
<p>
           Greetings, <br>
           Just let you informed your signup  is successful.<br>
          
           <br>
           
        </p>
         
           
           <br>
           <br>

          <h5>Your details for MIC Inventory</h5>
          <br>
          <b>Your Username : </b>  {$username}<br>
          <b>Your Password: </b> {$password} <br>
          
            <a href='https://mic-inv.mist.ac.bd/login'>Click here for login</a>
         
<br><br>
    
         Regards,</p>
          </div>
      
          </div>
         <a href='https://www.facebook.com/MISTInnovationClub'><img style='width:200px; margin-right: 30px;;' src='https://mic-inv.mist.ac.bd/img/logo.png' alt='image'></a> 
         
         
         <div class='container' style='text-align: center;'>
          <a href='https://www.facebook.com/MISTInnovationClub'> <img style='width:30px;'src='https://volobooking.com/img/fb.png' alt='' srcset=''></a> 
        
       <a href='https://instagram.com/mistinnovationclub?utm_medium=copy_link'><img style='width:30px;' src='https://volobooking.com/img/instagram.png' alt='' srcset=''></a>

       <a href='https://www.linkedin.com/company/mist-innovation-club'><img style='width:30px;' src='https://volobooking.com/img/linkedin.svg' alt='' srcset=''></a>
         </div>
         
         
         <br>
       
        
        </div>
        </div>
       
        <!-- Optional JavaScript; choose one of the two! -->
        <footer class='bg-dark text-center text-white'>
    
              <div class='text-center p-3'>
                © 2022 Copyright:
                <a class='text-white' href='https://innovationclub.mist.ac.bd/'>
                 MIST Innovation Club</a>
      
        </footer>
      </div>
        
        
      
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js' integrity='sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js' integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13' crossorigin='anonymous'></script>
        -->
      </body>
    </html>";

  
if($result){
    smtp_mailer($email,$subject,$html);            
}
else{
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}
    


    function smtp_mailer($to,$subject, $msg){
      $mail = new PHPMailer(); //object
      $mail->IsSMTP(); 
      $mail->SMTPAuth = true; 
      $mail->SMTPSecure = 'ssl'; //ssl
      $mail->Host = "mail.mic-inv.mist.ac.bd";
      $mail->Port = 465; 
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      $mail->Username = "inventory@mic-inv.mist.ac.bd";
      $mail->Password = 'inventory2022';
      $mail->SetFrom("inventory@mic-inv.mist.ac.bd");
      $mail->Subject = $subject;
      $mail->Body =$msg;
      $smtp_debug = true;
      $mail->AddAddress($to);
        //Custom connection options
    //Note that these settings are INSECURE
      $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
      ));
      if(!$mail->Send()){
       echo "<script> window.location = 'error';</script>";
      }else{
      
        
        echo "<script> window.location = 'success';</script>";
        
      }
    }
    
  

  
  
  ?>

  