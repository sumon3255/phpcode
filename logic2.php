<?php

    // Don't display server errors 
    // ini_set("display_errors", "off");
session_start();

   
    $servername = "localhost";
    $username = "micinvmi_inv";
    $password = "mic2022";
    $database = "micinvmi_database2022";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Sorry:". mysqli_connect_error());
    }


    if($stmp=$conn->prepare('SELECT id,password,name,email,dep,level,student_id,phone FROM accounts WHERE username = ?')){

        $stmp->bind_param('s',$_POST['username']);
        $stmp->execute();

        $stmp->store_result();
        
        if($stmp->num_rows>0){

          $stmp->bind_result($id,$password, $name,$email,$dep,$level,$student_id,$phone);
          $stmp->fetch();

  
          if($_POST['password'] == $password){

           session_regenerate_id();
           $_SESSION['loggedin'] = TRUE;
           $_SESSION['uname'] = $_POST['username'];
           $_SESSION['id'] = $id;
           $_SESSION['name'] = $name;
           $_SESSION['email'] = $email;
           $_SESSION['dep'] = $dep;
           $_SESSION['level'] = $level;
           $_SESSION['student_id'] = $student_id;
           $_SESSION['phone'] = $phone;
           header('Location:/home');

          }else{
            ;
            $model = null;
            if(is_null($model)) {
                echo "<script>alert('Email & password are not valid')</script>";
            }
          }
  

          $stmp->close();
          

        }
        
        
        
    }

 
 ?>