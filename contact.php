<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$complaint = $_POST['complaint'];


$conn = new mysqli('localhost', 'root', '', 'D.H.R');


if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    
    $stmt = $conn->prepare("INSERT INTO Complaint (fullname, email, complaint) VALUES (?, ?, ?)");

    
    $stmt->bind_param("sss", $fullname, $email, $complaint);
    
    if ($stmt->execute()) {
        echo "Your Complaint Has Been Received...";
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
    $conn->close();
}
?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav1">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php" id="logo"> <img src="images/main_logo.png" alt="" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
         <button class="buton"> <li class="nav-item">
            <a class="nav-link" href="index.php"><span class=></span> Sign Up</a></li></button>
          <button class="buton"><li class="nav-item"> <a class="nav-link" href="#" href="#"><span class=></span> Login</a></li></button>
        </ul>

      </div>
    </div>
  </nav>

    



  <div class="git">
    <h1 class="conus"><span style="color: #665D5C;">Contact</span> Us</h1>
    <div class="">
      <div class="git2">
        <h1 class="git3">Get in touch</h1>
        <p>Want to get in touch? <br>We'd love to hear from you. Here's how you can reach us...</p>
        </div>
    </div>
  </div>


  <div class="container2">
    <div class="map-container">
      <h2 class="File">Find us on the map:</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.1001546603884!2d7.497445574801765!3d9.0546285885877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0bb0aea625f5%3A0x9524981545a8fb9b!2sGlobal%20Distance%20Learning%20Institute!5e0!3m2!1sen!2sng!4v1695547510960!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <div class="complaint-form">
      <h2 class="File">File a Complaint:</h2>
        <form action="contact.php" method="POST">


          <div class="complaint-form">
            <div class="form-outline mb-4">
                <input type="text" name="fullname" placeholder="Fullname" id="form3Example1cg" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form3Example1cg"></label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="email" name="email" placeholder="Email Address" id="form3Example3cg" class="form-control form-control-lg" required />
                    <label class="form-label" for="form3Example3cg"></label>
                  </div>
  
                  
             
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg"></label>
                <textarea placeholder="Describe your complaint"  id="form3Example4cdg" class="form-control form-control-lg" name="complaint" rows="5" required></textarea>
            
  
                 
  
                           <button type="submit"
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit Complaint</button>
                  </div>
        </div>
  
                </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>