<?php
session_start();

      if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repeat_password = $_POST["repeat_password"];

        $errors = array();



        // if (empty($fullname) || empty($email) || empty($password) || empty($password2))  {
        //  die("Fill in required fields.");
        // }

         if (empty($fullname)) {
           $errors[] = "Username is required.";
       }

       if (empty($email)) {
           $errors[] = "Email is required.";
       }

       if (empty($password)) {
           $errors[] = "Password is required.";
      }

      if ($password !== $repeat_password) {
        $errors[] = "Passwords do not match.";
      }

      if (!empty($errors)) {
          foreach ($errors as $error) {
              echo $error . "<br>";
          }
      } else {
        $_SESSION['fullname'] =$fullname;
        $_SESSION['email'] =$email;

          // var_dump($_SESSION);


        header("Location: thank_you.php");







        //  header("Location: thank_you.html") ;
        //  echo "You have successfully signed up with the following details:<br>";
        //  echo "Fullname: $fullname<br>";
        //  echo "Email: $email<br>";
        exit();     
               
                
      }
    }
             



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D.H.R</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav1">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html" id="logo"> <img src="images/main_logo.png" alt="" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
         <button class="buton"> <li class="nav-item">
            <a class="nav-link" href="#signup"><span class=></span> Sign Up</a></li></button>
          <button class="buton"><li class="nav-item"> <a class="nav-link" href="#" href="#"><span class=></span> Login</a></li></button>
        </ul>

        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>

 <!-- Sign Up Form -->
 
 <div class="bgimage">
  <h1 class="fh">Ready to start your Coding Journey?</h1>
    <div class="para_div2">  
     <div class="para_div">     
     <p class="para1">Are you a passionate web developer looking to showcase your skills, portfolio, and personal brand to the world? Look no further! DRIZZY HR is here to empower you with a stunning and personalized web website.</p>
    </div>
  </div>
 </div>




<main id="signup">
    <section>
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 29px; margin-top: 70px;"> 
              <div class="card-body p-5" id="formhgt">
                <h2 class="text-uppercase text-center mb-5">SIGN UP</h2>
  
                <form action = "php/index.php" method ="post">
                  <div class="form-group">
                  <div class="form-outline mb-4">
                <input type="text" name="fullname" placeholder="Fullname" id="form3Example1cg" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form3Example1cg"></label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="email" name="email" placeholder="Email Address" id="form3Example3cg" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example3cg"></label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" name="password" placeholder="Password" id="form3Example4cg" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form3Example4cg"></label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" name="repeat_password" placeholder="Repeat Password"  id="form3Example4cdg" class="form-control form-control-lg"required />
                    <label class="form-label" for="form3Example4cdg"></label>
                  </div>
  
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required />
                    <label class="form-check-label" for="form2Example3g">
                      Agree to <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                  </div>
  
                  <div class="d-flex justify-content-center">
                    <button type="submit"
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Sign Up</button>
                  </div>
  
                  
  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
  <hr class="hline">
<footer>
  <!-- <div class="footsec1">
    <h1>POWER</h1>
  </div> -->
  
<div class="footsec2"><P class="footpara"><span style="color: #B3B3BC;">EL</span> DRIZZY 2023</P></div>
</footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>





