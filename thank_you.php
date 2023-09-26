<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
</head>
<body>
    <h2>Thank You for Signing Up!</h2>
    
    <?php
    session_start(); 



    
    if (isset($_SESSION['fullname']) && isset($_SESSION['email'])) {
        $fullname = $_SESSION['fullname'];
        $email = $_SESSION['email'];

         echo "You have successfully signed up with the following details:<br>";
          echo "Fullname: . $fullname . <br>";
          echo "Email: . $email . <br>";

       
        unset($_SESSION['fullname']);
        unset($_SESSION['email']);
    } else {
        echo "User data not found.";
    }
    ?>
</body>
</html>