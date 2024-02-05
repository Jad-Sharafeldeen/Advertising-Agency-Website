<?php 
$hostname="localhost";
$dbname="moonljg6_moonlinesdata";
$Username="moonljg6_cusdata";
$Password="KT4Y*7w=u_Hr";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//Database connection

    $conn = new mysqli($hostname, $Username, $Password, $dbname);
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into customer(name, email, phone, message) values(?, ?, ?, ?)");
        $stmt->bind_param("ssis",$name, $email, $phone, $message);
        $stmt->execute();
        
        /* echo "registration Successfully..."; */
        $stmt->close();
        $conn->close();
    }

?>

<?php include 'receive.html';?> 