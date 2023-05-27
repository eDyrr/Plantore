<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];

$host = "localhost" ; 
$db = "id20782847_plantore" ; 
$username = "id20782847_root" ; 
$passwor = "!23viibeZ" ;

$conn = mysqli_connect( $host, 
                       $username,
                       $passwor, 
                       $db) ; 

if(mysqli_connect_errno())
{
    die("connection error : " . mysqli_connect_errno()) ; 
}
echo "connection successful" ;  

$ajout = mysqli_query($conn, "INSERT INTO Clients (name_cl, surename, email, password_cl) VALUES ('$name', '$surname', '$email', '$password')")or die(mysqli_error($conn));

    // Confirm the insertion and close the connection to Base_Client
    if ($ajout) {
        echo ("Client ajouté avec succès");
    }else{
        echo('you dummy');
    }
    mysqli_close($conn);
   
?>
