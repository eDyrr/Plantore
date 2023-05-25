<?php
// Start the session
session_start();

// Check if the form is submitted

    // Connect to the database
    $host = "localhost" ; 
    $db = "id20782847_plantore" ; 
    $username = "id20782847_root" ; 
    $passwor = "!23viibeZ" ;
    
    $conn = mysqli_connect( $host, 
                           $username,
                           $passwor, 
                           $db) ; 
    if (!$conn) {
        die("Connection failed: " .mysqli_connect_error());
    }
    
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Check if the email already exists
    $rech=mysqli_query($conn,"SELECT * FROM  Clients WHERE email ='$email'
    AND  password_cl ='$password'");   
    
    if(mysqli_num_rows($rech)>0){
        $clt_infos=mysqli_fetch_row($rech);
    $_SESSION['id']=$clt_infos[0];
    $_SESSION['nom']=$clt_infos[1];
    $_SESSION['prenom']=$clt_infos[2];
   
    
    echo "<script> window.location.href='index.html';alert('Login successful!');</script>";
    
    
    
       } else {
        echo ("<p style='color:red; font-size:20px;'> Email or/and passward are wrong !  <a href='/login.html'>ressayer l'inscription</a></p> ");
        echo ("<a href='/index.html'>go back to the actual page  </a>");
    
    }mysqli_close($conn);

?>
