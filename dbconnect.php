<!-- connecting with the db  -->
<?php 
$servername = "localhost";
$username = "root";
$password = "";

// creating the connection
$conn = mysqli_connect($servername , $username , $password);
if(!$conn){
    echo "connection failed";
}
else{
    echo "connect sucess";
}


?>