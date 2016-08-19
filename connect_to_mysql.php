<?
$servername = "localhost";
$username ="root";
$password = "";

//create connection
  $conn = new mysqli($servername,$username,$password);

// check connection
  if(mysqli_connect_error()){
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>
